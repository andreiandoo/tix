<?php
/**
 * Template Name: Micro - TikTok Ads
 * Description: Landing page for TikTok Ads Events API integration
 */

get_header();

$current_lang = function_exists( 'pll_current_language' ) ? pll_current_language() : 'en';
$t = [
    // Hero
    'badge'                   => $current_lang === 'ro' ? 'TikTok Events API · Server-Side' : 'TikTok Events API · Server-Side',
    'hero_title'              => $current_lang === 'ro' ? 'Viral in' : 'Go viral with',
    'hero_title2'             => $current_lang === 'ro' ? 'conversii' : 'conversions',
    'hero_desc'               => $current_lang === 'ro' ? 'Ajunge la <strong class="text-white">Gen Z</strong> pe TikTok si urmareste exact care videouri vand bilete. Events API server-side, <strong class="text-white">fara pierderi de date</strong> din cauza iOS privacy.' : 'Reach <strong class="text-white">Gen Z</strong> on TikTok and track exactly which videos sell tickets. Server-side Events API, <strong class="text-white">no data loss</strong> due to iOS privacy.',
    'cta_connect'             => $current_lang === 'ro' ? 'Conecteaza TikTok' : 'Connect TikTok',
    'cta_how'                 => $current_lang === 'ro' ? 'Cum functioneaza' : 'How it works',
    'active_users'            => $current_lang === 'ro' ? 'Utilizatori activi' : 'Active users',
    'main_audience'           => $current_lang === 'ro' ? 'Audienta principala' : 'Main audience',
    'attribution_window'      => $current_lang === 'ro' ? 'Fereastra atribuire' : 'Attribution window',
    'vip_tickets'             => $current_lang === 'ro' ? '2 bilete VIP' : '2 VIP tickets',

    // Why Server-Side
    'why_serverside'          => $current_lang === 'ro' ? 'De Ce Server-Side' : 'Why Server-Side',
    'browser_problem'         => $current_lang === 'ro' ? 'Pixelii din browser' : 'Browser pixels',
    'browser_problem2'        => $current_lang === 'ro' ? 'au o problema' : 'have a problem',
    'browser_problem_desc'    => $current_lang === 'ro' ? 'iOS 14.5+, ad blockere, browsere privacy - toate blocheaza tracking-ul traditional.' : 'iOS 14.5+, ad blockers, privacy browsers - all block traditional tracking.',
    'pixel_browser'           => $current_lang === 'ro' ? 'TikTok Pixel (Browser)' : 'TikTok Pixel (Browser)',
    'ios_att'                 => 'iOS 14.5+ ATT',
    'opt_out_rate'            => $current_lang === 'ro' ? '~75% opt-out rate' : '~75% opt-out rate',
    'ad_blockers'             => 'Ad Blockers',
    'ad_blockers_pct'         => $current_lang === 'ro' ? '30-40% utilizatori' : '30-40% users',
    'browser_privacy'         => 'Browser Privacy',
    'browser_privacy_desc'    => 'Safari ITP, Firefox ETP',
    'data_lost'               => $current_lang === 'ro' ? 'Date pierdute estimat' : 'Estimated data lost',
    'recommended'             => $current_lang === 'ro' ? 'RECOMANDAT' : 'RECOMMENDED',
    'events_api_server'       => $current_lang === 'ro' ? 'TikTok Events API (Server)' : 'TikTok Events API (Server)',
    'bypass_ios'              => $current_lang === 'ro' ? 'Ocoleste iOS restrictions' : 'Bypasses iOS restrictions',
    'events_tracked'          => $current_lang === 'ro' ? '100% events tracked' : '100% events tracked',
    'immune_adblockers'       => $current_lang === 'ro' ? 'Imun la ad blockers' : 'Immune to ad blockers',
    'direct_server'           => $current_lang === 'ro' ? 'Direct server → TikTok' : 'Direct server → TikTok',
    'privacy_compliant'       => 'Privacy-compliant',
    'sha256_builtin'          => 'SHA-256 hashing built-in',
    'data_captured'           => $current_lang === 'ro' ? 'Date capturate' : 'Data captured',

    // Event Funnel
    'events_tracked_badge'    => $current_lang === 'ro' ? 'Evenimente Urmarite' : 'Tracked Events',
    'every_step'              => $current_lang === 'ro' ? 'Fiecare pas' : 'Every step',
    'every_step2'             => $current_lang === 'ro' ? 'monitorizat' : 'monitored',
    'page_viewed'             => $current_lang === 'ro' ? 'Pagina eveniment vizualizata' : 'Event page viewed',
    'ticket_added'            => $current_lang === 'ro' ? 'Bilet adaugat in cos' : 'Ticket added to cart',
    'checkout_started'        => $current_lang === 'ro' ? 'Checkout inceput' : 'Checkout started',
    'purchase_completed'      => $current_lang === 'ro' ? 'Achizitie finalizata' : 'Purchase completed',
    'user_registered'         => $current_lang === 'ro' ? 'Utilizator inregistrat' : 'User registered',
    'auto_params'             => $current_lang === 'ro' ? 'Parametri inclusi automat' : 'Auto-included parameters',
    'automatic'               => $current_lang === 'ro' ? 'Automat' : 'Automatic',

    // Privacy
    'privacy_first'           => 'Privacy-First',
    'data_protected'          => $current_lang === 'ro' ? 'Date protejate' : 'Data protected',
    'data_protected2'         => $current_lang === 'ro' ? 'prin design' : 'by design',
    'privacy_desc'            => $current_lang === 'ro' ? 'Toate datele personale sunt hash-uite SHA-256 inainte de a parasi serverele tale. TikTok primeste doar identificatori criptati.' : 'All personal data is SHA-256 hashed before leaving your servers. TikTok receives only encrypted identifiers.',
    'sha256_hashing'          => 'SHA-256 Hashing',
    'sha256_desc'             => $current_lang === 'ro' ? 'Email, telefon, user ID - toate criptate' : 'Email, phone, user ID - all encrypted',
    'one_way_encryption'      => 'One-Way Encryption',
    'one_way_desc'            => $current_lang === 'ro' ? 'Imposibil de decriptat datele originale' : 'Impossible to decrypt original data',
    'gdpr_compliant'          => 'GDPR Compliant',
    'gdpr_desc'               => $current_lang === 'ro' ? 'Verificare consimtamant inclusa' : 'Consent verification included',
    'data_transform'          => $current_lang === 'ro' ? 'Transformare Date' : 'Data Transformation',
    'email_label'             => 'Email',
    'phone_label'             => $current_lang === 'ro' ? 'Telefon (E.164)' : 'Phone (E.164)',

    // Custom Audiences
    'audiences_badge'         => $current_lang === 'ro' ? 'Audiente' : 'Audiences',
    'find_more'               => $current_lang === 'ro' ? 'Gaseste mai multi' : 'Find more',
    'find_more2'              => $current_lang === 'ro' ? 'ca ei' : 'like them',
    'audiences_desc'          => $current_lang === 'ro' ? 'Incarca liste de cumparatori si lasa TikTok sa gaseasca oameni similari din 1 miliard+ utilizatori.' : 'Upload buyer lists and let TikTok find similar people from 1 billion+ users.',
    'buyers'                  => $current_lang === 'ro' ? 'Cumparatori' : 'Buyers',
    'lookalike'               => 'Lookalike 1-5%',
    'custom_audience'         => 'Custom Audience',
    'upload_lists'            => $current_lang === 'ro' ? 'Upload liste clienti' : 'Upload customer lists',
    'upload_lists_desc'       => $current_lang === 'ro' ? 'Email, telefon, user ID' : 'Email, phone, user ID',
    'create_lookalikes'       => $current_lang === 'ro' ? 'Creeaza Lookalikes' : 'Create Lookalikes',
    'lookalikes_desc'         => '1%, 2%, 5% similarity',
    'exclusion_lists'         => $current_lang === 'ro' ? 'Liste de excludere' : 'Exclusion lists',
    'exclusion_desc'          => $current_lang === 'ro' ? 'Nu mai targeta cumparatorii existenti' : 'Stop targeting existing buyers',

    // Use Cases
    'use_cases_badge'         => $current_lang === 'ro' ? 'Cazuri de Utilizare' : 'Use Cases',
    'tiktok_for'              => $current_lang === 'ro' ? 'TikTok pentru' : 'TikTok for',
    'tiktok_for2'             => $current_lang === 'ro' ? 'fiecare eveniment' : 'every event',
    'concert_promo'           => $current_lang === 'ro' ? 'Promovare Concerte' : 'Concert Promotion',
    'concert_desc'            => $current_lang === 'ro' ? 'Promoveaza concertele viitoare fanilor muzicii. Urmareste care sunete si stiluri video vand bilete.' : 'Promote upcoming concerts to music fans. Track which sounds and video styles sell tickets.',
    'festival_marketing'      => $current_lang === 'ro' ? 'Marketing Festivaluri' : 'Festival Marketing',
    'festival_desc'           => $current_lang === 'ro' ? 'Ajunge la audientele de festival. Masoara ROI-ul real, construieste lookalikes din participanti anteriori.' : 'Reach festival audiences. Measure real ROI, build lookalikes from past attendees.',
    'genz_events'             => $current_lang === 'ro' ? 'Evenimente Gen Z' : 'Gen Z Events',
    'genz_desc'               => $current_lang === 'ro' ? 'Ajunge la tineri acolo unde isi petrec timpul. Tracking precis in ciuda iOS restrictions.' : 'Reach young people where they spend time. Accurate tracking despite iOS restrictions.',
    'retargeting'             => 'Retargeting',
    'retargeting_desc'        => $current_lang === 'ro' ? 'Adu inapoi utilizatorii care au vizualizat dar nu au cumparat. Audiente din abandonatori cos.' : 'Bring back users who viewed but didn\'t buy. Audiences from cart abandoners.',
    'influencer_attribution'  => $current_lang === 'ro' ? 'Atribuire Influenceri' : 'Influencer Attribution',
    'influencer_desc'         => $current_lang === 'ro' ? 'Urmareste vanzarile cand creatorii promoveaza. Intelege care parteneriate genereaza venituri.' : 'Track sales when creators promote. Understand which partnerships generate revenue.',
    'event_discovery'         => $current_lang === 'ro' ? 'Descoperire Evenimente' : 'Event Discovery',
    'discovery_desc'          => $current_lang === 'ro' ? 'Utilizatorii TikTok cauta experiente. Pozitioneaza-te in fata audientelor orientate spre descoperire.' : 'TikTok users seek experiences. Position yourself in front of discovery-oriented audiences.',

    // Testimonial
    'testimonial_text'        => $current_lang === 'ro' ? 'TikTok ne aduce <span class="text-gradient-tiktok font-semibold">40% din vanzarile</span> la publicul sub 25 ani. Cu Events API, in sfarsit vedem exact care videouri convertesc. ROI-ul a crescut de 3x de cand am integrat.' : 'TikTok brings us <span class="text-gradient-tiktok font-semibold">40% of sales</span> to the under-25 audience. With Events API, we finally see exactly which videos convert. ROI has increased 3x since integration.',
    'testimonial_author'      => 'Alex V.',
    'testimonial_role'        => 'Marketing Manager, Untold Festival',

    // Final CTA
    'final_title'             => 'Go',
    'final_title2'            => 'viral',
    'final_desc'              => $current_lang === 'ro' ? 'Ajunge la Gen Z pe TikTok. Urmareste conversiile server-side. Vinde mai multe bilete.' : 'Reach Gen Z on TikTok. Track conversions server-side. Sell more tickets.',
    'questions_contact'       => $current_lang === 'ro' ? 'Intrebari? Contacteaza-ne' : 'Questions? Contact us',
    'footer_note'             => $current_lang === 'ro' ? '50.000 evenimente/zi incluse. Batch processing. Test mode disponibil.' : '50,000 events/day included. Batch processing. Test mode available.',
];
?>

