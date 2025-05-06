<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dokumen A3 Responsif</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      body {
        padding: 0;
        margin: 0;
        overflow-x: hidden;
        touch-action: manipulation;
        height: 100vh;
        display: flex;
        flex-direction: column;
        background-color: #9fc4c4;
        overscroll-behavior: none;
      }
      
.transparent-navbar {
  background: linear-gradient(to bottom, rgba(15, 23, 42, 0.85), rgba(15, 23, 42, 0.3));
  backdrop-filter: blur(6px);
  -webkit-backdrop-filter: blur(6px);
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  padding: 12px 24px;
  border-radius: 0 0 16px 16px;
  color: #f8f9fa;
}

.navbar-brand {
  font-weight: 600;
  font-size: 18px;
  color: #f8f9fa;
  display: flex;
  align-items: center;
  gap: 8px;
}

.navbar-nav .nav-link {
  color: #f8f9fa !important;
  margin-left: 15px;
  transition: color 0.3s ease;
}

.navbar-nav .nav-link:hover {
  color: #facc15 !important; /* kuning keemasan */
}

      footer {
        background-color: #070bfb;
        padding: 15px 0;
        text-align: center;
        flex-shrink: 0;
        color: white;
      }

      .main-content {
        flex-grow: 1;
        overflow: auto;
        display: flex;
        justify-content: center;
        padding: 5px; /* Margin 5px */
        background: #f9f9f9;
      }

      .a3-container {
        
        position: relative;
        width: calc(100% - 10px); /* 5px margin kiri + 5px kanan */
        max-width: 297mm; /* Lebar A3 */
        margin: 5px;
        
      }

      .a3-page {
        width: 100%;
        height: 420mm; /* Tinggi A3 */
        max-height: 420mm;
        background-color: white;
        box-shadow:
    0 4px 6px rgba(0, 0, 0, 0.1),
    0 8px 12px rgba(0, 0, 0, 0.05),
    0 12px 20px rgba(0, 0, 0, 0.03);
        transform-origin: center top;
        transition: transform 0.1s ease;
      }

      .a3-content {
        padding: 10px;
        box-sizing: border-box;
      font-family: sans-serif;
      font-size: 12px;
        height: calc(100% - 40mm);
      }

      .zoom-controls {
        position: fixed;
        bottom: 80px;
        right: 20px;
        z-index: 100;
      }

      .pan-area {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: move;
        cursor: grab;
        cursor: -webkit-grab;
      }

      .pan-area:active {
        cursor: grabbing;
        cursor: -webkit-grabbing;
      }
      .space {
        padding: 20px;
        margin: 30px;
      }
      

      .icon {
        cursor: pointer;
        font-size: 1.2rem;
        display: inline-block;
        width: 24px;
        height: 24px;
        line-height: 24px;
      }
      td:first-child {
        text-align: left;
      }
      .table-responsive {
        overflow-x: auto;
      }
      @media screen {
  .a3-page {
    width: 100%;
    height: auto;
    aspect-ratio: 296 / 420;
  }
}

