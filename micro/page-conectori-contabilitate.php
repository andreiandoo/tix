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

<div class="overflow-x-hidden font-body bg-dark-900 text-zinc-200" x-data="{ mobileMenu: false }">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #4F46E5, #10B981, #7C3AED);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="relative flex items-center min-h-screen pt-20 overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-accounting-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-accounting-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute text-2xl top-32 left-16 opacity-30 animate-float">📊</div>
    <div class="absolute text-xl bottom-40 right-24 opacity-20 animate-float" style="animation-delay: 1s;">🔄</div>
    <div class="absolute text-3xl top-1/2 right-16 opacity-10 animate-float" style="animation-delay: 2s;">📑</div>

    <div class="px-6 py-20 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-12 lg:grid-cols-2 lg:gap-16">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 mb-6 border rounded-full bg-accounting-primary/10 border-accounting-primary/20">
            <svg class="w-5 h-5 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
            <span class="text-sm font-medium text-accounting-primary">Sincronizare Contabilitate</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Conectori<br><span class="text-gradient-accounting">Contabilitate</span>
          </h1>

          <!-- Description -->
          <p class="max-w-xl mb-8 text-xl leading-relaxed text-white/60">
            Sincronizare automată cu <strong class="text-white">SmartBill, FGO, Exact, Xero, QuickBooks</strong>. Zero introducere manuală, zero erori.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 rounded-full group bg-accounting-primary hover:bg-accounting-secondary hover:scale-105 hover:shadow-glow-indigo">
              Conectează Contabilitatea
              <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#furnizori" class="inline-flex items-center gap-2 px-8 py-4 font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
              Vezi Furnizorii
            </a>
          </div>

          <!-- Quick features -->
          <div class="flex flex-wrap items-center gap-4">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
              <span class="text-sm text-white/60">Auto Sync</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-accounting-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              <span class="text-sm text-white/60">OAuth2 Securizat</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              <span class="text-sm text-white/60">eFactura</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Sync Flow -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{ syncing: false, syncedCount: 147 }" x-init="setInterval(() => { syncing = true; setTimeout(() => { syncing = false; syncedCount++; }, 2000); }, 5000)">

            <!-- Main Sync Card -->
            <div class="overflow-hidden border shadow-2xl bg-dark-800/80 backdrop-blur-xl rounded-2xl border-accounting-primary/20">
              <!-- Header -->
              <div class="flex items-center justify-between px-6 py-4 border-b border-white/10">
                <div class="flex items-center gap-3">
                  <div class="flex items-center justify-center w-10 h-10 rounded-xl bg-accounting-primary/20">
                    <svg class="w-5 h-5 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </div>
                  <div>
                    <div class="font-semibold text-white">Sincronizare Activă</div>
                    <div class="text-xs text-white/40">SmartBill conectat</div>
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
                    <div class="flex items-center justify-center w-16 h-16 mx-auto mb-2 rounded-2xl bg-gradient-to-br from-brand-violet to-brand-cyan">
                      <span class="text-xl font-bold text-white font-display">T</span>
                    </div>
                    <div class="text-sm font-medium text-white">Tixello</div>
                  </div>

                  <!-- Sync Arrow -->
                  <div class="relative flex-1 mx-4">
                    <div class="h-0.5 bg-gradient-to-r from-brand-violet via-accounting-primary to-accounting-smartbill"></div>
                    <div class="absolute flex items-center justify-center w-8 h-8 -translate-x-1/2 -translate-y-1/2 border-2 rounded-full top-1/2 left-1/2 bg-dark-800 border-accounting-primary" :class="syncing ? 'animate-spin' : ''">
                      <svg class="w-4 h-4 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </div>
                  </div>

                  <!-- SmartBill -->
                  <div class="text-center">
                    <div class="mx-auto mb-2 provider-logo" style="background: linear-gradient(135deg, #FFB800, #FF9500);">
                      <span class="font-bold text-white">SB</span>
                    </div>
                    <div class="text-sm font-medium text-white">SmartBill</div>
                  </div>
                </div>

                <!-- Recent Syncs -->
                <div class="space-y-2">
                  <div class="mb-2 text-xs uppercase text-white/40">Sincronizări recente</div>
                  <div class="flex items-center justify-between queue-item">
                    <div class="flex items-center gap-3">
                      <span class="w-2 h-2 rounded-full bg-accounting-success"></span>
                      <span class="text-sm text-white/70">Factură #INV-2025-147</span>
                    </div>
                    <span class="text-xs text-accounting-success">✓ Sincronizat</span>
                  </div>
                  <div class="flex items-center justify-between queue-item">
                    <div class="flex items-center gap-3">
                      <span class="w-2 h-2 rounded-full bg-accounting-success"></span>
                      <span class="text-sm text-white/70">Factură #INV-2025-146</span>
                    </div>
                    <span class="text-xs text-accounting-success">✓ Sincronizat</span>
                  </div>
                  <div class="flex items-center justify-between queue-item" x-show="syncing">
                    <div class="flex items-center gap-3">
                      <span class="w-2 h-2 rounded-full bg-accounting-pending animate-pulse"></span>
                      <span class="text-sm text-white/70">Factură #INV-2025-148</span>
                    </div>
                    <span class="text-xs text-accounting-pending">⟳ În curs...</span>
                  </div>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-3 pt-4 mt-4 border-t border-white/10">
                  <div class="text-center">
                    <div class="text-xl font-bold text-accounting-primary" x-text="syncedCount">147</div>
                    <div class="text-xs text-white/40">Sincronizate azi</div>
                  </div>
                  <div class="text-center">
                    <div class="text-xl font-bold text-accounting-success">99.2%</div>
                    <div class="text-xs text-white/40">Rată succes</div>
                  </div>
                  <div class="text-center">
                    <div class="text-xl font-bold text-brand-amber">0.8s</div>
                    <div class="text-xs text-white/40">Latență medie</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Provider Badge -->
            <div class="absolute z-10 px-4 py-3 border shadow-xl -top-4 -right-4 bg-dark-800 rounded-xl border-accounting-smartbill/30 animate-float">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 text-xs provider-logo" style="background: linear-gradient(135deg, #FFB800, #FF9500);">SB</div>
                <div>
                  <div class="text-sm font-medium text-accounting-smartbill">SmartBill</div>
                  <div class="text-xs text-white/40">Conectat</div>
                </div>
              </div>
            </div>

            <!-- Floating Security Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-accounting-accent/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-accounting-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                <div>
                  <div class="text-sm font-medium text-accounting-accent">Criptat</div>
                  <div class="text-xs text-white/40">Credențiale securizate</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PROVIDERS ==================== -->
  <section class="relative py-24 overflow-hidden" id="furnizori">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <!-- Section Header -->
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-accounting-primary">Furnizori Suportați</span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Software-ul tău de<br><span class="text-gradient-accounting">contabilitate preferat</span></h2>
        <p class="text-lg text-white/60">Pattern adaptor agnostic de furnizor. Conectează ce folosești deja.</p>
      </div>

      <!-- Providers Grid -->
      <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
        <!-- SmartBill -->
        <div class="provider-card reveal" style="--provider-color: #FFB800;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #FFB800, #FF9500);">
              <span class="font-bold text-white">SB</span>
            </div>
            <div>
              <div class="font-semibold text-white">SmartBill</div>
              <div class="text-xs text-white/40">🇷🇴 România</div>
            </div>
            <span class="ml-auto sync-status success">Popular</span>
          </div>
          <p class="mb-4 text-sm text-white/50">Software popular de contabilitate românesc. Integrare completă cu eFactura și raportare ANAF.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-accounting-smartbill/20 text-accounting-smartbill">API Key</span>
            <span class="px-2 py-1 text-xs rounded bg-accounting-smartbill/20 text-accounting-smartbill">eFactura</span>
          </div>
        </div>

        <!-- FGO -->
        <div class="provider-card reveal reveal-delay-1" style="--provider-color: #1E40AF;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #1E40AF, #3B82F6);">
              <span class="font-bold text-white">FGO</span>
            </div>
            <div>
              <div class="font-semibold text-white">FGO</div>
              <div class="text-xs text-white/40">🇷🇴 România</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50">Planificare resurse enterprise. Soluție completă pentru business-uri mari.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs text-blue-400 rounded bg-accounting-fgo/20">OAuth2</span>
            <span class="px-2 py-1 text-xs text-blue-400 rounded bg-accounting-fgo/20">ERP</span>
          </div>
        </div>

        <!-- Exact -->
        <div class="provider-card reveal reveal-delay-2" style="--provider-color: #E11D48;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #E11D48, #F43F5E);">
              <span class="font-bold text-white">Ex</span>
            </div>
            <div>
              <div class="font-semibold text-white">Exact</div>
              <div class="text-xs text-white/40">🇳🇱 Olanda</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50">Software cloud pentru business. Popular în Europa de Vest.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-accounting-exact/20 text-rose-400">OAuth2</span>
            <span class="px-2 py-1 text-xs rounded bg-accounting-exact/20 text-rose-400">Cloud</span>
          </div>
        </div>

        <!-- Xero -->
        <div class="provider-card reveal" style="--provider-color: #13B5EA;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #13B5EA, #0EA5E9);">
              <span class="font-bold text-white">X</span>
            </div>
            <div>
              <div class="font-semibold text-white">Xero</div>
              <div class="text-xs text-white/40">🌍 Global</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50">Contabilitate bazată pe cloud. Excelent pentru startup-uri și SMB-uri.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs rounded bg-accounting-xero/20 text-cyan-400">OAuth2</span>
            <span class="px-2 py-1 text-xs rounded bg-accounting-xero/20 text-cyan-400">Multi-valută</span>
          </div>
        </div>

        <!-- QuickBooks -->
        <div class="provider-card reveal reveal-delay-1" style="--provider-color: #2CA01C;">
          <div class="flex items-center gap-4 mb-4">
            <div class="provider-logo" style="background: linear-gradient(135deg, #2CA01C, #22C55E);">
              <span class="font-bold text-white">QB</span>
            </div>
            <div>
              <div class="font-semibold text-white">QuickBooks</div>
              <div class="text-xs text-white/40">🇺🇸 SUA</div>
            </div>
          </div>
          <p class="mb-4 text-sm text-white/50">Contabilitate pentru afaceri mici. Lider de piață în SUA.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 text-xs text-green-400 rounded bg-accounting-quickbooks/20">OAuth2</span>
            <span class="px-2 py-1 text-xs text-green-400 rounded bg-accounting-quickbooks/20">Invoicing</span>
          </div>
        </div>

        <!-- More Coming -->
        <div class="border-dashed provider-card reveal reveal-delay-2" style="--provider-color: #6B7280;">
          <div class="flex items-center justify-center h-full min-h-[180px]">
            <div class="text-center">
              <div class="flex items-center justify-center w-12 h-12 mx-auto mb-3 border border-dashed rounded-xl bg-white/5 border-white/20">
                <svg class="w-6 h-6 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
              </div>
              <div class="text-sm text-white/40">Mai mulți furnizori în curând</div>
              <div class="mt-1 text-xs text-white/30">Solicită integrarea ta</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== MAPPING WIZARD ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Content -->
        <div class="reveal">
          <span class="text-sm font-medium tracking-widest uppercase text-brand-violet">Expert Mapare</span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Conectează<br><span class="text-gradient-accounting">structurile de date</span></h2>
          <p class="mb-8 text-lg text-white/60">Expertul inteligent te ghidează prin maparea produselor, taxelor, conturilor și seriilor de facturi.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 border rounded-xl bg-brand-violet/10 border-brand-violet/30">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-violet/20">
                <svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Produse → Articole</span>
                <p class="text-sm text-white/50">Tipuri bilete la produsele din contabilitate</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-accounting-accent/20">
                <span class="font-bold text-accounting-accent">%</span>
              </div>
              <div>
                <span class="font-medium text-white">Taxe → Cote TVA</span>
                <p class="text-sm text-white/50">19% standard, 9% redus, etc.</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-accounting-primary/20">
                <svg class="w-6 h-6 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Conturi → Plan Contabil</span>
                <p class="text-sm text-white/50">411 venituri, 4111 creanțe</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 border rounded-xl bg-dark-800/50 border-white/10">
              <div class="flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-xl bg-brand-amber/20">
                <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Serii → Serii Facturi</span>
                <p class="text-sm text-white/50">EPAS, STORNO, etc.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Mapping UI -->
        <div class="reveal reveal-delay-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="font-semibold text-white">Expert Mapare</div>
              <span class="text-xs text-accounting-accent">Pas 2 din 4</span>
            </div>

            <!-- Progress -->
            <div class="flex items-center gap-2 mb-6">
              <div class="flex-1 h-2 rounded-full bg-accounting-accent"></div>
              <div class="flex-1 h-2 rounded-full bg-accounting-accent"></div>
              <div class="flex-1 h-2 rounded-full bg-white/10"></div>
              <div class="flex-1 h-2 rounded-full bg-white/10"></div>
            </div>

            <div class="mb-4 text-xs uppercase text-white/40">Mapare Produse</div>

            <!-- Mapping Rows -->
            <div class="space-y-4">
              <div class="p-4 border rounded-xl bg-dark-900/50 border-white/10">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-sm text-white/70">Bilet General</span>
                  <span class="text-xs text-accounting-accent">✓ Mapat</span>
                </div>
                <div class="grid items-center grid-cols-5 gap-2">
                  <div class="col-span-2">
                    <div class="px-3 py-2 font-mono text-xs rounded bg-brand-violet/20 text-brand-violet">ticket_general</div>
                  </div>
                  <div class="flex justify-center col-span-1">
                    <div class="w-full mapping-connector"></div>
                  </div>
                  <div class="col-span-2">
                    <select class="text-xs form-select">
                      <option selected>Bilet Eveniment</option>
                      <option>Serviciu</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="p-4 border rounded-xl bg-dark-900/50 border-white/10">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-sm text-white/70">Bilet VIP</span>
                  <span class="text-xs text-accounting-accent">✓ Mapat</span>
                </div>
                <div class="grid items-center grid-cols-5 gap-2">
                  <div class="col-span-2">
                    <div class="px-3 py-2 font-mono text-xs rounded bg-brand-violet/20 text-brand-violet">ticket_vip</div>
                  </div>
                  <div class="flex justify-center col-span-1">
                    <div class="w-full mapping-connector"></div>
                  </div>
                  <div class="col-span-2">
                    <select class="text-xs form-select">
                      <option selected>Bilet Premium</option>
                      <option>Serviciu VIP</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class="p-4 border rounded-xl bg-dark-900/50 border-accounting-warning/30">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-sm text-white/70">Taxă Serviciu</span>
                  <span class="text-xs text-accounting-warning">⚠ Necesită mapare</span>
                </div>
                <div class="grid items-center grid-cols-5 gap-2">
                  <div class="col-span-2">
                    <div class="px-3 py-2 font-mono text-xs rounded bg-brand-violet/20 text-brand-violet">service_fee</div>
                  </div>
                  <div class="flex justify-center col-span-1">
                    <div class="h-0.5 w-full bg-white/20"></div>
                  </div>
                  <div class="col-span-2">
                    <select class="text-xs form-select border-accounting-warning/50">
                      <option>Selectează produsul...</option>
                      <option>Taxă Procesare</option>
                      <option>Comision</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex justify-between pt-4 mt-6 border-t border-white/10">
              <button class="px-4 py-2 text-sm transition-colors rounded-lg text-white/50 hover:text-white">← Înapoi</button>
              <button class="px-6 py-2 text-sm font-medium text-white transition-colors rounded-lg bg-accounting-primary hover:bg-accounting-secondary">Continuă →</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== AUTO SYNC ==================== -->
  <section class="relative py-24 overflow-hidden">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="max-w-3xl mx-auto mb-16 text-center reveal">
        <span class="text-sm font-medium tracking-widest uppercase text-accounting-accent">Sincronizare Automată</span>
        <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Clienți, produse,<br><span class="text-gradient-accounting">facturi</span></h2>
        <p class="text-lg text-white/60">ensureCustomer, ensureProducts, createInvoice - totul automat.</p>
      </div>

      <!-- Sync Steps -->
      <div class="max-w-4xl mx-auto reveal">
        <div class="grid gap-6 md:grid-cols-4">
          <!-- Step 1 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 border rounded-2xl bg-accounting-primary/20 border-accounting-primary/30">
              <svg class="w-8 h-8 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div class="mb-1 text-sm font-medium text-white">ensureCustomer</div>
            <p class="text-xs text-white/40">Verifică sau creează clientul</p>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden md:flex">
            <svg class="w-8 h-8 text-accounting-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>

          <!-- Step 2 -->
          <div class="text-center">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 border rounded-2xl bg-brand-violet/20 border-brand-violet/30">
              <svg class="w-8 h-8 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
            </div>
            <div class="mb-1 text-sm font-medium text-white">ensureProducts</div>
            <p class="text-xs text-white/40">Verifică produsele și taxele</p>
          </div>

          <!-- Arrow -->
          <div class="items-center justify-center hidden md:flex">
            <svg class="w-8 h-8 text-accounting-primary/50" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
          </div>

          <!-- Step 3 -->
          <div class="text-center md:col-start-1 lg:col-start-auto">
            <div class="flex items-center justify-center w-16 h-16 mx-auto mb-4 border rounded-2xl bg-accounting-accent/20 border-accounting-accent/30 animate-accounting-pulse">
              <svg class="w-8 h-8 text-accounting-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div class="mb-1 text-sm font-medium text-white">createInvoice</div>
            <p class="text-xs text-white/40">Emite factura în sistem</p>
          </div>
        </div>

        <!-- Features Grid -->
        <div class="grid gap-6 mt-12 md:grid-cols-3">
          <!-- Credit Notes -->
          <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-brand-rose/20 hover:border-brand-rose/50">
            <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-brand-rose/10">
              <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 14l6-6m-5.5.5h.01m4.99 5h.01M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16l3.5-2 3.5 2 3.5-2 3.5 2zM10 8.5a.5.5 0 11-1 0 .5.5 0 011 0zm5 5a.5.5 0 11-1 0 .5.5 0 011 0z"/></svg>
            </div>
            <h3 class="mb-2 text-lg font-semibold text-white">Note de Creditare</h3>
            <p class="text-sm text-white/50">Generate automat pentru returnări. Sincronizate instant.</p>
          </div>

          <!-- PDF Delivery -->
          <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-accounting-primary/20 hover:border-accounting-primary/50">
            <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-accounting-primary/10">
              <svg class="w-6 h-6 text-accounting-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <h3 class="mb-2 text-lg font-semibold text-white">Livrare PDF</h3>
            <p class="text-sm text-white/50">Recuperăm PDF-ul de la furnizor și îl livrăm clientului.</p>
          </div>

          <!-- eFactura -->
          <div class="relative p-6 transition-all duration-500 border feature-card bg-dark-800/50 rounded-2xl border-brand-amber/20 hover:border-brand-amber/50">
            <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-xl bg-brand-amber/10">
              <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
            </div>
            <h3 class="mb-2 text-lg font-semibold text-white">Integrare eFactura</h3>
            <p class="text-sm text-white/50">Gestionată de furnizor sau de platforma noastră. Tu alegi.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== RELIABILITY ==================== -->
  <section class="relative py-24 bg-dark-850">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">
      <div class="grid items-center gap-16 lg:grid-cols-2">
        <!-- Visual - Job Queue -->
        <div class="order-2 reveal lg:order-1">
          <div class="p-6 border bg-dark-800 rounded-2xl border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="font-semibold text-white">Coadă de Procesare</div>
              <div class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-accounting-success animate-pulse"></span>
                <span class="text-xs text-accounting-success">Activă</span>
              </div>
            </div>

            <!-- Queue Items -->
            <div class="space-y-3">
              <div class="flex items-center justify-between queue-item animate-queue-slide">
                <div class="flex items-center gap-3">
                  <span class="flex items-center justify-center w-8 h-8 rounded bg-accounting-success/20">
                    <svg class="w-4 h-4 text-accounting-success" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  </span>
                  <div>
                    <div class="text-sm text-white">Factură #INV-147</div>
                    <div class="text-xs text-white/40">create_invoice</div>
                  </div>
                </div>
                <span class="sync-status success">Completat</span>
              </div>

              <div class="flex items-center justify-between queue-item animate-queue-slide" style="animation-delay: 0.1s;">
                <div class="flex items-center gap-3">
                  <span class="flex items-center justify-center w-8 h-8 rounded bg-accounting-pending/20">
                    <svg class="w-4 h-4 text-accounting-pending animate-spin" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </span>
                  <div>
                    <div class="text-sm text-white">Client Maria P.</div>
                    <div class="text-xs text-white/40">ensure_customer</div>
                  </div>
                </div>
                <span class="sync-status pending">Procesare</span>
              </div>

              <div class="flex items-center justify-between queue-item animate-queue-slide" style="animation-delay: 0.2s;">
                <div class="flex items-center gap-3">
                  <span class="flex items-center justify-center w-8 h-8 rounded bg-accounting-warning/20">
                    <svg class="w-4 h-4 text-accounting-warning" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                  </span>
                  <div>
                    <div class="text-sm text-white">Factură #INV-145</div>
                    <div class="text-xs text-white/40">Încercare 2/3</div>
                  </div>
                </div>
                <span class="sync-status retry">Retry</span>
              </div>
            </div>

            <!-- Retry Logic -->
            <div class="p-4 mt-6 border rounded-xl bg-accounting-warning/10 border-accounting-warning/20">
              <div class="flex items-start gap-3">
                <svg class="w-5 h-5 text-accounting-warning flex-shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                <div>
                  <div class="text-sm font-medium text-accounting-warning">Logică de Reîncercare</div>
                  <div class="mt-1 text-xs text-white/50">Max 3 încercări • Delay: 60s între încercări • Failover automat la DLQ</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="order-1 reveal reveal-delay-1 lg:order-2">
          <span class="text-sm font-medium tracking-widest uppercase text-accounting-warning">Fiabilitate</span>
          <h2 class="mt-4 mb-6 text-4xl font-bold text-white font-display md:text-5xl">Nimic nu se<br><span class="text-gradient animate-shimmer">pierde</span></h2>
          <p class="mb-8 text-lg text-white/60">Coadă de joburi cu reîncercare, dead-letter queue, jurnal complet. Zero pierderi de date.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-accounting-success">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Retry Automat</span>
                <p class="text-sm text-white/50">3 încercări cu delay exponențial</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-brand-rose">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Dead Letter Queue</span>
                <p class="text-sm text-white/50">Erorile persistente sunt izolate pentru analiză</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-accounting-primary">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Jurnal Complet</span>
                <p class="text-sm text-white/50">Fiecare tranzacție este logată pentru audit</p>
              </div>
            </div>

            <div class="flex items-center gap-4">
              <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 rounded-lg bg-accounting-accent">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <span class="font-medium text-white">Credențiale Criptate</span>
                <p class="text-sm text-white/50">Stocare securizată cu encripție AES-256</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="relative py-24">
    <div class="max-w-4xl px-6 mx-auto lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="p-8 border bg-gradient-to-br from-accounting-primary/10 to-accounting-accent/10 rounded-3xl md:p-12 border-accounting-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="mb-8 text-2xl font-light leading-relaxed text-white md:text-3xl">
            "Echipa de contabilitate petrecea <span class="font-semibold text-gradient-accounting">4 ore pe zi</span> introducând facturi manual. Acum totul e automat. Sincronizare SmartBill perfectă."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="flex items-center justify-center rounded-full w-14 h-14 bg-gradient-to-br from-accounting-primary to-accounting-accent">
              <span class="font-bold text-white">IC</span>
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
  <section class="relative py-32 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-accounting-primary/10 via-transparent to-accounting-accent/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(79,70,229,0.2) 0%, rgba(16,185,129,0.1) 100%);"></div>

    <div class="absolute text-4xl top-20 left-20 opacity-20 animate-float">📊</div>
    <div class="absolute text-3xl bottom-20 right-20 opacity-20 animate-float" style="animation-delay: 1s;">🔄</div>

    <div class="relative max-w-4xl px-6 mx-auto text-center lg:px-8">
      <h2 class="mb-6 text-5xl font-bold text-white font-display md:text-7xl reveal">Conectori<br><span class="text-gradient-accounting">Contabilitate</span></h2>
      <p class="max-w-2xl mx-auto mb-10 text-xl text-white/60 reveal reveal-delay-1">Sincronizare automată cu SmartBill, FGO, Exact, Xero, QuickBooks. Zero erori, zero introducere manuală.</p>

      <div class="flex flex-col justify-center gap-4 sm:flex-row reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 rounded-full group bg-accounting-primary hover:bg-accounting-secondary hover:scale-105 hover:shadow-glow-indigo">
          Conectează Contabilitatea
          <svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 px-10 py-4 text-lg font-semibold text-white transition-all duration-300 bg-transparent border rounded-full border-white/20 hover:bg-white/10">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="mt-8 text-sm text-white/30 reveal reveal-delay-3">SmartBill • FGO • Exact • Xero • QuickBooks • eFactura • OAuth2 • Auto Retry</p>
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
