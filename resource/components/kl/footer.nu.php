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

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
          <?= $this['scriptsfooter'] ?>
          <script src="<?= getBaseUrl(); ?>assets/js/paper/zoom.js"></script>
          <script src="<?= getBaseUrl(); ?>assets/js/paper/fullscreen.js"></script>

          </body>

          </html>