<style>
/* Text gradients */
.text-gradient {
  background: linear-gradient(135deg, #a78bfa 0%, #22d3ee 50%, #a78bfa 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
}
.text-gradient-tiktok {
  background: linear-gradient(90deg, #00F2EA 0%, #FF0050 50%, #00F2EA 100%);
  background-size: 200% auto;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-clip: text;
  animation: shimmer 3s linear infinite;
}

/* Reveal animations */
.reveal {
  opacity: 0;
  transform: translateY(40px);
  transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
}
.reveal.revealed { opacity: 1; transform: translateY(0); }
.reveal-delay-1 { transition-delay: 0.1s; }
.reveal-delay-2 { transition-delay: 0.2s; }
.reveal-delay-3 { transition-delay: 0.3s; }
.reveal-delay-4 { transition-delay: 0.4s; }
.reveal-delay-5 { transition-delay: 0.5s; }

/* Feature card glow */
.feature-card::before {
  content: '';
  position: absolute;
  inset: 0;
  background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(0, 242, 234, 0.1), transparent 50%);
  opacity: 0;
  transition: opacity 0.5s;
  border-radius: inherit;
}
.feature-card:hover::before { opacity: 1; }

/* Phone frame */
.phone-frame {
  background: linear-gradient(145deg, #1a1a27 0%, #0f0f16 100%);
  border-radius: 40px;
  padding: 8px;
  box-shadow: 0 50px 100px -20px rgba(0, 0, 0, 0.5), 0 0 0 1px rgba(255, 255, 255, 0.1), -4px 0 30px rgba(0, 242, 234, 0.2), 4px 0 30px rgba(255, 0, 80, 0.2);
}
.phone-screen {
  background: #000;
  border-radius: 32px;
  overflow: hidden;
}
.phone-notch {
  position: absolute;
  top: 0;
  left: 50%;
  transform: translateX(-50%);
  width: 120px;
  height: 28px;
  background: #000;
  border-radius: 0 0 20px 20px;
  z-index: 10;
}
.tiktok-video {
  aspect-ratio: 9/16;
  background: linear-gradient(180deg, #1a1a27 0%, #0a0a0f 100%);
}

/* Heart float animation */
.heart-float {
  animation: heartPop 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards;
}

/* Music notes wave */
.music-note {
  animation: wave 1s ease-in-out infinite;
}
.music-note:nth-child(2) { animation-delay: 0.2s; }
.music-note:nth-child(3) { animation-delay: 0.4s; }

/* Video scroll */
.video-scroll-container {
  height: 100%;
  overflow: hidden;
}
.video-scroll-content {
  animation: scrollVideo 12s ease-in-out infinite;
}

/* Server badge */
.server-badge {
  background: linear-gradient(135deg, rgba(0, 242, 234, 0.2), rgba(255, 0, 80, 0.2));
  border: 1px solid rgba(0, 242, 234, 0.3);
}

/* Neon border */
.neon-border {
  position: relative;
}
.neon-border::before {
  content: '';
  position: absolute;
  inset: -2px;
  background: linear-gradient(90deg, #00F2EA, #FF0050, #00F2EA);
  border-radius: inherit;
  z-index: -1;
  animation: shimmer 3s linear infinite;
  background-size: 200% auto;
}

/* TikTok glitch effect */
.tiktok-glitch {
  position: relative;
}
.tiktok-glitch::before,
.tiktok-glitch::after {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}
.tiktok-glitch::before {
  color: #00F2EA;
  animation: glitch 3s ease-in-out infinite;
  clip-path: polygon(0 0, 100% 0, 100% 45%, 0 45%);
  transform: translate(-2px, 0);
  opacity: 0.8;
}
.tiktok-glitch::after {
  color: #FF0050;
  animation: glitch 3s ease-in-out infinite reverse;
  clip-path: polygon(0 55%, 100% 55%, 100% 100%, 0 100%);
  transform: translate(2px, 0);
  opacity: 0.8;
}

/* Custom glow shadows */
.shadow-glow-tiktok {
  box-shadow: -4px 0 30px rgba(0, 242, 234, 0.5), 4px 0 30px rgba(255, 0, 80, 0.5);
}

/* Custom keyframes */
@keyframes shimmer {
  0% { background-position: 0% center; }
  100% { background-position: 200% center; }
}
@keyframes scrollVideo {
  0%, 20% { transform: translateY(0); }
  25%, 45% { transform: translateY(-100%); }
  50%, 70% { transform: translateY(-200%); }
  75%, 95% { transform: translateY(-100%); }
  100% { transform: translateY(0); }
}
@keyframes heartPop {
  0% { transform: scale(0); }
  50% { transform: scale(1.3); }
  100% { transform: scale(1); }
}
@keyframes glitch {
  0%, 90%, 100% { transform: translate(0); }
  92% { transform: translate(-2px, 1px); }
  94% { transform: translate(2px, -1px); }
  96% { transform: translate(-1px, -1px); }
  98% { transform: translate(1px, 1px); }
}
@keyframes wave {
  0%, 100% { transform: rotate(-3deg); }
  50% { transform: rotate(3deg); }
}
</style>

<!-- HERO -->
<section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
  <div class="absolute w-[800px] h-[800px] bg-tiktok-aqua/20 rounded-full -top-60 -left-60 blur-[150px] pointer-events-none"></div>
  <div class="absolute w-[600px] h-[600px] bg-tiktok-red/20 rounded-full bottom-0 -right-40 blur-[150px] pointer-events-none"></div>
  <div class="absolute top-32 left-20 text-3xl music-note opacity-20">♪</div>
  <div class="absolute bottom-40 right-32 text-2xl music-note opacity-20" style="animation-delay: 0.3s;">♫</div>

  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
    <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
      <div class="reveal">
        <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full server-badge mb-6">
          <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
          <span class="text-white text-sm font-medium"><?php echo esc_html( $t['badge'] ); ?></span>
        </div>

        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
          <?php echo esc_html( $t['hero_title'] ); ?><br><span class="text-gradient-tiktok tiktok-glitch" data-text="<?php echo esc_attr( $t['hero_title2'] ); ?>"><?php echo esc_html( $t['hero_title2'] ); ?></span>
        </h1>

        <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
          <?php echo $t['hero_desc']; ?>
        </p>

        <div class="flex flex-wrap gap-4 mb-12">
          <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-gradient-to-r from-tiktok-aqua to-tiktok-red text-white hover:scale-105 hover:shadow-glow-tiktok transition-all duration-300">
            <?php echo esc_html( $t['cta_connect'] ); ?>
            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </a>
          <a href="#cum-functioneaza" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300"><?php echo esc_html( $t['cta_how'] ); ?></a>
        </div>

        <div class="grid grid-cols-3 gap-6">
          <div><div class="text-3xl font-display font-bold text-tiktok-aqua">1B+</div><div class="text-white/40 text-sm"><?php echo esc_html( $t['active_users'] ); ?></div></div>
          <div><div class="text-3xl font-display font-bold text-white">Gen Z</div><div class="text-white/40 text-sm"><?php echo esc_html( $t['main_audience'] ); ?></div></div>
          <div><div class="text-3xl font-display font-bold text-tiktok-red">28d</div><div class="text-white/40 text-sm"><?php echo esc_html( $t['attribution_window'] ); ?></div></div>
        </div>
      </div>

      <!-- Phone Mockup -->
      <div class="reveal reveal-delay-1">
        <div class="relative flex justify-center" x-data="{ likes: 12847, showHeart: false }" x-init="setInterval(() => { likes += Math.floor(Math.random() * 10) + 1; if (Math.random() > 0.7) { showHeart = true; setTimeout(() => showHeart = false, 500); } }, 2000);">
          <div class="phone-frame relative" style="width: 280px;">
            <div class="phone-screen relative" style="height: 560px;">
              <div class="phone-notch"></div>
              <div class="absolute inset-0 video-scroll-container">
                <div class="video-scroll-content">
                  <div class="tiktok-video relative"><div class="absolute inset-0 bg-gradient-to-br from-purple-600/30 via-pink-500/20 to-orange-400/30"></div><div class="absolute inset-0 flex items-center justify-center"><div class="text-center"><div class="text-6xl mb-4">🎤</div><div class="text-white font-bold text-lg">SUMMER FEST</div><div class="text-white/60 text-sm">Get your tickets now!</div></div></div></div>
                  <div class="tiktok-video relative"><div class="absolute inset-0 bg-gradient-to-br from-tiktok-aqua/30 via-blue-500/20 to-tiktok-red/30"></div><div class="absolute inset-0 flex items-center justify-center"><div class="text-center"><div class="text-6xl mb-4">🎸</div><div class="text-white font-bold text-lg">ROCK NIGHT</div><div class="text-white/60 text-sm">Limited VIP passes!</div></div></div></div>
                  <div class="tiktok-video relative"><div class="absolute inset-0 bg-gradient-to-br from-green-500/30 via-teal-500/20 to-cyan-400/30"></div><div class="absolute inset-0 flex items-center justify-center"><div class="text-center"><div class="text-6xl mb-4">🎧</div><div class="text-white font-bold text-lg">DJ NIGHT</div><div class="text-white/60 text-sm">Early bird tickets!</div></div></div></div>
                </div>
              </div>
              <div class="absolute inset-0 pointer-events-none">
                <div class="absolute bottom-0 left-0 right-16 p-4">
                  <div class="flex items-center gap-2 mb-2"><div class="w-8 h-8 rounded-full bg-gradient-to-br from-tiktok-aqua to-tiktok-red"></div><span class="text-white font-semibold text-sm">@yourevent</span><button class="px-2 py-0.5 border border-tiktok-red text-tiktok-red text-xs rounded">Follow</button></div>
                  <p class="text-white text-sm mb-2">Get your tickets before they sell out! 🎫🔥 #concert #festival</p>
                  <div class="flex items-center gap-2 text-white/60 text-xs"><span class="music-note">♪</span><span class="music-note">♪</span><span class="music-note">♪</span><span>Original Sound</span></div>
                </div>
                <div class="absolute right-3 bottom-24 flex flex-col items-center gap-5">
                  <div class="text-center relative">
                    <div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur flex items-center justify-center"><svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></div>
                    <span class="text-white text-xs font-semibold" x-text="likes.toLocaleString()">12.8K</span>
                    <div x-show="showHeart" class="absolute -top-8 left-1/2 -translate-x-1/2 text-tiktok-red text-2xl heart-float">❤️</div>
                  </div>
                  <div class="text-center"><div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur flex items-center justify-center"><svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg></div><span class="text-white text-xs font-semibold">847</span></div>
                  <div class="text-center"><div class="w-10 h-10 rounded-full bg-white/10 backdrop-blur flex items-center justify-center"><svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg></div><span class="text-white text-xs font-semibold">234</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-tiktok-aqua/30 shadow-xl animate-float z-10">
            <div class="flex items-center gap-2"><div class="w-8 h-8 rounded-lg bg-brand-green/20 flex items-center justify-center"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div><div><div class="text-brand-green text-sm font-medium">CompletePayment</div><div class="text-white/40 text-xs">Server-side ✓</div></div></div>
          </div>
          <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-tiktok-red/30 shadow-xl animate-float [animation-delay:1s] z-10">
            <div class="flex items-center gap-2"><div class="text-2xl">🎫</div><div><div class="text-white text-sm font-medium">+€150</div><div class="text-white/40 text-xs"><?php echo esc_html( $t['vip_tickets'] ); ?></div></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WHY SERVER-SIDE -->
<section class="py-24 relative overflow-hidden" id="cum-functioneaza">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-tiktok-aqua text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['why_serverside'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['browser_problem'] ); ?><br><span class="text-tiktok-red"><?php echo esc_html( $t['browser_problem2'] ); ?></span></h2>
      <p class="text-lg text-white/60"><?php echo esc_html( $t['browser_problem_desc'] ); ?></p>
    </div>

    <div class="grid lg:grid-cols-2 gap-8">
      <div class="reveal">
        <div class="bg-gradient-to-br from-brand-rose/10 to-brand-rose/5 rounded-3xl p-8 border border-brand-rose/20 h-full">
          <div class="flex items-center gap-3 mb-6"><div class="w-12 h-12 rounded-xl bg-brand-rose/20 flex items-center justify-center"><svg class="w-6 h-6 text-brand-rose" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg></div><span class="text-brand-rose font-semibold"><?php echo esc_html( $t['pixel_browser'] ); ?></span></div>
          <div class="space-y-4 mb-6">
            <div class="p-4 rounded-xl bg-dark-900/50"><div class="flex items-center gap-3"><span class="text-2xl">🍎</span><div><div class="text-white text-sm font-medium"><?php echo esc_html( $t['ios_att'] ); ?></div><div class="text-brand-rose text-xs"><?php echo esc_html( $t['opt_out_rate'] ); ?></div></div></div></div>
            <div class="p-4 rounded-xl bg-dark-900/50"><div class="flex items-center gap-3"><span class="text-2xl">🛡️</span><div><div class="text-white text-sm font-medium"><?php echo esc_html( $t['ad_blockers'] ); ?></div><div class="text-brand-rose text-xs"><?php echo esc_html( $t['ad_blockers_pct'] ); ?></div></div></div></div>
            <div class="p-4 rounded-xl bg-dark-900/50"><div class="flex items-center gap-3"><span class="text-2xl">🔒</span><div><div class="text-white text-sm font-medium"><?php echo esc_html( $t['browser_privacy'] ); ?></div><div class="text-brand-rose text-xs"><?php echo esc_html( $t['browser_privacy_desc'] ); ?></div></div></div></div>
          </div>
          <div class="flex items-center justify-between p-4 rounded-xl bg-brand-rose/10 border border-brand-rose/20"><span class="text-white/70 text-sm"><?php echo esc_html( $t['data_lost'] ); ?></span><span class="text-brand-rose font-bold text-xl">30-50%</span></div>
        </div>
      </div>

      <div class="reveal reveal-delay-1">
        <div class="bg-gradient-to-br from-brand-green/10 to-tiktok-aqua/5 rounded-3xl p-8 border border-brand-green/20 h-full relative overflow-hidden">
          <div class="absolute top-4 right-4 px-3 py-1 bg-gradient-to-r from-tiktok-aqua to-tiktok-red text-white text-xs font-bold rounded-full"><?php echo esc_html( $t['recommended'] ); ?></div>
          <div class="flex items-center gap-3 mb-6"><div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center"><svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div><span class="text-brand-green font-semibold"><?php echo esc_html( $t['events_api_server'] ); ?></span></div>
          <div class="space-y-4 mb-6">
            <div class="p-4 rounded-xl bg-dark-900/50"><div class="flex items-center gap-3"><div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div><div><div class="text-white text-sm font-medium"><?php echo esc_html( $t['bypass_ios'] ); ?></div><div class="text-brand-green text-xs"><?php echo esc_html( $t['events_tracked'] ); ?></div></div></div></div>
            <div class="p-4 rounded-xl bg-dark-900/50"><div class="flex items-center gap-3"><div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div><div><div class="text-white text-sm font-medium"><?php echo esc_html( $t['immune_adblockers'] ); ?></div><div class="text-brand-green text-xs"><?php echo esc_html( $t['direct_server'] ); ?></div></div></div></div>
            <div class="p-4 rounded-xl bg-dark-900/50"><div class="flex items-center gap-3"><div class="w-8 h-8 rounded-full bg-brand-green/20 flex items-center justify-center"><svg class="w-4 h-4 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg></div><div><div class="text-white text-sm font-medium"><?php echo esc_html( $t['privacy_compliant'] ); ?></div><div class="text-brand-green text-xs"><?php echo esc_html( $t['sha256_builtin'] ); ?></div></div></div></div>
          </div>
          <div class="flex items-center justify-between p-4 rounded-xl bg-brand-green/10 border border-brand-green/20"><span class="text-white/70 text-sm"><?php echo esc_html( $t['data_captured'] ); ?></span><span class="text-brand-green font-bold text-xl">~100%</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- EVENT FUNNEL -->
<section class="py-24 bg-dark-850 relative">
  <div class="absolute w-[500px] h-[500px] bg-tiktok-aqua/10 rounded-full top-1/2 -left-60 blur-[150px] pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-6 lg:px-8 relative">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-tiktok-red text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['events_tracked_badge'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['every_step'] ); ?><br><span class="text-gradient-tiktok"><?php echo esc_html( $t['every_step2'] ); ?></span></h2>
    </div>

    <div class="relative">
      <div class="absolute top-12 left-0 right-0 h-1 bg-gradient-to-r from-tiktok-aqua via-brand-violet to-tiktok-red rounded-full hidden lg:block"></div>
      <div class="grid md:grid-cols-2 lg:grid-cols-5 gap-6 relative">
        <div class="reveal"><div class="bg-dark-800 rounded-2xl p-5 border border-white/10 text-center h-full"><div class="w-14 h-14 rounded-2xl bg-tiktok-aqua/20 flex items-center justify-center mx-auto mb-4"><span class="text-2xl">👀</span></div><h3 class="text-lg font-semibold text-white mb-2">ViewContent</h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['page_viewed'] ); ?></p><div class="mt-3 px-2 py-1 rounded-lg bg-tiktok-aqua/10 text-tiktok-aqua text-xs font-mono">view_content</div></div></div>
        <div class="reveal reveal-delay-1"><div class="bg-dark-800 rounded-2xl p-5 border border-white/10 text-center h-full"><div class="w-14 h-14 rounded-2xl bg-brand-amber/20 flex items-center justify-center mx-auto mb-4"><span class="text-2xl">🛒</span></div><h3 class="text-lg font-semibold text-white mb-2">AddToCart</h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['ticket_added'] ); ?></p><div class="mt-3 px-2 py-1 rounded-lg bg-brand-amber/10 text-brand-amber text-xs font-mono">add_to_cart</div></div></div>
        <div class="reveal reveal-delay-2"><div class="bg-dark-800 rounded-2xl p-5 border border-white/10 text-center h-full"><div class="w-14 h-14 rounded-2xl bg-brand-violet/20 flex items-center justify-center mx-auto mb-4"><span class="text-2xl">💳</span></div><h3 class="text-lg font-semibold text-white mb-2">InitiateCheckout</h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['checkout_started'] ); ?></p><div class="mt-3 px-2 py-1 rounded-lg bg-brand-violet/10 text-brand-violet text-xs font-mono">initiate_checkout</div></div></div>
        <div class="reveal reveal-delay-3"><div class="bg-dark-800 rounded-2xl p-5 border border-tiktok-red/30 text-center h-full"><div class="w-14 h-14 rounded-2xl bg-tiktok-red/20 flex items-center justify-center mx-auto mb-4"><span class="text-2xl">✅</span></div><h3 class="text-lg font-semibold text-white mb-2">CompletePayment</h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['purchase_completed'] ); ?></p><div class="mt-3 px-2 py-1 rounded-lg bg-tiktok-red/10 text-tiktok-red text-xs font-mono">complete_payment</div></div></div>
        <div class="reveal reveal-delay-4"><div class="bg-dark-800 rounded-2xl p-5 border border-white/10 text-center h-full"><div class="w-14 h-14 rounded-2xl bg-brand-green/20 flex items-center justify-center mx-auto mb-4"><span class="text-2xl">📝</span></div><h3 class="text-lg font-semibold text-white mb-2">Registration</h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['user_registered'] ); ?></p><div class="mt-3 px-2 py-1 rounded-lg bg-brand-green/10 text-brand-green text-xs font-mono">complete_registration</div></div></div>
      </div>
    </div>

    <div class="mt-12 bg-dark-800 rounded-2xl p-6 border border-white/10 reveal">
      <div class="flex items-center justify-between mb-4"><div class="text-white/40 text-sm"><?php echo esc_html( $t['auto_params'] ); ?></div><div class="px-3 py-1 rounded-full bg-brand-green/20 text-brand-green text-xs"><?php echo esc_html( $t['automatic'] ); ?></div></div>
      <div class="flex flex-wrap gap-3">
        <span class="px-3 py-1.5 rounded-lg bg-white/5 text-white/70 text-sm">content_type</span>
        <span class="px-3 py-1.5 rounded-lg bg-white/5 text-white/70 text-sm">content_id</span>
        <span class="px-3 py-1.5 rounded-lg bg-white/5 text-white/70 text-sm">value</span>
        <span class="px-3 py-1.5 rounded-lg bg-white/5 text-white/70 text-sm">currency</span>
        <span class="px-3 py-1.5 rounded-lg bg-tiktok-aqua/10 text-tiktok-aqua text-sm">ttclid</span>
        <span class="px-3 py-1.5 rounded-lg bg-tiktok-red/10 text-tiktok-red text-sm">_ttp cookie</span>
      </div>
    </div>
  </div>
