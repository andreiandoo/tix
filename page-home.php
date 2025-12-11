<?php
/**
 * Template Name: Tixello – Home Page
 */

get_header();
?>

<style>


#globeWrapper {
    background: radial-gradient(circle at 10% 0%, #0b1120 0, #020617 60%, #000 100%);
}
#globeInfo {
    flex: 1;
    display: flex;
    min-height: 0;
}

#globe-section {
    flex: 4;
    position: relative;
    min-width: 0;
    border-right: 1px solid rgba(30, 64, 175, 0.5);
}

#globe-container {
    position: absolute;
    inset: 0;
}

#globe-container canvas {
    display: block;
}

.legend {
    position: absolute;
    bottom: 14px;
    left: 14px;
    padding: 10px 12px;
    border-radius: 12px;
    background: rgba(15, 23, 42, 0.88);
    border: 1px solid rgba(148, 163, 184, 0.35);
    backdrop-filter: blur(10px);
    font-size: 11px;
    max-width: 260px;
}

.legend-row {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 4px;
}

.legend-dot {
    width: 8px;
    height: 8px;
    border-radius: 999px;
    flex-shrink: 0;
}

.legend-dot.land {
    background: #4b5563;
    opacity: 0.9;
}

.legend-dot.visit {
    background: #22c55e;
}

.legend-dot.purchase {
    background: #3b82f6;
}

.legend-label {
    color: #e5e7eb;
}

.legend p {
    color: #9ca3af;
    line-height: 1.3;
    margin-top: 4px;
}

#info-panel {
    position:absolute;
    top:-4rem;
    right:4rem;
    flex: 1;
    padding: 18px 20px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    background: radial-gradient(circle at 80% 0%, #0f172a 0, #020617 55%, #020617 100%);
}

.info-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.08em;
    color: #64748b;
    margin-bottom: 4px;
}

.info-title {
    font-size: 18px;
    font-weight: 600;
    color: #e5e7eb;
    margin-bottom: 2px;
}

.info-subtitle {
    font-size: 12px;
    color: #9ca3af;
    margin-bottom: 10px;
}

.pill-row {
    display: flex;
    flex-wrap: wrap;
    gap: 6px;
    margin-bottom: 10px;
}

.pill {
    font-size: 11px;
    padding: 3px 8px;
    border-radius: 999px;
    background: rgba(15, 23, 42, 0.9);
    border: 1px solid rgba(30, 64, 175, 0.6);
    color: #cbd5f5;
}

.info-card {
    border-radius: 14px;
    padding: 12px 13px;
    background: rgba(15, 23, 42, 0.95);
    border: 1px solid rgba(51, 65, 85, 0.9);
    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.9);
    display: flex;
    flex-direction: column;
    gap: 6px;
    min-height: 150px;
}

.info-card.visit {
    border-color: rgba(34, 197, 94, 0.7);
    box-shadow: 0 18px 40px rgba(22, 163, 74, 0.4);
}

.info-card.purchase {
    border-color: rgba(59, 130, 246, 0.7);
    box-shadow: 0 18px 40px rgba(37, 99, 235, 0.4);
}

.info-chip {
    align-self: flex-start;
    font-size: 11px;
    padding: 3px 8px;
    border-radius: 999px;
    border: 1px solid rgba(148, 163, 184, 0.5);
    color: #e5e7eb;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}

.info-chip-dot {
    width: 7px;
    height: 7px;
    border-radius: 999px;
}

.info-chip-dot.visit {
    background: #22c55e;
}

.info-chip-dot.purchase {
    background: #3b82f6;
}

.info-primary {
    font-size: 13px;
    color: #e5e7eb;
    margin-top: 4px;
}

.info-primary span {
    color: #a5b4fc;
    font-weight: 500;
}

.info-list {
    margin-top: 6px;
    font-size: 12px;
    color: #9ca3af;
    display: grid;
    grid-template-columns: repeat(2, minmax(0, 1fr));
    gap: 4px 10px;
}

.info-item-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 0.06em;
    color: #64748b;
    margin-bottom: 1px;
}

.info-item-value {
    font-size: 12px;
    color: #e5e7eb;
    word-break: break-all;
}

.info-hint {
    font-size: 11px;
    color: #64748b;
    margin-top: 6px;
}

