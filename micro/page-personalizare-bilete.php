<?php
/**
 * Template Name: Micro - Personalizare Bilete
 * Description: Ticket Design Editor - WYSIWYG drag-and-drop pentru bilete personalizate
 */

get_header();
?>

<style>
  ::selection { background: #8b5cf6; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-canvas { background: linear-gradient(135deg, #8b5cf6 0%, #ec4899 50%, #f97316 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(139, 92, 246, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Editor UI Styles */
  .editor-frame { background: #1e1e2e; border: 1px solid rgba(255,255,255,0.1); }
  .editor-toolbar { background: #181825; border-bottom: 1px solid rgba(255,255,255,0.1); }
  .editor-sidebar { background: #181825; border-left: 1px solid rgba(255,255,255,0.1); }

  /* Canvas styles */
  .canvas-bg {
    background-image:
      linear-gradient(45deg, #252536 25%, transparent 25%),
      linear-gradient(-45deg, #252536 25%, transparent 25%),
      linear-gradient(45deg, transparent 75%, #252536 75%),
      linear-gradient(-45deg, transparent 75%, #252536 75%);
    background-size: 20px 20px;
    background-position: 0 0, 0 10px, 10px -10px, -10px 0px;
    background-color: #1a1a27;
  }

  /* Ticket preview */
  .ticket-preview {
    background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(0,0,0,0.1);
  }

  /* Selection box */
  .selection-box {
    border: 2px solid #8b5cf6;
    animation: selection 1.5s ease-in-out infinite;
  }
  .selection-handle {
    width: 10px;
    height: 10px;
    background: #8b5cf6;
    border: 2px solid white;
    border-radius: 2px;
    position: absolute;
  }
  .handle-tl { top: -5px; left: -5px; cursor: nw-resize; }
  .handle-tr { top: -5px; right: -5px; cursor: ne-resize; }
  .handle-bl { bottom: -5px; left: -5px; cursor: sw-resize; }
  .handle-br { bottom: -5px; right: -5px; cursor: se-resize; animation: resizeHandle 2s ease-in-out infinite; }

  /* Layer item */
  .layer-item { transition: all 0.2s; }
  .layer-item:hover { background: rgba(139, 92, 246, 0.1); }
  .layer-item.active { background: rgba(139, 92, 246, 0.2); border-left: 2px solid #8b5cf6; }

  /* Variable tag */
  .var-tag {
    background: linear-gradient(135deg, rgba(139, 92, 246, 0.2), rgba(236, 72, 153, 0.2));
    border: 1px solid rgba(139, 92, 246, 0.3);
    font-family: 'JetBrains Mono', monospace;
  }

  /* Rulers */
  .ruler-h, .ruler-v { background: #181825; }
  .ruler-mark { background: rgba(255,255,255,0.3); }

  /* Print guides */
  .bleed-zone { border: 1px dashed rgba(239, 68, 68, 0.5); }
  .safe-zone { border: 1px dashed rgba(34, 197, 94, 0.5); }

  /* Tool button */
  .tool-btn { transition: all 0.2s; }
  .tool-btn:hover { background: rgba(139, 92, 246, 0.2); }
  .tool-btn.active { background: rgba(139, 92, 246, 0.3); color: #8b5cf6; }

  /* Preset card */
  .preset-card { transition: all 0.3s; }
  .preset-card:hover { transform: scale(1.05); border-color: rgba(139, 92, 246, 0.5); }

  /* Custom keyframes */
  @keyframes selection {
    0%, 100% { border-color: rgba(139, 92, 246, 1); }
    50% { border-color: rgba(139, 92, 246, 0.5); }
  }
  @keyframes resizeHandle {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
  }
  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #8b5cf6, #ec4899, #f97316);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-canvas-purple/20 rounded-full -top-60 -left-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-canvas-pink/15 rounded-full bottom-0 -right-40 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[400px] h-[400px] bg-canvas-orange/10 rounded-full top-1/2 left-1/2 blur-[150px] pointer-events-none"></div>

    <!-- Floating design elements -->
    <div class="absolute top-32 left-16 opacity-20 animate-float">
      <svg class="w-8 h-8 text-canvas-purple" fill="currentColor" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/></svg>
    </div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">
      <svg class="w-6 h-6 text-canvas-pink" fill="currentColor" viewBox="0 0 24 24"><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM5 15h14v3H5z"/></svg>
    </div>
    <div class="absolute top-1/2 left-10 opacity-10 animate-float" style="animation-delay: 2s;">
      <span class="font-mono text-2xl text-canvas-orange">{ }</span>
    </div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-canvas-purple/10 border border-canvas-purple/20 mb-6">
            <svg class="w-5 h-5 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
            <span class="text-canvas-purple text-sm font-medium">Editor WYSIWYG · Drag & Drop</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Designează<br><span class="text-gradient-canvas">bilete unice</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Editor vizual <strong class="text-white">drag-and-drop</strong> pentru bilete profesionale. Logo, fonturi, culori, coduri QR - tot ce ai nevoie pentru bilete care reflectă <strong class="text-white">brandul tău</strong>.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-canvas-purple to-canvas-pink text-white hover:scale-105 hover:shadow-glow-purple transition-all duration-300">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
              Deschide Editorul
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#functionalitati" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi funcționalități
            </a>
          </div>

          <!-- Features mini -->
          <div class="flex flex-wrap gap-4">
            <div class="flex items-center gap-2 text-white/50 text-sm">
              <svg class="w-4 h-4 text-canvas-purple" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Măsurători mm precise</span>
            </div>
            <div class="flex items-center gap-2 text-white/50 text-sm">
              <svg class="w-4 h-4 text-canvas-pink" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Export PDF/PNG</span>
            </div>
            <div class="flex items-center gap-2 text-white/50 text-sm">
              <svg class="w-4 h-4 text-canvas-orange" fill="currentColor" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
              <span>Variabile dinamice</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Editor Mockup -->
        <div class="reveal reveal-delay-1">
          <div class="relative">
            <!-- Editor Window -->
            <div class="editor-frame rounded-2xl overflow-hidden shadow-2xl">
              <!-- Title Bar -->
              <div class="flex items-center justify-between px-4 py-3 bg-dark-800 border-b border-white/10">
                <div class="flex items-center gap-2">
                  <div class="w-3 h-3 rounded-full bg-red-500"></div>
                  <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                  <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="text-white/40 text-xs font-mono">summer-fest-vip.tpl</div>
                <div class="flex items-center gap-2">
                  <span class="px-2 py-0.5 rounded bg-brand-green/20 text-brand-green text-xs">Salvat</span>
                </div>
              </div>

              <!-- Toolbar -->
              <div class="editor-toolbar flex items-center gap-1 px-3 py-2">
                <button class="tool-btn p-2 rounded"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg></button>
                <button class="tool-btn active p-2 rounded"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg></button>
                <button class="tool-btn p-2 rounded"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></button>
                <button class="tool-btn p-2 rounded"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg></button>
                <div class="w-px h-6 bg-white/10 mx-2"></div>
                <button class="tool-btn p-2 rounded"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6z"/></svg></button>
                <div class="ml-auto flex items-center gap-2">
                  <span class="text-white/40 text-xs">100%</span>
                  <button class="tool-btn p-1 rounded"><svg class="w-4 h-4 text-white/60" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg></button>
                </div>
              </div>

              <!-- Main Editor Area -->
              <div class="flex" style="height: 320px;">
                <!-- Canvas Area -->
                <div class="flex-1 canvas-bg p-6 flex items-center justify-center relative overflow-hidden">
                  <!-- Rulers -->
                  <div class="absolute top-0 left-8 right-0 h-6 ruler-h flex items-end">
                    <div class="flex gap-10 px-2">
                      <span class="text-[8px] text-white/30">0</span>
                      <span class="text-[8px] text-white/30">20</span>
                      <span class="text-[8px] text-white/30">40</span>
                      <span class="text-[8px] text-white/30">60</span>
                      <span class="text-[8px] text-white/30">80mm</span>
                    </div>
                  </div>
                  <div class="absolute left-0 top-8 bottom-0 w-6 ruler-v flex flex-col items-end pt-2">
                    <span class="text-[8px] text-white/30 -rotate-90 origin-right">0</span>
                  </div>

                  <!-- Ticket Canvas -->
                  <div class="ticket-preview rounded-lg relative" style="width: 280px; height: 100px;">
                    <!-- Bleed guide -->
                    <div class="absolute -inset-1 bleed-zone rounded-lg pointer-events-none"></div>
                    <!-- Safe guide -->
                    <div class="absolute inset-2 safe-zone rounded pointer-events-none"></div>

                    <!-- Content -->
                    <div class="absolute inset-0 p-3">
                      <!-- Event name with selection -->
                      <div class="relative inline-block selection-box px-1" style="top: 4px; left: 4px;">
                        <span class="text-gray-900 font-bold text-sm">SUMMER FEST 2025</span>
                        <div class="selection-handle handle-tl"></div>
                        <div class="selection-handle handle-tr"></div>
                        <div class="selection-handle handle-bl"></div>
                        <div class="selection-handle handle-br"></div>
                      </div>

                      <!-- Date -->
                      <div class="absolute text-gray-600 text-xs" style="top: 32px; left: 8px;">15 Aug 2025 • 18:00</div>

                      <!-- Venue -->
                      <div class="absolute text-gray-500 text-xs" style="top: 48px; left: 8px;">Romexpo, București</div>

                      <!-- Ticket type badge -->
                      <div class="absolute px-2 py-0.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold rounded" style="bottom: 8px; left: 8px;">VIP PASS</div>

                      <!-- QR Code -->
                      <div class="absolute bg-white p-1 rounded" style="top: 8px; right: 8px; width: 50px; height: 50px;">
                        <div class="w-full h-full bg-gray-900 rounded-sm flex items-center justify-center">
                          <svg class="w-8 h-8 text-white" viewBox="0 0 24 24" fill="currentColor"><path d="M3 3h6v6H3V3zm2 2v2h2V5H5zm8-2h6v6h-6V3zm2 2v2h2V5h-2zM3 13h6v6H3v-6zm2 2v2h2v-2H5zm13-2h1v1h-1v-1zm-3 0h1v1h-1v-1zm6 0h1v1h-1v-1zm-3 3h1v1h-1v-1zm3 0h1v1h-1v-1zm-6 3h1v1h-1v-1zm3 0h1v1h-1v-1zm3 0h1v1h-1v-1z"/></svg>
                        </div>
                      </div>

                      <!-- Seat info -->
                      <div class="absolute text-gray-600 text-[10px] font-mono" style="bottom: 8px; right: 8px;">SEC A • ROW 3 • SEAT 15</div>
                    </div>
                  </div>
                </div>

                <!-- Sidebar - Layers -->
                <div class="w-48 editor-sidebar p-3">
                  <div class="text-white/40 text-xs uppercase tracking-wider mb-3">Layers</div>
                  <div class="space-y-1">
                    <div class="layer-item active rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-white text-xs truncate">Event Name</span>
                      <svg class="w-3 h-3 text-white/30 ml-auto" fill="currentColor" viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
                      <span class="text-white/70 text-xs truncate">QR Code</span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-white/70 text-xs truncate">Date & Time</span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-canvas-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
                      <span class="text-white/70 text-xs truncate">VIP Badge</span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-white/70 text-xs truncate">Venue</span>
                    </div>
                    <div class="layer-item rounded px-2 py-1.5 flex items-center gap-2 cursor-pointer">
                      <svg class="w-3 h-3 text-white/40" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16"/></svg>
                      <span class="text-white/70 text-xs truncate">Seat Info</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Variable Badge -->
            <div class="absolute -top-4 -left-4 bg-dark-800 rounded-xl px-3 py-2 border border-canvas-purple/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <span class="text-canvas-purple font-mono text-sm">{{</span>
                <span class="text-white text-sm">event.name</span>
                <span class="text-canvas-purple font-mono text-sm">}}</span>
              </div>
            </div>

            <!-- Floating Dimension Badge -->
            <div class="absolute -bottom-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-canvas-pink/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <span class="text-2xl">📐</span>
                <div>
                  <div class="text-white text-sm font-medium">200 × 80 mm</div>
                  <div class="text-white/40 text-xs">300 DPI</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== LAYER TYPES ==================== -->
  <section class="py-24 relative overflow-hidden" id="functionalitati">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-canvas-purple text-sm font-medium uppercase tracking-widest">Tipuri de Layer-uri</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Toate uneltele de care<br><span class="text-gradient-canvas">ai nevoie</span></h2>
        <p class="text-lg text-white/60">Sistem de layer-uri ca în software-ul profesional de design.</p>
      </div>

      <!-- Layer Types Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Text Layer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-purple/30 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-canvas-purple/20 flex items-center justify-center">
              <svg class="w-7 h-7 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Text</h3>
              <div class="text-canvas-purple text-xs font-mono">layer.type: "text"</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Fonturi personalizate, dimensiuni, culori și aliniere. Suport pentru text static sau variabile dinamice.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Helvetica</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Arial</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Georgia</span>
          </div>
        </div>

        <!-- Image Layer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-pink/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-canvas-pink/20 flex items-center justify-center">
              <svg class="w-7 h-7 text-canvas-pink" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Imagini</h3>
              <div class="text-canvas-pink text-xs font-mono">layer.type: "image"</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Încarcă logo-uri, fotografii și grafice. Controlează fit, poziție și opacitate.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">PNG</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">JPG</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">SVG</span>
          </div>
        </div>

        <!-- QR Code Layer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-orange/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-canvas-orange/20 flex items-center justify-center">
              <svg class="w-7 h-7 text-canvas-orange" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Cod QR</h3>
              <div class="text-canvas-orange text-xs font-mono">layer.type: "qrcode"</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Coduri QR dinamice cu nivel configurabil de corecție eroare (L, M, Q, H).</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-canvas-orange/10 text-canvas-orange text-xs">Dinamic</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Error Correction</span>
          </div>
        </div>

        <!-- Barcode Layer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-blue/30 transition-all duration-500 reveal">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-canvas-blue/20 flex items-center justify-center">
              <svg class="w-7 h-7 text-canvas-blue" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m-4-4v4m8-8v8m-12-4v4m16-12v12M4 8h16"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Cod de Bare</h3>
              <div class="text-canvas-blue text-xs font-mono">layer.type: "barcode"</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Multiple formate suportate pentru compatibilitate maximă cu scanerele.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Code128</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">EAN-13</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">PDF417</span>
          </div>
        </div>

        <!-- Shape Layer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-teal/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-canvas-teal/20 flex items-center justify-center">
              <svg class="w-7 h-7 text-canvas-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Forme</h3>
              <div class="text-canvas-teal text-xs font-mono">layer.type: "shape"</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Dreptunghiuri, cercuri și linii cu opțiuni de fill, stroke și rotație.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Rectangle</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Circle</span>
            <span class="px-2 py-1 rounded bg-white/5 text-white/60 text-xs">Line</span>
          </div>
        </div>

        <!-- Background Layer -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="flex items-center gap-4 mb-4">
            <div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center">
              <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/></svg>
            </div>
            <div>
              <h3 class="text-xl font-semibold text-white">Background</h3>
              <div class="text-brand-violet text-xs font-mono">template.background</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Culoare solidă sau imagine de fundal pentru întregul bilet.</p>
          <div class="flex flex-wrap gap-2">
            <span class="w-6 h-6 rounded bg-white border border-white/20"></span>
            <span class="w-6 h-6 rounded bg-gradient-to-r from-purple-500 to-pink-500"></span>
            <span class="w-6 h-6 rounded bg-gradient-to-r from-amber-500 to-orange-500"></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== VARIABLES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-canvas-orange text-sm font-medium uppercase tracking-widest">Variabile Dinamice</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Fiecare bilet,<br><span class="text-gradient-canvas">unic</span></h2>
          <p class="text-lg text-white/60 mb-8">Inserează placeholder-uri care se populează automat cu datele reale când biletele sunt generate. Nu mai e nevoie de editare manuală.</p>

          <div class="space-y-3">
            <!-- Event Variables -->
            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="flex items-center gap-2 mb-2">
                <span class="w-6 h-6 rounded bg-canvas-purple/20 flex items-center justify-center text-canvas-purple text-xs">📅</span>
                <span class="text-white font-medium text-sm">Eveniment</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-purple">{{event.name}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-purple">{{event.date}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-purple">{{event.time}}</code>
              </div>
            </div>

            <!-- Venue Variables -->
            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="flex items-center gap-2 mb-2">
                <span class="w-6 h-6 rounded bg-canvas-pink/20 flex items-center justify-center text-canvas-pink text-xs">📍</span>
                <span class="text-white font-medium text-sm">Locație</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-pink">{{venue.name}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-pink">{{venue.address}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-pink">{{venue.city}}</code>
              </div>
            </div>

            <!-- Ticket Variables -->
            <div class="p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="flex items-center gap-2 mb-2">
                <span class="w-6 h-6 rounded bg-canvas-orange/20 flex items-center justify-center text-canvas-orange text-xs">🎫</span>
                <span class="text-white font-medium text-sm">Bilet</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-orange">{{ticket.section}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-orange">{{ticket.row}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-orange">{{ticket.seat}}</code>
              </div>
            </div>

            <!-- Codes Variables -->
            <div class="p-4 rounded-xl bg-dark-800/50 border border-canvas-teal/20">
              <div class="flex items-center gap-2 mb-2">
                <span class="w-6 h-6 rounded bg-canvas-teal/20 flex items-center justify-center text-canvas-teal text-xs">📱</span>
                <span class="text-white font-medium text-sm">Coduri</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-teal">{{codes.qr}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-teal">{{codes.barcode}}</code>
                <code class="var-tag px-2 py-1 rounded text-xs text-canvas-teal">{{codes.ticket_ref}}</code>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Before/After -->
        <div class="reveal reveal-delay-1">
          <div class="space-y-6">
            <!-- Template View -->
            <div class="relative">
              <div class="absolute -top-3 left-4 px-2 py-0.5 bg-canvas-purple rounded text-white text-xs font-medium">Template</div>
              <div class="bg-dark-800 rounded-xl p-4 border border-canvas-purple/30">
                <div class="bg-white rounded-lg p-4" style="aspect-ratio: 2.5/1;">
                  <div class="space-y-2">
                    <div class="flex items-center gap-2">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-purple">{{event.name}}</code>
                    </div>
                    <div class="flex items-center gap-2">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-purple">{{event.date}}</code>
                      <span class="text-gray-400 text-xs">•</span>
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-purple">{{event.time}}</code>
                    </div>
                    <div class="flex items-center gap-2">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-pink">{{venue.name}}</code>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-orange">{{ticket.type}}</code>
                      <code class="var-tag px-1.5 py-0.5 rounded text-[10px] text-canvas-teal">{{codes.qr}}</code>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Arrow -->
            <div class="flex justify-center">
              <div class="w-10 h-10 rounded-full bg-canvas-purple/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/></svg>
              </div>
            </div>

            <!-- Rendered View -->
            <div class="relative">
              <div class="absolute -top-3 left-4 px-2 py-0.5 bg-brand-green rounded text-white text-xs font-medium">Generat</div>
              <div class="bg-dark-800 rounded-xl p-4 border border-brand-green/30">
                <div class="ticket-preview rounded-lg p-4" style="aspect-ratio: 2.5/1;">
                  <div class="space-y-2">
                    <div class="text-gray-900 font-bold text-lg">SUMMER FEST 2025</div>
                    <div class="text-gray-600 text-sm">15 Aug 2025 • 18:00</div>
                    <div class="text-gray-500 text-sm">Romexpo, București</div>
                    <div class="flex items-center justify-between mt-4">
                      <span class="px-2 py-0.5 bg-gradient-to-r from-purple-600 to-pink-600 text-white text-xs font-bold rounded">VIP PASS</span>
                      <div class="w-10 h-10 bg-gray-900 rounded flex items-center justify-center">
                        <span class="text-white text-lg">◱</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PRESET SIZES ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-canvas-pink text-sm font-medium uppercase tracking-widest">Dimensiuni Prestabilite</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Formate pentru<br><span class="text-gradient animate-shimmer">orice nevoie</span></h2>
        <p class="text-lg text-white/60">Alege din preset-uri sau creează dimensiuni personalizate.</p>
      </div>

      <!-- Presets Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 reveal">
        <!-- Standard Ticket -->
        <div class="preset-card bg-dark-800 rounded-2xl p-6 border border-white/10 cursor-pointer">
          <div class="flex items-center justify-center mb-4 h-24">
            <div class="bg-white/10 rounded" style="width: 160px; height: 48px;"></div>
          </div>
          <h3 class="text-white font-semibold text-center mb-1">Bilet Standard</h3>
          <p class="text-canvas-purple text-center text-sm font-mono">200 × 80 mm</p>
          <p class="text-white/40 text-center text-xs mt-2">Cel mai popular format</p>
        </div>

        <!-- Ticket Landscape -->
        <div class="preset-card bg-dark-800 rounded-2xl p-6 border border-white/10 cursor-pointer">
          <div class="flex items-center justify-center mb-4 h-24">
            <div class="bg-white/10 rounded" style="width: 48px; height: 120px;"></div>
          </div>
          <h3 class="text-white font-semibold text-center mb-1">Bilet Landscape</h3>
          <p class="text-canvas-pink text-center text-sm font-mono">80 × 200 mm</p>
          <p class="text-white/40 text-center text-xs mt-2">Format vertical</p>
        </div>

        <!-- A6 Portrait -->
        <div class="preset-card bg-dark-800 rounded-2xl p-6 border border-white/10 cursor-pointer">
          <div class="flex items-center justify-center mb-4 h-24">
            <div class="bg-white/10 rounded" style="width: 63px; height: 89px;"></div>
          </div>
          <h3 class="text-white font-semibold text-center mb-1">A6 Portrait</h3>
          <p class="text-canvas-orange text-center text-sm font-mono">105 × 148 mm</p>
          <p class="text-white/40 text-center text-xs mt-2">Format carte poștală</p>
        </div>

        <!-- A6 Landscape -->
        <div class="preset-card bg-dark-800 rounded-2xl p-6 border border-white/10 cursor-pointer">
          <div class="flex items-center justify-center mb-4 h-24">
            <div class="bg-white/10 rounded" style="width: 89px; height: 63px;"></div>
          </div>
          <h3 class="text-white font-semibold text-center mb-1">A6 Landscape</h3>
          <p class="text-canvas-teal text-center text-sm font-mono">148 × 105 mm</p>
          <p class="text-white/40 text-center text-xs mt-2">Format orizontal</p>
        </div>

        <!-- A4 Portrait -->
        <div class="preset-card bg-dark-800 rounded-2xl p-6 border border-white/10 cursor-pointer">
          <div class="flex items-center justify-center mb-4 h-24">
            <div class="bg-white/10 rounded" style="width: 63px; height: 89px;"></div>
          </div>
          <h3 class="text-white font-semibold text-center mb-1">A4 Portrait</h3>
          <p class="text-canvas-blue text-center text-sm font-mono">210 × 297 mm</p>
          <p class="text-white/40 text-center text-xs mt-2">Format full-page</p>
        </div>

        <!-- Custom -->
        <div class="preset-card bg-dark-800 rounded-2xl p-6 border border-dashed border-white/20 cursor-pointer hover:border-canvas-purple/50">
          <div class="flex items-center justify-center mb-4 h-24">
            <div class="w-16 h-16 rounded-xl border-2 border-dashed border-white/20 flex items-center justify-center">
              <svg class="w-8 h-8 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
            </div>
          </div>
          <h3 class="text-white font-semibold text-center mb-1">Personalizat</h3>
          <p class="text-white/40 text-center text-sm">Creează dimensiuni custom</p>
          <p class="text-white/30 text-center text-xs mt-2">Orice dimensiune în mm</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Designuri pentru<br><span class="text-gradient animate-shimmer">orice ocazie</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Branded Tickets -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-purple/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🎨</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Bilete Brandate</h3>
          <p class="text-white/50 text-sm">Culorile, fonturile și imaginile tale. Bilete care se simt ca parte din experiență.</p>
        </div>

        <!-- VIP Tickets -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-pink/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center mb-4">
            <span class="text-2xl">👑</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Bilete VIP Premium</h3>
          <p class="text-white/50 text-sm">Designuri distinctive cu accente aurii și layout-uri unice pentru experiențe premium.</p>
        </div>

        <!-- Conference Badges -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-orange/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-500/20 to-cyan-500/20 flex items-center justify-center mb-4">
            <span class="text-2xl">🏷️</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Ecusoane Conferință</h3>
          <p class="text-white/50 text-sm">Informații participant, logo companie și indicatori acces într-un format printabil.</p>
        </div>

        <!-- Multi-Day Passes -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-teal/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📅</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Abonamente Multi-Zi</h3>
          <p class="text-white/50 text-sm">Layout-uri cu spațiu pentru mai multe date sau stil punch-card pentru acces multi-sesiune.</p>
        </div>

        <!-- Promo Tickets -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-500/20 to-purple-500/20 flex items-center justify-center mb-4">
            <span class="text-2xl">📢</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Bilete Promoționale</h3>
          <p class="text-white/50 text-sm">Logo-uri sponsori, mesaje promoționale și coduri QR pentru oferte speciale.</p>
        </div>

        <!-- Collectible Tickets -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-canvas-blue/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center mb-4">
            <span class="text-2xl">⭐</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Bilete Colecționabile</h3>
          <p class="text-white/50 text-sm">Design memorabil pentru concerte sau evenimente speciale - bilete care merită păstrate.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-canvas-purple/10 to-canvas-pink/10 rounded-3xl p-8 md:p-12 border border-canvas-purple/20">
          <!-- Stars -->
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <!-- Quote -->
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "În sfârșit pot să fac bilete care <span class="text-gradient-canvas font-semibold">arată exact cum vreau</span>. Nu mai trebuie să rog pe nimeni să-mi facă design-ul. Drag-and-drop, salvez template-ul și gata. Clienții chiar le păstrează ca amintire!"
          </blockquote>
          <!-- Author -->
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-canvas-purple to-canvas-pink"></div>
            <div>
              <div class="font-semibold text-white">Ioana M.</div>
              <div class="text-white/50">Event Manager, Club Control</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-canvas-purple/20 via-transparent to-canvas-pink/20"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(139,92,246,0.3) 0%, rgba(236,72,153,0.2) 100%);"></div>

    <!-- Floating elements -->
    <div class="absolute top-20 left-20 opacity-10 animate-float">
      <svg class="w-16 h-16 text-canvas-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
    </div>
    <div class="absolute bottom-32 right-20 opacity-10 animate-float" style="animation-delay: 1s;">
      <svg class="w-12 h-12 text-canvas-pink" fill="currentColor" viewBox="0 0 24 24"><path d="M21 3H3c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H3V5h18v14zM5 15h14v3H5z"/></svg>
    </div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Start<br><span class="text-gradient-canvas">designing</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Editor vizual intuitiv. Template-uri salvate. Variabile dinamice. Bilete profesionale în minute.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-canvas-purple to-canvas-pink text-white hover:scale-105 hover:shadow-glow-purple transition-all duration-300">
          <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
          Deschide Editorul
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Achiziție unică. Creativitate nelimitată. Export PDF/PNG.</p>
    </div>
  </section>
</div>

<!-- JAVASCRIPT -->
<script>
  window.addEventListener('scroll', () => {
    const scrollProgress = document.getElementById('scroll-progress');
    const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
    const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    scrollProgress.style.width = (scrollTop / scrollHeight) * 100 + '%';
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`); card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`); });
  });
</script>

<?php get_footer(); ?>