</section>

<!-- PRIVACY -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="reveal">
        <span class="text-brand-green text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['privacy_first'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['data_protected'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['data_protected2'] ); ?></span></h2>
        <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['privacy_desc'] ); ?></p>
        <div class="space-y-4">
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10"><div class="w-12 h-12 rounded-xl bg-brand-green/20 flex items-center justify-center"><svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg></div><div><div class="text-white font-medium"><?php echo esc_html( $t['sha256_hashing'] ); ?></div><div class="text-white/50 text-sm"><?php echo esc_html( $t['sha256_desc'] ); ?></div></div></div>
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10"><div class="w-12 h-12 rounded-xl bg-tiktok-aqua/20 flex items-center justify-center"><svg class="w-6 h-6 text-tiktok-aqua" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"/></svg></div><div><div class="text-white font-medium"><?php echo esc_html( $t['one_way_encryption'] ); ?></div><div class="text-white/50 text-sm"><?php echo esc_html( $t['one_way_desc'] ); ?></div></div></div>
          <div class="flex items-center gap-4 p-4 rounded-xl bg-dark-800/50 border border-white/10"><div class="w-12 h-12 rounded-xl bg-brand-violet/20 flex items-center justify-center"><svg class="w-6 h-6 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg></div><div><div class="text-white font-medium"><?php echo esc_html( $t['gdpr_compliant'] ); ?></div><div class="text-white/50 text-sm"><?php echo esc_html( $t['gdpr_desc'] ); ?></div></div></div>
        </div>
      </div>

      <div class="reveal reveal-delay-1">
        <div class="bg-dark-800 rounded-3xl p-6 border border-white/10 overflow-hidden">
          <div class="text-white/40 text-xs uppercase tracking-wider mb-4"><?php echo esc_html( $t['data_transform'] ); ?></div>
          <div class="mb-6"><div class="text-white/60 text-sm mb-2"><?php echo esc_html( $t['email_label'] ); ?></div><div class="flex items-center gap-3"><div class="flex-1 p-3 rounded-lg bg-dark-900 border border-white/10"><code class="text-tiktok-red text-sm">client@exemplu.com</code></div><svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg><div class="flex-1 p-3 rounded-lg bg-brand-green/10 border border-brand-green/20"><code class="text-brand-green text-xs">a1b2c3d4e5f6...</code></div></div></div>
          <div class="mb-6"><div class="text-white/60 text-sm mb-2"><?php echo esc_html( $t['phone_label'] ); ?></div><div class="flex items-center gap-3"><div class="flex-1 p-3 rounded-lg bg-dark-900 border border-white/10"><code class="text-tiktok-aqua text-sm">+40721234567</code></div><svg class="w-6 h-6 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg><div class="flex-1 p-3 rounded-lg bg-brand-green/10 border border-brand-green/20"><code class="text-brand-green text-xs">f7e8d9c0b1a2...</code></div></div></div>
          <div class="p-4 rounded-xl bg-dark-950 border border-white/10"><div class="flex items-center gap-2 mb-3"><div class="w-3 h-3 rounded-full bg-red-500"></div><div class="w-3 h-3 rounded-full bg-yellow-500"></div><div class="w-3 h-3 rounded-full bg-green-500"></div><span class="text-white/30 text-xs ml-2">hash.php</span></div><pre class="text-xs"><code class="text-white/70"><span class="text-tiktok-red">$hashedEmail</span> = <span class="text-tiktok-aqua">hash</span>(<span class="text-brand-green">'sha256'</span>,
    <span class="text-tiktok-aqua">strtolower</span>(<span class="text-tiktok-aqua">trim</span>(<span class="text-tiktok-red">$email</span>))
);</code></pre></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CUSTOM AUDIENCES -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="grid lg:grid-cols-2 gap-16 items-center">
      <div class="order-2 lg:order-1 reveal">
        <div class="relative flex items-center justify-center">
          <div class="relative w-64 h-64">
            <div class="absolute inset-0 rounded-full border-2 border-dashed border-tiktok-aqua/30 animate-spin-slow"></div>
            <div class="absolute inset-8 rounded-full bg-gradient-to-br from-tiktok-red/20 to-tiktok-aqua/20 border border-white/10 flex items-center justify-center">
              <div class="w-24 h-24 rounded-full bg-gradient-to-br from-tiktok-aqua to-tiktok-red flex items-center justify-center shadow-glow-tiktok"><div class="text-center"><div class="text-white font-bold text-lg">2.4K</div><div class="text-white/70 text-xs"><?php echo esc_html( $t['buyers'] ); ?></div></div></div>
            </div>
            <div class="absolute -top-8 left-1/2 -translate-x-1/2 px-3 py-1 bg-dark-800 rounded-full text-tiktok-aqua text-xs border border-tiktok-aqua/30"><?php echo esc_html( $t['lookalike'] ); ?></div>
            <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 px-3 py-1 bg-dark-800 rounded-full text-tiktok-red text-xs border border-tiktok-red/30"><?php echo esc_html( $t['custom_audience'] ); ?></div>
          </div>
          <div class="absolute top-10 -left-4 w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 animate-float"></div>
          <div class="absolute top-20 -right-4 w-8 h-8 rounded-full bg-gradient-to-br from-cyan-500 to-blue-500 animate-float" style="animation-delay: 0.5s;"></div>
        </div>
      </div>

      <div class="order-1 lg:order-2 reveal reveal-delay-1">
        <span class="text-tiktok-red text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['audiences_badge'] ); ?></span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['find_more'] ); ?><br><span class="text-gradient-tiktok"><?php echo esc_html( $t['find_more2'] ); ?></span></h2>
        <p class="text-lg text-white/60 mb-8"><?php echo esc_html( $t['audiences_desc'] ); ?></p>
        <div class="space-y-4">
          <div class="flex items-center gap-3 p-4 rounded-xl bg-dark-800/50 border border-white/10"><div class="w-10 h-10 rounded-full bg-brand-green/20 flex items-center justify-center"><svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/></svg></div><div><div class="text-white font-medium"><?php echo esc_html( $t['upload_lists'] ); ?></div><div class="text-white/50 text-sm"><?php echo esc_html( $t['upload_lists_desc'] ); ?></div></div></div>
          <div class="flex items-center gap-3 p-4 rounded-xl bg-dark-800/50 border border-white/10"><div class="w-10 h-10 rounded-full bg-tiktok-aqua/20 flex items-center justify-center"><svg class="w-5 h-5 text-tiktok-aqua" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div><div><div class="text-white font-medium"><?php echo esc_html( $t['create_lookalikes'] ); ?></div><div class="text-white/50 text-sm"><?php echo esc_html( $t['lookalikes_desc'] ); ?></div></div></div>
          <div class="flex items-center gap-3 p-4 rounded-xl bg-dark-800/50 border border-white/10"><div class="w-10 h-10 rounded-full bg-tiktok-red/20 flex items-center justify-center"><svg class="w-5 h-5 text-tiktok-red" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"/></svg></div><div><div class="text-white font-medium"><?php echo esc_html( $t['exclusion_lists'] ); ?></div><div class="text-white/50 text-sm"><?php echo esc_html( $t['exclusion_desc'] ); ?></div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- USE CASES -->
