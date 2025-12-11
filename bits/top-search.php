<?php
?>

<style>
.topsearch {
  display: table;
}
.topsearch input {
  background: none;
  border: none;
  outline: none;
  width: 28px;
  min-width: 0;
  padding: 0;
  z-index: 1;
  position: relative;
  line-height: 18px;
  margin: 5px 0;
  font-size: 14px;
  -webkit-appearance: none;
  font-family: "Mukta Malar";
  transition: all 0.6s ease;
  cursor: pointer;
  color: #fff;
}
.topsearch input + div {
  position: relative;
  height: 28px;
  width: 100%;
  margin: -28px 0 0 0;
}
.topsearch input + div svg {
  display: block;
  position: absolute;
  height: 28px;
  width: 160px;
  right: 0;
  top: 0;
  fill: none;
  stroke: #fff;
  stroke-width: 1.5px;
  stroke-dashoffset: 271.908;
  stroke-dasharray: 59 212.908;
  transition: all 0.6s ease;
}
.topsearch input:not(:-moz-placeholder-shown) {
  width: 160px;
  padding: 0 4px;
  cursor: text;
}
.topsearch input:not(:-ms-input-placeholder) {
  width: 160px;
  padding: 0 4px;
  cursor: text;
}
.topsearch input:not(:placeholder-shown), .topsearch input:focus {
  width: 160px;
  padding: 0 4px;
  cursor: text;
}
.topsearch input:not(:-moz-placeholder-shown) + div svg {
  stroke-dasharray: 150 212.908;
  stroke-dashoffset: 300;
}
.topsearch input:not(:-ms-input-placeholder) + div svg {
  stroke-dasharray: 150 212.908;
  stroke-dashoffset: 300;
}
.topsearch input:not(:placeholder-shown) + div svg, .topsearch input:focus + div svg {
  stroke-dasharray: 150 212.908;
  stroke-dashoffset: 300;
}
</style>

<div class="text-white topsearch">
    <input type="text" placeholder=" ">
    <div>
        <svg>
            <use xlink:href="#path">
        </svg>
    </div>
</div>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 28" id="path">
        <path d="M32.9418651,-20.6880772 C37.9418651,-20.6880772 40.9418651,-16.6880772 40.9418651,-12.6880772 C40.9418651,-8.68807717 37.9418651,-4.68807717 32.9418651,-4.68807717 C27.9418651,-4.68807717 24.9418651,-8.68807717 24.9418651,-12.6880772 C24.9418651,-16.6880772 27.9418651,-20.6880772 32.9418651,-20.6880772 L32.9418651,-29.870624 C32.9418651,-30.3676803 33.3448089,-30.770624 33.8418651,-30.770624 C34.08056,-30.770624 34.3094785,-30.6758029 34.4782612,-30.5070201 L141.371843,76.386562" transform="translate(83.156854, 22.171573) rotate(-225.000000) translate(-83.156854, -22.171573)"></path>
    </symbol>
</svg>
    
