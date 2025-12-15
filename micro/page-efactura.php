<?php
/**
 * Template Name: eFactura Romania
 * Description: eFactura ANAF compliance page - automatic XML, digital signature, status monitoring
 */
get_header();
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #003366; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-anaf { background: linear-gradient(135deg, #003366 0%, #CFB53B 50%, #003366 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }
  .text-gradient-ro { background: linear-gradient(135deg, #002B7F 0%, #FCD116 50%, #CE1126 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(0, 51, 102, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  .anaf-badge {
    background: linear-gradient(135deg, #003366, #0055A4);
    border: 2px solid #CFB53B;
    border-radius: 8px;
    padding: 8px 16px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
  }

  .ro-stripe {
    height: 4px;
    background: linear-gradient(90deg, #002B7F 33.33%, #FCD116 33.33% 66.66%, #CE1126 66.66%);
    border-radius: 2px;
  }

  .status-badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
  }
  .status-badge.queued { background: rgba(99, 102, 241, 0.2); color: #818CF8; border: 1px solid rgba(99, 102, 241, 0.3); }
  .status-badge.submitted { background: rgba(245, 158, 11, 0.2); color: #FBBF24; border: 1px solid rgba(245, 158, 11, 0.3); }
  .status-badge.accepted { background: rgba(16, 185, 129, 0.2); color: #34D399; border: 1px solid rgba(16, 185, 129, 0.3); }
  .status-badge.rejected { background: rgba(239, 68, 68, 0.2); color: #F87171; border: 1px solid rgba(239, 68, 68, 0.3); }
  .status-badge.error { background: rgba(249, 115, 22, 0.2); color: #FB923C; border: 1px solid rgba(249, 115, 22, 0.3); }

  .queue-item { transition: all 0.3s; }
  .queue-item:hover { transform: translateX(4px); }

  .cert-badge {
    background: linear-gradient(135deg, rgba(207, 181, 59, 0.2), rgba(207, 181, 59, 0.1));
    border: 1px solid rgba(207, 181, 59, 0.3);
  }

  @keyframes shimmer {
    0% { background-position: 0% center; }
    100% { background-position: 200% center; }
  }
</style>

<div class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden" x-data="{ mobileMenu: false }">
  <div class="fixed top-0 left-0 h-1 z-[1001]" id="scroll-progress" style="background: linear-gradient(90deg, #002B7F, #FCD116, #CE1126);"></div>

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-anaf-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-anaf-gold/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">📄</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">✓</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">🏛️</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Romanian stripe -->
          <div class="ro-stripe w-32 mb-6"></div>

          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-anaf-primary/10 border border-anaf-primary/20 mb-6">
            <svg class="w-5 h-5 text-anaf-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            <span class="text-anaf-gold text-sm font-medium">Conformitate ANAF</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            <span class="text-gradient-ro">eFactura</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Trimitere automată la <strong class="text-white">ANAF SPV</strong>. Transformare XML, semnătură digitală, monitorizare status. Conformitate fiscală fără bătăi de cap.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-anaf-primary text-white hover:bg-anaf-secondary hover:scale-105 hover:shadow-glow-anaf transition-all duration-300">
              Activează eFactura
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Cum funcționează
            </a>
          </div>

          <!-- Trust badges -->
          <div class="flex items-center gap-4">
            <div class="anaf-badge">
              <svg class="w-5 h-5 text-anaf-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
              <span class="text-white text-sm font-medium">ANAF SPV</span>
            </div>
            <div class="px-3 py-1.5 rounded bg-anaf-gold/20 border border-anaf-gold/30">
              <span class="text-anaf-gold text-sm font-medium">UBL 2.1 / CII</span>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Queue & Status -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            activeInvoice: 0,
            invoices: [
              { id: 'INV-2025-001', company: 'TechCorp SRL', amount: '2,450', status: 'accepted' },
              { id: 'INV-2025-002', company: 'Events Pro', amount: '1,875', status: 'submitted' },
              { id: 'INV-2025-003', company: 'Festival Mgmt', amount: '5,200', status: 'queued' }
            ]
          }" x-init="setInterval(() => {
            activeInvoice = (activeInvoice + 1) % invoices.length;
          }, 3000)">

            <!-- Main Queue Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-2xl border border-anaf-primary/20 shadow-2xl overflow-hidden">
              <!-- Header -->
              <div class="px-6 py-4 border-b border-white/10 bg-anaf-primary/10">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-anaf-primary flex items-center justify-center">
                      <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <div>
                      <div class="text-white font-semibold">Coadă eFactura</div>
                      <div class="text-white/40 text-xs">ANAF SPV Integration</div>
                    </div>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-brand-green animate-pulse"></span>
                    <span class="text-brand-green text-xs">Conectat</span>
                  </div>
                </div>
              </div>

              <!-- Queue Items -->
              <div class="p-4 space-y-3">
                <template x-for="(invoice, index) in invoices" :key="invoice.id">
                  <div
                    class="queue-item p-4 rounded-xl transition-all duration-300"
                    :class="activeInvoice === index ? 'bg-anaf-primary/20 border border-anaf-primary/30' : 'bg-dark-900/50 border border-transparent'"
                  >
                    <div class="flex items-center justify-between mb-2">
                      <div class="flex items-center gap-3">
                        <div class="w-8 h-8 rounded-lg flex items-center justify-center"
                          :class="{
                            'bg-brand-green/20': invoice.status === 'accepted',
                            'bg-brand-amber/20': invoice.status === 'submitted',
                            'bg-brand-violet/20': invoice.status === 'queued'
                          }">
                          <svg x-show="invoice.status === 'accepted'" class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                          <svg x-show="invoice.status === 'submitted'" class="w-4 h-4 text-brand-amber animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                          <svg x-show="invoice.status === 'queued'" class="w-4 h-4 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
                        </div>
                        <div>
                          <div class="text-white text-sm font-medium" x-text="invoice.id"></div>
                          <div class="text-white/40 text-xs" x-text="invoice.company"></div>
                        </div>
                      </div>
                      <div class="text-right">
                        <div class="text-white font-medium" x-text="invoice.amount + ' RON'"></div>
                        <span
                          class="status-badge"
                          :class="invoice.status"
                          x-text="invoice.status === 'accepted' ? 'Acceptată' : invoice.status === 'submitted' ? 'Trimisă' : 'În coadă'"
                        ></span>
                      </div>
                    </div>
                  </div>
                </template>
              </div>

              <!-- Footer Stats -->
              <div class="px-4 py-3 border-t border-white/10 bg-dark-900/30">
                <div class="flex items-center justify-between">
                  <div class="flex items-center gap-4">
                    <div class="flex items-center gap-1">
                      <span class="w-2 h-2 rounded-full bg-brand-green"></span>
                      <span class="text-white/40 text-xs">147 acceptate</span>
                    </div>
                    <div class="flex items-center gap-1">
                      <span class="w-2 h-2 rounded-full bg-brand-amber"></span>
                      <span class="text-white/40 text-xs">3 în așteptare</span>
                    </div>
                  </div>
                  <span class="text-anaf-gold text-xs font-medium">98.5% rată succes</span>
                </div>
              </div>
            </div>

            <!-- Floating XML Badge -->
            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-anaf-gold/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-anaf-gold/20 flex items-center justify-center">
                  <span class="text-anaf-gold font-mono text-xs font-bold">&lt;/&gt;</span>
                </div>
                <div>
                  <div class="text-anaf-gold text-sm font-medium">UBL 2.1</div>
                  <div class="text-white/40 text-xs">XML Valid</div>
                </div>
              </div>
            </div>

            <!-- Floating Certificate Badge -->
            <div class="absolute -bottom-4 -left-4 cert-badge rounded-xl px-4 py-3 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-anaf-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                <div>
                  <div class="text-anaf-gold text-sm font-medium">Semnătură Digitală</div>
                  <div class="text-white/40 text-xs">XMLDSig</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== STATUS FLOW ==================== -->
  <section class="py-24 relative overflow-hidden" id="cum-functioneaza">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-anaf-gold text-sm font-medium uppercase tracking-widest">Flux Automat</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">De la factură la<br><span class="text-gradient-anaf">confirmare ANAF</span></h2>
        <p class="text-lg text-white/60">Procesare complet automată. Tu generezi factura, noi ne ocupăm de rest.</p>
      </div>

      <!-- Flow Visualization -->
      <div class="max-w-5xl mx-auto reveal">
        <div class="grid md:grid-cols-5 gap-4 items-center">
          <!-- Step 1: Invoice -->
          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-brand-violet/20 border border-brand-violet/30 flex items-center justify-center mx-auto mb-3">
              <svg class="w-10 h-10 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
            </div>
            <div class="text-white font-semibold mb-1">Factură</div>
            <div class="text-white/40 text-xs">Generată în platformă</div>
          </div>

          <!-- Arrow -->
          <div class="hidden md:flex items-center justify-center">
            <div class="w-full h-0.5 bg-gradient-to-r from-brand-violet to-brand-violet/50"></div>
            <svg class="w-4 h-4 text-brand-violet/50 -ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M10 17l5-5-5-5v10z"/></svg>
          </div>

          <!-- Step 2: XML Transform -->
          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-brand-violet/20 border border-brand-violet/30 flex items-center justify-center mx-auto mb-3">
              <span class="text-brand-violet font-mono text-xl font-bold">&lt;/&gt;</span>
            </div>
            <div class="text-white font-semibold mb-1">XML UBL</div>
            <div class="text-white/40 text-xs">Transformare automată</div>
          </div>

          <!-- Arrow -->
          <div class="hidden md:flex items-center justify-center">
            <div class="w-full h-0.5 bg-gradient-to-r from-brand-violet/50 to-brand-amber"></div>
            <svg class="w-4 h-4 text-brand-amber -ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M10 17l5-5-5-5v10z"/></svg>
          </div>

          <!-- Step 3: Submit -->
          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-brand-amber/20 border border-brand-amber/30 flex items-center justify-center mx-auto mb-3 relative">
              <svg class="w-10 h-10 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"/></svg>
            </div>
            <div class="text-white font-semibold mb-1">ANAF SPV</div>
            <div class="text-white/40 text-xs">Trimitere securizată</div>
          </div>
        </div>

        <!-- Second Row -->
        <div class="grid md:grid-cols-5 gap-4 items-center mt-8">
          <div class="hidden md:block"></div>
          <div class="hidden md:block"></div>

          <!-- Step 4: Processing -->
          <div class="text-center md:col-start-3">
            <div class="w-20 h-20 rounded-2xl bg-anaf-primary/20 border border-anaf-primary/30 flex items-center justify-center mx-auto mb-3">
              <svg class="w-10 h-10 text-anaf-secondary animate-pulse" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
            </div>
            <div class="text-white font-semibold mb-1">Validare</div>
            <div class="text-white/40 text-xs">ANAF procesează</div>
          </div>

          <!-- Arrow -->
          <div class="hidden md:flex items-center justify-center">
            <div class="w-full h-0.5 bg-gradient-to-r from-anaf-primary to-brand-green"></div>
            <svg class="w-4 h-4 text-brand-green -ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M10 17l5-5-5-5v10z"/></svg>
          </div>

          <!-- Step 5: Accepted -->
          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-brand-green/20 border border-brand-green/30 flex items-center justify-center mx-auto mb-3">
              <svg class="w-10 h-10 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="text-white font-semibold mb-1">Acceptată</div>
            <div class="text-white/40 text-xs">Confirmare ANAF</div>
          </div>
        </div>
      </div>

      <!-- Retry Note -->
      <div class="max-w-2xl mx-auto mt-12 reveal reveal-delay-1">
        <div class="p-4 rounded-xl bg-brand-amber/10 border border-brand-amber/30 flex items-center gap-4">
          <div class="w-12 h-12 rounded-xl bg-brand-amber/20 flex items-center justify-center flex-shrink-0">
            <svg class="w-6 h-6 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
          </div>
          <div>
            <div class="text-brand-amber font-medium">Reîncercare Automată</div>
            <div class="text-white/60 text-sm">La erori tranzitorii, sistemul reîncearcă automat cu backoff exponențial: 5min → 15min → 30min → 1h → 2h</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FEATURES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-cyan text-sm font-medium uppercase tracking-widest">Funcționalități</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Totul pentru<br><span class="text-gradient animate-shimmer">conformitate</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- XML Transform -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-anaf-primary/20 hover:border-anaf-primary/50 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-anaf-primary/10 flex items-center justify-center mb-4">
            <span class="text-anaf-gold font-mono text-xl font-bold">&lt;/&gt;</span>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Transformare XML</h3>
          <p class="text-white/50 text-sm mb-4">Conversie automată în format UBL 2.1 sau CII conform specificațiilor ANAF.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-anaf-primary/20 text-anaf-gold text-xs">UBL 2.1</span>
            <span class="px-2 py-1 rounded bg-anaf-primary/20 text-anaf-gold text-xs">CII</span>
          </div>
        </div>

        <!-- Digital Signature -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-anaf-gold/20 hover:border-anaf-gold/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-anaf-gold/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-anaf-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Semnătură Digitală</h3>
          <p class="text-white/50 text-sm mb-4">Semnare automată XMLDSig sau PKCS#7. Certificate stocate criptat.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-anaf-gold/20 text-anaf-gold text-xs">XMLDSig</span>
            <span class="px-2 py-1 rounded bg-anaf-gold/20 text-anaf-gold text-xs">PKCS#7</span>
          </div>
        </div>

        <!-- Smart Queue -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-violet/20 hover:border-brand-violet/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-brand-violet/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Coadă Inteligentă</h3>
          <p class="text-white/50 text-sm mb-4">Gestionare automată cu reîncercare. Fallback când ANAF e indisponibil.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-brand-violet/20 text-brand-violet text-xs">Auto-retry</span>
            <span class="px-2 py-1 rounded bg-brand-violet/20 text-brand-violet text-xs">Fallback</span>
          </div>
        </div>

        <!-- Idempotent -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-cyan/20 hover:border-brand-cyan/50 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-brand-cyan/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Idempotent</h3>
          <p class="text-white/50 text-sm mb-4">Hash XML previne duplicatele. Aceeași factură nu se trimite de două ori.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-brand-cyan/20 text-brand-cyan text-xs">SHA-256</span>
            <span class="px-2 py-1 rounded bg-brand-cyan/20 text-brand-cyan text-xs">Deduplicare</span>
          </div>
        </div>

        <!-- Multi-tenant -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-violet/20 hover:border-brand-violet/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-brand-violet/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Multi-Entitate</h3>
          <p class="text-white/50 text-sm mb-4">Gestionează mai multe entități legale. Certificate și credențiale izolate.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-brand-violet/20 text-brand-violet text-xs">Multi-tenant</span>
            <span class="px-2 py-1 rounded bg-brand-violet/20 text-brand-violet text-xs">Izolare</span>
          </div>
        </div>

        <!-- Audit -->
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-green/20 hover:border-brand-green/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-brand-green/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Audit Complet</h3>
          <p class="text-white/50 text-sm mb-4">Jurnale complete, trasabilitate. Export rapoarte CSV pentru verificări.</p>
          <div class="flex flex-wrap gap-2">
            <span class="px-2 py-1 rounded bg-brand-green/20 text-brand-green text-xs">Logs</span>
            <span class="px-2 py-1 rounded bg-brand-green/20 text-brand-green text-xs">Export CSV</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== DASHBOARD PREVIEW ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-green text-sm font-medium uppercase tracking-widest">Monitorizare</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Dashboard<br><span class="text-gradient-anaf">în timp real</span></h2>
          <p class="text-lg text-white/60 mb-8">Urmărește totul dintr-un singur loc. Status trimiteri, rate de succes, diagnostice erori.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-green/10 border border-brand-green/30">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Statistici Live</span>
                <p class="text-white/50 text-sm">Rate acceptare, timp procesare, erori pe tip</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-anaf-gold/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-anaf-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Download Confirmări</span>
                <p class="text-white/50 text-sm">Chitanțe și confirmări ANAF descărcabile</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Diagnostice Erori</span>
                <p class="text-white/50 text-sm">Mesaje detaliate ANAF pentru rezolvare rapidă</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Stats Dashboard -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-anaf-primary flex items-center justify-center">
                  <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                </div>
                <div>
                  <div class="text-white font-semibold">Statistici eFactura</div>
                  <div class="text-white/40 text-xs">Ultima lună</div>
                </div>
              </div>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 gap-4 mb-6">
              <div class="p-4 rounded-xl bg-brand-green/10 border border-brand-green/30">
                <div class="text-brand-green text-xs uppercase mb-1">Acceptate</div>
                <div class="text-white font-bold text-3xl">147</div>
                <div class="text-brand-green text-xs mt-1">↑ 12% vs luna trecută</div>
              </div>
              <div class="p-4 rounded-xl bg-brand-rose/10 border border-brand-rose/30">
                <div class="text-brand-rose text-xs uppercase mb-1">Respinse</div>
                <div class="text-white font-bold text-3xl">3</div>
                <div class="text-brand-rose text-xs mt-1">↓ 2 vs luna trecută</div>
              </div>
            </div>

            <!-- Success Rate -->
            <div class="mb-6">
              <div class="flex items-center justify-between mb-2">
                <span class="text-white/60 text-sm">Rată de succes</span>
                <span class="text-brand-green font-bold">98.0%</span>
              </div>
              <div class="h-3 bg-dark-900/50 rounded-full overflow-hidden">
                <div class="h-full bg-gradient-to-r from-brand-green to-brand-cyan rounded-full" style="width: 98%;"></div>
              </div>
            </div>

            <!-- Processing Time -->
            <div class="p-3 rounded-lg bg-anaf-primary/10 border border-anaf-primary/30 flex items-center justify-between">
              <span class="text-white/60 text-sm">Timp mediu procesare</span>
              <span class="text-anaf-gold font-bold">2.3 sec</span>
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
        <div class="bg-gradient-to-br from-anaf-primary/10 to-anaf-gold/10 rounded-3xl p-8 md:p-12 border border-anaf-primary/20">
          <!-- Romanian stripe -->
          <div class="ro-stripe w-24 mb-6"></div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Obligația <span class="text-gradient-ro font-semibold">eFactura</span> părea o povară. Cu Tixello, nici nu observăm că există. 500+ facturi pe lună, toate conforme, zero intervenție manuală."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-anaf-primary to-anaf-secondary flex items-center justify-center">
              <span class="text-white font-bold">CP</span>
            </div>
            <div>
              <div class="font-semibold text-white">Cristina P.</div>
              <div class="text-white/50">CFO, Artmania Festival</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-anaf-primary/10 via-transparent to-anaf-gold/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(0,51,102,0.2) 0%, rgba(207,181,59,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">📄</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">✓</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <!-- Romanian stripe -->
      <div class="ro-stripe w-32 mx-auto mb-8 reveal"></div>

      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><span class="text-gradient-ro">eFactura</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Conformitate ANAF fără bătăi de cap. XML automat, semnătură digitală, monitorizare în timp real.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-anaf-primary text-white hover:bg-anaf-secondary hover:scale-105 hover:shadow-glow-anaf transition-all duration-300">
          Activează eFactura
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">ANAF SPV • UBL 2.1 • XMLDSig • Multi-tenant • Audit Complet</p>
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
