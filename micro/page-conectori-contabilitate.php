<?php
/**
 * Template Name: Conectori Contabilitate
 * Description: Accounting connectors integration page - SmartBill, FGO, Exact, Xero, QuickBooks
 */
get_header();
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #4F46E5; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-accounting { background: linear-gradient(135deg, #4F46E5 0%, #10B981 50%, #4F46E5 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(79, 70, 229, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  .provider-card {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    padding: 24px;
    transition: all 0.3s;
    position: relative;
    overflow: hidden;
  }
  .provider-card:hover {
    transform: translateY(-4px);
    border-color: var(--provider-color, rgba(79, 70, 229, 0.5));
  }
  .provider-card::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 3px;
    background: var(--provider-color, #4F46E5);
    opacity: 0;
    transition: opacity 0.3s;
  }
  .provider-card:hover::after {
    opacity: 1;
  }

  .provider-logo {
    width: 48px;
    height: 48px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 14px;
  }

  .sync-status {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .sync-status.success { background: rgba(16, 185, 129, 0.2); color: #34D399; }
  .sync-status.pending { background: rgba(99, 102, 241, 0.2); color: #818CF8; }
  .sync-status.error { background: rgba(239, 68, 68, 0.2); color: #F87171; }
  .sync-status.retry { background: rgba(245, 158, 11, 0.2); color: #FBBF24; }

  .invoice-card {
    background: linear-gradient(135deg, rgba(79, 70, 229, 0.1), rgba(16, 185, 129, 0.05));
    border: 1px solid rgba(79, 70, 229, 0.2);
    border-radius: 12px;
    padding: 16px;
  }

  .mapping-connector {
    height: 2px;
    background: linear-gradient(90deg, #7c3aed, #4F46E5, #10B981);
    position: relative;
  }
  .mapping-connector::before,
  .mapping-connector::after {
    content: '';
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    top: -3px;
  }
  .mapping-connector::before {
    left: 0;
    background: #7c3aed;
  }
  .mapping-connector::after {
    right: 0;
    background: #10B981;
  }

  .queue-item {
    background: rgba(255, 255, 255, 0.03);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 12px 16px;
    transition: all 0.2s;
  }
  .queue-item:hover {
    background: rgba(255, 255, 255, 0.05);
  }

  .form-select {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 10px 14px;
    color: white;
    font-size: 14px;
    width: 100%;
    transition: all 0.2s;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='%236B7280'%3E%3Cpath stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M19 9l-7 7-7-7'%3E%3C/path%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px;
  }
  .form-select:focus {
    outline: none;
    border-color: rgba(79, 70, 229, 0.5);
  }

  .sync-arrow {
    animation: syncFlow 3s ease-in-out infinite;
  }

  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden" x-data="{ mobileMenu: false }">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #4F46E5, #10B981, #7C3AED);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-accounting-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-accounting-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">📊</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">🔄</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">📑</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-accounting-primary/10 border border-accounting-primary/20 mb-6">
            <svg class="w-5 h-5 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            <span class="text-accounting-primary text-sm font-medium">Sincronizare Contabilitate</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Conectori<br><span class="text-gradient-accounting">Contabilitate</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Sincronizare automată cu <strong class="text-white">SmartBill, FGO, Exact, Xero, QuickBooks</strong>. Zero introducere manuală, zero erori.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-accounting-primary text-white hover:bg-accounting-secondary hover:scale-105 hover:shadow-glow-indigo transition-all duration-300">
              Conectează Contabilitatea
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#furnizori" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi Furnizorii
            </a>
          </div>

          <!-- Quick features -->
          <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
              <span class="text-white/60 text-sm">Auto Sync</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-accounting-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              <span class="text-white/60 text-sm">OAuth2 Securizat</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              <span class="text-white/60 text-sm">eFactura</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Sync Flow -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{ syncing: false, syncedCount: 147 }" x-init="setInterval(() => { syncing = true; setTimeout(() => { syncing = false; syncedCount++; }, 2000); }, 5000)">

            <!-- Main Sync Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-2xl border border-accounting-primary/20 shadow-2xl overflow-hidden">
              <!-- Header -->
              <div class="px-6 py-4 border-b border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <div class="w-10 h-10 rounded-xl bg-accounting-primary/20 flex items-center justify-center">
                    <svg class="w-5 h-5 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold">Sincronizare Activă</div>
                    <div class="text-white/40 text-xs">SmartBill conectat</div>
                  </div>
                </div>
                <span class="sync-status success" :class="syncing ? 'animate-pulse' : ''">
                  <span x-show="!syncing">● Conectat</span>
                  <span x-show="syncing">↻ Sincronizare...</span>
                </span>
              </div>

              <!-- Sync Flow Visual -->
              <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                  <!-- Platform -->
                  <div class="text-center">
                    <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan flex items-center justify-center mx-auto mb-2">
                      <span class="text-white font-display font-bold text-xl">T</span>
                    </div>
                    <div class="text-white text-sm font-medium">Tixello</div>
                  </div>

                  <!-- Sync Arrow -->
                  <div class="flex-1 mx-4 relative">
                    <div class="h-0.5 bg-gradient-to-r from-brand-violet via-accounting-primary to-accounting-smartbill"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-8 h-8 rounded-full bg-dark-800 border-2 border-accounting-primary flex items-center justify-center" :class="syncing ? 'animate-spin' : ''">
                      <svg class="w-4 h-4 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                  </div>

                  <!-- SmartBill -->
                  <div class="text-center">
                    <div class="provider-logo mx-auto mb-2" style="background: linear-gradient(135deg, #FFB800, #FF9500);">
                      <span class="text-white font-bold">SB</span>
                    </div>
                    <div class="text-white text-sm font-medium">SmartBill</div>
                  </div>
                </div>

                <!-- Recent Syncs -->
                <div class="space-y-2">
                  <div class="text-white/40 text-xs uppercase mb-2">Sincronizări recente</div>
                  <div class="queue-item flex items-center justify-between">
                    <div class="flex items-center gap-3">
                      <span class="w-2 h-2 rounded-full bg-accounting-success"></span>
                      <span class="text-white/70 text-sm">Factură #INV-2025-147</span>
                    </div>
                    <span class="text-accounting-success text-xs">✓ Sincronizat</span>
                  </div>
                  <div class="queue-item flex items-center justify-between">
                    <div class="flex items-center gap-3">
                      <span class="w-2 h-2 rounded-full bg-accounting-success"></span>
                      <span class="text-white/70 text-sm">Factură #INV-2025-146</span>
                    </div>
                    <span class="text-accounting-success text-xs">✓ Sincronizat</span>
                  </div>
                  <div class="queue-item flex items-center justify-between" x-show="syncing">
                    <div class="flex items-center gap-3">
                      <span class="w-2 h-2 rounded-full bg-accounting-pending animate-pulse"></span>
                      <span class="text-white/70 text-sm">Factură #INV-2025-148</span>
                    </div>
                    <span class="text-accounting-pending text-xs">⟳ În curs...</span>
                  </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-3 mt-4 pt-4 border-t border-white/10">
                  <div class="text-center">
                    <div class="text-accounting-primary font-bold text-xl" x-text="syncedCount">147</div>
                    <div class="text-white/40 text-xs">Sincronizate azi</div>
                  </div>
                  <div class="text-center">
                    <div class="text-accounting-success font-bold text-xl">99.2%</div>
                    <div class="text-white/40 text-xs">Rată succes</div>
                  </div>
                  <div class="text-center">
                    <div class="text-brand-amber font-bold text-xl">0.8s</div>
                    <div class="text-white/40 text-xs">Latență medie</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Provider Badge -->
            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-accounting-smartbill/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <div class="provider-logo w-8 h-8 text-xs" style="background: linear-gradient(135deg, #FFB800, #FF9500);">SB</div>
                <div>
                  <div class="text-accounting-smartbill text-sm font-medium">SmartBill</div>
                  <div class="text-white/40 text-xs">Conectat</div>
                </div>
              </div>
            </div>

            <!-- Floating Security Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-accounting-accent/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-accounting-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <div>
                  <div class="text-accounting-accent text-sm font-medium">Criptat</div>
                  <div class="text-white/40 text-xs">Credențiale securizate</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PROVIDERS ==================== -->
  <section class="py-24 relative overflow-hidden" id="furnizori">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-accounting-primary text-sm font-medium uppercase tracking-widest">Furnizori Suportați</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Software-ul tău de<br><span class="text-gradient-accounting">contabilitate preferat</span></h2>
        <p class="text-lg text-white/60">Pattern adaptor agnostic de furnizor. Conectează ce folosești deja.</p>
      </div>

      <!-- Providers Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- SmartBill -->
        <div class="provider-card reveal" style="--provider-color: #FFB800;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #FFB800, #FF9500);">
              <span class="text-white font-bold">SB</span>
            </div>
            <div>
              <div class="text-white font-semibold">SmartBill</div>
              <div class="text-white/40 text-xs">🇷🇴 România</div>
            </div>
            <span class="sync-status success ml-auto">Popular</span>
          </div>
          <p class="text-white/50 text-sm mb-4">Software popular de contabilitate românesc. Integrare completă cu eFactura și raportare ANAF.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-accounting-smartbill/20 text-accounting-smartbill text-xs">API Key</span>
            <span class="px-2 py-1 rounded bg-accounting-smartbill/20 text-accounting-smartbill text-xs">eFactura</span>
          </div>
        </div>

        <!-- FGO -->
        <div class="provider-card reveal reveal-delay-1" style="--provider-color: #1E40AF;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #1E40AF, #3B82F6);">
              <span class="text-white font-bold">FGO</span>
            </div>
            <div>
              <div class="text-white font-semibold">FGO</div>
              <div class="text-white/40 text-xs">🇷🇴 România</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Planificare resurse enterprise. Soluție completă pentru business-uri mari.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-accounting-fgo/20 text-blue-400 text-xs">OAuth2</span>
            <span class="px-2 py-1 rounded bg-accounting-fgo/20 text-blue-400 text-xs">ERP</span>
          </div>
        </div>

        <!-- Exact -->
        <div class="provider-card reveal reveal-delay-2" style="--provider-color: #E11D48;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #E11D48, #F43F5E);">
              <span class="text-white font-bold">Ex</span>
            </div>
            <div>
              <div class="text-white font-semibold">Exact</div>
              <div class="text-white/40 text-xs">🇳🇱 Olanda</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Software cloud pentru business. Popular în Europa de Vest.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-accounting-exact/20 text-rose-400 text-xs">OAuth2</span>
            <span class="px-2 py-1 rounded bg-accounting-exact/20 text-rose-400 text-xs">Cloud</span>
          </div>
        </div>

        <!-- Xero -->
        <div class="provider-card reveal" style="--provider-color: #13B5EA;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #13B5EA, #0EA5E9);">
              <span class="text-white font-bold">X</span>
            </div>
            <div>
              <div class="text-white font-semibold">Xero</div>
              <div class="text-white/40 text-xs">🌍 Global</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Contabilitate bazată pe cloud. Excelent pentru startup-uri și SMB-uri.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-accounting-xero/20 text-cyan-400 text-xs">OAuth2</span>
            <span class="px-2 py-1 rounded bg-accounting-xero/20 text-cyan-400 text-xs">Multi-valută</span>
          </div>
        </div>

        <!-- QuickBooks -->
        <div class="provider-card reveal reveal-delay-1" style="--provider-color: #2CA01C;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #2CA01C, #22C55E);">
              <span class="text-white font-bold">QB</span>
            </div>
            <div>
              <div class="text-white font-semibold">QuickBooks</div>
              <div class="text-white/40 text-xs">🇺🇸 SUA</div>
            </div>
          </div>
          <p class="text-white/50 text-sm mb-4">Contabilitate pentru afaceri mici. Lider de piață în SUA.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-accounting-quickbooks/20 text-green-400 text-xs">OAuth2</span>
            <span class="px-2 py-1 rounded bg-accounting-quickbooks/20 text-green-400 text-xs">Invoicing</span>
          </div>
        </div>

        <!-- More Coming -->
        <div class="provider-card reveal reveal-delay-2 border-dashed" style="--provider-color: #6B7280;">
          <div class="flex items-center justify-center h-full min-h-[180px]">
            <div class="text-center">
              <div class="w-12 h-12 rounded-xl bg-white/5 border border-dashed border-white/20 flex items-center justify-center mx-auto mb-3">
                <svg class="w-6 h-6 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
              </div>
              <div class="text-white/40 text-sm">Mai mulți furnizori în curând</div>
              <div class="text-white/30 text-xs mt-1">Solicită integrarea ta</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== MAPPING WIZARD ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Expert Mapare</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Conectează<br><span class="text-gradient-accounting">structurile de date</span></h2>
          <p class="text-lg text-white/60 mb-8">Expertul inteligent te ghidează prin maparea produselor, taxelor, conturilor și seriilor de facturi.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-violet/10 border border-brand-violet/30">
              <div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Produse → Articole</span>
                <p class="text-white/50 text-sm">Tipuri bilete la produsele din contabilitate</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-accounting-accent/20 flex items-center justify-center flex-shrink-0">
                <span class="text-accounting-accent font-bold">%</span>
              </div>
              <div>
                <span class="text-white font-medium">Taxe → Cote TVA</span>
                <p class="text-white/50 text-sm">19% standard, 9% redus, etc.</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-accounting-primary/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Conturi → Plan Contabil</span>
                <p class="text-white/50 text-sm">411 venituri, 4111 creanțe</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Serii → Serii Facturi</span>
                <p class="text-white/50 text-sm">EPAS, STORNO, etc.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Mapping UI -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="text-white font-semibold">Expert Mapare</div>
              <span class="text-accounting-accent text-xs">Pas 2 din 4</span>
            </div>

            <!-- Progress -->
            <div class="flex items-center gap-2 mb-6">
              <div class="flex-1 h-2 rounded-full bg-accounting-accent"></div>
              <div class="flex-1 h-2 rounded-full bg-accounting-accent"></div>
              <div class="flex-1 h-2 rounded-full bg-white/10"></div>
              <div class="flex-1 h-2 rounded-full bg-white/10"></div>
            </div>

            <div class="text-white/40 text-xs uppercase mb-4">Mapare Produse</div>

            <!-- Mapping Rows -->
            <div class="space-y-4">
              <div class="p-4 rounded-xl bg-dark-900/50 border border-white/10">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white/70 text-sm">Bilet General</span>
                  <span class="text-accounting-accent text-xs">✓ Mapat</span>
                </div>
                <div class="grid grid-cols-5 gap-2 items-center">
                  <div class="col-span-2">
                    <div class="px-3 py-2 rounded bg-brand-violet/20 text-brand-violet text-xs font-mono">ticket_general</div>
                  </div>
                  <div class="col-span-1 flex justify-center">
                    <div class="mapping-connector w-full"></div>
                  </div>
                  <div class="col-span-2">
                    <select class="form-select text-xs">
                      <option selected>Bilet Eveniment</option>
                      <option>Serviciu</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="p-4 rounded-xl bg-dark-900/50 border border-white/10">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white/70 text-sm">Bilet VIP</span>
                  <span class="text-accounting-accent text-xs">✓ Mapat</span>
                </div>
                <div class="grid grid-cols-5 gap-2 items-center">
                  <div class="col-span-2">
                    <div class="px-3 py-2 rounded bg-brand-violet/20 text-brand-violet text-xs font-mono">ticket_vip</div>
                  </div>
                  <div class="col-span-1 flex justify-center">
                    <div class="mapping-connector w-full"></div>
                  </div>
                  <div class="col-span-2">
                    <select class="form-select text-xs">
                      <option selected>Bilet Premium</option>
                      <option>Serviciu VIP</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="p-4 rounded-xl bg-dark-900/50 border border-accounting-warning/30">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white/70 text-sm">Taxă Serviciu</span>
                  <span class="text-accounting-warning text-xs">⚠ Necesită mapare</span>
                </div>
                <div class="grid grid-cols-5 gap-2 items-center">
                  <div class="col-span-2">
                    <div class="px-3 py-2 rounded bg-brand-violet/20 text-brand-violet text-xs font-mono">service_fee</div>
                  </div>
                  <div class="col-span-1 flex justify-center">
                    <div class="h-0.5 w-full bg-white/20"></div>
                  </div>
                  <div class="col-span-2">
                    <select class="form-select text-xs border-accounting-warning/50">
                      <option>Selectează produsul...</option>
                      <option>Taxă Procesare</option>
                      <option>Comision</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex justify-between mt-6 pt-4 border-t border-white/10">
              <button class="px-4 py-2 rounded-lg text-white/50 text-sm hover:text-white transition-colors">← Înapoi</button>
              <button class="px-6 py-2 rounded-lg bg-accounting-primary text-white text-sm font-medium hover:bg-accounting-secondary transition-colors">Continuă →</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== AUTO SYNC ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-accounting-accent text-sm font-medium uppercase tracking-widest">Sincronizare Automată</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Clienți, produse,<br><span class="text-gradient-accounting">facturi</span></h2>
        <p class="text-lg text-white/60">ensureCustomer, ensureProducts, createInvoice - totul automat.</p>
      </div>

      <!-- Sync Steps -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="grid md:grid-cols-4 gap-6">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="w-16 h-16 rounded-2xl bg-accounting-primary/20 border border-accounting-primary/30 flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="text-white font-medium text-sm mb-1">ensureCustomer</div>
            <p class="text-white/40 text-xs">Verifică sau creează clientul</p>
          </div>

          <!-- Arrow -->
          <div class="hidden md:flex items-center justify-center">
            <svg class="w-8 h-8 text-accounting-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="w-16 h-16 rounded-2xl bg-brand-violet/20 border border-brand-violet/30 flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div class="text-white font-medium text-sm mb-1">ensureProducts</div>
            <p class="text-white/40 text-xs">Verifică produsele și taxele</p>
          </div>

          <!-- Arrow -->
          <div class="hidden md:flex items-center justify-center">
            <svg class="w-8 h-8 text-accounting-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>

          <!-- Step 3 -->
          <div class="text-center md:col-start-1 lg:col-start-auto">
            <div class="w-16 h-16 rounded-2xl bg-accounting-accent/20 border border-accounting-accent/30 flex items-center justify-center mx-auto mb-4 animate-accounting-pulse">
              <svg class="w-8 h-8 text-accounting-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div class="text-white font-medium text-sm mb-1">createInvoice</div>
            <p class="text-white/40 text-xs">Emite factura în sistem</p>
          </div>
        </div>

        <!-- Features Grid -->
        <div class="grid md:grid-cols-3 gap-6 mt-12">
          <!-- Credit Notes -->
          <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-rose/20 hover:border-brand-rose/50 transition-all duration-500">
            <div class="w-12 h-12 rounded-xl bg-brand-rose/10 flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"/></svg>
            </div>
            <h3 class="text-lg font-semibold text-white mb-2">Note de Creditare</h3>
            <p class="text-white/50 text-sm">Generate automat pentru returnări. Sincronizate instant.</p>
          </div>

          <!-- PDF Delivery -->
          <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-accounting-primary/20 hover:border-accounting-primary/50 transition-all duration-500">
            <div class="w-12 h-12 rounded-xl bg-accounting-primary/10 flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <h3 class="text-lg font-semibold text-white mb-2">Livrare PDF</h3>
            <p class="text-white/50 text-sm">Recuperăm PDF-ul de la furnizor și îl livrăm clientului.</p>
          </div>

          <!-- eFactura -->
          <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-amber/20 hover:border-brand-amber/50 transition-all duration-500">
            <div class="w-12 h-12 rounded-xl bg-brand-amber/10 flex items-center justify-center mb-4">
              <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <h3 class="text-lg font-semibold text-white mb-2">Integrare eFactura</h3>
            <p class="text-white/50 text-sm">Gestionată de furnizor sau de platforma noastră. Tu alegi.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RELIABILITY ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Job Queue -->
        <div class="reveal order-2 lg:order-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="text-white font-semibold">Coadă de Procesare</div>
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-accounting-success animate-pulse"></span>
                <span class="text-accounting-success text-xs">Activă</span>
              </div>
            </div>

            <!-- Queue Items -->
            <div class="space-y-3">
              <div class="queue-item flex items-center justify-between animate-queue-slide">
                <div class="flex items-center gap-3">
                  <span class="w-8 h-8 rounded bg-accounting-success/20 flex items-center justify-center">
                    <svg class="w-4 h-4 text-accounting-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <div>
                    <div class="text-white text-sm">Factură #INV-147</div>
                    <div class="text-white/40 text-xs">create_invoice</div>
                  </div>
                </div>
                <span class="sync-status success">Completat</span>
              </div>

              <div class="queue-item flex items-center justify-between animate-queue-slide" style="animation-delay: 0.1s;">
                <div class="flex items-center gap-3">
                  <span class="w-8 h-8 rounded bg-accounting-pending/20 flex items-center justify-center">
                    <svg class="w-4 h-4 text-accounting-pending animate-spin" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </span>
                  <div>
                    <div class="text-white text-sm">Client Maria P.</div>
                    <div class="text-white/40 text-xs">ensure_customer</div>
                  </div>
                </div>
                <span class="sync-status pending">Procesare</span>
              </div>

              <div class="queue-item flex items-center justify-between animate-queue-slide" style="animation-delay: 0.2s;">
                <div class="flex items-center gap-3">
                  <span class="w-8 h-8 rounded bg-accounting-warning/20 flex items-center justify-center">
                    <svg class="w-4 h-4 text-accounting-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </span>
                  <div>
                    <div class="text-white text-sm">Factură #INV-145</div>
                    <div class="text-white/40 text-xs">Încercare 2/3</div>
                  </div>
                </div>
                <span class="sync-status retry">Retry</span>
              </div>
            </div>

            <!-- Retry Logic -->
            <div class="mt-6 p-4 rounded-xl bg-accounting-warning/10 border border-accounting-warning/20">
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-accounting-warning flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                <div>
                  <div class="text-accounting-warning font-medium text-sm">Logică de Reîncercare</div>
                  <div class="text-white/50 text-xs mt-1">Max 3 încercări • Delay: 60s între încercări • Failover automat la DLQ</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal reveal-delay-1 order-1 lg:order-2">
          <span class="text-accounting-warning text-sm font-medium uppercase tracking-widest">Fiabilitate</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Nimic nu se<br><span class="text-gradient animate-shimmer">pierde</span></h2>
          <p class="text-lg text-white/60 mb-8">Coadă de joburi cu reîncercare, dead-letter queue, jurnal complet. Zero pierderi de date.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-accounting-success flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Retry Automat</span>
                <p class="text-white/50 text-sm">3 încercări cu delay exponențial</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-brand-rose flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Dead Letter Queue</span>
                <p class="text-white/50 text-sm">Erorile persistente sunt izolate pentru analiză</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-accounting-primary flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Jurnal Complet</span>
                <p class="text-white/50 text-sm">Fiecare tranzacție este logată pentru audit</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="w-10 h-10 rounded-lg bg-accounting-accent flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Credențiale Criptate</span>
                <p class="text-white/50 text-sm">Stocare securizată cu encripție AES-256</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-accounting-primary/10 to-accounting-accent/10 rounded-3xl p-8 md:p-12 border border-accounting-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Echipa de contabilitate petrecea <span class="text-gradient-accounting font-semibold">4 ore pe zi</span> introducând facturi manual. Acum totul e automat. Sincronizare SmartBill perfectă."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-accounting-primary to-accounting-accent flex items-center justify-center">
              <span class="text-white font-bold">IC</span>
            </div>
            <div>
              <div class="font-semibold text-white">Ioana C.</div>
              <div class="text-white/50">CFO, Live Events Romania</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-accounting-primary/10 via-transparent to-accounting-accent/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(79,70,229,0.2) 0%, rgba(16,185,129,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">📊</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">🔄</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Conectori<br><span class="text-gradient-accounting">Contabilitate</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Sincronizare automată cu SmartBill, FGO, Exact, Xero, QuickBooks. Zero erori, zero introducere manuală.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-accounting-primary text-white hover:bg-accounting-secondary hover:scale-105 hover:shadow-glow-indigo transition-all duration-300">
          Conectează Contabilitatea
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">SmartBill • FGO • Exact • Xero • QuickBooks • eFactura • OAuth2 • Auto Retry</p>
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
