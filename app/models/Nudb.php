<?php

namespace App\Models;

class Nudb
{
    private $host;
    private $port;
    private $path;
    private $headers = [];
    private $socket;

    public function __construct($url, $headers = [])
    {
        $parts = parse_url($url);

        $this->host = $parts['host'];
        $this->port = $parts['port'] ?? 80;
        $this->path = $parts['path'] ?? "/";
        $this->headers = $headers;

        $this->connect();
    }

    private function connect()
    {
        $key = base64_encode(random_bytes(16));

        $header = "GET {$this->path} HTTP/1.1\r\n";
        $header .= "Host: {$this->host}:{$this->port}\r\n";
        $header .= "Upgrade: websocket\r\n";
        $header .= "Connection: Upgrade\r\n";
        $header .= "Sec-WebSocket-Key: $key\r\n";
        $header .= "Sec-WebSocket-Version: 13\r\n";

        foreach ($this->headers as $k => $v) {
            $header .= "$k: $v\r\n";
        }

        $header .= "\r\n";

        $this->socket = fsockopen($this->host, $this->port, $errno, $errstr, 5);
        if (!$this->socket) {
            throw new Exception("Connection failed: $errstr ($errno)");
        }

        fwrite($this->socket, $header);
        fread($this->socket, 2048); // Read response headers
    }

    private function sendFrame($payload)
    {
        $frame = chr(0x81); // FIN + text
        $len = strlen($payload);
        $maskBit = 0x80;

        if ($len <= 125) {
            $frame .= chr($maskBit | $len);
        } elseif ($len <= 65535) {
            $frame .= chr($maskBit | 126) . pack("n", $len);
        } else {
            $frame .= chr($maskBit | 127) . pack("J", $len);
        }

        $mask = random_bytes(4);
        $masked = '';
        for ($i = 0; $i < $len; $i++) {
            $masked .= $payload[$i] ^ $mask[$i % 4];
        }

        $frame .= $mask . $masked;
        fwrite($this->socket, $frame);
    }

    private function receiveFrame()
    {
        $firstByte = ord(fread($this->socket, 1));
        $secondByte = ord(fread($this->socket, 1));
        $masked = ($secondByte >> 7) & 1;
        $len = $secondByte & 0x7F;

        if ($len === 126) {
            $len = unpack("n", fread($this->socket, 2))[1];
        } elseif ($len === 127) {
            $len = unpack("J", fread($this->socket, 8))[1];
        }

        if ($masked) {
            $mask = fread($this->socket, 4);
            $data = fread($this->socket, $len);
            $result = '';
            for ($i = 0; $i < $len; $i++) {
                $result .= $data[$i] ^ $mask[$i % 4];
            }
            return $result;
        } else {
            return fread($this->socket, $len);
        }
    }

    private function sendMessage($message)
    {
        $json = json_encode($message);
        $this->sendFrame($json);
    }

    public function get($path)
    {
        $this->sendMessage([
            "type" => "get",
            "path" => $path,
            "headers" => $this->headers
        ]);

        return json_decode($this->receiveFrame(), true);
    }

    public function set($path, $data)
    {
        $this->sendMessage([
            "type" => "set",
            "path" => $path,
            "data" => $data,
            "headers" => $this->headers
        ]);
    }

    public function update($path, $data)
    {
        $this->sendMessage([
            "type" => "update",
            "path" => $path,
            "data" => $data,
            "headers" => $this->headers
        ]);
    }

    public function delete($path)
    {
        $this->sendMessage([
            "type" => "delete",
            "path" => $path,
            "headers" => $this->headers
        ]);
    }

    public function push($path, $data)
    {
        $id = $this->generateId();
        $this->set("$path/$id", $data);
        return $id;
    }

    private function generateId()
    {
        return time() . bin2hex(random_bytes(7));
    }
}
