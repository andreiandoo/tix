<?php
/**
 * Template Name: Urmarire Afiliati
 * Description: Landing page for affiliate tracking and commission management
 */

get_header();
?>

<style>
  ::selection { background: #10B981; color: white; }

  .text-gradient { background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
  .text-gradient-affiliate { background: linear-gradient(135deg, #10B981 0%, #FBBF24 50%, #10B981 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  @keyframes shimmer { 0% { background-position: 0% center; } 100% { background-position: 200% center; } }
  @keyframes float { 0%, 100% { transform: translateY(0); } 50% { transform: translateY(-20px); } }
  @keyframes affiliatePulse { 0%, 100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.4); } 50% { box-shadow: 0 0 0 15px rgba(16, 185, 129, 0); } }
  @keyframes linkTrace { 0% { background-position: 0% 50%; } 100% { background-position: 200% 50%; } }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .animate-float { animation: float 6s ease-in-out infinite; }
  .animate-affiliate-pulse { animation: affiliatePulse 2s ease-in-out infinite; }

  .feature-card { position: relative; }
  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(16, 185, 129, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Status badges */
  .status-badge {
    padding: 4px 12px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
  }
  .status-badge.pending { background: rgba(245, 158, 11, 0.2); color: #FBBF24; }
  .status-badge.approved { background: rgba(16, 185, 129, 0.2); color: #34D399; }
  .status-badge.reversed { background: rgba(239, 68, 68, 0.2); color: #F87171; }
  .status-badge.paid { background: rgba(6, 182, 212, 0.2); color: #22D3EE; }
  .status-badge.active { background: rgba(16, 185, 129, 0.2); color: #34D399; }

  /* Affiliate link */
  .affiliate-link {
    background: linear-gradient(90deg, rgba(59, 130, 246, 0.1), rgba(16, 185, 129, 0.1));
    border: 1px solid rgba(59, 130, 246, 0.3);
    border-radius: 8px;
    padding: 12px 16px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 13px;
    color: #60A5FA;
    position: relative;
    overflow: hidden;
  }
  .affiliate-link::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.2), transparent);
    animation: linkTrace 2s ease-in-out infinite;
  }

  /* Coupon code */
  .coupon-code {
    background: linear-gradient(135deg, rgba(251, 191, 36, 0.2), rgba(245, 158, 11, 0.1));
    border: 2px dashed rgba(251, 191, 36, 0.4);
    border-radius: 8px;
    padding: 12px 20px;
    font-family: 'JetBrains Mono', monospace;
    font-size: 16px;
    font-weight: bold;
    color: #FBBF24;
    letter-spacing: 2px;
  }

  /* Affiliate avatar */
  .affiliate-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    background: linear-gradient(135deg, #10B981, #059669);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: bold;
    font-size: 16px;
  }

  /* Form input */
  .form-input {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    padding: 12px 16px;
    color: white;
    font-size: 14px;
    width: 100%;
    transition: all 0.2s;
  }
  .form-input:focus {
    outline: none;
    border-color: rgba(16, 185, 129, 0.5);
    background: rgba(16, 185, 129, 0.05);
  }
  .form-input::placeholder {
    color: rgba(255, 255, 255, 0.3);
  }

  /* Tracking step */
  .tracking-step { position: relative; }
  .tracking-step::after {
    content: '';
    position: absolute;
    top: 50%;
    right: -30px;
    width: 30px;
    height: 2px;
    background: linear-gradient(90deg, #10B981, #FBBF24);
  }
  .tracking-step:last-child::after { display: none; }
</style>

<!-- HERO -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <div class="absolute w-[800px] h-[800px] bg-affiliate-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[600px] h-[600px] bg-affiliate-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

  <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">&#128176;</div>
  <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">&#128279;</div>
  <div class="absolute top-1/2 right-16 opacity-10 animate-float text-3xl" style="animation-delay: 2s;">&#128200;</div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

      <!-- Hero Content -->
      <div class="reveal">
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-affiliate-primary/10 border border-affiliate-primary/20 mb-6">
          <svg class="w-5 h-5 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
          <span class="text-affiliate-primary text-sm font-medium">Retea de Afiliati</span>
        </div>

        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          Urmarire<br><span class="text-gradient-affiliate">Afiliati</span>
        </h1>

        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          Creste-ti reteaua de vanzari. <strong class="text-white">Link-uri, cupoane, comisioane</strong> - urmareste fiecare referinta si rasplateste partenerii corect.
        </p>

        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-affiliate-primary text-white hover:bg-affiliate-secondary hover:scale-105 hover:shadow-glow-green transition-all duration-300">
            Lanseaza Programul
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#functionalitati" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
            Vezi Functionalitati
          </a>
        </div>

        <div class="flex flex-wrap items-center gap-4">
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
            <span class="text-white/60 text-sm">Link Tracking</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-affiliate-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
            <span class="text-white/60 text-sm">Cupoane</span>
          </div>
          <div class="flex items-center gap-2">
            <svg class="w-5 h-5 text-affiliate-gold" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            <span class="text-white/60 text-sm">Comisioane Auto</span>
          </div>
        </div>
      </div>

      <!-- Hero Visual - Affiliate Dashboard Preview -->
      <div class="reveal reveal-delay-1">
        <div class="relative">
          <!-- Main Dashboard Card -->
          <div class="bg-dark-800/80 backdrop-blur-xl rounded-2xl border border-affiliate-primary/20 shadow-2xl overflow-hidden">
            <div class="px-6 py-4 border-b border-white/10 flex items-center justify-between">
              <div class="flex items-center gap-3">
                <div class="affiliate-avatar">MI</div>
                <div>
                  <div class="text-white font-semibold">Maria Influencer</div>
                  <div class="text-white/40 text-xs">Afiliat din Ian 2025</div>
                </div>
              </div>
              <span class="status-badge active">&#9679; Activ</span>
            </div>

            <div class="grid grid-cols-2 gap-4 p-4">
              <div class="bg-affiliate-primary/10 rounded-xl p-4 border border-affiliate-primary/20">
                <div class="text-affiliate-primary font-bold text-2xl">&#8364;2,450</div>
                <div class="text-white/40 text-xs">Castiguri totale</div>
                <div class="text-affiliate-gold text-xs mt-1">+&#8364;380 in asteptare</div>
              </div>
              <div class="bg-affiliate-link/10 rounded-xl p-4 border border-affiliate-link/20">
                <div class="text-affiliate-link font-bold text-2xl">1,892</div>
                <div class="text-white/40 text-xs">Click-uri totale</div>
                <div class="text-affiliate-primary text-xs mt-1">47 conversii</div>
              </div>
            </div>

            <div class="px-4 pb-4">
              <div class="text-white/40 text-xs mb-2">Link-ul tau de afiliat:</div>
              <div class="affiliate-link flex items-center justify-between">
                <span class="truncate">tixello.ro/ref/<span class="text-affiliate-primary">maria2025</span></span>
                <button class="ml-2 p-1.5 rounded bg-affiliate-link/20 text-affiliate-link hover:bg-affiliate-link/30 transition-colors">
                  <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
                </button>
              </div>
            </div>

            <div class="px-4 pb-4">
              <div class="text-white/40 text-xs mb-2">Cod cupon:</div>
              <div class="coupon-code text-center">MARIA10</div>
            </div>

            <div class="px-4 pb-4">
              <div class="text-white/50 text-xs mb-2">Conversii recente:</div>
              <div class="space-y-2">
                <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/50">
                  <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-affiliate-approved"></span>
                    <span class="text-white/70 text-sm">Festival Vara</span>
                  </div>
                  <span class="text-affiliate-primary font-medium text-sm">+&#8364;25</span>
                </div>
                <div class="flex items-center justify-between p-2 rounded-lg bg-dark-900/50">
                  <div class="flex items-center gap-2">
                    <span class="w-2 h-2 rounded-full bg-affiliate-pending"></span>
                    <span class="text-white/70 text-sm">Concert Rock</span>
                  </div>
                  <span class="text-affiliate-pending font-medium text-sm">+&#8364;15 pending</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Floating Commission Badge -->
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-affiliate-gold/30 shadow-xl animate-float z-10">
            <div class="flex items-center gap-2">
              <div class="w-8 h-8 rounded-lg bg-affiliate-gold/20 flex items-center justify-center">
                <span class="text-lg">&#128176;</span>
              </div>
              <div>
                <div class="text-affiliate-gold text-sm font-medium">10% Comision</div>
                <div class="text-white/40 text-xs">Per vanzare</div>
              </div>
            </div>
          </div>

          <!-- Floating Cookie Badge -->
          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-affiliate-primary/30 shadow-xl animate-float z-10" style="animation-delay: 1s;">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              <div>
                <div class="text-affiliate-primary text-sm font-medium">90 Zile</div>
                <div class="text-white/40 text-xs">Cookie window</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AFFILIATE REGISTRATION -->
<section class="py-24 relative overflow-hidden" id="functionalitati">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-affiliate-primary text-sm font-medium uppercase tracking-widest">Inregistrare Afiliati</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Adauga afiliati<br><span class="text-gradient-affiliate">din admin sau website</span></h2>
      <p class="text-lg text-white/60">Genereaza afiliati din panoul de administrare sau lasa-i sa se inregistreze singuri pe site.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-8">
      <!-- Admin Registration -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-8 border border-affiliate-primary/20 hover:border-affiliate-primary/50 transition-all duration-500 reveal">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-12 h-12 rounded-xl bg-affiliate-primary/20 flex items-center justify-center">
            <svg class="w-6 h-6 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-white">Din Admin Panel</h3>
            <p class="text-white/40 text-sm">Creeaza afiliati manual</p>
          </div>
        </div>

        <div class="space-y-4">
          <div>
            <label class="text-white/50 text-xs mb-1 block">Nume afiliat</label>
            <input type="text" class="form-input" placeholder="ex: Maria Popescu" value="Dan Promoter" readonly>
          </div>
          <div>
            <label class="text-white/50 text-xs mb-1 block">Email</label>
            <input type="email" class="form-input" placeholder="email@exemplu.ro" value="dan@promoter.ro" readonly>
          </div>
          <div class="grid grid-cols-2 gap-3">
            <div>
              <label class="text-white/50 text-xs mb-1 block">Cod afiliat</label>
              <input type="text" class="form-input font-mono" placeholder="Auto-generat" value="DAN2025" readonly>
            </div>
            <div>
              <label class="text-white/50 text-xs mb-1 block">Comision</label>
              <select class="form-input">
                <option>10% din vanzare</option>
                <option>15% din vanzare</option>
                <option>&#8364;5 per bilet</option>
              </select>
            </div>
          </div>
          <button class="w-full py-3 rounded-lg bg-affiliate-primary text-white font-semibold hover:bg-affiliate-secondary transition-colors">
            + Creeaza Afiliat
          </button>
        </div>

        <div class="mt-4 p-3 rounded-lg bg-affiliate-primary/10 border border-affiliate-primary/20">
          <div class="flex items-center gap-2 text-affiliate-primary text-sm">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Afiliatul va primi email cu credentialele de acces
          </div>
        </div>
      </div>

      <!-- Public Registration -->
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-8 border border-affiliate-accent/20 hover:border-affiliate-accent/50 transition-all duration-500 reveal reveal-delay-1">
        <div class="flex items-center gap-3 mb-6">
          <div class="w-12 h-12 rounded-xl bg-affiliate-accent/20 flex items-center justify-center">
            <svg class="w-6 h-6 text-affiliate-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/></svg>
          </div>
          <div>
            <h3 class="text-xl font-semibold text-white">Formular Public</h3>
            <p class="text-white/40 text-sm">Pe website-ul tau</p>
          </div>
        </div>

        <div class="bg-dark-900/50 rounded-xl p-6 border border-white/10">
          <div class="text-center mb-6">
            <h4 class="text-white font-semibold text-lg">&#129309; Devino Afiliat</h4>
            <p class="text-white/50 text-sm">Castiga comision pentru fiecare vanzare</p>
          </div>

          <div class="space-y-3">
            <input type="text" class="form-input" placeholder="Numele tau complet" readonly>
            <input type="email" class="form-input" placeholder="Adresa de email" readonly>
            <input type="url" class="form-input" placeholder="Website / Profil social (optional)" readonly>
            <textarea class="form-input h-20 resize-none" placeholder="De ce vrei sa devii afiliat?" readonly></textarea>
            <button class="w-full py-3 rounded-lg bg-affiliate-accent text-white font-semibold hover:bg-amber-600 transition-colors">
              Aplica Acum
            </button>
          </div>
        </div>

        <div class="mt-4 p-3 rounded-lg bg-affiliate-accent/10 border border-affiliate-accent/20">
          <div class="flex items-center gap-2 text-affiliate-accent text-sm">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            Poti activa aprobare automata sau manuala
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRACKING FLOW -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-affiliate-link text-sm font-medium uppercase tracking-widest">Urmarire</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">De la click la<br><span class="text-gradient-affiliate">comision</span></h2>
      <p class="text-lg text-white/60">Atribuire ultimul click cu fereastra cookie de 90 zile. Link-uri sau cupoane.</p>
    </div>

    <div class="max-w-4xl mx-auto reveal">
      <div class="grid grid-cols-5 gap-4 items-center">
        <!-- Step 1: Click -->
        <div class="text-center tracking-step">
          <div class="w-16 h-16 rounded-2xl bg-affiliate-link/20 border border-affiliate-link/30 flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-affiliate-link" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"/></svg>
          </div>
          <div class="text-white font-medium text-sm">Click</div>
          <div class="text-white/40 text-xs">Link afiliat</div>
        </div>

        <div class="flex justify-center">
          <svg class="w-6 h-6 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </div>

        <!-- Step 2: Cookie -->
        <div class="text-center tracking-step">
          <div class="w-16 h-16 rounded-2xl bg-affiliate-purple/20 border border-affiliate-purple/30 flex items-center justify-center mx-auto mb-3">
            <svg class="w-8 h-8 text-affiliate-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div class="text-white font-medium text-sm">Cookie</div>
          <div class="text-white/40 text-xs">90 zile valabil</div>
        </div>

        <div class="flex justify-center">
          <svg class="w-6 h-6 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
        </div>

        <!-- Step 3: Conversion -->
        <div class="text-center">
          <div class="w-16 h-16 rounded-2xl bg-affiliate-primary/20 border border-affiliate-primary/30 flex items-center justify-center mx-auto mb-3 animate-affiliate-pulse">
            <svg class="w-8 h-8 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
          </div>
          <div class="text-white font-medium text-sm">Conversie</div>
          <div class="text-white/40 text-xs">Comision atribuit</div>
        </div>
      </div>

      <!-- Tracking Methods -->
      <div class="grid md:grid-cols-2 gap-6 mt-12">
        <div class="bg-dark-800/50 rounded-xl p-6 border border-affiliate-link/20">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-lg bg-affiliate-link/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-affiliate-link" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold">Urmarire prin Link</div>
              <div class="text-white/40 text-xs">?ref=cod_afiliat</div>
            </div>
          </div>
          <div class="affiliate-link text-sm">
            bilete.ro/festival?<span class="text-affiliate-primary">ref=maria2025</span>
          </div>
        </div>

        <div class="bg-dark-800/50 rounded-xl p-6 border border-affiliate-accent/20">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-10 h-10 rounded-lg bg-affiliate-accent/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-affiliate-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold">Urmarire prin Cupon</div>
              <div class="text-white/40 text-xs">Cod personal de discount</div>
            </div>
          </div>
          <div class="coupon-code text-center text-sm">MARIA10</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- COMMISSIONS -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal">
        <span class="text-affiliate-gold text-sm font-medium uppercase tracking-widest">Comisioane</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Rate flexibile<br><span class="text-gradient-affiliate">per partener</span></h2>
        <p class="text-lg text-white/60 mb-8">Procent din vanzare, suma fixa per bilet sau rate pe niveluri. Configureaza ce functioneaza pentru fiecare relatie.</p>

        <div class="space-y-4">
          <div class="flex items-center gap-4 p-4 rounded-xl bg-affiliate-primary/10 border border-affiliate-primary/30">
            <div class="w-12 h-12 rounded-xl bg-affiliate-primary/20 flex items-center justify-center flex-shrink-0">
              <span class="text-affiliate-primary font-bold text-lg">%</span>
            </div>
            <div class="flex-1">
              <span class="text-white font-medium">Procent din Vanzare</span>
              <p class="text-white/50 text-sm">10%, 15%, 20% - seteaza tu rata</p>
            </div>
            <span class="text-affiliate-primary font-bold">10%</span>
          </div>

          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-affiliate-gold/20 flex items-center justify-center flex-shrink-0">
              <span class="text-affiliate-gold font-bold text-lg">&#8364;</span>
            </div>
            <div class="flex-1">
              <span class="text-white font-medium">Suma Fixa per Bilet</span>
              <p class="text-white/50 text-sm">&#8364;3, &#8364;5, &#8364;10 per bilet vandut</p>
            </div>
            <span class="text-affiliate-gold font-bold">&#8364;5</span>
          </div>

          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10">
            <div class="w-12 h-12 rounded-xl bg-affiliate-purple/20 flex items-center justify-center flex-shrink-0">
              <svg class="w-6 h-6 text-affiliate-purple" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
            </div>
            <div class="flex-1">
              <span class="text-white font-medium">Rate pe Niveluri</span>
              <p class="text-white/50 text-sm">Mai mult vand = comision mai mare</p>
            </div>
            <span class="text-affiliate-purple font-bold">Tier</span>
          </div>
        </div>
      </div>

      <div class="reveal reveal-delay-1">
        <div class="bg-dark-800 rounded-2xl p-6 border border-white/10">
          <div class="flex items-center justify-between mb-6">
            <div class="text-white font-semibold">Calculator Comision</div>
            <span class="status-badge active">10% activ</span>
          </div>

          <div class="bg-dark-900/50 rounded-xl p-4 mb-4">
            <div class="flex items-center justify-between mb-3">
              <span class="text-white/60 text-sm">Vanzare bilet</span>
              <span class="text-white font-mono">&#8364;150.00</span>
            </div>
            <div class="flex items-center justify-between mb-3">
              <span class="text-white/60 text-sm">Rata comision</span>
              <span class="text-affiliate-primary font-mono">&#215; 10%</span>
            </div>
            <div class="border-t border-white/10 pt-3 flex items-center justify-between">
              <span class="text-white font-medium">Comision afiliat</span>
              <span class="text-affiliate-gold font-bold text-xl">&#8364;15.00</span>
            </div>
          </div>

          <div class="space-y-3">
            <div class="text-white/40 text-xs uppercase mb-2">Statusuri conversie</div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-affiliate-pending/10 border border-affiliate-pending/20">
              <span class="w-3 h-3 rounded-full bg-affiliate-pending"></span>
              <span class="text-white/70 text-sm flex-1">Pending</span>
              <span class="text-white/40 text-xs">In verificare</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-affiliate-approved/10 border border-affiliate-approved/20">
              <span class="w-3 h-3 rounded-full bg-affiliate-approved"></span>
              <span class="text-white/70 text-sm flex-1">Aprobat</span>
              <span class="text-white/40 text-xs">Gata de plata</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-affiliate-paid/10 border border-affiliate-paid/20">
              <span class="w-3 h-3 rounded-full bg-affiliate-paid"></span>
              <span class="text-white/70 text-sm flex-1">Platit</span>
              <span class="text-white/40 text-xs">Transfer efectuat</span>
            </div>
            <div class="flex items-center gap-3 p-3 rounded-lg bg-affiliate-reversed/10 border border-affiliate-reversed/20">
              <span class="w-3 h-3 rounded-full bg-affiliate-reversed"></span>
              <span class="text-white/70 text-sm flex-1">Reversat</span>
              <span class="text-white/40 text-xs">Retur/anulare</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FRAUD PREVENTION -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-rose text-sm font-medium uppercase tracking-widest">Protectie</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Anti-frauda<br><span class="text-gradient">incorporat</span></h2>
      <p class="text-lg text-white/60">Deduplicare automata si garda auto-achizitie. Protejeaza-ti marjele.</p>
    </div>

    <div class="grid md:grid-cols-3 gap-6">
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-rose/20 hover:border-brand-rose/50 transition-all duration-500 reveal">
        <div class="w-14 h-14 rounded-2xl bg-brand-rose/10 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Deduplicare</h3>
        <p class="text-white/50 text-sm mb-4">Previne numararea dubla a conversiilor. O comanda = un comision.</p>
        <div class="p-3 rounded-lg bg-brand-rose/10 border border-brand-rose/20">
          <div class="flex items-center gap-2 text-brand-rose text-sm">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Automata, bazata pe ID comanda
          </div>
        </div>
      </div>

      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-amber/20 hover:border-brand-amber/50 transition-all duration-500 reveal reveal-delay-1">
        <div class="w-14 h-14 rounded-2xl bg-brand-amber/10 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Garda Auto-Achizitie</h3>
        <p class="text-white/50 text-sm mb-4">Opreste afiliati sa castige comision pe propriile achizitii.</p>
        <div class="p-3 rounded-lg bg-brand-amber/10 border border-brand-amber/20">
          <div class="flex items-center gap-2 text-brand-amber text-sm">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Verificare email si IP
          </div>
        </div>
      </div>

      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-affiliate-primary/20 hover:border-affiliate-primary/50 transition-all duration-500 reveal reveal-delay-2">
        <div class="w-14 h-14 rounded-2xl bg-affiliate-primary/10 flex items-center justify-center mb-4">
          <svg class="w-7 h-7 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="text-xl font-semibold text-white mb-2">Fereastra Cookie</h3>
        <p class="text-white/50 text-sm mb-4">90 de zile pentru atribuire corecta. Ultimul click castiga.</p>
        <div class="p-3 rounded-lg bg-affiliate-primary/10 border border-affiliate-primary/20">
          <div class="flex items-center gap-2 text-affiliate-primary text-sm">
            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
            Configurabil (30/60/90 zile)
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- DUAL DASHBOARDS -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-affiliate-link text-sm font-medium uppercase tracking-widest">Dashboard-uri</span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Pentru tine si<br><span class="text-gradient-affiliate">pentru afiliati</span></h2>
      <p class="text-lg text-white/60">Vizualizari separate pentru ambele parti. Fiecare vede ce are nevoie.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-8">
      <!-- Tenant Dashboard -->
      <div class="reveal">
        <div class="bg-dark-800 rounded-2xl overflow-hidden border border-brand-violet/20">
          <div class="px-6 py-4 bg-brand-violet/10 border-b border-brand-violet/20 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-brand-violet/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold">Dashboard Organizator</div>
              <div class="text-white/40 text-xs">Tu vezi totul</div>
            </div>
          </div>
          <div class="p-6">
            <div class="grid grid-cols-3 gap-4 mb-6">
              <div class="text-center p-3 rounded-lg bg-dark-900/50">
                <div class="text-brand-violet font-bold text-xl">23</div>
                <div class="text-white/40 text-xs">Afiliati activi</div>
              </div>
              <div class="text-center p-3 rounded-lg bg-dark-900/50">
                <div class="text-affiliate-primary font-bold text-xl">&#8364;4,250</div>
                <div class="text-white/40 text-xs">Comisioane datorate</div>
              </div>
              <div class="text-center p-3 rounded-lg bg-dark-900/50">
                <div class="text-affiliate-gold font-bold text-xl">3.2%</div>
                <div class="text-white/40 text-xs">Rata conversie medie</div>
              </div>
            </div>

            <div class="text-white/50 text-xs mb-2">Top performeri</div>
            <div class="space-y-2">
              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/30">
                <div class="flex items-center gap-3">
                  <div class="affiliate-avatar w-8 h-8 text-sm">MI</div>
                  <span class="text-white text-sm">Maria Influencer</span>
                </div>
                <div class="text-right">
                  <div class="text-affiliate-primary font-medium text-sm">&#8364;1,250</div>
                  <div class="text-white/40 text-xs">47 conversii</div>
                </div>
              </div>
              <div class="flex items-center justify-between p-3 rounded-lg bg-dark-900/30">
                <div class="flex items-center gap-3">
                  <div class="affiliate-avatar w-8 h-8 text-sm" style="background: linear-gradient(135deg, #3B82F6, #06B6D4);">DP</div>
                  <span class="text-white text-sm">Dan Promoter</span>
                </div>
                <div class="text-right">
                  <div class="text-affiliate-primary font-medium text-sm">&#8364;890</div>
                  <div class="text-white/40 text-xs">32 conversii</div>
                </div>
              </div>
            </div>

            <button class="w-full mt-4 py-2 rounded-lg border border-white/10 text-white/50 text-sm hover:bg-white/5 transition-colors">
              &#128202; Export CSV pentru contabilitate
            </button>
          </div>
        </div>
      </div>

      <!-- Affiliate Dashboard -->
      <div class="reveal reveal-delay-1">
        <div class="bg-dark-800 rounded-2xl overflow-hidden border border-affiliate-primary/20">
          <div class="px-6 py-4 bg-affiliate-primary/10 border-b border-affiliate-primary/20 flex items-center gap-3">
            <div class="w-10 h-10 rounded-xl bg-affiliate-primary/20 flex items-center justify-center">
              <svg class="w-5 h-5 text-affiliate-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
            </div>
            <div>
              <div class="text-white font-semibold">Dashboard Afiliat</div>
              <div class="text-white/40 text-xs">Ce vede Maria</div>
            </div>
          </div>
          <div class="p-6">
            <div class="grid grid-cols-3 gap-4 mb-6">
              <div class="text-center p-3 rounded-lg bg-dark-900/50">
                <div class="text-affiliate-link font-bold text-xl">1,892</div>
                <div class="text-white/40 text-xs">Click-uri</div>
              </div>
              <div class="text-center p-3 rounded-lg bg-dark-900/50">
                <div class="text-affiliate-primary font-bold text-xl">47</div>
                <div class="text-white/40 text-xs">Conversii</div>
              </div>
              <div class="text-center p-3 rounded-lg bg-dark-900/50">
                <div class="text-affiliate-gold font-bold text-xl">&#8364;1,250</div>
                <div class="text-white/40 text-xs">Castiguri</div>
              </div>
            </div>

            <div class="text-white/50 text-xs mb-2">Castiguri per status</div>
            <div class="space-y-2">
              <div class="flex items-center justify-between p-3 rounded-lg bg-affiliate-approved/10 border border-affiliate-approved/20">
                <div class="flex items-center gap-2">
                  <span class="status-badge approved">Aprobat</span>
                  <span class="text-white/70 text-sm">Gata de plata</span>
                </div>
                <span class="text-affiliate-approved font-medium">&#8364;870</span>
              </div>
              <div class="flex items-center justify-between p-3 rounded-lg bg-affiliate-pending/10 border border-affiliate-pending/20">
                <div class="flex items-center gap-2">
                  <span class="status-badge pending">Pending</span>
                  <span class="text-white/70 text-sm">In verificare</span>
                </div>
                <span class="text-affiliate-pending font-medium">&#8364;380</span>
              </div>
            </div>

            <div class="mt-4 p-4 rounded-lg bg-dark-900/50">
              <div class="text-white/40 text-xs mb-2">Link-ul tau:</div>
              <div class="affiliate-link text-xs">
                bilete.ro/ref/<span class="text-affiliate-primary">maria2025</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="bg-gradient-to-br from-affiliate-primary/10 to-affiliate-gold/10 rounded-3xl p-8 md:p-12 border border-affiliate-primary/20">
        <div class="flex items-center gap-1 mb-6">
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
        </div>
        <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
          "Programul de afiliati ne-a adus <span class="text-gradient-affiliate font-semibold">18% din vanzari</span>. Influencerii locali promoveaza evenimentele si castiga toti. Win-win perfect."
        </blockquote>
        <div class="flex items-center gap-4">
          <div class="affiliate-avatar text-lg">AP</div>
          <div>
            <div class="font-semibold text-white">Ana P.</div>
            <div class="text-white/50">Marketing Manager, Electric Castle</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-affiliate-primary/10 via-transparent to-affiliate-gold/10"></div>
  <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(16,185,129,0.2) 0%, rgba(251,191,36,0.1) 100%);"></div>

  <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">&#128176;</div>
  <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">&#128279;</div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Urmarire<br><span class="text-gradient-affiliate">Afiliati</span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Transforma word-of-mouth in vanzari masurabile. Link-uri, cupoane, comisioane automate.</p>

    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-affiliate-primary text-white hover:bg-affiliate-secondary hover:scale-105 hover:shadow-glow-green transition-all duration-300">
        Lanseaza Programul
        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
        Intrebari? Contacteaza-ne
      </a>
    </div>

    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Link Tracking - Cupoane - Comisioane Auto - Anti-frauda - Dashboard-uri Duale - Export CSV</p>
  </div>
</section>

<script>
  window.addEventListener('scroll', () => {
    const header = document.getElementById('header');
    if (header) {
      if (window.scrollY > 50) header.classList.add('bg-dark-900/95', 'backdrop-blur-xl', 'shadow-lg');
      else header.classList.remove('bg-dark-900/95', 'backdrop-blur-xl', 'shadow-lg');
    }
  });

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

  document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

  document.querySelectorAll('.feature-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
      card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
    });
  });
</script>

<?php get_footer(); ?>