<section class="py-24 relative overflow-hidden">
  <div class="max-w-7xl mx-auto px-6 lg:px-8">
    <div class="text-center max-w-3xl mx-auto mb-16 reveal">
      <span class="text-brand-violet text-sm font-medium uppercase tracking-widest"><?php echo esc_html( $t['use_cases_badge'] ); ?></span>
      <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6"><?php echo esc_html( $t['tiktok_for'] ); ?><br><span class="text-gradient animate-shimmer"><?php echo esc_html( $t['tiktok_for2'] ); ?></span></h2>
    </div>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-tiktok-aqua/30 transition-all duration-500 reveal"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-purple-500/20 to-pink-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🎤</span></div><h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['concert_promo'] ); ?></h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['concert_desc'] ); ?></p></div>
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-tiktok-red/30 transition-all duration-500 reveal reveal-delay-1"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-orange-500/20 to-red-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🎪</span></div><h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['festival_marketing'] ); ?></h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['festival_desc'] ); ?></p></div>
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-cyan/30 transition-all duration-500 reveal reveal-delay-2"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-500/20 to-blue-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🎧</span></div><h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['genz_events'] ); ?></h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['genz_desc'] ); ?></p></div>
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-amber/30 transition-all duration-500 reveal reveal-delay-3"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🎯</span></div><h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['retargeting'] ); ?></h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['retargeting_desc'] ); ?></p></div>
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-violet/30 transition-all duration-500 reveal reveal-delay-4"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-500/20 to-purple-500/20 flex items-center justify-center mb-4"><span class="text-2xl">⭐</span></div><h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['influencer_attribution'] ); ?></h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['influencer_desc'] ); ?></p></div>
      <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-white/10 hover:border-brand-green/30 transition-all duration-500 reveal reveal-delay-5"><div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-green-500/20 to-emerald-500/20 flex items-center justify-center mb-4"><span class="text-2xl">🔍</span></div><h3 class="text-xl font-semibold text-white mb-2"><?php echo esc_html( $t['event_discovery'] ); ?></h3><p class="text-white/50 text-sm"><?php echo esc_html( $t['discovery_desc'] ); ?></p></div>
    </div>
  </div>
