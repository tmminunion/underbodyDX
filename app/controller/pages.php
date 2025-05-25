<?php
use App\Models\Nudb;
use Faker\Factory as Faker;
error_reporting(E_ALL & ~E_DEPRECATED);

class pages
{
    public function index()
    {
        $faker = Faker::create();

        $db = new Nudb("ws://localhost:8008", [
            "x-api-key" => "rGQS-VKz6kFf-dM0gyBDLJrV3Ec"
        ]);

        // Generate data dengan Faker
        
        $name2 = $faker->name;

        // Push data dengan ID otomatis
        $id = $db->push("user", ["name" => $name2]);
        echo "User pushed with ID: $id (name: $name2)\n";
    }
}