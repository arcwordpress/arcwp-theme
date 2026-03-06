<?php
/**
 * Template Name: Pixi Demo
 */
get_header(); ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pixi Demo</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/7.3.2/pixi.min.js"></script>
<style>
  * { margin: 0; padding: 0; box-sizing: border-box; }
  body { background: #0a0a0f; overflow: hidden; font-family: 'Courier New', monospace; }
  #pixi-canvas { display: block; }
  #ui-overlay {
    position: fixed; top: 0; left: 0; width: 100%; height: 100%;
    pointer-events: none; display: flex; align-items: flex-end;
    padding: 20px;
  }
  #dialogue-box {
    width: 100%; max-width: 640px; margin: 0 auto;
    background: rgba(10,10,20,0.92);
    border: 1px solid rgba(100,200,255,0.3);
    border-radius: 4px;
    padding: 20px 24px;
    box-shadow: 0 0 40px rgba(100,200,255,0.1), inset 0 0 20px rgba(0,0,0,0.5);
    min-height: 80px;
  }
  #speaker-name {
    font-size: 11px; letter-spacing: 3px; text-transform: uppercase;
    color: #64c8ff; margin-bottom: 8px; opacity: 0.8;
  }
  #dialogue-text {
    font-size: 15px; line-height: 1.6; color: #e8e8f0;
    min-height: 24px;
  }
  #advance-hint {
    font-size: 10px; color: rgba(100,200,255,0.4);
    text-align: right; margin-top: 10px;
    letter-spacing: 2px;
  }
  #progress-dots {
    display: flex; gap: 6px; margin-top: 12px;
  }
  .dot {
    width: 6px; height: 6px; border-radius: 50%;
    background: rgba(100,200,255,0.2);
    transition: background 0.3s;
  }
  .dot.active { background: #64c8ff; }
</style>
</head>
<body>
<canvas id="pixi-canvas"></canvas>
<div id="ui-overlay">
  <div style="width:100%">
    <div id="dialogue-box">
      <div id="speaker-name">LOADING...</div>
      <div id="dialogue-text"></div>
      <div id="progress-dots"></div>
      <div id="advance-hint">[ CLICK TO CONTINUE ]</div>
    </div>
  </div>
</div>

<script>
(async () => {
  // --- PixiJS Setup ---
  const app = new PIXI.Application({
    view: document.getElementById('pixi-canvas'),
    width: window.innerWidth,
    height: window.innerHeight,
    backgroundColor: 0x0a0a0f,
    antialias: true,
    resolution: window.devicePixelRatio || 1,
    autoDensity: true,
  });

  window.addEventListener('resize', () => {
    app.renderer.resize(window.innerWidth, window.innerHeight);
  });

  // --- Background Particles ---
  const particleContainer = new PIXI.Container();
  app.stage.addChild(particleContainer);

  const particles = [];
  for (let i = 0; i < 120; i++) {
    const g = new PIXI.Graphics();
    const size = Math.random() * 1.5 + 0.3;
    g.beginFill(0x64c8ff, Math.random() * 0.5 + 0.1);
    g.drawCircle(0, 0, size);
    g.endFill();
    g.x = Math.random() * window.innerWidth;
    g.y = Math.random() * window.innerHeight;
    g.vx = (Math.random() - 0.5) * 0.2;
    g.vy = (Math.random() - 0.5) * 0.15;
    particleContainer.addChild(g);
    particles.push(g);
  }

  // --- Characters ---
  // Two silhouette characters on screen
  const charContainer = new PIXI.Container();
  app.stage.addChild(charContainer);

  function drawCharacter(x, y, color, flip = false) {
    const c = new PIXI.Container();
    c.x = x; c.y = y;
    if (flip) c.scale.x = -1;

    const g = new PIXI.Graphics();
    // Body
    g.beginFill(color, 0.85);
    g.drawRoundedRect(-18, -60, 36, 70, 6);
    g.endFill();
    // Head
    g.beginFill(color, 0.85);
    g.drawCircle(0, -78, 20);
    g.endFill();
    c.addChild(g);
    return c;
  }

  const boss = drawCharacter(window.innerWidth * 0.3, window.innerHeight * 0.62, 0x2244aa);
  const dev  = drawCharacter(window.innerWidth * 0.7, window.innerHeight * 0.62, 0x22aa66, true);
  charContainer.addChild(boss);
  charContainer.addChild(dev);

  // Glow ring for active speaker
  const glow = new PIXI.Graphics();
  charContainer.addChild(glow);

  function setActiveSpeaker(isBoss) {
    glow.clear();
    const target = isBoss ? boss : dev;
    const cx = isBoss ? boss.x : dev.x;
    glow.lineStyle(2, isBoss ? 0x4488ff : 0x44ffaa, 0.6);
    glow.drawCircle(cx, window.innerHeight * 0.62 - 78, 28);
  }

  // --- Scanline Overlay ---
  const scanlineGfx = new PIXI.Graphics();
  app.stage.addChild(scanlineGfx);
  function drawScanlines() {
    scanlineGfx.clear();
    for (let y = 0; y < window.innerHeight; y += 4) {
      scanlineGfx.lineStyle(1, 0x000000, 0.08);
      scanlineGfx.moveTo(0, y);
      scanlineGfx.lineTo(window.innerWidth, y);
    }
  }
  drawScanlines();

  // --- Dialogue System ---
  const lines = [
    { speaker: 'BOARD MEMBER',    text: "People are saying our search isn't as good as Algolia. Should we try to improve it?", boss: true },
    { speaker: 'LEAD DEVELOPER',  text: "You can't improve search when all the data is stuffed into a single table.", boss: false },
    { speaker: 'BOARD MEMBER',    text: "Why did you design it this way in the first place?", boss: true },
    { speaker: 'LEAD DEVELOPER',  text: "Did I ever tell you about the first time I photographed a bird?", boss: false },
    { speaker: 'BOARD MEMBER',    text: "Of course, many times.", boss: true },
    { speaker: 'LEAD DEVELOPER',  text: "I don't like these Algolia people.", boss: false },
    { speaker: 'BOARD MEMBER',    text: "I'll try to do something about it, sir.", boss: true },
  ];

  let currentLine = 0;
  let isTyping = false;
  let typeInterval = null;

  const speakerEl = document.getElementById('speaker-name');
  const textEl = document.getElementById('dialogue-text');
  const hintsEl = document.getElementById('advance-hint');
  const dotsEl = document.getElementById('progress-dots');

  // Build dots
  lines.forEach((_, i) => {
    const d = document.createElement('div');
    d.className = 'dot';
    d.id = `dot-${i}`;
    dotsEl.appendChild(d);
  });

  function updateDots(idx) {
    lines.forEach((_, i) => {
      document.getElementById(`dot-${i}`).classList.toggle('active', i === idx);
    });
  }

  function typeText(str, onDone) {
    textEl.textContent = '';
    isTyping = true;
    let i = 0;
    typeInterval = setInterval(() => {
      textEl.textContent += str[i];
      i++;
      if (i >= str.length) {
        clearInterval(typeInterval);
        isTyping = false;
        onDone && onDone();
      }
    }, 28);
  }

  function showLine(idx) {
    if (idx >= lines.length) {
      speakerEl.textContent = '— END —';
      textEl.textContent = 'And so the search remained forever in a single table.';
      hintsEl.style.display = 'none';
      glow.clear();
      return;
    }
    const line = lines[idx];
    speakerEl.textContent = line.speaker;
    setActiveSpeaker(line.boss);
    updateDots(idx);

    // Bob the active character
    const target = line.boss ? boss : dev;
    const still  = line.boss ? dev : boss;
    PIXI.Ticker.shared.addOnce(() => {});
    target.scale.y = 1.04;
    still.scale.y = 1.0;
    still.alpha = 0.5;
    target.alpha = 1.0;

    typeText(line.text);
  }

  function advance() {
    if (isTyping) {
      clearInterval(typeInterval);
      textEl.textContent = lines[currentLine]?.text || '';
      isTyping = false;
      return;
    }
    currentLine++;
    showLine(currentLine);
  }

  document.addEventListener('click', advance);
  document.addEventListener('keydown', e => {
    if (e.key === ' ' || e.key === 'Enter') advance();
  });

  showLine(0);

  // --- Floating data node visuals ---
  const nodeContainer = new PIXI.Container();
  app.stage.addChild(nodeContainer);

  const nodes = [];
  const nodeColors = [0x4488ff, 0xff4466, 0xffaa22, 0x44ffaa, 0xcc44ff];
  for (let i = 0; i < 8; i++) {
    const g = new PIXI.Graphics();
    const color = nodeColors[i % nodeColors.length];
    g.lineStyle(1, color, 0.4);
    g.beginFill(color, 0.07);
    const w = 60 + Math.random() * 40;
    const h = 30 + Math.random() * 20;
    g.drawRoundedRect(-w/2, -h/2, w, h, 4);
    g.endFill();
    g.x = Math.random() * window.innerWidth;
    g.y = Math.random() * (window.innerHeight * 0.5);
    g.baseY = g.y;
    g.phase = Math.random() * Math.PI * 2;
    g.speed = 0.3 + Math.random() * 0.3;
    nodeContainer.addChild(g);
    nodes.push(g);
  }

  // --- Ticker ---
  let elapsed = 0;
  app.ticker.add((delta) => {
    elapsed += delta * 0.016;

    // Particles
    particles.forEach(p => {
      p.x += p.vx;
      p.y += p.vy;
      if (p.x < 0) p.x = window.innerWidth;
      if (p.x > window.innerWidth) p.x = 0;
      if (p.y < 0) p.y = window.innerHeight;
      if (p.y > window.innerHeight) p.y = 0;
    });

    // Nodes float
    nodes.forEach(n => {
      n.y = n.baseY + Math.sin(elapsed * n.speed + n.phase) * 12;
      n.alpha = 0.4 + Math.sin(elapsed * 0.5 + n.phase) * 0.3;
    });

    // Character idle bob
    boss.y = window.innerHeight * 0.62 + Math.sin(elapsed * 0.8) * 3;
    dev.y  = window.innerHeight * 0.62 + Math.sin(elapsed * 0.8 + 1.5) * 3;
    glow.y = boss.y - window.innerHeight * 0.62; // keep glow aligned (approximate)
  });

})();
</script>
</body>
</html>

<?php get_footer(); ?>