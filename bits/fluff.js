const floof = document.getElementById("floof");
const eyes = document.querySelectorAll(".eye");

// How far the eyes can move from their resting position (in pixels)
const MAX_EYE_OFFSET = 12;

// Update eyes position based on mouse position on the screen
function handleMouseMove(event) {
  const rect = floof.getBoundingClientRect();
  const centerX = rect.left + rect.width / 2;
  const centerY = rect.top + rect.height / 2;

  const dx = event.clientX - centerX;
  const dy = event.clientY - centerY;

  // If mouse is exactly at the center, don't move
  if (dx === 0 && dy === 0) {
    eyes.forEach(eye => {
      eye.style.transform = "translate(0, 0)";
    });
    return;
  }

  // Direction from creature center to mouse
  const angle = Math.atan2(dy, dx);

  // Move along that direction, but only by MAX_EYE_OFFSET px
  const offsetX = Math.cos(angle) * MAX_EYE_OFFSET;
  const offsetY = Math.sin(angle) * MAX_EYE_OFFSET;

  eyes.forEach(eye => {
    eye.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
  });
}

// When the mouse leaves the window or we want to reset:
function resetEyes() {
  eyes.forEach(eye => {
    eye.style.transform = "translate(0, 0)";
  });
}

// Eyes track cursor on the whole page, not only above the creature
window.addEventListener("mousemove", handleMouseMove);
window.addEventListener("mouseleave", resetEyes);