</section>

<!-- TESTIMONIAL -->
<section class="py-24 bg-dark-850 relative">
  <div class="max-w-4xl mx-auto px-6 lg:px-8">
    <div class="relative reveal">
      <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
      <div class="neon-border rounded-3xl p-[2px]">
        <div class="bg-dark-800 rounded-3xl p-8 md:p-12">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">"<?php echo $t['testimonial_text']; ?>"</blockquote>
          <div class="flex items-center gap-4"><div class="w-14 h-14 rounded-full bg-gradient-to-br from-tiktok-aqua to-tiktok-red"></div><div><div class="font-semibold text-white"><?php echo esc_html( $t['testimonial_author'] ); ?></div><div class="text-white/50"><?php echo esc_html( $t['testimonial_role'] ); ?></div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section class="py-32 relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-br from-tiktok-aqua/20 via-transparent to-tiktok-red/20"></div>
  <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(0,242,234,0.3) 0%, rgba(255,0,80,0.3) 100%);"></div>
  <div class="absolute top-20 left-20 opacity-10 animate-float"><svg class="w-16 h-16" viewBox="0 0 24 24" fill="white"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg></div>

  <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
    <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal"><?php echo esc_html( $t['final_title'] ); ?><br><span class="text-gradient-tiktok"><?php echo esc_html( $t['final_title2'] ); ?></span></h2>
    <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1"><?php echo esc_html( $t['final_desc'] ); ?></p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
      <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-gradient-to-r from-tiktok-aqua to-tiktok-red text-white hover:scale-105 hover:shadow-glow-tiktok transition-all duration-300"><?php echo esc_html( $t['cta_connect'] ); ?><svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg></a>
      <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300"><?php echo esc_html( $t['questions_contact'] ); ?></a>
    </div>
    <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3"><?php echo esc_html( $t['footer_note'] ); ?></p>
  </div>
</section>

<script>
// Intersection Observer for Reveal Animations
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('revealed');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// Feature Card Mouse Tracking
document.querySelectorAll('.feature-card').forEach(card => {
  card.addEventListener('mousemove', (e) => {
    const rect = card.getBoundingClientRect();
    card.style.setProperty('--mouse-x', `${e.clientX - rect.left}px`);
    card.style.setProperty('--mouse-y', `${e.clientY - rect.top}px`);
  });
});
</script>

<?php get_footer(); ?>
