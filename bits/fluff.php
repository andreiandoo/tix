<?php
?>

<style>

body {
  margin: 0;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #0b1020;
  font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
}

.scene {
  position: relative;
}

/* Creature container */
#floof {
  position: relative;
  width: 459px;   /* exact PNG width */
      height: 449px;  /* exact PNG height */
  background-image: url("<?php echo get_template_directory_uri(); ?>/bits/who.png");
  background-size: contain;
  background-position: center bottom;
  background-repeat: no-repeat;
  transform-origin: bottom center;
  cursor: pointer;
  transform-origin: 50% 100%;
}

/* Softer jiggle with anchored base */
#floof:hover {
  animation: floof-jiggle 1.1s ease-in-out ;
}

@keyframes floof-jiggle {
  0%   { transform: scale(1, 1); }
  20%  { transform: scale(1.03, 0.97); }  /* wider, slightly squashed */
  40%  { transform: scale(0.98, 1.02); }  /* taller, narrower */
  60%  { transform: scale(1.015, 0.985); }
  80%  { transform: scale(0.99, 1.01); }
  100% { transform: scale(1, 1); }
}

    /* Pupils – drawn to look like the original glossy black orbs */
    .eye {
      position: absolute;
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background:
        radial-gradient(circle at 30% 30%,
          rgba(255,255,255,0.9) 0%,
          rgba(255,255,255,0.4) 12%,
          rgba(20,20,20,1) 40%,
          #000000 100%);
      box-shadow: 0 0 6px rgba(0,0,0,0.7);
      transition: transform 0.08s ease-out;
      pointer-events: none; /* let hover be handled by the creature */
    }

    /* Positions are computed from your actual 459x449 image.
       If it's off by 1–2px in your setup, tweak these numbers. */
    .eye-left {
      top: 145px;   /* vertical center ~171px - radius 26px */
      left: 172px;  /* horizontal center ~198px - radius 26px */
    }

    .eye-right {
      top: 145px;   /* roughly same vertical center as left eye */
      right: 131px; /* computed from width so it mirrors correctly */
    }
</style>


<div class="scene">
<div id="floof">
    <div class="eye eye-left"></div>
    <div class="eye eye-right"></div>
</div>
</div>
<script>
    const floof = document.getElementById("floof");
    const eyes = document.querySelectorAll(".eye");

    // Max distance the pupils can move from their base position
    const MAX_EYE_OFFSET = 12;

    function handleMouseMove(event) {
      const rect = floof.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;

      const dx = event.clientX - centerX;
      const dy = event.clientY - centerY;

      // Direction from creature center to cursor
      const angle = Math.atan2(dy, dx);

      const offsetX = Math.cos(angle) * MAX_EYE_OFFSET;
      const offsetY = Math.sin(angle) * MAX_EYE_OFFSET;

      eyes.forEach((eye) => {
        eye.style.transform = `translate(${offsetX}px, ${offsetY}px)`;
      });
    }

    function resetEyes() {
      eyes.forEach((eye) => {
        eye.style.transform = "translate(0, 0)";
      });
    }

    // Eyes follow cursor anywhere on the screen
    window.addEventListener("mousemove", handleMouseMove);
    window.addEventListener("mouseleave", resetEyes);
  </script>