@media print {
  .a3-page {
    width: 297mm;
    height: 420mm;
  }
}


    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      border: 1px solid black;
      padding: 2px 4px;
      text-align: center;
      vertical-align: middle;
    }
          thead th {
        background-color: #cce5ff;
        position: sticky;
        top: 0;
      }
    .headerke {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    .subheader {
      display: flex;
      justify-content: space-between;
      margin-bottom: 10px;
    }
    .istirahat {
      text-align: center;
      font-weight: bold;
    }
    .floating-footer {
  position: fixed;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 90%;
  background: radial-gradient(circle at center, rgba(255, 140, 0, 0.6), rgba(255, 165, 0, 0.4), rgba(255, 200, 0, 0));
  backdrop-filter: blur(1px);
  color: #333;
  text-align: center;
  padding: 10px;
  font-size: 14px;
  z-index: 1000;
  box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
  border-radius: 10px;
}

    </style>
  </head>
  <body>
<nav class="navbar navbar-expand-lg transparent-navbar">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">myDX Control</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-light ms-3" id="fullscreenBtn" title="Fullscreen">⛶</button>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="main-content">
      <div class="a3-container">
        <div class="a3-page" id="zoomable-a3">
          <div class="pan-area" id="pan-area"></div>
          <div class="a3-content">

    <div class="headerke"><h1>DAILY PRODUCTION REPORT</h1></div>
    <div class="subheader">
      <div>
        <div>Date: 16-04-2025</div>
        <div>Line: UB ENCOPA</div>
      </div>
      <div>
        <div>Shift: RED</div>
        <div>PIC: SLAMET.H</div>
      </div>
    </div>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Day Shift</th>
          <th>Plan</th>
          <th>Act</th>
          <th>Diff</th>
          <th>Line</th>
          <th>Problem</th>
          <th>Countermeasure / Temp. Act</th>
        </tr>
      </thead>
      <tbody>
        <tr><td>1</td><td>07:20 - 08:20</td><td>37</td><td>34</td><td>-3</td><td>MST</td><td>ST-2 Body Fortuner not fix -3</td><td></td></tr>
        <tr><td>2</td><td>08:20 - 09:20</td><td>37</td><td>34</td><td>-3</td><td>MST</td><td></td><td></td></tr>
        <tr><td>3</td><td>09:20 - 10:40</td><td>38</td><td>34</td><td>-4</td><td>MST</td><td>ST-3 Body Nangkring</td><td></td></tr>
        <tr><td>4</td><td>10:40 - 11:45</td><td>118</td><td>111</td><td>-7</td><td>MST</td>
          <td>
            ST-6 Robot FBR Error -2<br>
            FBR 3-6 CT tip kerapekan -2<br>
            ST-3 No car type<br>
            ST-1 Body Nangkring -2
          </td>
          <td></td>
        </tr>
        <tr><td colspan="8" class="istirahat">ISTIRAHAT</td></tr>
        <tr><td>5</td><td>12:30 - 13:30</td><td>37</td><td>34</td><td>-3</td><td>MST</td><td></td><td></td></tr>
        <tr><td>6</td><td>13:30 - 14:30</td><td>37</td><td>24</td><td>-13</td><td>MST</td><td></td><td></td></tr>
        <tr><td>7</td><td>14:30 - 15:40</td><td>89</td><td>67</td><td>-22</td><td>MST</td><td>ST-6 Slitter macet no.7</td><td></td></tr>
        <tr><td>8</td><td>15:40 - 16:50</td><td>284</td><td>263</td><td>-21</td><td>MST</td><td>ST-1 Slitter no.1 macet<br>Body full</td><td></td></tr>
        <tr><td>9</td><td>16:15 - 17:15</td><td>37</td><td>21</td><td>-16</td><td>MST</td><td></td><td></td></tr>
        <tr><td>10</td><td>17:15 - 18:15</td><td>36</td><td>32</td><td>-4</td><td>BAT</td><td>ST-6 Sudah dig Slitter take out no.4 insert no.5</td><td></td></tr>
        <tr><td>11</td><td>18:15 - 19:15</td><td>37</td><td>32</td><td>-5</td><td>MST</td><td></td><td></td></tr>
      </tbody>
    </table>

    <br>

    <table>
      <tr>
        <td>Absensi<br>1: ___<br>2: ___</td>
        <td>Stop Produksi: 17:41</td>
        <td>Working Time Normal<br>Day: 455 min<br>Night: 455 min</td>
        <td>Total Work Time: Normal + OT</td>
        <td>Efficiency:<br>Prod Act x T.T / Work Time x L/S Ext</td>
      </tr>
    </table>

    <br>

    <table>
      <tr>
        <td>Man-Hour</td>
        <td>Start: 18,589</td>
        <td>Finish: 20,635</td>
      </tr>
      <tr>
        <td colspan="3">No. Body: 6263 - 6935</td>
      </tr>
    </table>

    <br>

    <table>
      <tr>
        <td colspan="4">UNIT PRODUKSI</td>
      </tr>
      <tr>
        <td>INNOVA</td><td>149</td>
        <td>FORTUNER</td><td>137</td>
      </tr>
      <tr>
        <td>ZENNIX</td><td>132</td>
        <td>TOTAL</td><td>312</td>
      </tr>
    </table>
<!-- Selesai -->



          </div>
        </div>
        <div class="space"></div>
      </div>
    </div>

    <div class="zoom-controls btn-group-vertical">
      <button class="btn btn-secondary" onclick="zoomIn()">+</button>
      <button class="btn btn-secondary" onclick="zoomOut()">-</button>
      <button class="btn btn-primary" onclick="resetZoom()">®</button>
    </div>
<div class="floating-footer">
  Footer konten di sini
</div>
    <!-- Bootstrap JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      // Generate checksheet table
      const items = [
        "Kebersihan Ruangan",
        "Pengecekan Suhu",
        "Stok Alat Tulis",
        // Tambahkan item lainnya jika perlu
      ];

      const daysInMonth = 31;
      const table = document.getElementById("checksheet-table");

      // Buat header
      const thead = document.createElement("thead");
      const headerRow = document.createElement("tr");

      const thItem = document.createElement("th");
      thItem.textContent = "Item Check";
      headerRow.appendChild(thItem);

      for (let i = 1; i <= daysInMonth; i++) {
        const th = document.createElement("th");
        th.textContent = i;
        headerRow.appendChild(th);
      }

      thead.appendChild(headerRow);
      table.appendChild(thead);

      // Buat isi tabel
      const tbody = document.createElement("tbody");

      items.forEach((item) => {
        const row = document.createElement("tr");

        const tdItem = document.createElement("td");
        tdItem.textContent = item;
        row.appendChild(tdItem);

        for (let i = 1; i <= daysInMonth; i++) {
          const td = document.createElement("td");

          const span = document.createElement("span");
          span.classList.add("icon");
          span.textContent = "⚪"; // Default status

          span.addEventListener("click", () => {
            if (span.textContent === "⚪") {
              span.textContent = "❌";
            } else if (span.textContent === "❌") {
              span.textContent = "✔️";
            } else {
              span.textContent = "⚪";
            }
          });

          td.appendChild(span);
          row.appendChild(td);
        }

        tbody.appendChild(row);
      });

      table.appendChild(tbody);
    </script>
    <script>
      const a3Page = document.getElementById("zoomable-a3");
      const panArea = document.getElementById("pan-area");
      let scale = 1;
      let startDistance = 0;
      let isDragging = false;
      let startPos = { x: 0, y: 0 };
      let translate = { x: 0, y: 0 };
      let lastTranslate = { x: 0, y: 0 };

      // Hitung skala awal saat halaman dimuat
      function calculateInitialScale() {
        const container = document.querySelector(".a3-container");
        const a3Width = 297; // Lebar A3 dalam mm
        const containerWidth = container.offsetWidth;

        // Konversi mm ke px (1mm ≈ 3.7795275590551px)
        const a3WidthPx = a3Width * 3.7795275590551;

        // Hitung skala agar pas dengan container (dengan margin 5px)
        scale = (containerWidth - 1) / a3WidthPx; // 10px untuk margin kiri+kanan

        applyTransform();
      }

      // Panggil saat halaman dimuat dan di-resize
      window.addEventListener("load", calculateInitialScale);
      window.addEventListener("resize", calculateInitialScale);

      // Zoom dengan Mouse Wheel
      a3Page.addEventListener(
        "wheel",
        (e) => {
          if (e.ctrlKey) {
            e.preventDefault();
            const rect = a3Page.getBoundingClientRect();
            const offsetX = e.clientX - rect.left;
            const offsetY = e.clientY - rect.top;

            const delta = -e.deltaY;
            const zoomFactor = 0.1;
            const oldScale = scale;

            if (delta > 0) {
              scale = Math.min(scale + zoomFactor, 3);
            } else {
              scale = Math.max(scale - zoomFactor, 0.5);
            }

            // Sesuaikan posisi translate saat zoom
            translate.x =
              offsetX - (offsetX - translate.x) * (scale / oldScale);
            translate.y =
              offsetY - (offsetY - translate.y) * (scale / oldScale);

            applyTransform();
          }
        },
        { passive: false }
      );

      // Zoom dengan Touch (dua jari)
      a3Page.addEventListener("touchstart", (e) => {
        if (e.touches.length === 2) {
          e.preventDefault();
          startDistance = Math.hypot(
            e.touches[0].clientX - e.touches[1].clientX,
            e.touches[0].clientY - e.touches[1].clientY
          );
        }
      });

      a3Page.addEventListener("touchmove", (e) => {
        if (e.touches.length === 2) {
          e.preventDefault();
          const currentDistance = Math.hypot(
            e.touches[0].clientX - e.touches[1].clientX,
            e.touches[0].clientY - e.touches[1].clientY
          );

          if (startDistance > 0) {
            const newScale = scale * (currentDistance / startDistance);
            scale = Math.min(Math.max(newScale, 0.5), 3);
            applyTransform();
          }

          startDistance = currentDistance;
        }
      });

      a3Page.addEventListener("touchend", () => {
        startDistance = 0;
      });

      // Fungsi untuk mengaplikasikan transformasi zoom dan pan
      function applyTransform() {
        a3Page.style.transform = `translate(${translate.x}px, ${translate.y}px) scale(${scale})`;
      }

      // Fungsi untuk tombol kontrol zoom
      function zoomIn() {
        scale = Math.min(scale + 0.1, 3);
        applyTransform();
      }

      function zoomOut() {
        scale = Math.max(scale - 0.1, 0.5);
        applyTransform();
      }

      function resetZoom() {
        calculateInitialScale();
        translate = { x: 0, y: 0 };
        applyTransform();
      }

      // Fungsi untuk pan (geser)
      panArea.addEventListener("mousedown", (e) => {
        if (scale > 1) {
          isDragging = true;
          startPos = { x: e.clientX - translate.x, y: e.clientY - translate.y };
          panArea.style.cursor = "grabbing";
        }
      });

      window.addEventListener("mousemove", (e) => {
        if (!isDragging) return;

        translate.x = e.clientX - startPos.x;
        translate.y = e.clientY - startPos.y;

        // Batasi pergerakan agar tidak terlalu jauh
        const maxMove = (scale - 1) * 100;
        translate.x = Math.max(Math.min(translate.x, maxMove), -maxMove);
        translate.y = Math.max(Math.min(translate.y, maxMove), -maxMove);

        applyTransform();
      });

      window.addEventListener("mouseup", () => {
        isDragging = false;
        panArea.style.cursor = "grab";
        lastTranslate = { ...translate };
      });

      // Touch events untuk pan
      panArea.addEventListener("touchstart", (e) => {
        if (scale > 1 && e.touches.length === 1) {
          e.preventDefault();
          isDragging = true;
          startPos = {
            x: e.touches[0].clientX - translate.x,
            y: e.touches[0].clientY - translate.y,
          };
        }
      });

      window.addEventListener("touchmove", (e) => {
        if (!isDragging || e.touches.length !== 1) return;
        e.preventDefault();

        translate.x = e.touches[0].clientX - startPos.x;
        translate.y = e.touches[0].clientY - startPos.y;

        // Batasi pergerakan
        const maxMove = (scale - 1) * 100;
        translate.x = Math.max(Math.min(translate.x, maxMove), -maxMove);
        translate.y = Math.max(Math.min(translate.y, maxMove), -maxMove);

        applyTransform();
      });

      window.addEventListener("touchend", () => {
        isDragging = false;
        lastTranslate = { ...translate };
      });
    </script>
  <!-- Code injected by live-server -->
<script>
  const fullscreenBtn = document.getElementById("fullscreenBtn");

  fullscreenBtn.addEventListener("click", () => {
    if (!document.fullscreenElement) {
      document.documentElement.requestFullscreen();
    } else {
      document.exitFullscreen();
    }
  });

  // Optional: support F11 key to toggle manually
  document.addEventListener("keydown", function (e) {
    if (e.key === "F11") {
      e.preventDefault(); // prevent default fullscreen
      fullscreenBtn.click(); // trigger manual fullscreen
    }
  });
</script>
</body>
</html>