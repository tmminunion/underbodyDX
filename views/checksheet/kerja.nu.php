<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>A3 iReporter Style</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css">
  <style>
    @page { size: A3 landscape; margin: 0; }

    body {
      background: #ccc;
      margin: 0;
      padding: 20px;
      display: flex;
      justify-content: center;
      align-items: flex-start;
    }

    .zoom-container {
      transform: scale(1);
      transform-origin: top left;
      transition: transform 0.3s;
    }

    .sheet {
      width: 420mm;
      height: 296mm;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      padding: 10mm;
      box-sizing: border-box;
      position: relative;
    }

    .header, .footer {
      position: absolute;
      left: 10mm;
      right: 10mm;
      height: 20mm;
    }

    .header {
      top: 10mm;
      border-bottom: 1px solid #aaa;
    }

    .footer {
      bottom: 10mm;
      border-top: 1px solid #aaa;
    }

    .content {
      position: absolute;
      top: 40mm;
      bottom: 40mm;
      left: 10mm;
      right: 10mm;
      overflow: auto;
    }

    button.zoom-btn {
      position: fixed;
      top: 20px;
      right: 20px;
      z-index: 1000;
      margin-left: 5px;
    }
  </style>
</head>
<body>

  <!-- Zoom Buttons -->
  <button class="zoom-btn" onclick="setZoom(1)">100%</button>
  <button class="zoom-btn" onclick="setZoom(1.5)">150%</button>
  <button class="zoom-btn" onclick="setZoom(2)">200%</button>

  <div class="zoom-container" id="zoomArea">
    <section class="sheet">
      <div class="header">
        <h3>Header (seperti iReport)</h3>
      </div>

      <div class="content">
        <p>Ini area konten yang bisa panjang seperti laporan Jasper/iReport.</p>
        <p>Scroll dalam area ini tidak mempengaruhi header/footer.</p>
        <!-- Tambahkan isi panjang jika ingin -->
      </div>

      <div class="footer">
        <p>Footer (seperti iReport)</p>
      </div>
    </section>
  </div>

  <script>
    function setZoom(scale) {
      document.getElementById('zoomArea').style.transform = `scale(${scale})`;
    }
  </script>
</body>
</html>