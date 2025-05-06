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