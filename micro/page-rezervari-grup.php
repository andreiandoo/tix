<?php
/**
 * Template Name: Micro - Rezervări de Grup
 * Description: Landing page for Group Reservations / Bulk Ticket Purchases
 */

get_header();
?>

<style>
  @font-face { font-family: 'Clash Display'; font-weight: 700; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/OQXUGCSMN5FDQHSB5A2IJYJZPJADRSHT/WNWQBZ4ITG3XF2BDWDNQTTQBRCJXJCHQ.woff2') format('woff2'); }
  @font-face { font-family: 'Clash Display'; font-weight: 600; src: url('https://cdn.fontshare.com/wf/HPKQULBQV4VUPCVHBBIW4C7HQ5TXSZDE/Y2DBBSGTUEQYMJ5V2HSIIHVRW5SJA6AR/LLRFWXOASBSTY3YPTCYJ7Q2E5NVLR42Y.woff2') format('woff2'); }
  ::selection { background: #6366F1; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-group { background: linear-gradient(135deg, #6366F1 0%, #8B5CF6 50%, #EC4899 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(99, 102, 241, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Tier card styling */
  .tier-card {
    background: linear-gradient(145deg, rgba(99, 102, 241, 0.1), rgba(139, 92, 246, 0.05));
    border: 1px solid rgba(99, 102, 241, 0.2);
    position: relative;
    overflow: hidden;
    transition: all 0.3s;
  }
  .tier-card:hover {
    border-color: rgba(99, 102, 241, 0.5);
    transform: translateY(-4px);
    box-shadow: 0 20px 40px rgba(99, 102, 241, 0.2);
  }
  .tier-card.active {
    border-color: #14B8A6;
    background: linear-gradient(145deg, rgba(20, 184, 166, 0.15), rgba(20, 184, 166, 0.05));
  }
  .tier-card.active::before {
    content: '✓ ACTIV';
    position: absolute;
    top: 12px;
    right: 12px;
    background: #14B8A6;
    color: white;
    font-size: 10px;
    font-weight: bold;
    padding: 4px 8px;
    border-radius: 4px;
  }

  /* Attendee row */
  .attendee-row {
    background: rgba(99, 102, 241, 0.05);
    border: 1px solid rgba(99, 102, 241, 0.1);
    transition: all 0.3s;
  }
  .attendee-row:hover {
    background: rgba(99, 102, 241, 0.1);
    border-color: rgba(99, 102, 241, 0.3);
  }

  /* Seat grid */
  .seat {
    width: 24px;
    height: 24px;
    border-radius: 4px;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    transition: all 0.2s;
  }
  .seat.available { background: rgba(255, 255, 255, 0.1); }
  .seat.selected { background: #6366F1; border-color: #6366F1; }
  .seat.blocked { background: #EC4899; border-color: #EC4899; }
  .seat.taken { background: rgba(255, 255, 255, 0.3); cursor: not-allowed; }

  /* Progress bar */
  .progress-bar {
    height: 8px;
    background: rgba(99, 102, 241, 0.2);
    border-radius: 4px;
    overflow: hidden;
  }
  .progress-bar-fill {
    height: 100%;
    background: linear-gradient(90deg, #6366F1, #14B8A6);
    border-radius: 4px;
    transition: width 0.5s ease-out;
  }

  /* Approval badge */
  .approval-pending { background: rgba(245, 158, 11, 0.2); color: #f59e0b; }
  .approval-approved { background: rgba(16, 185, 129, 0.2); color: #10b981; }
  .approval-rejected { background: rgba(239, 68, 68, 0.2); color: #ef4444; }

  /* Discount badge */
  .discount-badge {
    background: linear-gradient(135deg, #14B8A6, #10b981);
    color: white;
    font-weight: bold;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 14px;
  }

  /* Payment split */
  .payment-split {
    display: flex;
    height: 12px;
    border-radius: 6px;
    overflow: hidden;
  }
  .payment-paid { background: #10b981; }
  .payment-pending { background: #f59e0b; }
  .payment-remaining { background: rgba(255, 255, 255, 0.1); }
</style>

<main class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <!-- Background -->
    <div class="absolute w-[800px] h-[800px] bg-group-primary/15 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-group-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <!-- Floating elements -->
    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">👥</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">🎫</div>
    <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">🏢</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <!-- Hero Content -->
        <div class="reveal">
          <!-- Badge -->
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-group-primary/10 border border-group-primary/20 mb-6">
            <svg class="w-5 h-5 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
            <span class="text-group-primary text-sm font-medium">Bilete în Vrac</span>
          </div>

          <!-- Heading -->
          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Rezervări<br><span class="text-gradient-group">de grup</span>
          </h1>

          <!-- Description -->
          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Simplifică achizițiile în vrac pentru <strong class="text-white">evenimente corporate</strong>, excursii școlare și grupuri turistice. Reduceri pe niveluri, plăți parțiale, check-in în lot.
          </p>

          <!-- CTAs -->
          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-group-primary to-group-secondary text-white hover:scale-105 hover:shadow-glow-group transition-all duration-300">
              Activează Rezervări Grup
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#reduceri" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi reducerile
            </a>
          </div>

          <!-- Stats -->
          <div class="grid grid-cols-3 gap-6">
            <div>
              <div class="text-3xl font-display font-bold text-group-teal">-20%</div>
              <div class="text-white/40 text-sm">Reducere max</div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-white">500</div>
              <div class="text-white/40 text-sm">Bilete/grup</div>
            </div>
            <div>
              <div class="text-3xl font-display font-bold text-group-primary">1</div>
              <div class="text-white/40 text-sm">Click check-in</div>
            </div>
          </div>
        </div>

        <!-- Hero Visual - Group Booking Card -->
        <div class="reveal reveal-delay-1">
          <div class="relative" x-data="{
            groupSize: 25,
            discount: 15,
            attendees: [
              { name: 'Maria Ionescu', email: 'maria@corp.ro', status: 'confirmed' },
              { name: 'Alexandru Popa', email: 'alex@corp.ro', status: 'confirmed' },
              { name: 'Elena Dumitrescu', email: 'elena@corp.ro', status: 'pending' }
            ]
          }">

            <!-- Main Card -->
            <div class="bg-dark-800/80 backdrop-blur-xl rounded-3xl p-6 border border-group-primary/20 shadow-2xl">
              <!-- Header -->
              <div class="flex items-center justify-between mb-6">
                <div class="flex items-center gap-3">
                  <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-group-primary to-group-secondary flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                  </div>
                  <div>
                    <div class="text-white font-semibold">Rezervare Grup #247</div>
                    <div class="text-white/40 text-xs">TechCorp SRL • Team Building</div>
                  </div>
                </div>
                <span class="approval-approved px-3 py-1 rounded-full text-xs font-medium">Aprobat</span>
              </div>

              <!-- Event Info -->
              <div class="bg-dark-900/50 rounded-xl p-4 mb-4">
                <div class="flex items-center justify-between">
                  <div>
                    <div class="text-white/40 text-xs uppercase">Eveniment</div>
                    <div class="text-white font-medium">Summer Festival 2025</div>
                    <div class="text-white/50 text-sm">15 Iulie • Romexpo</div>
                  </div>
                  <div class="text-right">
                    <div class="text-3xl font-bold text-white" x-text="groupSize">25</div>
                    <div class="text-white/40 text-xs">bilete</div>
                  </div>
                </div>
              </div>

              <!-- Discount Applied -->
              <div class="flex items-center justify-between p-3 rounded-xl bg-group-teal/10 border border-group-teal/30 mb-4">
                <div class="flex items-center gap-2">
                  <svg class="w-5 h-5 text-group-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
                  <span class="text-group-teal font-medium">Reducere Grup Aplicată</span>
                </div>
                <span class="discount-badge" x-text="'-' + discount + '%'">-15%</span>
              </div>

              <!-- Attendees Preview -->
              <div class="mb-4">
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white/40 text-xs uppercase">Participanți Confirmați</span>
                  <span class="text-white/60 text-xs">22/25</span>
                </div>
                <div class="space-y-2">
                  <template x-for="attendee in attendees" :key="attendee.email">
                    <div class="attendee-row rounded-lg px-3 py-2 flex items-center gap-3">
                      <div class="w-8 h-8 rounded-full bg-group-primary/20 flex items-center justify-center">
                        <span class="text-group-primary text-xs font-medium" x-text="attendee.name.split(' ').map(n => n[0]).join('')"></span>
                      </div>
                      <div class="flex-1">
                        <div class="text-white text-sm" x-text="attendee.name"></div>
                        <div class="text-white/40 text-xs" x-text="attendee.email"></div>
                      </div>
                      <svg x-show="attendee.status === 'confirmed'" class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                      <svg x-show="attendee.status === 'pending'" class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    </div>
                  </template>
                </div>
                <div class="text-center mt-2">
                  <span class="text-white/40 text-xs">+ 19 alți participanți</span>
                </div>
              </div>

              <!-- Payment Progress -->
              <div>
                <div class="flex items-center justify-between mb-2">
                  <span class="text-white/40 text-xs uppercase">Status Plată</span>
                  <span class="text-brand-green text-xs font-medium">€1,875 / €2,500</span>
                </div>
                <div class="payment-split">
                  <div class="payment-paid" style="width: 50%"></div>
                  <div class="payment-pending" style="width: 25%"></div>
                  <div class="payment-remaining" style="width: 25%"></div>
                </div>
                <div class="flex justify-between mt-1 text-xs text-white/40">
                  <span>Avans plătit</span>
                  <span>În procesare</span>
                  <span>Rămas</span>
                </div>
              </div>
            </div>

            <!-- Floating Savings Badge -->
            <div class="absolute -top-4 -right-4 bg-group-teal rounded-xl px-4 py-3 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                <div>
                  <div class="text-white font-bold">€375</div>
                  <div class="text-white/70 text-xs">Economisiți</div>
                </div>
              </div>
            </div>

            <!-- Floating Leader Badge -->
            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-group-primary/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-lg bg-group-primary/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div>
                  <div class="text-group-primary text-sm font-medium">Lider Grup</div>
                  <div class="text-white/40 text-xs">Ion Popescu</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TIERED DISCOUNTS ==================== -->
  <section class="py-24 relative overflow-hidden" id="reduceri">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <!-- Section Header -->
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-group-teal text-sm font-medium uppercase tracking-widest">Reduceri pe Niveluri</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Cu cât mai mult,<br><span class="text-gradient-group">cu atât mai ieftin</span></h2>
        <p class="text-lg text-white/60">Activează reduceri automate care răsplătesc achizițiile mai mari. Clienții economisesc, tu umpli locuri.</p>
      </div>

      <!-- Tier Cards -->
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 reveal" x-data="{ selectedTier: 2 }">
        <!-- Tier 1 -->
        <div class="tier-card rounded-2xl p-6 cursor-pointer" :class="selectedTier >= 1 && 'active'" @click="selectedTier = 1">
          <div class="text-4xl mb-4">🎫</div>
          <div class="text-white/40 text-sm uppercase tracking-wider mb-1">Nivelul 1</div>
          <div class="text-3xl font-bold text-white mb-2">10+</div>
          <div class="text-white/60 text-sm mb-4">bilete</div>
          <div class="text-group-teal font-bold text-2xl">-10%</div>
          <div class="text-white/40 text-xs mt-2">reducere aplicată</div>
        </div>

        <!-- Tier 2 -->
        <div class="tier-card rounded-2xl p-6 cursor-pointer" :class="selectedTier >= 2 && 'active'" @click="selectedTier = 2">
          <div class="text-4xl mb-4">🎟️</div>
          <div class="text-white/40 text-sm uppercase tracking-wider mb-1">Nivelul 2</div>
          <div class="text-3xl font-bold text-white mb-2">25+</div>
          <div class="text-white/60 text-sm mb-4">bilete</div>
          <div class="text-group-teal font-bold text-2xl">-15%</div>
          <div class="text-white/40 text-xs mt-2">reducere aplicată</div>
        </div>

        <!-- Tier 3 -->
        <div class="tier-card rounded-2xl p-6 cursor-pointer" :class="selectedTier >= 3 && 'active'" @click="selectedTier = 3">
          <div class="text-4xl mb-4">🎪</div>
          <div class="text-white/40 text-sm uppercase tracking-wider mb-1">Nivelul 3</div>
          <div class="text-3xl font-bold text-white mb-2">50+</div>
          <div class="text-white/60 text-sm mb-4">bilete</div>
          <div class="text-group-teal font-bold text-2xl">-20%</div>
          <div class="text-white/40 text-xs mt-2">reducere aplicată</div>
        </div>

        <!-- Custom -->
        <div class="tier-card rounded-2xl p-6 cursor-pointer border-dashed" @click="selectedTier = 4">
          <div class="text-4xl mb-4">🏢</div>
          <div class="text-white/40 text-sm uppercase tracking-wider mb-1">Enterprise</div>
          <div class="text-3xl font-bold text-white mb-2">100+</div>
          <div class="text-white/60 text-sm mb-4">bilete</div>
          <div class="text-group-accent font-bold text-lg">Negociabil</div>
          <div class="text-white/40 text-xs mt-2">contactează-ne</div>
        </div>
      </div>

      <!-- Calculator Preview -->
      <div class="max-w-2xl mx-auto mt-12 reveal reveal-delay-1">
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
          <div class="text-center mb-4">
            <span class="text-white/40 text-sm">Exemplu: 25 bilete × €100</span>
          </div>
          <div class="flex items-center justify-between mb-4">
            <div>
              <div class="text-white/40 text-xs">Preț Normal</div>
              <div class="text-white/50 line-through text-lg">€2,500</div>
            </div>
            <div class="discount-badge">-15%</div>
            <div class="text-right">
              <div class="text-group-teal text-xs">Preț Grup</div>
              <div class="text-group-teal font-bold text-2xl">€2,125</div>
            </div>
          </div>
          <div class="text-center p-3 rounded-lg bg-group-teal/10 border border-group-teal/30">
            <span class="text-group-teal font-medium">Economisiți €375 cu această rezervare!</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GROUP LEADER DASHBOARD ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-group-primary text-sm font-medium uppercase tracking-widest">Dashboard Lider Grup</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Control<br><span class="text-gradient-group">total</span></h2>
          <p class="text-lg text-white/60 mb-8">Liderul grupului gestionează participanții, colectează detaliile individuale și distribuie biletele. Tot dintr-un singur loc.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-group-primary/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Gestionare Participanți</span>
                <p class="text-white/50 text-sm">Adaugă, editează sau șterge membri din grup</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-group-secondary/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-group-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Formulare Personalizate</span>
                <p class="text-white/50 text-sm">Colectează cerințe dietetice, accesibilitate, mărime tricou</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-group-accent/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-group-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Distribuție Bilete</span>
                <p class="text-white/50 text-sm">Trimite biletele individuale pe email membrilor</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Dashboard UI -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
              <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-group-primary/20 flex items-center justify-center">
                  <svg class="w-5 h-5 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                </div>
                <div>
                  <div class="text-white font-semibold">Lista Participanți</div>
                  <div class="text-white/40 text-xs">22 din 25 confirmați</div>
                </div>
              </div>
              <button class="px-3 py-1.5 rounded-lg bg-group-primary/20 text-group-primary text-sm font-medium hover:bg-group-primary/30 transition-colors">
                + Adaugă
              </button>
            </div>

            <!-- Progress -->
            <div class="mb-4">
              <div class="progress-bar">
                <div class="progress-bar-fill" style="width: 88%"></div>
              </div>
              <div class="flex justify-between mt-1 text-xs text-white/40">
                <span>88% completat</span>
                <span>3 rămas</span>
              </div>
            </div>

            <!-- Attendees Table -->
            <div class="space-y-2 mb-4">
              <div class="attendee-row rounded-lg px-3 py-2 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white text-sm">Maria Ionescu</div>
                  <div class="text-white/40 text-xs">Vegetarian • Loc A-15</div>
                </div>
                <span class="px-2 py-0.5 rounded bg-brand-green/20 text-brand-green text-xs">Distribuit</span>
              </div>

              <div class="attendee-row rounded-lg px-3 py-2 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white text-sm">Alexandru Popa</div>
                  <div class="text-white/40 text-xs">Standard • Loc A-16</div>
                </div>
                <span class="px-2 py-0.5 rounded bg-brand-green/20 text-brand-green text-xs">Distribuit</span>
              </div>

              <div class="attendee-row rounded-lg px-3 py-2 flex items-center gap-3">
                <div class="w-8 h-8 rounded-full bg-brand-amber/20 flex items-center justify-center">
                  <svg class="w-4 h-4 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white text-sm">Elena Dumitrescu</div>
                  <div class="text-white/40 text-xs">Așteaptă detalii...</div>
                </div>
                <span class="px-2 py-0.5 rounded bg-brand-amber/20 text-brand-amber text-xs">Pending</span>
              </div>

              <div class="attendee-row rounded-lg px-3 py-2 flex items-center gap-3 border-dashed">
                <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center">
                  <svg class="w-4 h-4 text-white/30" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/></svg>
                </div>
                <div class="flex-1">
                  <div class="text-white/30 text-sm">Loc liber</div>
                  <div class="text-white/20 text-xs">Click pentru a adăuga</div>
                </div>
              </div>
            </div>

            <!-- Actions -->
            <div class="flex gap-2">
              <button class="flex-1 py-2 rounded-lg bg-group-primary text-white text-sm font-medium hover:bg-group-primary/80 transition-colors">
                📧 Trimite Reminder
              </button>
              <button class="flex-1 py-2 rounded-lg bg-dark-700 text-white/60 text-sm hover:bg-dark-600 transition-colors">
                📥 Export CSV
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== SEAT BLOCKS ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Visual - Seat Map -->
        <div class="reveal order-2 lg:order-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center justify-between mb-6">
              <div>
                <div class="text-white font-semibold">Bloc Locuri Rezervat</div>
                <div class="text-white/40 text-xs">Secțiunea A • Rândurile 5-7</div>
              </div>
              <div class="flex items-center gap-4 text-xs">
                <div class="flex items-center gap-1">
                  <div class="seat selected" style="width: 12px; height: 12px;"></div>
                  <span class="text-white/40">Grup</span>
                </div>
                <div class="flex items-center gap-1">
                  <div class="seat taken" style="width: 12px; height: 12px;"></div>
                  <span class="text-white/40">Ocupat</span>
                </div>
                <div class="flex items-center gap-1">
                  <div class="seat available" style="width: 12px; height: 12px;"></div>
                  <span class="text-white/40">Liber</span>
                </div>
              </div>
            </div>

            <!-- Stage -->
            <div class="text-center mb-6">
              <div class="inline-block px-12 py-2 rounded-full bg-white/5 text-white/30 text-xs uppercase tracking-wider">Scenă</div>
            </div>

            <!-- Seat Grid -->
            <div class="space-y-2">
              <!-- Row 4 -->
              <div class="flex items-center gap-2 justify-center">
                <span class="text-white/30 text-xs w-4">4</span>
                <div class="flex gap-1">
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                </div>
              </div>

              <!-- Row 5 - Group -->
              <div class="flex items-center gap-2 justify-center">
                <span class="text-white/30 text-xs w-4">5</span>
                <div class="flex gap-1">
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                </div>
              </div>

              <!-- Row 6 - Group -->
              <div class="flex items-center gap-2 justify-center">
                <span class="text-white/30 text-xs w-4">6</span>
                <div class="flex gap-1">
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                </div>
              </div>

              <!-- Row 7 - Partial Group -->
              <div class="flex items-center gap-2 justify-center">
                <span class="text-white/30 text-xs w-4">7</span>
                <div class="flex gap-1">
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat selected"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                </div>
              </div>

              <!-- Row 8 -->
              <div class="flex items-center gap-2 justify-center">
                <span class="text-white/30 text-xs w-4">8</span>
                <div class="flex gap-1">
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat taken"></div>
                  <div class="seat taken"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                  <div class="seat taken"></div>
                  <div class="seat available"></div>
                  <div class="seat available"></div>
                </div>
              </div>
            </div>

            <!-- Summary -->
            <div class="mt-6 p-3 rounded-lg bg-group-primary/10 border border-group-primary/30 text-center">
              <span class="text-group-primary font-medium">25 locuri consecutive rezervate pentru grupul tău</span>
            </div>
          </div>
        </div>

        <!-- Content -->
        <div class="reveal order-1 lg:order-2">
          <span class="text-group-accent text-sm font-medium uppercase tracking-widest">Blocuri de Locuri</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Grupul stă<br><span class="text-gradient-group">împreună</span></h2>
          <p class="text-lg text-white/60 mb-8">Rezervă blocuri de locuri consecutive pentru a asigura că întregul grup stă împreună. Perfect pentru evenimente cu locuri numerotate.</p>

          <div class="space-y-4">
            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-group-primary/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Selecție Bloc</div>
                <p class="text-white/50 text-sm">Selectează o secțiune întreagă sau rânduri consecutive</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-group-secondary/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-group-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Alocare Flexibilă</div>
                <p class="text-white/50 text-sm">Sau lasă sistemul să găsească cele mai bune locuri disponibile</p>
              </div>
            </div>

            <div class="flex items-start gap-3">
              <div class="w-8 h-8 rounded-lg bg-group-teal/20 flex items-center justify-center flex-shrink-0 mt-0.5">
                <svg class="w-4 h-4 text-group-teal" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
              </div>
              <div>
                <div class="text-white font-medium">Blocare Inventar</div>
                <p class="text-white/50 text-sm">Locurile sunt rezervate până la expirarea opțiunii</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== GROUP CHECK-IN ==================== -->
  <section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="grid lg:grid-cols-2 gap-16 items-center">
        <!-- Content -->
        <div class="reveal">
          <span class="text-brand-green text-sm font-medium uppercase tracking-widest">La Locație</span>
          <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Check-in<br><span class="text-gradient-group">în lot</span></h2>
          <p class="text-lg text-white/60 mb-8">Procesează întregul grup cu o singură scanare. Perfect când autocarul turistic ajunge la ușă și ai 50 de persoane de verificat rapid.</p>

          <div class="space-y-4">
            <div class="flex items-center gap-4 p-4 rounded-xl bg-brand-green/10 border border-brand-green/30">
              <div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Check-in Grup Complet</span>
                <p class="text-white/50 text-sm">Un click procesează toți participanții confirmați</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-group-primary/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-group-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">QR Cod Grup</span>
                <p class="text-white/50 text-sm">Liderul de grup are un cod master pentru toată echipa</p>
              </div>
            </div>

            <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
              <div class="w-12 h-12 rounded-xl bg-brand-cyan/20 flex items-center justify-center flex-shrink-0">
                <svg class="w-6 h-6 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
              </div>
              <div>
                <span class="text-white font-medium">Lista Prezență</span>
                <p class="text-white/50 text-sm">Bifează manual membrii pe măsură ce intră</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Visual - Check-in Animation -->
        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800 rounded-2xl p-6 border border-white/10" x-data="{ checkedIn: 0 }" x-init="setInterval(() => { if(checkedIn < 25) checkedIn++; }, 200)">
            <div class="flex items-center justify-between mb-6">
              <div>
                <div class="text-white font-semibold">Check-in Grup Live</div>
                <div class="text-white/40 text-xs">TechCorp SRL • Poarta B</div>
              </div>
              <div class="text-right">
                <div class="text-3xl font-bold text-brand-green" x-text="checkedIn + '/25'">0/25</div>
                <div class="text-white/40 text-xs">intrați</div>
              </div>
            </div>

            <!-- Progress -->
            <div class="mb-6">
              <div class="progress-bar" style="height: 12px;">
                <div class="progress-bar-fill transition-all duration-300" :style="'width: ' + (checkedIn * 4) + '%'"></div>
              </div>
            </div>

            <!-- Avatars Grid -->
            <div class="grid grid-cols-5 gap-3 mb-6">
              <template x-for="i in 25" :key="i">
                <div
                  class="w-12 h-12 rounded-full flex items-center justify-center transition-all duration-300"
                  :class="i <= checkedIn ? 'bg-brand-green/20 text-brand-green' : 'bg-dark-900/50 text-white/20'"
                >
                  <svg x-show="i <= checkedIn" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                  <span x-show="i > checkedIn" class="text-sm" x-text="i"></span>
                </div>
              </template>
            </div>

            <!-- Complete button -->
            <button
              class="w-full py-3 rounded-xl font-medium transition-all duration-300"
              :class="checkedIn === 25 ? 'bg-brand-green text-white' : 'bg-group-primary text-white'"
              x-text="checkedIn === 25 ? '✓ Grup Complet!' : 'Check-in în desfășurare...'"
            ></button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== USE CASES ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-brand-violet text-sm font-medium uppercase tracking-widest">Cazuri de Utilizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">De la corporate<br><span class="text-gradient animate-shimmer">la școli</span></h2>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-group-primary/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-group-primary/20 to-group-secondary/20 flex items-center justify-center mb-4"><span class="text-2xl">🏢</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Team Building Corporate</h3>
          <p class="text-white/50 text-sm">Companii care organizează ieșiri pentru echipe. Reduceri, factură firmă, gestionare simplă.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-group-primary/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-amber/20 to-brand-amber/10 flex items-center justify-center mb-4"><span class="text-2xl">🎓</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Excursii Școlare</h3>
          <p class="text-white/50 text-sm">Clase și grupuri de elevi. Colectare autorizații, cerințe speciale, check-in rapid.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-group-primary/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-group-teal/20 to-group-teal/10 flex items-center justify-center mb-4"><span class="text-2xl">🚌</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Tururi Organizate</h3>
          <p class="text-white/50 text-sm">Agenții de turism care aduc grupuri. Un autocar, un check-in, zero coadă.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-group-primary/30 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-group-accent/20 to-group-accent/10 flex items-center justify-center mb-4"><span class="text-2xl">👨‍👩‍👧‍👦</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Reuniuni de Familie</h3>
          <p class="text-white/50 text-sm">Nunți, aniversări, evenimente private. Un organizator, mulți participanți.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-group-primary/30 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-rose/20 to-brand-rose/10 flex items-center justify-center mb-4"><span class="text-2xl">⚽</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Cluburi Sportive</h3>
          <p class="text-white/50 text-sm">Deplasări ale suporterilor. Locuri consecutive, reduceri club, coordonare simplă.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-group-primary/30 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-brand-cyan/20 to-brand-cyan/10 flex items-center justify-center mb-4"><span class="text-2xl">🎵</span></div>
          <h3 class="text-xl font-semibold text-white mb-2">Fan Clubs</h3>
          <p class="text-white/50 text-sm">Grupuri de fani care merg împreună la concerte. Experiență comună, preț redus.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-group-primary/10 to-group-accent/10 rounded-3xl p-8 md:p-12 border border-group-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Aducem <span class="text-gradient-group font-semibold">3 autocare pe zi</span> la festival. Cu check-in-ul de grup, procesăm 150 de persoane în 5 minute. Înainte dura o oră."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-group-primary to-group-accent"></div>
            <div>
              <div class="font-semibold text-white">Cristian M.</div>
              <div class="text-white/50">Director Operațiuni, EuroTour Travel</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-group-primary/15 via-transparent to-group-accent/15"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, rgba(236,72,153,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">👥</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">🎟️</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Grupuri<br><span class="text-gradient-group">simplificate</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Reduceri pe niveluri, dashboard lider, plăți parțiale, check-in în lot. Tot ce ai nevoie pentru comenzi mari.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-group-primary to-group-secondary text-white hover:scale-105 hover:shadow-glow-group transition-all duration-300">
          Activează Rezervări Grup
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Întrebări? Contactează-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">10-500 bilete • Reduceri automate • Check-in în lot</p>
    </div>
  </section>

</main>

<script>
  // Reveal on scroll
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  // Feature card mouse tracking
  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => { const rect = card.getBoundingClientRect(); card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`); card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`); });
  });
</script>

<?php get_footer(); ?>
