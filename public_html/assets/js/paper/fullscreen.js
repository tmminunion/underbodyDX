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