.info-footer {
    margin-top: 10px;
    font-size: 11px;
    color: #64748b;
}

.info-footer span {
    color: #e5e7eb;
}

@media (max-width: 900px) {
    #globe-section {
        flex-basis: 55%;
        min-height: 260px;
    }
    #info-panel {
        flex-basis: 45%;
    }
}

@media (max-width: 640px) {
    #info-panel {
        padding: 14px 14px 16px;
    }
}
</style>

<div class="container mx-auto py-12">

    <div class="">
        <?php echo do_shortcode('[tixello_stats_cards]'); ?>
    </div>

</div>
<div id="globeWrapper" class="container-full mx-auto relative">
    <div class="text-center py-12 flex flex-col items-center justify-center">
        <div class="info-label">Activity details</div>
        <div class="info-title">Globe activity stream</div>
        <div class="info-subtitle">Hover a green or blue point on the globe to inspect a single anonymous session.</div>
        <div class="pill-row">
            <div class="pill">No personal data stored</div>
        </div>
    </div>
    <div id="globeInfo" class="h-[50vh]">
        <section id="globe-section">
            <div id="globe-container">
                <div class="legend">
                    <div class="legend-row">
                        <span class="legend-dot visit"></span>
                        <span class="legend-label">Site visitor (on a Tixello powered website)</span>
                    </div>
                    <div class="legend-row">
                        <span class="legend-dot purchase"></span>
                        <span class="legend-label">Ticket buyer (successful order on a Tixello powered website)</span>
                    </div>
                </div>
            </div>
        </section>
        <aside id="info-panel">
            <div id="info-card" class="info-card">
                
            </div>
        </aside>
    </div>
</div>


