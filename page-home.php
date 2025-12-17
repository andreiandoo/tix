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

<style>
  /* ============================================
      BACKGROUND
      ============================================ */
  
  .hero-section {
      background: #09090b;
      position: relative;
  }
  
  .hero-section::before {
      content: '';
      position: absolute;
      inset: 0;
      background: 
          radial-gradient(ellipse 50% 80% at 20% 0%, rgba(139, 92, 246, 0.08), transparent),
          radial-gradient(ellipse 40% 60% at 80% 100%, rgba(6, 182, 212, 0.06), transparent);
      pointer-events: none;
  }
  
  .grid-pattern {
      background-image: 
          linear-gradient(rgba(255, 255, 255, 0.02) 1px, transparent 1px),
          linear-gradient(90deg, rgba(255, 255, 255, 0.02) 1px, transparent 1px);
      background-size: 48px 48px;
      mask-image: radial-gradient(ellipse 80% 80% at 50% 0%, black, transparent);
  }
  
  /* ============================================
      PRICE HIGHLIGHT
      ============================================ */
  
  @keyframes price-glow {
      0%, 100% { 
          box-shadow: 0 0 30px rgba(16, 185, 129, 0.3), 0 0 60px rgba(16, 185, 129, 0.1);
      }
      50% { 
          box-shadow: 0 0 40px rgba(16, 185, 129, 0.4), 0 0 80px rgba(16, 185, 129, 0.2);
      }
  }
  
  .price-glow {
      animation: price-glow 3s ease-in-out infinite;
  }
  
  /* ============================================
      GRADIENT TEXT
      ============================================ */
  
  @keyframes gradient-flow {
      0%, 100% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
  }
  
  .gradient-text {
      background: linear-gradient(135deg, #8B5CF6, #A78BFA, #06B6D4, #8B5CF6);
      background-size: 300% 300%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: gradient-flow 8s ease infinite;
  }
  
  .gradient-text-emerald {
      background: linear-gradient(135deg, #10B981, #34D399, #06B6D4, #10B981);
      background-size: 300% 300%;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      animation: gradient-flow 6s ease infinite;
  }
  
  /* ============================================
      COMPARISON TABLE
      ============================================ */
  
  .comparison-row {
      transition: all 0.3s ease;
  }
  
  .comparison-row:hover {
      background: rgba(255, 255, 255, 0.02);
  }
  
  /* ============================================
      FEATURE CARDS
      ============================================ */
  
  .feature-card {
      background: rgba(255, 255, 255, 0.02);
      border: 1px solid rgba(255, 255, 255, 0.05);
      transition: all 0.3s ease;
  }
  
  .feature-card:hover {
      background: rgba(255, 255, 255, 0.04);
      border-color: rgba(255, 255, 255, 0.1);
      transform: translateY(-2px);
  }
  
  /* ============================================
      MICROSERVICE VISUALIZATION - SOLAR SYSTEM
      ============================================ */
  
  @keyframes pulse-dot {
      0%, 100% { opacity: 0.6; transform: scale(1); }
      50% { opacity: 1; transform: scale(1.15); }
  }
  
  .pulse-dot {
      animation: pulse-dot 3s ease-in-out infinite;
  }
  
  /* Orbital rotations - different speeds for each ring */
  @keyframes orbit-inner {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
  }
  
  @keyframes orbit-middle {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
  }
  
  @keyframes orbit-outer {
      from { transform: rotate(0deg); }
      to { transform: rotate(360deg); }
  }
  
  /* Counter-rotation to keep dots upright (optional aesthetic) */
  @keyframes counter-rotate-inner {
      from { transform: rotate(0deg); }
      to { transform: rotate(-360deg); }
  }
  
  @keyframes counter-rotate-middle {
      from { transform: rotate(0deg); }
      to { transform: rotate(-360deg); }
  }
  
  @keyframes counter-rotate-outer {
      from { transform: rotate(0deg); }
      to { transform: rotate(-360deg); }
  }
  
  .orbit-inner {
      transform-origin: 200px 200px;
      animation: orbit-inner 20s linear infinite;
  }
  
  .orbit-middle {
      transform-origin: 200px 200px;
      animation: orbit-middle 35s linear infinite;
  }
  
  .orbit-outer {
      transform-origin: 200px 200px;
      animation: orbit-outer 55s linear infinite;
  }
  
  /* Reverse direction for some variety */
  .orbit-inner-reverse {
      transform-origin: 200px 200px;
      animation: orbit-inner 25s linear infinite reverse;
  }
  
  .orbit-middle-reverse {
      transform-origin: 200px 200px;
      animation: orbit-middle 40s linear infinite reverse;
  }
  
  /* Orbit path glow effect */
  @keyframes orbit-glow {
      0%, 100% { stroke-opacity: 0.08; }
      50% { stroke-opacity: 0.15; }
  }
  
  .orbit-path {
      animation: orbit-glow 4s ease-in-out infinite;
  }
  
  .orbit-path-2 {
      animation: orbit-glow 5s ease-in-out infinite;
      animation-delay: 1s;
  }
  
  .orbit-path-3 {
      animation: orbit-glow 6s ease-in-out infinite;
      animation-delay: 2s;
  }
  
  /* ============================================
      ENTRANCE ANIMATIONS
      ============================================ */
  
  @keyframes fade-up {
      from { opacity: 0; transform: translateY(24px); }
      to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes fade-in {
      from { opacity: 0; }
      to { opacity: 1; }
  }
  
  @keyframes slide-up {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes scale-in {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
  }
  
  .anim-fade-up {
      opacity: 0;
      animation: fade-up 0.7s ease-out forwards;
  }
  
  .anim-slide-up {
      opacity: 0;
      animation: slide-up 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .anim-fade-in {
      opacity: 0;
      animation: fade-in 0.6s ease-out forwards;
  }
  
  .anim-scale-in {
      opacity: 0;
      animation: scale-in 0.6s ease-out forwards;
  }
  
  .delay-100 { animation-delay: 0.1s; }
  .delay-200 { animation-delay: 0.2s; }
  .delay-300 { animation-delay: 0.3s; }
  .delay-400 { animation-delay: 0.4s; }
  .delay-500 { animation-delay: 0.5s; }
  .delay-600 { animation-delay: 0.6s; }
  .delay-700 { animation-delay: 0.7s; }
  .delay-800 { animation-delay: 0.8s; }
  .delay-900 { animation-delay: 0.9s; }
  .delay-1000 { animation-delay: 1s; }
  
  /* ============================================
      BUTTONS
      ============================================ */
  
  .btn-primary {
      background: linear-gradient(135deg, #8B5CF6, #7C3AED);
      box-shadow: 0 4px 14px rgba(139, 92, 246, 0.4);
      transition: all 0.3s ease;
  }
  
  .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 24px rgba(139, 92, 246, 0.5);
  }
  
  .btn-secondary {
      background: rgba(255, 255, 255, 0.04);
      border: 1px solid rgba(255, 255, 255, 0.1);
      transition: all 0.3s ease;
  }
  
  .btn-secondary:hover {
      background: rgba(255, 255, 255, 0.08);
      border-color: rgba(255, 255, 255, 0.2);
  }
  
  /* ============================================
      RESPONSIVE
      ============================================ */
  
  @media (max-width: 1024px) {
      .hide-tablet { display: none !important; }
  }
  
  @media (max-width: 640px) {
      .hide-mobile { display: none !important; }
  }
</style>

<!-- ==================== HERO SECTION ==================== -->
<section class="relative overflow-hidden hero-section" x-data="heroData()">
    
    <!-- Grid Pattern -->
    <div class="absolute inset-0 grid-pattern"></div>
    
    <!-- Main Content -->
    <div class="relative z-10">
        
        <!-- Nav Spacer -->
        <div class="h-20"></div>
        
        <!-- Hero Content -->
        <div class="px-4 pt-8 pb-16 mx-auto max-w-7xl sm:px-6 lg:px-8 sm:pt-12 lg:pt-16 sm:pb-20">
            
            <!-- Launch Badge -->
            <div class="flex justify-center mb-8 delay-100 anim-fade-in sm:mb-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 border rounded-full bg-violet-500/10 border-violet-500/20">
                    <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                    <span class="text-sm font-medium text-violet-300">Acum disponibil în România</span>
                </div>
            </div>
            
            <!-- Main Headline -->
            <div class="max-w-4xl mx-auto mb-10 text-center sm:mb-12">
                
                <!-- Price Callout -->
                <div class="inline-flex items-center gap-3 px-6 py-3 mb-8 delay-200 border anim-scale-in rounded-2xl bg-emerald-500/10 border-emerald-500/20 price-glow">
                    <span class="text-4xl font-black sm:text-5xl text-emerald-400">1%</span>
                    <div class="text-left">
                        <p class="text-sm font-semibold text-white sm:text-base">comision per bilet</p>
                        <p class="text-xs sm:text-sm text-emerald-400/80">Cel mai mic din lume</p>
                    </div>
                </div>
                
                <h1 class="anim-slide-up delay-300 text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-black text-white leading-[1.1] mb-6">
                    Tot ce ai nevoie.<br>
                    <span class="gradient-text">La prețul corect.</span>
                </h1>
                
                <p class="max-w-2xl mx-auto mb-8 text-lg anim-fade-up delay-400 sm:text-xl text-white/60">
                    38 de microservicii. Peste 180 de funcționalități. Peste 5,000 de integrări. 
                    Și tot plătești doar <span class="font-semibold text-emerald-400">1% comision</span>.
                </p>
                
                <!-- CTA Row -->
                <div class="flex flex-col items-center justify-center gap-4 mb-6 delay-500 anim-fade-up sm:flex-row">
                    <a href="/signup" class="w-full px-8 py-4 text-lg font-semibold text-white btn-primary group rounded-xl sm:w-auto">
                        <span class="flex items-center justify-center gap-2">
                            Creează cont gratuit
                            <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </a>
                    <a href="/demo" class="w-full px-8 py-4 text-lg font-semibold text-white btn-secondary rounded-xl sm:w-auto">
                        <span class="flex items-center justify-center gap-2">
                            <svg class="w-5 h-5 text-violet-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8 5v14l11-7z"/>
                            </svg>
                            Vezi cum funcționează
                        </span>
                    </a>
                </div>
                
                <!-- Trust line -->
                <div class="flex flex-wrap items-center justify-center gap-4 text-sm anim-fade-in delay-600 sm:gap-6 text-white/40">
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Fără taxe ascunse
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Setup în 5 minute
                    </span>
                    <span class="flex items-center gap-1.5">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
                        </svg>
                        Fără contract
                    </span>
                </div>
            </div>
            
            <!-- Platform Stats - What You Get -->
            <div class="grid max-w-4xl grid-cols-2 gap-4 mx-auto mb-16 anim-fade-up delay-600 lg:grid-cols-4 sm:gap-6 sm:mb-20">
                <div class="p-5 text-center border sm:p-6 rounded-2xl bg-violet-500/5 border-violet-500/10">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-3 rounded-xl bg-violet-500/10">
                        <svg class="w-6 h-6 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-black text-white sm:text-4xl">38</span>
                    <p class="mt-1 text-sm text-white/50">Microservicii</p>
                </div>
                <div class="p-5 text-center border sm:p-6 rounded-2xl bg-cyan-500/5 border-cyan-500/10">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-3 rounded-xl bg-cyan-500/10">
                        <svg class="w-6 h-6 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-black text-white sm:text-4xl">180<span class="text-xl">+</span></span>
                    <p class="mt-1 text-sm text-white/50">Funcționalități</p>
                </div>
                <div class="p-5 text-center border sm:p-6 rounded-2xl bg-emerald-500/5 border-emerald-500/10">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-3 rounded-xl bg-emerald-500/10">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-black text-white sm:text-4xl">5K<span class="text-xl">+</span></span>
                    <p class="mt-1 text-sm text-white/50">Integrări</p>
                </div>
                <div class="p-5 text-center border sm:p-6 rounded-2xl bg-amber-500/5 border-amber-500/10">
                    <div class="flex items-center justify-center w-12 h-12 mx-auto mb-3 rounded-xl bg-amber-500/10">
                        <svg class="w-6 h-6 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                    </div>
                    <span class="text-3xl font-black sm:text-4xl gradient-text-emerald">1%</span>
                    <p class="mt-1 text-sm text-white/50">Comision</p>
                </div>
            </div>
            
            <!-- Price Comparison -->
            <div class="max-w-3xl mx-auto mb-16 delay-700 anim-fade-up sm:mb-20" x-data="{ showAll: false }">
                <h2 class="mb-2 text-xl font-bold text-center text-white sm:text-2xl">
                    Compară și economisește
                </h2>
                <p class="mb-8 text-sm text-center text-white/40">
                    Comparație cu <span class="text-white/60">18 platforme</span> de ticketing din România și internațional
                </p>
                
                <div class="overflow-hidden border rounded-2xl border-white/10">
                    <!-- Header -->
                    <div class="grid grid-cols-4 text-sm font-medium bg-white/5">
                        <div class="p-4 text-white/50">Platformă</div>
                        <div class="p-4 text-center text-white/50">Comision</div>
                        <div class="p-4 text-center text-white/50 hide-mobile">La bilet 100 lei</div>
                        <div class="p-4 text-center text-white/50">La 1,000 bilete</div>
                    </div>
                    
                    <!-- Tixello Row (highlighted) - Always visible -->
                    <div class="grid grid-cols-4 bg-emerald-500/10 border-y border-emerald-500/20">
                        <div class="flex items-center gap-2 p-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-gradient-to-br from-violet-500 to-cyan-500">
                                <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                </svg>
                            </div>
                            <span class="font-semibold text-white">Tixello</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-2xl font-black text-emerald-400">1%</span>
                        </div>
                        <div class="p-4 text-center hide-mobile">
                            <span class="font-semibold text-emerald-400">1 leu</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="font-bold text-emerald-400">1,000 lei</span>
                        </div>
                    </div>
                    
                    <!-- ROMANIA SECTION HEADER -->
                    <div class="px-4 py-2 border-b bg-violet-500/10 border-white/5">
                        <span class="flex items-center gap-2 text-xs font-semibold tracking-wider uppercase text-violet-400">
                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 21v-4m0 0V5a2 2 0 012-2h6.5l1 1H21l-3 6 3 6h-8.5l-1-1H5a2 2 0 00-2 2zm9-13.5V9"/>
                            </svg>
                            Platforme din România
                        </span>
                    </div>
                    
                    <!-- Romanian Competitor 1 - iaBilet -->
                    <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                        <div class="flex items-center gap-2 p-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-orange-500/20">
                                <span class="text-xs font-bold text-orange-400">iB</span>
                            </div>
                            <span class="text-sm text-white/70">iaBilet</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-sm text-white/60">5-10%</span>
                        </div>
                        <div class="p-4 text-center hide-mobile">
                            <span class="text-sm text-white/40">5-10 lei</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-sm font-medium text-red-400/80">5,000-10,000 lei</span>
                        </div>
                    </div>
                    
                    <!-- Romanian Competitor 2 - Eventim -->
                    <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                        <div class="flex items-center gap-2 p-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-blue-500/20">
                                <span class="text-xs font-bold text-blue-400">E</span>
                            </div>
                            <span class="text-sm text-white/70">Eventim.ro</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-sm text-white/60">5-8% + taxe</span>
                        </div>
                        <div class="p-4 text-center hide-mobile">
                            <span class="text-sm text-white/40">5-10 lei</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-sm font-medium text-red-400/80">5,000-10,000 lei</span>
                        </div>
                    </div>
                    
                    <!-- Romanian Competitor 3 - Bilete.ro -->
                    <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                        <div class="flex items-center gap-2 p-4">
                            <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-pink-500/20">
                                <span class="text-xs font-bold text-pink-400">B</span>
                            </div>
                            <span class="text-sm text-white/70">Bilete.ro</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-sm text-white/60">5-8%</span>
                        </div>
                        <div class="p-4 text-center hide-mobile">
                            <span class="text-sm text-white/40">5-8 lei</span>
                        </div>
                        <div class="p-4 text-center">
                            <span class="text-sm font-medium text-red-400/80">5,000-8,000 lei</span>
                        </div>
                    </div>
                    
                    <!-- More Romanian competitors - Initially hidden -->
                    <template x-if="showAll">
                        <div>
                            <!-- Entertix -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-purple-500/20">
                                        <span class="text-xs font-bold text-purple-400">En</span>
                                    </div>
                                    <span class="text-sm text-white/70">Entertix</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">5-7%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">5-7 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">5,000-7,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- MyTicket -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-cyan-500/20">
                                        <span class="text-xs font-bold text-cyan-400">M</span>
                                    </div>
                                    <span class="text-sm text-white/70">MyTicket</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">3-7%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">3-7 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">3,000-7,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- Kompostor -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-green-500/20">
                                        <span class="text-xs font-bold text-green-400">K</span>
                                    </div>
                                    <span class="text-sm text-white/70">Kompostor</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">3-5%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">3-5 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">3,000-5,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- Oveit -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-indigo-500/20">
                                        <span class="text-xs font-bold text-indigo-400">O</span>
                                    </div>
                                    <span class="text-sm text-white/70">Oveit</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">3-5%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">3-5 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">3,000-5,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- BLT.ro -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-rose-500/20">
                                        <span class="text-xs font-bold text-rose-400">BL</span>
                                    </div>
                                    <span class="text-sm text-white/70">BLT.ro</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">5%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">5 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">5,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- Bilet.ro -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-amber-500/20">
                                        <span class="text-xs font-bold text-amber-400">Bi</span>
                                    </div>
                                    <span class="text-sm text-white/70">Bilet.ro</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">5%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">5 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">5,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- INTERNATIONAL SECTION HEADER -->
                            <div class="px-4 py-2 border-b bg-cyan-500/10 border-white/5">
                                <span class="flex items-center gap-2 text-xs font-semibold tracking-wider uppercase text-cyan-400">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                    </svg>
                                    Platforme internaționale
                                </span>
                            </div>
                            
                            <!-- Eventbrite -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-orange-600/20">
                                        <span class="text-xs font-bold text-orange-500">Eb</span>
                                    </div>
                                    <span class="text-sm text-white/70">Eventbrite</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">6.95% + €0.99</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">~12 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">~12,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- Ticketmaster -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-blue-600/20">
                                        <span class="text-xs font-bold text-blue-500">TM</span>
                                    </div>
                                    <span class="text-sm text-white/70">Ticketmaster</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">10-15% + fees</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">15-20 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">15,000-20,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- AXS -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-red-600/20">
                                        <span class="text-xs font-bold text-red-500">AX</span>
                                    </div>
                                    <span class="text-sm text-white/70">AXS</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">8-12%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">8-12 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">8,000-12,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- DICE -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-slate-600/20">
                                        <span class="text-xs font-bold text-slate-400">D</span>
                                    </div>
                                    <span class="text-sm text-white/70">DICE</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">8-10%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">8-10 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">8,000-10,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- SeatGeek -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-teal-600/20">
                                        <span class="text-xs font-bold text-teal-500">SG</span>
                                    </div>
                                    <span class="text-sm text-white/70">SeatGeek</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">10-15%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">10-15 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">10,000-15,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- See Tickets -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-yellow-600/20">
                                        <span class="text-xs font-bold text-yellow-500">ST</span>
                                    </div>
                                    <span class="text-sm text-white/70">See Tickets</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">5-10%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">5-10 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">5,000-10,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- Universe -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-violet-600/20">
                                        <span class="text-xs font-bold text-violet-500">U</span>
                                    </div>
                                    <span class="text-sm text-white/70">Universe</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">5-8%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">5-8 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">5,000-8,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- Ticket Tailor -->
                            <div class="grid grid-cols-4 border-b comparison-row border-white/5">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-emerald-600/20">
                                        <span class="text-xs font-bold text-emerald-500">TT</span>
                                    </div>
                                    <span class="text-sm text-white/70">Ticket Tailor</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">3% (basic)</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">3 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-amber-400/80">3,000 lei</span>
                                </div>
                            </div>
                            
                            <!-- StubHub -->
                            <div class="grid grid-cols-4 comparison-row">
                                <div class="flex items-center gap-2 p-4">
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg bg-fuchsia-600/20">
                                        <span class="text-xs font-bold text-fuchsia-500">SH</span>
                                    </div>
                                    <span class="text-sm text-white/70">StubHub</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm text-white/60">10-15%</span>
                                </div>
                                <div class="p-4 text-center hide-mobile">
                                    <span class="text-sm text-white/40">10-15 lei</span>
                                </div>
                                <div class="p-4 text-center">
                                    <span class="text-sm font-medium text-red-400/80">10,000-15,000 lei</span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                
                <!-- Toggle Button -->
                <div class="mt-4 text-center">
                    <button 
                        @click="showAll = !showAll" 
                        class="inline-flex items-center gap-2 px-5 py-2.5 rounded-xl bg-white/5 border border-white/10 text-white/70 text-sm font-medium hover:bg-white/10 hover:border-white/20 transition-all"
                    >
                        <template x-if="!showAll">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                                </svg>
                                Vezi toate cele 18 platforme
                            </span>
                        </template>
                        <template x-if="showAll">
                            <span class="flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
                                </svg>
                                Arată mai puțin
                            </span>
                        </template>
                    </button>
                </div>
                
                <!-- Savings callout -->
                <div class="p-4 mt-6 text-center border rounded-xl bg-emerald-500/10 border-emerald-500/20">
                    <p class="text-sm text-white/70">
                        Cu Tixello economisești între <span class="font-bold text-emerald-400">2,000 - 19,000 lei</span> la fiecare 1,000 de bilete vândute
                    </p>
                    <p class="mt-1 text-xs text-white/40">
                        Calculat la preț mediu bilet de 100 lei
                    </p>
                </div>
            </div>
            
            <!-- INTERACTIVE VS COMPARISON SEARCH -->
            <div class="max-w-3xl mx-auto mb-16 anim-fade-up delay-800 sm:mb-20" x-data="competitorSearch()">
                
                <div class="rounded-2xl border border-white/10 bg-white/[0.02] p-6 sm:p-8">
                    
                    <!-- Search Header -->
                    <div class="mb-6 text-center">
                        <h3 class="mb-2 text-lg font-bold text-white sm:text-xl">
                            Compară cu platforma ta actuală
                        </h3>
                        <p class="text-sm text-white/50">
                            Caută platforma pe care o folosești și vezi exact cât economisești
                        </p>
                    </div>
                    
                    <!-- Search Input -->
                    <div class="relative mb-6">
                        <div class="relative">
                            <svg class="absolute w-5 h-5 -translate-y-1/2 left-4 top-1/2 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                            <input 
                                type="text" 
                                x-model="searchQuery"
                                @input="filterCompetitors()"
                                @focus="showDropdown = true"
                                placeholder="Caută: iaBilet, Eventbrite, Ticketmaster..."
                                class="w-full py-4 pl-12 pr-4 text-white transition-all border rounded-xl bg-white/5 border-white/10 placeholder-white/30 focus:outline-none focus:border-violet-500/50 focus:ring-2 focus:ring-violet-500/20"
                            />
                            <template x-if="searchQuery && !selectedCompetitor">
                                <button @click="clearSearch()" class="absolute transition-colors -translate-y-1/2 right-4 top-1/2 text-white/30 hover:text-white/60">
                                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                </button>
                            </template>
                        </div>
                        
                        <!-- Dropdown Results -->
                        <div 
                            x-show="showDropdown && filteredCompetitors.length > 0 && !selectedCompetitor"
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-1"
                            @click.away="showDropdown = false"
                            class="absolute z-20 w-full mt-2 overflow-hidden overflow-y-auto border shadow-2xl rounded-xl bg-zinc-900 border-white/10 max-h-64"
                        >
                            <template x-for="comp in filteredCompetitors" :key="comp.name">
                                <button 
                                    @click="selectCompetitor(comp)"
                                    class="flex items-center w-full gap-3 px-4 py-3 text-left transition-colors border-b hover:bg-white/5 border-white/5 last:border-0"
                                >
                                    <div class="flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg" :style="'background:' + comp.bgColor">
                                        <span class="text-xs font-bold" :style="'color:' + comp.textColor" x-text="comp.initials"></span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-white truncate" x-text="comp.name"></p>
                                        <p class="text-xs text-white/40" x-text="comp.region"></p>
                                    </div>
                                    <span class="flex-shrink-0 text-xs text-white/50" x-text="comp.commission"></span>
                                </button>
                            </template>
                        </div>
                    </div>
                    
                    <!-- VS Comparison Result Card -->
                    <template x-if="selectedCompetitor">
                        <div x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100">
                            
                            <!-- Close button -->
                            <div class="flex justify-end mb-4">
                                <button @click="clearSearch()" class="flex items-center gap-1 text-sm transition-colors text-white/40 hover:text-white/70">
                                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                                    </svg>
                                    Resetează
                                </button>
                            </div>
                            
                            <div class="overflow-hidden border rounded-xl border-white/10">
                                
                                <!-- VS Header -->
                                <div class="px-6 py-5 border-b bg-gradient-to-r from-emerald-500/10 via-white/5 to-red-500/10 border-white/10">
                                    <div class="flex items-center justify-center gap-4 sm:gap-6">
                                        <!-- Tixello -->
                                        <div class="flex items-center gap-2 sm:gap-3">
                                            <div class="flex items-center justify-center w-10 h-10 shadow-lg sm:w-12 sm:h-12 rounded-xl bg-gradient-to-br from-violet-500 to-cyan-500 shadow-violet-500/20">
                                                <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                                </svg>
                                            </div>
                                            <span class="text-sm font-bold text-white sm:text-base">Tixello</span>
                                        </div>
                                        
                                        <!-- VS Badge -->
                                        <div class="px-3 py-1.5 rounded-full bg-white/10 text-xs font-black text-white tracking-wider">VS</div>
                                        
                                        <!-- Competitor -->
                                        <div class="flex items-center gap-2 sm:gap-3">
                                            <div class="flex items-center justify-center w-10 h-10 sm:w-12 sm:h-12 rounded-xl" :style="'background:' + selectedCompetitor.bgColor">
                                                <span class="text-sm font-bold sm:text-base" :style="'color:' + selectedCompetitor.textColor" x-text="selectedCompetitor.initials"></span>
                                            </div>
                                            <span class="text-sm font-bold text-white sm:text-base" x-text="selectedCompetitor.name"></span>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Comparison Grid -->
                                <div class="grid grid-cols-3 divide-x divide-white/10">
                                    
                                    <!-- Tixello Column -->
                                    <div class="p-4 sm:p-6 bg-emerald-500/5">
                                        <div class="text-center">
                                            <p class="text-[10px] sm:text-xs text-emerald-400/70 uppercase tracking-wider mb-2">Tixello</p>
                                            <p class="text-3xl font-black sm:text-5xl text-emerald-400">1%</p>
                                            <p class="text-[10px] sm:text-xs text-white/40 mt-2">comision</p>
                                        </div>
                                        <div class="pt-4 mt-4 text-center border-t border-white/10">
                                            <p class="text-[10px] sm:text-xs text-white/40 mb-1">Cost la 1,000 bilete</p>
                                            <p class="text-base font-bold sm:text-xl text-emerald-400">1,000 lei</p>
                                        </div>
                                    </div>
                                    
                                    <!-- Savings Column -->
                                    <div class="p-4 sm:p-6 bg-gradient-to-b from-amber-500/10 to-transparent">
                                        <div class="text-center">
                                            <p class="text-[10px] sm:text-xs text-amber-400/70 uppercase tracking-wider mb-2">Economii</p>
                                            <p class="text-2xl font-black text-white sm:text-4xl" x-text="selectedCompetitor.savingsDisplay"></p>
                                            <p class="text-[10px] sm:text-xs text-white/40 mt-2">per 1,000 bilete</p>
                                        </div>
                                        <div class="pt-4 mt-4 text-center border-t border-white/10">
                                            <p class="text-[10px] sm:text-xs text-white/40 mb-1">Reducere</p>
                                            <p class="flex items-center justify-center gap-1 text-base font-bold sm:text-xl text-amber-400">
                                                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
                                                </svg>
                                                <span x-text="selectedCompetitor.savingsPercent"></span>
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <!-- Competitor Column -->
                                    <div class="p-4 sm:p-6 bg-red-500/5">
                                        <div class="text-center">
                                            <p class="text-[10px] sm:text-xs text-red-400/70 uppercase tracking-wider mb-2" x-text="selectedCompetitor.name"></p>
                                            <p class="text-2xl font-black text-red-400 sm:text-4xl" x-text="selectedCompetitor.commission"></p>
                                            <p class="text-[10px] sm:text-xs text-white/40 mt-2">comision</p>
                                        </div>
                                        <div class="pt-4 mt-4 text-center border-t border-white/10">
                                            <p class="text-[10px] sm:text-xs text-white/40 mb-1">Cost la 1,000 bilete</p>
                                            <p class="text-base font-bold text-red-400 sm:text-xl" x-text="selectedCompetitor.cost1000"></p>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Bottom CTA -->
                                <div class="px-4 py-4 border-t sm:px-6 bg-gradient-to-r from-violet-500/10 via-emerald-500/10 to-cyan-500/10 border-white/10">
                                    <div class="flex flex-col items-center justify-between gap-4 sm:flex-row">
                                        <p class="text-sm text-center text-white/70 sm:text-left">
                                            Treci la Tixello și <span class="font-semibold text-emerald-400">economisești <span x-text="selectedCompetitor.savingsDisplay"></span></span>
                                        </p>
                                        <a href="/signup" class="w-full sm:w-auto px-6 py-2.5 rounded-lg bg-gradient-to-r from-violet-600 to-cyan-600 text-white text-sm font-semibold hover:shadow-lg hover:shadow-violet-500/30 transition-all text-center">
                                            Începe gratuit
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                    
                    <!-- Empty State / Popular Suggestions -->
                    <template x-if="!selectedCompetitor">
                        <div class="py-2 text-center">
                            <p class="mb-4 text-xs text-white/40">sau alege din cele mai populare:</p>
                            <div class="flex flex-wrap justify-center gap-2">
                                <template x-for="comp in popularCompetitors" :key="comp.name">
                                    <button 
                                        @click="selectCompetitor(comp)"
                                        class="inline-flex items-center gap-2 px-3 py-2 text-sm transition-all border rounded-lg bg-white/5 border-white/10 text-white/60 hover:bg-white/10 hover:border-white/20 hover:text-white"
                                    >
                                        <span class="w-5 h-5 rounded flex items-center justify-center text-[9px] font-bold" :style="'background:' + comp.bgColor + '; color:' + comp.textColor" x-text="comp.initials"></span>
                                        <span x-text="comp.name"></span>
                                    </button>
                                </template>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
            
            <!-- Ecosystem Visual + Features -->
            <div class="grid items-center max-w-6xl gap-8 mx-auto mb-16 anim-fade-up delay-800 lg:grid-cols-2 lg:gap-12">
                
                <!-- Left: Ecosystem Visualization -->
                <div class="relative">
                    <div class="relative max-w-md mx-auto aspect-square">
                        <!-- Center hub -->
                        <div class="absolute z-10 -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                            <div class="flex items-center justify-center w-24 h-24 shadow-2xl sm:w-28 sm:h-28 rounded-2xl bg-gradient-to-br from-violet-600 to-cyan-600 shadow-violet-500/30">
                                <div class="text-center">
                                    <svg class="w-8 h-8 mx-auto mb-1 text-white sm:w-10 sm:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                    </svg>
                                    <span class="text-xs font-bold text-white sm:text-sm">TIXELLO</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Orbiting microservice dots - SOLAR SYSTEM -->
                        <svg class="absolute inset-0 w-full h-full" viewBox="0 0 400 400">
                            <!-- Orbit paths (rings) -->
                            <circle cx="200" cy="200" r="80" fill="none" stroke="rgba(139,92,246,0.12)" stroke-width="1" class="orbit-path"/>
                            <circle cx="200" cy="200" r="130" fill="none" stroke="rgba(6,182,212,0.1)" stroke-width="1" class="orbit-path-2"/>
                            <circle cx="200" cy="200" r="180" fill="none" stroke="rgba(139,92,246,0.06)" stroke-width="1" class="orbit-path-3"/>
                            
                            <!-- INNER RING - Orbiting group (r=80, fastest) -->
                            <g class="orbit-inner">
                                <circle cx="280" cy="200" r="10" fill="#8B5CF6" class="pulse-dot" style="animation-delay: 0s;">
                                    <title>Ticketing</title>
                                </circle>
                                <circle cx="200" cy="280" r="10" fill="#06B6D4" class="pulse-dot" style="animation-delay: 0.5s;">
                                    <title>Check-in</title>
                                </circle>
                                <circle cx="120" cy="200" r="10" fill="#10B981" class="pulse-dot" style="animation-delay: 1s;">
                                    <title>Analytics</title>
                                </circle>
                                <circle cx="200" cy="120" r="10" fill="#F59E0B" class="pulse-dot" style="animation-delay: 1.5s;">
                                    <title>CRM</title>
                                </circle>
                            </g>
                            
                            <!-- INNER RING REVERSE - Another set going opposite direction -->
                            <g class="orbit-inner-reverse">
                                <circle cx="257" cy="143" r="7" fill="#EC4899" class="pulse-dot" style="animation-delay: 0.25s;">
                                    <title>Email</title>
                                </circle>
                                <circle cx="143" cy="257" r="7" fill="#14B8A6" class="pulse-dot" style="animation-delay: 0.75s;">
                                    <title>SMS</title>
                                </circle>
                            </g>
                            
                            <!-- MIDDLE RING - Orbiting group (r=130, medium speed) -->
                            <g class="orbit-middle">
                                <circle cx="330" cy="200" r="8" fill="#EC4899" class="pulse-dot" style="animation-delay: 0.2s;">
                                    <title>Shop</title>
                                </circle>
                                <circle cx="292" cy="292" r="8" fill="#8B5CF6" class="pulse-dot" style="animation-delay: 0.6s;">
                                    <title>Gamification</title>
                                </circle>
                                <circle cx="200" cy="330" r="8" fill="#06B6D4" class="pulse-dot" style="animation-delay: 1s;">
                                    <title>Rewards</title>
                                </circle>
                                <circle cx="108" cy="292" r="8" fill="#10B981" class="pulse-dot" style="animation-delay: 1.4s;">
                                    <title>Payments</title>
                                </circle>
                                <circle cx="70" cy="200" r="8" fill="#F59E0B" class="pulse-dot" style="animation-delay: 1.8s;">
                                    <title>Reports</title>
                                </circle>
                                <circle cx="108" cy="108" r="8" fill="#EF4444" class="pulse-dot" style="animation-delay: 2.2s;">
                                    <title>Access</title>
                                </circle>
                                <circle cx="200" cy="70" r="8" fill="#8B5CF6" class="pulse-dot" style="animation-delay: 2.6s;">
                                    <title>Venues</title>
                                </circle>
                                <circle cx="292" cy="108" r="8" fill="#06B6D4" class="pulse-dot" style="animation-delay: 3s;">
                                    <title>Artists</title>
                                </circle>
                            </g>
                            
                            <!-- MIDDLE RING REVERSE -->
                            <g class="orbit-middle-reverse">
                                <circle cx="265" cy="330" r="6" fill="#A855F7" class="pulse-dot" style="animation-delay: 0.4s;">
                                    <title>Integrations</title>
                                </circle>
                                <circle cx="135" cy="70" r="6" fill="#22D3D1" class="pulse-dot" style="animation-delay: 1.2s;">
                                    <title>API</title>
                                </circle>
                            </g>
                            
                            <!-- OUTER RING - Orbiting group (r=180, slowest) -->
                            <g class="orbit-outer">
                                <circle cx="380" cy="200" r="5" fill="rgba(139,92,246,0.7)" class="pulse-dot" style="animation-delay: 0.1s;"/>
                                <circle cx="327" cy="327" r="5" fill="rgba(6,182,212,0.7)" class="pulse-dot" style="animation-delay: 0.5s;"/>
                                <circle cx="200" cy="380" r="5" fill="rgba(16,185,129,0.7)" class="pulse-dot" style="animation-delay: 0.9s;"/>
                                <circle cx="73" cy="327" r="5" fill="rgba(245,158,11,0.7)" class="pulse-dot" style="animation-delay: 1.3s;"/>
                                <circle cx="20" cy="200" r="5" fill="rgba(236,72,153,0.7)" class="pulse-dot" style="animation-delay: 1.7s;"/>
                                <circle cx="73" cy="73" r="5" fill="rgba(139,92,246,0.7)" class="pulse-dot" style="animation-delay: 2.1s;"/>
                                <circle cx="200" cy="20" r="5" fill="rgba(6,182,212,0.7)" class="pulse-dot" style="animation-delay: 2.5s;"/>
                                <circle cx="327" cy="73" r="5" fill="rgba(16,185,129,0.7)" class="pulse-dot" style="animation-delay: 2.9s;"/>
                                <!-- Extra outer dots -->
                                <circle cx="355" cy="127" r="4" fill="rgba(236,72,153,0.5)" class="pulse-dot" style="animation-delay: 0.3s;"/>
                                <circle cx="355" cy="273" r="4" fill="rgba(245,158,11,0.5)" class="pulse-dot" style="animation-delay: 1.1s;"/>
                                <circle cx="127" cy="355" r="4" fill="rgba(139,92,246,0.5)" class="pulse-dot" style="animation-delay: 1.9s;"/>
                                <circle cx="45" cy="273" r="4" fill="rgba(6,182,212,0.5)" class="pulse-dot" style="animation-delay: 2.7s;"/>
                                <circle cx="45" cy="127" r="4" fill="rgba(16,185,129,0.5)" class="pulse-dot" style="animation-delay: 0.7s;"/>
                                <circle cx="127" cy="45" r="4" fill="rgba(236,72,153,0.5)" class="pulse-dot" style="animation-delay: 1.5s;"/>
                                <circle cx="273" cy="45" r="4" fill="rgba(245,158,11,0.5)" class="pulse-dot" style="animation-delay: 2.3s;"/>
                                <circle cx="273" cy="355" r="4" fill="rgba(139,92,246,0.5)" class="pulse-dot" style="animation-delay: 3.1s;"/>
                            </g>
                            
                            <!-- Center glow effect -->
                            <defs>
                                <radialGradient id="centerGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="rgba(139,92,246,0.3)"/>
                                    <stop offset="100%" stop-color="rgba(139,92,246,0)"/>
                                </radialGradient>
                            </defs>
                            <circle cx="200" cy="200" r="60" fill="url(#centerGlow)"/>
                        </svg>
                        
                        <!-- Labels -->
                        <div class="absolute text-right top-4 right-4">
                            <span class="text-[10px] text-violet-400 uppercase tracking-wider">38 microservicii</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right: Key Features -->
                <div class="space-y-4">
                    <h3 class="mb-6 text-xl font-bold text-white sm:text-2xl">
                        Un ecosistem complet, nu doar ticketing
                    </h3>
                    
                    <div class="grid gap-3 sm:grid-cols-2">
                        <div class="p-4 feature-card rounded-xl">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-violet-500/10">
                                    <svg class="w-5 h-5 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Ticketing</p>
                                    <p class="text-xs text-white/50">Vânzare online & la locație</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 feature-card rounded-xl">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-emerald-500/10">
                                    <svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Check-in</p>
                                    <p class="text-xs text-white/50">Scanare QR în <1 secundă</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 feature-card rounded-xl">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-amber-500/10">
                                    <svg class="w-5 h-5 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Shop</p>
                                    <p class="text-xs text-white/50">Merch, F&B, produse</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 feature-card rounded-xl">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-pink-500/10">
                                    <svg class="w-5 h-5 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M12 12.75a3 3 0 110-6 3 3 0 010 6z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Gamification</p>
                                    <p class="text-xs text-white/50">Puncte, premii, leaderboard</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 feature-card rounded-xl">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-cyan-500/10">
                                    <svg class="w-5 h-5 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Analytics</p>
                                    <p class="text-xs text-white/50">Rapoarte în timp real</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="p-4 feature-card rounded-xl">
                            <div class="flex items-start gap-3">
                                <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-indigo-500/10">
                                    <svg class="w-5 h-5 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-semibold text-white">Email & SMS</p>
                                    <p class="text-xs text-white/50">Campanii automatizate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <a href="/features" class="inline-flex items-center gap-2 mt-4 text-sm transition-colors text-violet-400 hover:text-violet-300">
                        <span>Vezi toate cele 180+ funcționalități</span>
                        <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <!-- Bottom: Who It's For -->
            <div class="text-center anim-fade-up delay-900">
                <p class="mb-6 text-sm text-white/40">Perfect pentru orice tip de eveniment</p>
                <div class="flex flex-wrap items-center justify-center gap-3 sm:gap-4">
                    <span class="inline-flex items-center gap-2 px-4 py-2 text-sm border rounded-full bg-white/5 border-white/10 text-white/70">
                        <svg class="w-4 h-4 text-violet-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9l10.5-3m0 6.553v3.75a2.25 2.25 0 01-1.632 2.163l-1.32.377a1.803 1.803 0 11-.99-3.467l2.31-.66a2.25 2.25 0 001.632-2.163zm0 0V2.25L9 5.25v10.303"/>
                        </svg>
                        Festivaluri
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 text-sm border rounded-full bg-white/5 border-white/10 text-white/70">
                        <svg class="w-4 h-4 text-cyan-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 006-6v-1.5m-6 7.5a6 6 0 01-6-6v-1.5m6 7.5v3.75m-3.75 0h7.5M12 15.75a3 3 0 01-3-3V4.5a3 3 0 116 0v8.25a3 3 0 01-3 3z"/>
                        </svg>
                        Concerte
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 text-sm border rounded-full bg-white/5 border-white/10 text-white/70">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        Conferințe
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 text-sm border rounded-full bg-white/5 border-white/10 text-white/70 hide-mobile">
                        <svg class="w-4 h-4 text-pink-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z"/>
                        </svg>
                        Teatre
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 text-sm border rounded-full bg-white/5 border-white/10 text-white/70 hide-mobile">
                        <svg class="w-4 h-4 text-amber-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M12 12.75a3 3 0 110-6 3 3 0 010 6z"/>
                        </svg>
                        Sport
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 text-sm border rounded-full bg-white/5 border-white/10 text-white/70 hide-tablet">
                        <svg class="w-4 h-4 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z"/>
                        </svg>
                        Locații
                    </span>
                </div>
            </div>
            
        </div>
    </div>
</section>

<!-- ==================== NEXT SECTION ==================== -->
<section class="relative py-24 border-t bg-zinc-900/30 border-white/5">
    <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
        <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl lg:text-5xl">Cum funcționează?</h2>
        <p class="max-w-2xl mx-auto text-lg text-white/50">3 pași simpli de la idee la bilete vândute.</p>
    </div>
</section>

<!-- ==================== ALPINE JS ==================== -->
<script>
    function heroData() {
        return {
            // No fake stats needed
        }
    }
    
    function competitorSearch() {
        return {
            searchQuery: '',
            showDropdown: false,
            selectedCompetitor: null,
            filteredCompetitors: [],
            
            // All competitors data
            competitors: [
                // Romania - Major Players
                { name: 'iaBilet', initials: 'iB', region: 'România', commission: '5-10%', commissionAvg: 7.5, bgColor: 'rgba(249,115,22,0.2)', textColor: '#f97316', cost1000: '5,000-10,000 lei', savingsDisplay: '4,000-9,000 lei', savingsPercent: '80-90%' },
                { name: 'Eventim.ro', initials: 'Ev', region: 'România', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(59,130,246,0.2)', textColor: '#3b82f6', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'Bilete.ro', initials: 'B', region: 'România', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(236,72,153,0.2)', textColor: '#ec4899', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'Entertix', initials: 'En', region: 'România', commission: '5-7%', commissionAvg: 6, bgColor: 'rgba(168,85,247,0.2)', textColor: '#a855f7', cost1000: '5,000-7,000 lei', savingsDisplay: '4,000-6,000 lei', savingsPercent: '80-86%' },
                { name: 'MyTicket', initials: 'MT', region: 'România', commission: '3-7%', commissionAvg: 5, bgColor: 'rgba(6,182,212,0.2)', textColor: '#06b6d4', cost1000: '3,000-7,000 lei', savingsDisplay: '2,000-6,000 lei', savingsPercent: '67-86%' },
                
                // Romania - Other platforms
                { name: 'Kompostor', initials: 'K', region: 'România', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(34,197,94,0.2)', textColor: '#22c55e', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'Oveit', initials: 'O', region: 'România', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(99,102,241,0.2)', textColor: '#6366f1', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'BLT.ro', initials: 'BL', region: 'România', commission: '5%', commissionAvg: 5, bgColor: 'rgba(244,63,94,0.2)', textColor: '#f43f5e', cost1000: '5,000 lei', savingsDisplay: '4,000 lei', savingsPercent: '80%' },
                { name: 'Bilet.ro', initials: 'Bi', region: 'România', commission: '5%', commissionAvg: 5, bgColor: 'rgba(245,158,11,0.2)', textColor: '#f59e0b', cost1000: '5,000 lei', savingsDisplay: '4,000 lei', savingsPercent: '80%' },
                { name: 'iTicket.ro', initials: 'iT', region: 'România', commission: '4-6%', commissionAvg: 5, bgColor: 'rgba(14,165,233,0.2)', textColor: '#0ea5e9', cost1000: '4,000-6,000 lei', savingsDisplay: '3,000-5,000 lei', savingsPercent: '75-83%' },
                { name: 'TomTix', initials: 'TT', region: 'România', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(251,146,60,0.2)', textColor: '#fb923c', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'Eventbook', initials: 'Eb', region: 'România', commission: '4-7%', commissionAvg: 5.5, bgColor: 'rgba(167,139,250,0.2)', textColor: '#a78bfa', cost1000: '4,000-7,000 lei', savingsDisplay: '3,000-6,000 lei', savingsPercent: '75-86%' },
                { name: 'LiveTickets', initials: 'LT', region: 'România', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(52,211,153,0.2)', textColor: '#34d399', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'mySTAGE', initials: 'mS', region: 'România (Teatre)', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(251,113,133,0.2)', textColor: '#fb7185', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'BookTes', initials: 'BT', region: 'România (Muzee)', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(147,51,234,0.2)', textColor: '#9333ea', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'Biletin.ro', initials: 'Bn', region: 'România', commission: '4-6%', commissionAvg: 5, bgColor: 'rgba(234,88,12,0.2)', textColor: '#ea580c', cost1000: '4,000-6,000 lei', savingsDisplay: '3,000-5,000 lei', savingsPercent: '75-83%' },
                { name: 'ProTicket', initials: 'PT', region: 'România', commission: '4-6%', commissionAvg: 5, bgColor: 'rgba(79,70,229,0.2)', textColor: '#4f46e5', cost1000: '4,000-6,000 lei', savingsDisplay: '3,000-5,000 lei', savingsPercent: '75-83%' },
                { name: 'TicketStore', initials: 'TS', region: 'România', commission: '4-6%', commissionAvg: 5, bgColor: 'rgba(217,119,6,0.2)', textColor: '#d97706', cost1000: '4,000-6,000 lei', savingsDisplay: '3,000-5,000 lei', savingsPercent: '75-83%' },
                { name: 'MyConnector', initials: 'MC', region: 'România (Corporate)', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(5,150,105,0.2)', textColor: '#059669', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'Biletmaster.ro', initials: 'BM', region: 'România (Transilvania)', commission: '4-7%', commissionAvg: 5.5, bgColor: 'rgba(220,38,38,0.2)', textColor: '#dc2626', cost1000: '4,000-7,000 lei', savingsDisplay: '3,000-6,000 lei', savingsPercent: '75-86%' },
                { name: 'Tixplace', initials: 'Tp', region: 'România (Resale)', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(168,162,158,0.2)', textColor: '#a8a29e', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'TicketSwap', initials: 'TS', region: 'România (Resale)', commission: '5-10%', commissionAvg: 7.5, bgColor: 'rgba(34,197,94,0.2)', textColor: '#22c55e', cost1000: '5,000-10,000 lei', savingsDisplay: '4,000-9,000 lei', savingsPercent: '80-90%' },
                { name: 'Paysera Tickets', initials: 'Pa', region: 'România', commission: '2-4%', commissionAvg: 3, bgColor: 'rgba(37,99,235,0.2)', textColor: '#2563eb', cost1000: '2,000-4,000 lei', savingsDisplay: '1,000-3,000 lei', savingsPercent: '50-75%' },
                { name: 'Ticketnet.ro', initials: 'Tn', region: 'România', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(124,58,237,0.2)', textColor: '#7c3aed', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'Bilete FRF', initials: 'FR', region: 'România (Sport)', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(252,211,77,0.2)', textColor: '#fcd34d', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'InfoMusic', initials: 'IM', region: 'România', commission: '4-6%', commissionAvg: 5, bgColor: 'rgba(129,140,248,0.2)', textColor: '#818cf8', cost1000: '4,000-6,000 lei', savingsDisplay: '3,000-5,000 lei', savingsPercent: '75-83%' },
                { name: 'Smart Ticketing', initials: 'ST', region: 'România', commission: '4-6%', commissionAvg: 5, bgColor: 'rgba(45,212,191,0.2)', textColor: '#2dd4bf', cost1000: '4,000-6,000 lei', savingsDisplay: '3,000-5,000 lei', savingsPercent: '75-83%' },
                { name: 'Festicket', initials: 'Fk', region: 'România (Festivaluri)', commission: '6-10%', commissionAvg: 8, bgColor: 'rgba(251,146,60,0.2)', textColor: '#fb923c', cost1000: '6,000-10,000 lei', savingsDisplay: '5,000-9,000 lei', savingsPercent: '83-90%' },
                { name: 'ambilet.ro', initials: 'Am', region: 'România', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(239,68,68,0.2)', textColor: '#ef4444', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'evticket.ro', initials: 'Ev', region: 'România', commission: '4-7%', commissionAvg: 5.5, bgColor: 'rgba(34,197,94,0.2)', textColor: '#22c55e', cost1000: '4,000-7,000 lei', savingsDisplay: '3,000-6,000 lei', savingsPercent: '75-86%' },
                
                // International
                { name: 'Eventbrite', initials: 'EB', region: 'Internațional', commission: '6.95% + €0.99', commissionAvg: 12, bgColor: 'rgba(234,88,12,0.2)', textColor: '#ea580c', cost1000: '~12,000 lei', savingsDisplay: '~11,000 lei', savingsPercent: '~92%' },
                { name: 'Ticketmaster', initials: 'TM', region: 'Internațional', commission: '10-15%', commissionAvg: 12.5, bgColor: 'rgba(37,99,235,0.2)', textColor: '#2563eb', cost1000: '10,000-15,000 lei', savingsDisplay: '9,000-14,000 lei', savingsPercent: '90-93%' },
                { name: 'AXS', initials: 'AX', region: 'Internațional', commission: '8-12%', commissionAvg: 10, bgColor: 'rgba(220,38,38,0.2)', textColor: '#dc2626', cost1000: '8,000-12,000 lei', savingsDisplay: '7,000-11,000 lei', savingsPercent: '87-92%' },
                { name: 'DICE', initials: 'D', region: 'Internațional', commission: '8-10%', commissionAvg: 9, bgColor: 'rgba(71,85,105,0.2)', textColor: '#64748b', cost1000: '8,000-10,000 lei', savingsDisplay: '7,000-9,000 lei', savingsPercent: '87-90%' },
                { name: 'SeatGeek', initials: 'SG', region: 'Internațional', commission: '10-15%', commissionAvg: 12.5, bgColor: 'rgba(20,184,166,0.2)', textColor: '#14b8a6', cost1000: '10,000-15,000 lei', savingsDisplay: '9,000-14,000 lei', savingsPercent: '90-93%' },
                { name: 'See Tickets', initials: 'Se', region: 'Internațional', commission: '5-10%', commissionAvg: 7.5, bgColor: 'rgba(234,179,8,0.2)', textColor: '#eab308', cost1000: '5,000-10,000 lei', savingsDisplay: '4,000-9,000 lei', savingsPercent: '80-90%' },
                { name: 'Universe', initials: 'U', region: 'Internațional', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(139,92,246,0.2)', textColor: '#8b5cf6', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'Ticket Tailor', initials: 'TL', region: 'Internațional', commission: '3%', commissionAvg: 3, bgColor: 'rgba(16,185,129,0.2)', textColor: '#10b981', cost1000: '3,000 lei', savingsDisplay: '2,000 lei', savingsPercent: '67%' },
                { name: 'StubHub', initials: 'SH', region: 'Internațional', commission: '10-15%', commissionAvg: 12.5, bgColor: 'rgba(217,70,239,0.2)', textColor: '#d946ef', cost1000: '10,000-15,000 lei', savingsDisplay: '9,000-14,000 lei', savingsPercent: '90-93%' },
                { name: 'Tixr', initials: 'Tx', region: 'Internațional', commission: '5-8%', commissionAvg: 6.5, bgColor: 'rgba(236,72,153,0.2)', textColor: '#ec4899', cost1000: '5,000-8,000 lei', savingsDisplay: '4,000-7,000 lei', savingsPercent: '80-87%' },
                { name: 'Ticket Fairy', initials: 'TF', region: 'Internațional', commission: '5-7%', commissionAvg: 6, bgColor: 'rgba(192,132,252,0.2)', textColor: '#c084fc', cost1000: '5,000-7,000 lei', savingsDisplay: '4,000-6,000 lei', savingsPercent: '80-86%' },
                { name: 'Humanitix', initials: 'H', region: 'Internațional', commission: '2-5%', commissionAvg: 3.5, bgColor: 'rgba(74,222,128,0.2)', textColor: '#4ade80', cost1000: '2,000-5,000 lei', savingsDisplay: '1,000-4,000 lei', savingsPercent: '50-80%' },
                { name: 'Vivenu', initials: 'V', region: 'Internațional', commission: '3-5%', commissionAvg: 4, bgColor: 'rgba(59,130,246,0.2)', textColor: '#3b82f6', cost1000: '3,000-5,000 lei', savingsDisplay: '2,000-4,000 lei', savingsPercent: '67-80%' },
                { name: 'Dice.fm', initials: 'Df', region: 'Internațional', commission: '8-10%', commissionAvg: 9, bgColor: 'rgba(30,41,59,0.4)', textColor: '#94a3b8', cost1000: '8,000-10,000 lei', savingsDisplay: '7,000-9,000 lei', savingsPercent: '87-90%' },
            ],
            
            // Popular competitors for quick select
            get popularCompetitors() {
                return this.competitors.filter(c => 
                    ['iaBilet', 'Eventbrite', 'Ticketmaster', 'Eventim.ro', 'Bilete.ro'].includes(c.name)
                );
            },
            
            filterCompetitors() {
                if (!this.searchQuery.trim()) {
                    this.filteredCompetitors = this.competitors;
                    return;
                }
                
                const query = this.searchQuery.toLowerCase();
                this.filteredCompetitors = this.competitors.filter(comp => 
                    comp.name.toLowerCase().includes(query) ||
                    comp.initials.toLowerCase().includes(query)
                );
                this.showDropdown = true;
            },
            
            selectCompetitor(comp) {
                this.selectedCompetitor = comp;
                this.searchQuery = comp.name;
                this.showDropdown = false;
            },
            
            clearSearch() {
                this.searchQuery = '';
                this.selectedCompetitor = null;
                this.filteredCompetitors = this.competitors;
                this.showDropdown = false;
            },
            
            init() {
                this.filteredCompetitors = this.competitors;
            }
        }
    }
</script>
<div id="globeWrapper" class="relative mx-auto container-full">
    <div class="flex flex-col items-center justify-center py-12 text-center">
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