<script src="https://unpkg.com/three@0.160.0/build/three.min.js"></script>
<script>
  (function () {
    const container = document.getElementById("globe-container");
    const infoCard = document.getElementById("info-card");

    const scene = new THREE.Scene();
    scene.background = null;

    const camera = new THREE.PerspectiveCamera(
      55,
      container.clientWidth / container.clientHeight,
      0.1,
      1000
    );
    camera.position.set(0, 0, 3.2);

    const renderer = new THREE.WebGLRenderer({
      antialias: true,
      alpha: true
    });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);

    const ambientLight = new THREE.AmbientLight(0xffffff, 0.45);
    scene.add(ambientLight);

    const directionalLight = new THREE.DirectionalLight(0xffffff, 0.8);
    directionalLight.position.set(2, 1, 1.5);
    scene.add(directionalLight);

    const globeRadius = 1;

    const globeGroup = new THREE.Group();
    globeGroup.rotation.set(0.35, -1.833, 0);
    scene.add(globeGroup);

    const globeGeometry = new THREE.SphereGeometry(globeRadius, 64, 64);
    const globeMaterial = new THREE.MeshPhongMaterial({
      color: 0x020617,
      shininess: 5,
      specular: new THREE.Color(0x111111)
    });
    const globeMesh = new THREE.Mesh(globeGeometry, globeMaterial);
    globeGroup.add(globeMesh);

    function latLonToVector3(lat, lon, radius) {
      const phi = (90 - lat) * (Math.PI / 180);
      const theta = (lon + 180) * (Math.PI / 180);
      const x = -radius * Math.sin(phi) * Math.cos(theta);
      const z = radius * Math.sin(phi) * Math.sin(theta);
      const y = radius * Math.cos(phi);
      return new THREE.Vector3(x, y, z);
    }

    function createCircleTexture() {
      const size = 128;
      const canvas = document.createElement("canvas");
      canvas.width = size;
      canvas.height = size;
      const ctx = canvas.getContext("2d");
      ctx.clearRect(0, 0, size, size);
      const center = size / 2;
      const radius = size / 2;
      const gradient = ctx.createRadialGradient(center, center, 0, center, center, radius);
      gradient.addColorStop(0, "rgba(255,255,255,1)");
      gradient.addColorStop(0.7, "rgba(255,255,255,1)");
      gradient.addColorStop(1, "rgba(255,255,255,0)");
      ctx.fillStyle = gradient;
      ctx.beginPath();
      ctx.arc(center, center, radius, 0, Math.PI * 2);
      ctx.fill();
      const texture = new THREE.CanvasTexture(canvas);
      texture.needsUpdate = true;
      return texture;
    }

    const circleTexture = createCircleTexture();

    function generateLandPointsFromImage(img) {
      const canvas = document.createElement("canvas");
      const width = img.naturalWidth || img.width;
      const height = img.naturalHeight || img.height;
      canvas.width = width;
      canvas.height = height;
      const ctx = canvas.getContext("2d");
      ctx.drawImage(img, 0, 0, width, height);
      const imgData = ctx.getImageData(0, 0, width, height).data;

      const positions = [];
      const colors = [];
      const color = new THREE.Color(0.7, 0.78, 0.9);

      const latStep = 0.7;
      const lonStep = 0.7;

      for (let lat = -85; lat <= 85; lat += latStep) {
        for (let lon = -180; lon < 180; lon += lonStep) {
          const u = (lon + 180) / 360;
          const v = (90 - lat) / 180;
          const xPix = Math.floor(u * width);
          const yPix = Math.floor(v * height);
          const idx = (yPix * width + xPix) * 4;
          const r = imgData[idx];
          const g = imgData[idx + 1];
          const b = imgData[idx + 2];
          const avg = (r + g + b) / 3;
          const blueDominant = b > g * 1.3 && b > r * 1.3;
          const isWater = blueDominant && avg < 190;
          const isLand = !isWater && avg > 25;
          if (!isLand) continue;
          const v3 = latLonToVector3(lat, lon, globeRadius + 0.01);
          positions.push(v3.x, v3.y, v3.z);
          colors.push(color.r, color.g, color.b);
        }
      }

      const geometry = new THREE.BufferGeometry();
      geometry.setAttribute("position", new THREE.Float32BufferAttribute(positions, 3));
      geometry.setAttribute("color", new THREE.Float32BufferAttribute(colors, 3));

      const material = new THREE.PointsMaterial({
        size: 0.015,
        map: circleTexture,
        vertexColors: true,
        transparent: true,
        opacity: 0.5,
        depthWrite: false,
        alphaTest: 0.3
      });

      const landPoints = new THREE.Points(geometry, material);
      globeGroup.add(landPoints);
    }

    function generateFallbackLandPoints() {
      const positions = [];
      const colors = [];
      const color = new THREE.Color(0.7, 0.78, 0.9);

      const landBands = [
        { latMin: 35, latMax: 72, lonMin: -25, lonMax: 45 },
        { latMin: -35, latMax: 35, lonMin: -20, lonMax: 50 },
        { latMin: 10, latMax: 80, lonMin: 45, lonMax: 150 },
        { latMin: 10, latMax: 75, lonMin: -170, lonMax: -50 },
        { latMin: -55, latMax: 10, lonMin: -80, lonMax: -35 },
        { latMin: -45, latMax: -10, lonMin: 110, lonMax: 155 }
      ];

      function isInAnyBand(lat, lon) {
        for (let i = 0; i < landBands.length; i++) {
          const b = landBands[i];
          if (lat >= b.latMin && lat <= b.latMax && lon >= b.lonMin && lon <= b.lonMax) {
            return true;
          }
        }
        return false;
      }

      const latStep = 1;
      const lonStep = 1;

      for (let lat = -85; lat <= 85; lat += latStep) {
        for (let lon = -180; lon < 180; lon += lonStep) {
          if (!isInAnyBand(lat, lon)) continue;
          const v3 = latLonToVector3(lat, lon, globeRadius + 0.01);
          positions.push(v3.x, v3.y, v3.z);
          colors.push(color.r, color.g, color.b);
        }
      }

      const geometry = new THREE.BufferGeometry();
      geometry.setAttribute("position", new THREE.Float32BufferAttribute(positions, 3));
      geometry.setAttribute("color", new THREE.Float32BufferAttribute(colors, 3));

      const material = new THREE.PointsMaterial({
        size: 0.015,
        map: circleTexture,
        vertexColors: true,
        transparent: true,
        opacity: 0.5,
        depthWrite: false,
        alphaTest: 0.3
      });

      const landPoints = new THREE.Points(geometry, material);
      globeGroup.add(landPoints);
    }

    (function initLandMask() {
      const img = new Image();
      img.crossOrigin = "anonymous";
      img.onload = function () {
        try {
          generateLandPointsFromImage(img);
        } catch (e) {
          generateFallbackLandPoints();
        }
      };
      img.onerror = function () {
        generateFallbackLandPoints();
      };
      img.src = "https://unpkg.com/three-globe/example/img/earth-blue-marble.jpg";
    })();

    const eventsData = [];

    const romaniaLocations = [
      { city: "Bucharest", country: "Romania", lat: 44.4268, lon: 26.1025 },
      { city: "Cluj-Napoca", country: "Romania", lat: 46.7712, lon: 23.6236 },
      { city: "Iași", country: "Romania", lat: 47.1585, lon: 27.6014 },
      { city: "Timișoara", country: "Romania", lat: 45.7489, lon: 21.2087 },
      { city: "Constanța", country: "Romania", lat: 44.1598, lon: 28.6348 },
      { city: "Brașov", country: "Romania", lat: 45.6579, lon: 25.6012 },
      { city: "Sibiu", country: "Romania", lat: 45.793, lon: 24.1213 },
      { city: "Oradea", country: "Romania", lat: 47.0722, lon: 21.9217 },
      { city: "Galați", country: "Romania", lat: 45.4353, lon: 28.0072 },
      { city: "Craiova", country: "Romania", lat: 44.3302, lon: 23.7949 }
    ];

    const europeLocations = [
      { city: "Berlin", country: "Germany", lat: 52.52, lon: 13.405 },
      { city: "London", country: "United Kingdom", lat: 51.5074, lon: -0.1278 },
      { city: "Paris", country: "France", lat: 48.8566, lon: 2.3522 },
      { city: "Rome", country: "Italy", lat: 41.9028, lon: 12.4964 },
      { city: "Madrid", country: "Spain", lat: 40.4168, lon: -3.7038 },
      { city: "Vienna", country: "Austria", lat: 48.2082, lon: 16.3738 },
      { city: "Budapest", country: "Hungary", lat: 47.4979, lon: 19.0402 },
      { city: "Warsaw", country: "Poland", lat: 52.2297, lon: 21.0122 },
      { city: "Athens", country: "Greece", lat: 37.9838, lon: 23.7275 },
      { city: "Prague", country: "Czech Republic", lat: 50.0755, lon: 14.4378 }
    ];

    const demoSites = [
      "tickets.tixello.com",
      "livefest.tixello.ro",
      "rocknight.ro",
      "jazzcitytickets.com"
    ];

    const demoPages = [
      "/",
      "/events/the-greatest-hits",
      "/events/summer-fest-2025",
      "/cart",
      "/checkout",
      "/lineup",
      "/bilete/larock-2025"
    ];

    const demoEvents = [
      "LAROCK Festival 2025 — Full Pass",
      "The Greatest Hits Tour 2025 — Bucharest",
      "Electro Nights — Tower Stage",
      "City Jazz Evening — Main Hall",
      "Open Air Cinema Night",
      "Sunset Acoustic Sessions"
    ];

    const demoPrices = [49, 79, 99, 129, 149, 189, 249];

    const firstNames = [
      "Alex",
      "Mara",
      "Andrei",
      "Ioana",
      "Vlad",
      "Sara",
      "Cristi",
      "Elena",
      "Radu",
      "Bianca"
    ];

    const lastNames = [
      "Popescu",
      "Ionescu",
      "Georgescu",
      "Dumitrescu",
      "Stan",
      "Preda",
      "Iordache",
      "Matei",
      "Stoica",
      "Dobre"
    ];

    function randomInt(min, max) {
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }

    function randomIp() {
      const part = function () { return randomInt(2, 254); };
      return part() + "." + part() + "." + part() + "." + part();
    }

    function maskName(fullName) {
      const parts = fullName.split(" ");
      return parts.map(function (p) {
        if (p.length <= 2) return p[0] + "*";
        const first = p[0];
        const last = p[p.length - 1];
        return first + "***" + last;
      }).join(" ");
    }

    function pickRandom(arr) {
      return arr[Math.floor(Math.random() * arr.length)];
    }

    function generateDemoEvents(total) {
      if (typeof total !== "number") total = 200;
      const roCount = Math.round(total * 0.9);
      const euCount = total - roCount;

      for (let i = 0; i < roCount; i++) {
        const loc = pickRandom(romaniaLocations);
        const isPurchase = Math.random() < 0.45;

        if (isPurchase) {
          const first = pickRandom(firstNames);
          const last = pickRandom(lastNames);
          const fullName = first + " " + last;

          eventsData.push({
            type: "purchase",
            lat: loc.lat + (Math.random() - 0.5) * 0.8,
            lon: loc.lon + (Math.random() - 0.5) * 0.8,
            city: loc.city,
            country: loc.country,
            ip: randomIp(),
            site: pickRandom(demoSites),
            eventName: pickRandom(demoEvents),
            price: pickRandom(demoPrices),
            buyerNameMasked: maskName(fullName)
          });
        } else {
          eventsData.push({
            type: "visit",
            lat: loc.lat + (Math.random() - 0.5) * 0.8,
            lon: loc.lon + (Math.random() - 0.5) * 0.8,
            city: loc.city,
            country: loc.country,
            ip: randomIp(),
            site: pickRandom(demoSites),
            page: pickRandom(demoPages)
          });
        }
      }

      for (let i = 0; i < euCount; i++) {
        const loc = pickRandom(europeLocations);
        const isPurchase = Math.random() < 0.45;

        if (isPurchase) {
          const first = pickRandom(firstNames);
          const last = pickRandom(lastNames);
          const fullName = first + " " + last;

          eventsData.push({
            type: "purchase",
            lat: loc.lat + (Math.random() - 0.5) * 1.0,
            lon: loc.lon + (Math.random() - 0.5) * 1.0,
            city: loc.city,
            country: loc.country,
            ip: randomIp(),
            site: pickRandom(demoSites),
            eventName: pickRandom(demoEvents),
            price: pickRandom(demoPrices),
            buyerNameMasked: maskName(fullName)
          });
        } else {
          eventsData.push({
            type: "visit",
            lat: loc.lat + (Math.random() - 0.5) * 1.0,
            lon: loc.lon + (Math.random() - 0.5) * 1.0,
            city: loc.city,
            country: loc.country,
            ip: randomIp(),
            site: pickRandom(demoSites),
            page: pickRandom(demoPages)
          });
        }
      }
    }

    generateDemoEvents(220);

    let eventsPoints = null;
    let eventsMaterial = null;
    let activeEventIndices = [];
    let activeEventIndexSet = new Set();
    let hoveredVertices = [];

    function rebuildEventsPoints() {
      if (!eventsData.length || !activeEventIndices.length) {
        if (eventsPoints) {
          globeGroup.remove(eventsPoints);
          eventsPoints.geometry.dispose();
          eventsPoints = null;
        }
        hoveredVertices = [];
        return;
      }

      const positions = [];
      const colors = [];
      const color = new THREE.Color();

      for (let i = 0; i < activeEventIndices.length; i++) {
        const evtIndex = activeEventIndices[i];
        const evt = eventsData[evtIndex];
        const v3 = latLonToVector3(evt.lat, evt.lon, globeRadius + 0.03);
        positions.push(v3.x, v3.y, v3.z);
        if (evt.type === "visit") {
          color.set(0x22c55e);
        } else {
          color.set(0x3b82f6);
        }
        colors.push(color.r, color.g, color.b);
      }

      const geometry = new THREE.BufferGeometry();
      geometry.setAttribute("position", new THREE.Float32BufferAttribute(positions, 3));
      geometry.setAttribute("color", new THREE.Float32BufferAttribute(colors, 3));
      geometry.userData.eventIndices = activeEventIndices.slice();

      if (!eventsMaterial) {
        eventsMaterial = new THREE.PointsMaterial({
          size: 0.03,
          map: circleTexture,
          vertexColors: true,
          transparent: true,
          opacity: 1,
          depthWrite: false,
          alphaTest: 0.3
        });
      }

      if (eventsPoints) {
        globeGroup.remove(eventsPoints);
        eventsPoints.geometry.dispose();
      }

      eventsPoints = new THREE.Points(geometry, eventsMaterial);
      globeGroup.add(eventsPoints);

      hoveredVertices = [];
      updateInfoPanel(null);
      container.style.cursor = "grab";
    }

    function initActiveEvents() {
      if (!eventsData.length) return;
      activeEventIndices = [];
      activeEventIndexSet = new Set();
      const initialActive = Math.min(eventsData.length, 80);
      while (activeEventIndices.length < initialActive) {
        const idx = randomInt(0, eventsData.length - 1);
        if (!activeEventIndexSet.has(idx)) {
          activeEventIndexSet.add(idx);
          activeEventIndices.push(idx);
        }
      }
      rebuildEventsPoints();
    }

    initActiveEvents();

    container.style.cursor = "grab";

    window.addEventListener("resize", function () {
      const w = container.clientWidth;
      const h = container.clientHeight;
      if (h === 0) return;
      camera.aspect = w / h;
      camera.updateProjectionMatrix();
      renderer.setSize(w, h);
    });

    const raycaster = new THREE.Raycaster();
    raycaster.params.Points.threshold = 0.01;
    const mouse = new THREE.Vector2();

    function updateInfoPanel(evt) {
      const baseClass = "info-card";
      infoCard.className = baseClass;

      if (!evt) {
        infoCard.innerHTML = '' +
          '<div class="info-primary">Move your cursor over a <span>green</span> or <span>blue</span> point to see a live-style session card here.</div>' +
          '<div class="info-hint">Green points = site visitors on tenant websites. Blue points = completed ticket purchases.</div>' +
          '<div class="info-footer">Data source: <span>local demo packet</span>. Tixello Core API integration is wired but disabled in this demo.</div>';
        return;
      }

      const list = Array.isArray(evt) ? evt : [evt];

      if (list.length === 1) {
        const e = list[0];
        if (e.type === "visit") {
          infoCard.className = baseClass + " visit";
          infoCard.innerHTML = '' +
            '<div class="info-chip"><span class="info-chip-dot visit"></span>Site visitor</div>' +
            '<div class="info-primary">User is browsing <span>' + e.site + '</span> from <span>' + e.city + ', ' + e.country + '</span>.</div>' +
            '<div class="info-list">' +
              '<div>' +
                '<div class="info-item-label">Page</div>' +
                '<div class="info-item-value">' + e.page + '</div>' +
              '</div>' +
              '<div>' +
                '<div class="info-item-label">Tenant site</div>' +
                '<div class="info-item-value">' + e.site + '</div>' +
              '</div>' +
              '<div>' +
                '<div class="info-item-label">City / Country</div>' +
                '<div class="info-item-value">' + e.city + ', ' + e.country + '</div>' +
              '</div>' +
              '<div>' +
                '<div class="info-item-label">IP (anonymised)</div>' +
                '<div class="info-item-value">' + e.ip + '</div>' +
              '</div>' +
            '</div>' +
            '<div class="info-hint">Example only · no personal data · based on IP & routing rules in a real deployment.</div>';
        } else {
          infoCard.className = baseClass + " purchase";
          const priceStr = e.price.toFixed(0) + " RON";
          infoCard.innerHTML = '' +
            '<div class="info-chip"><span class="info-chip-dot purchase"></span>Ticket buyer</div>' +
            '<div class="info-primary">A ticket was purchased for <span>' + e.eventName + '</span> from <span>' + e.city + ', ' + e.country + '</span>.</div>' +
            '<div class="info-list">' +
              '<div>' +
                '<div class="info-item-label">Buyer</div>' +
                '<div class="info-item-value">' + e.buyerNameMasked + '</div>' +
              '</div>' +
              '<div>' +
                '<div class="info-item-label">Ticket price</div>' +
                '<div class="info-item-value">' + priceStr + '</div>' +
              '</div>' +
              '<div>' +
                '<div class="info-item-label">Site</div>' +
                '<div class="info-item-value">' + e.site + '</div>' +
              '</div>' +
              '<div>' +
                '<div class="info-item-label">IP (anonymised)</div>' +
                '<div class="info-item-value">' + e.ip + '</div>' +
              '</div>' +
            '</div>' +
            '<div class="info-hint">Names are spoofed and masked; real-time mode would use hashed IDs and partial data only.</div>';
        }
        return;
      }

      let anyPurchase = false;
      let anyVisit = false;
      for (let i = 0; i < list.length; i++) {
        if (list[i].type === "purchase") anyPurchase = true;
        if (list[i].type === "visit") anyVisit = true;
      }

      if (anyPurchase && !anyVisit) {
        infoCard.className = baseClass + " purchase";
      } else if (anyVisit && !anyPurchase) {
        infoCard.className = baseClass + " visit";
      } else {
        infoCard.className = baseClass + " purchase";
      }

      let chipDotClass = "purchase";
      if (anyVisit && !anyPurchase) chipDotClass = "visit";

      let html = '' +
        '<div class="info-chip"><span class="info-chip-dot ' + chipDotClass + '"></span>' +
        list.length + ' overlapping sessions</div>' +
        '<div class="info-primary">You are hovering over <span>' + list.length + '</span> sessions clustered in the same area.</div>' +
        '<div class="info-list">';

      for (let i = 0; i < list.length; i++) {
        const e = list[i];
        let label = "Session " + (i + 1);
        let summary;
        if (e.type === "visit") {
          summary = "Visitor • " + e.city + ", " + e.country + " • " + e.site + e.page;
        } else {
          summary = "Buyer • " + e.city + ", " + e.country + " • " + e.eventName + " • " + e.price.toFixed(0) + " RON";
        }
        html += '' +
          '<div>' +
            '<div class="info-item-label">' + label + '</div>' +
            '<div class="info-item-value">' + summary + '</div>' +
          '</div>';
      }

      html += '</div>' +
        '<div class="info-hint">Multiple sessions share almost the same position on the globe; card aggregates them for easier inspection.</div>';

      infoCard.innerHTML = html;
    }

    function setHoveredVertices(indices) {
      if (!eventsPoints) return;

      const geometry = eventsPoints.geometry;
      const colors = geometry.getAttribute("color");
      const color = new THREE.Color();
      const eventIndices = geometry.userData.eventIndices || [];

      if (hoveredVertices && hoveredVertices.length) {
        for (let i = 0; i < hoveredVertices.length; i++) {
          const prevVertex = hoveredVertices[i];
          const evtIndex = eventIndices[prevVertex];
          const evt = eventsData[evtIndex];
          if (!evt) continue;
          if (evt.type === "visit") {
            color.set(0x22c55e);
          } else {
            color.set(0x3b82f6);
          }
          colors.setXYZ(prevVertex, color.r, color.g, color.b);
        }
      }

      if (!indices || !indices.length) {
        hoveredVertices = [];
        colors.needsUpdate = true;
        updateInfoPanel(null);
        container.style.cursor = "grab";
        return;
      }

      hoveredVertices = indices.slice(0);

      for (let i = 0; i < hoveredVertices.length; i++) {
        const vertexIndex = hoveredVertices[i];
        const evtIndex = eventIndices[vertexIndex];
        const evt = eventsData[evtIndex];
        if (!evt) continue;
        color.set(0xfacc15);
        colors.setXYZ(vertexIndex, color.r, color.g, color.b);
      }

      colors.needsUpdate = true;

      const selectedEvents = [];
      for (let i = 0; i < hoveredVertices.length; i++) {
        const vertexIndex = hoveredVertices[i];
        const evtIndex = eventIndices[vertexIndex];
        const e = eventsData[evtIndex];
        if (e) selectedEvents.push(e);
      }

      updateInfoPanel(selectedEvents);
      container.style.cursor = "pointer";
    }

    function updateHover(event) {
      if (!eventsPoints) return;

      const rect = renderer.domElement.getBoundingClientRect();
      const x = event.clientX - rect.left;
      const y = event.clientY - rect.top;

      mouse.x = (x / rect.width) * 2 - 1;
      mouse.y = -(y / rect.height) * 2 + 1;

      raycaster.setFromCamera(mouse, camera);
      const intersects = raycaster.intersectObject(eventsPoints);

      if (intersects.length > 0) {
        const baseDistance = intersects[0].distance;
        const cluster = [];
        for (let i = 0; i < intersects.length; i++) {
          if (Math.abs(intersects[i].distance - baseDistance) < 0.01) {
            cluster.push(intersects[i].index);
          }
        }
        setHoveredVertices(cluster);
      } else {
        if (hoveredVertices && hoveredVertices.length) {
          setHoveredVertices([]);
        }
      }
    }

    let isDragging = false;
    let autoRotate = true;
    const lastPos = { x: 0, y: 0 };
    const rotateSpeed = 0.005;

    renderer.domElement.addEventListener("mousedown", function (event) {
      isDragging = true;
      autoRotate = false;
      lastPos.x = event.clientX;
      lastPos.y = event.clientY;
      container.style.cursor = "grabbing";
    });

    window.addEventListener("mouseup", function () {
      isDragging = false;
      if (!hoveredVertices || !hoveredVertices.length) {
        container.style.cursor = "grab";
      }
    });

    renderer.domElement.addEventListener("mouseleave", function () {
      isDragging = false;
      if (!hoveredVertices || !hoveredVertices.length) {
        container.style.cursor = "grab";
      }
    });

    renderer.domElement.addEventListener("mousemove", function (event) {
      updateHover(event);
      if (!isDragging) return;
      const deltaX = event.clientX - lastPos.x;
      const deltaY = event.clientY - lastPos.y;
      lastPos.x = event.clientX;
      lastPos.y = event.clientY;
      globeGroup.rotation.y += deltaX * rotateSpeed;
      globeGroup.rotation.x += deltaY * rotateSpeed;
      const maxX = Math.PI / 2;
      const minX = -Math.PI / 2;
      if (globeGroup.rotation.x > maxX) globeGroup.rotation.x = maxX;
      if (globeGroup.rotation.x < minX) globeGroup.rotation.x = minX;
    });

    renderer.domElement.addEventListener("wheel", function (event) {
      event.preventDefault();
      const delta = event.deltaY * 0.001;
      camera.position.z += delta;
      if (camera.position.z < 1.6) camera.position.z = 1.6;
      if (camera.position.z > 6) camera.position.z = 6;
    }, { passive: false });

    function updateEventDotsForCamera() {
      if (!eventsMaterial) return;
      const minZ = 1.6;
      const maxZ = 6;
      let z = camera.position.z;
      if (z < minZ) z = minZ;
      if (z > maxZ) z = maxZ;
      const t = (z - minZ) / (maxZ - minZ);
      const minSize = 0.015;
      const maxSize = 0.05;
      eventsMaterial.size = minSize + (maxSize - minSize) * t;
    }

    let trafficTimer = 0;
    let trafficInterval = 1.0;

    function resetTrafficInterval() {
      trafficInterval = 0.7 + Math.random() * 1.3;
    }

    resetTrafficInterval();

    function updateTraffic(delta) {
      if (!eventsData.length) return;
      trafficTimer += delta;
      if (trafficTimer < trafficInterval) return;
      trafficTimer = 0;
      resetTrafficInterval();

      const minActive = 25;
      const maxActive = 90;

      const action = Math.random();
      if (action < 0.6 && activeEventIndices.length < maxActive) {
        const addCount = randomInt(1, 3);
        let added = 0;
        while (added < addCount && activeEventIndices.length < maxActive) {
          const idx = randomInt(0, eventsData.length - 1);
          if (!activeEventIndexSet.has(idx)) {
            activeEventIndexSet.add(idx);
            activeEventIndices.push(idx);
            added++;
          }
        }
      } else if (activeEventIndices.length > minActive) {
        const removeCount = Math.min(randomInt(1, 3), activeEventIndices.length - minActive);
        for (let r = 0; r < removeCount; r++) {
          const removeIndex = randomInt(0, activeEventIndices.length - 1);
          const evtIndex = activeEventIndices[removeIndex];
          activeEventIndexSet.delete(evtIndex);
          activeEventIndices.splice(removeIndex, 1);
        }
      }

      rebuildEventsPoints();
    }

    const autoRotateSpeed = 0.002;
    let lastTime = null;

    function animate(now) {
      requestAnimationFrame(animate);
      if (lastTime === null) {
        lastTime = now;
      }
      const delta = (now - lastTime) / 1000;
      lastTime = now;

      if (autoRotate && !isDragging) {
        globeGroup.rotation.y += autoRotateSpeed;
      }

      updateEventDotsForCamera();
      updateTraffic(delta);
      renderer.render(scene, camera);
    }

    requestAnimationFrame(animate);
  })();
</script>

<?php
get_footer();
?>