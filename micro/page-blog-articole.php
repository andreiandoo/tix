<?php
/**
 * Template Name: Blog Articole
 * Description: Landing page for Blog & Articles CMS system
 */

get_header();
?>

<style>
  ::selection { background: #6366F1; color: white; }

  .text-gradient-blog { background: linear-gradient(135deg, #6366F1 0%, #EC4899 50%, #6366F1 100%); background-size: 200% auto; -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; animation: shimmer 4s linear infinite; }

  .noise::after { content: ''; position: fixed; inset: 0; background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E"); opacity: 0.02; pointer-events: none; z-index: 1000; }

  .reveal { opacity: 0; transform: translateY(40px); transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1); }
  .reveal.revealed { opacity: 1; transform: translateY(0); }
  .reveal-delay-1 { transition-delay: 0.1s; }
  .reveal-delay-2 { transition-delay: 0.2s; }
  .reveal-delay-3 { transition-delay: 0.3s; }

  .feature-card::before { content: ''; position: absolute; inset: 0; background: radial-gradient(circle at var(--mouse-x, 50%) var(--mouse-y, 50%), rgba(99, 102, 241, 0.15), transparent 50%); opacity: 0; transition: opacity 0.5s; border-radius: inherit; }
  .feature-card:hover::before { opacity: 1; }

  /* Rich text editor style */
  .editor-container { background: #1E1E2E; border-radius: 12px; overflow: hidden; }
  .editor-toolbar { background: #2D2D3F; padding: 8px 12px; display: flex; gap: 4px; border-bottom: 1px solid rgba(255,255,255,0.1); }
  .editor-btn { width: 32px; height: 32px; border-radius: 6px; display: flex; align-items: center; justify-content: center; color: rgba(255,255,255,0.6); transition: all 0.2s; }
  .editor-btn:hover, .editor-btn.active { background: rgba(99, 102, 241, 0.3); color: white; }
  .editor-content { padding: 20px; min-height: 200px; color: #F1F5F9; line-height: 1.8; }
  .editor-content h2 { font-size: 24px; font-weight: bold; margin-bottom: 12px; color: white; }
  .editor-content p { margin-bottom: 16px; color: rgba(255,255,255,0.7); }

  /* Status badge */
  .status-badge { padding: 4px 12px; border-radius: 20px; font-size: 11px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px; }
  .status-badge.draft { background: rgba(107, 114, 128, 0.2); color: #9CA3AF; }
  .status-badge.scheduled { background: rgba(245, 158, 11, 0.2); color: #FBBF24; }
  .status-badge.published { background: rgba(16, 185, 129, 0.2); color: #34D399; }
  .status-badge.private { background: rgba(139, 92, 246, 0.2); color: #A78BFA; }

  /* Category/tag pill */
  .category-pill { padding: 4px 12px; border-radius: 20px; font-size: 12px; font-weight: 500; background: rgba(99, 102, 241, 0.2); color: #818CF8; border: 1px solid rgba(99, 102, 241, 0.3); }
  .tag-pill { padding: 2px 8px; border-radius: 4px; font-size: 11px; background: rgba(236, 72, 153, 0.15); color: #F472B6; }

  /* Author avatar */
  .author-avatar { width: 40px; height: 40px; border-radius: 50%; background: linear-gradient(135deg, #6366F1, #EC4899); display: flex; align-items: center; justify-content: center; color: white; font-weight: bold; font-size: 14px; }

  /* Reading time badge */
  .reading-time { display: inline-flex; align-items: center; gap: 4px; font-size: 12px; color: rgba(255,255,255,0.5); }

  /* Comment bubble */
  .comment-bubble { background: rgba(99, 102, 241, 0.1); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; padding: 16px; position: relative; }
  .comment-bubble::before { content: ''; position: absolute; left: 20px; top: -8px; border-left: 8px solid transparent; border-right: 8px solid transparent; border-bottom: 8px solid rgba(99, 102, 241, 0.2); }

  /* SEO score */
  .seo-score { width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold; font-size: 18px; }
  .seo-score.good { background: rgba(16, 185, 129, 0.2); color: #34D399; border: 2px solid #34D399; }
</style>

<main class="noise font-body bg-dark-900 text-zinc-200 overflow-x-hidden">

  <!-- ==================== HERO ==================== -->
  <section class="min-h-screen flex items-center pt-20 relative overflow-hidden">
    <div class="absolute w-[800px] h-[800px] bg-blog-primary/10 rounded-full -top-60 -right-60 blur-[150px] pointer-events-none"></div>
    <div class="absolute w-[600px] h-[600px] bg-blog-accent/10 rounded-full bottom-0 -left-40 blur-[150px] pointer-events-none"></div>

    <div class="absolute top-32 left-16 opacity-30 animate-float text-2xl">✍️</div>
    <div class="absolute bottom-40 right-24 opacity-20 animate-float text-xl" style="animation-delay: 1s;">📝</div>

    <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20">
      <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

        <div class="reveal">
          <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full bg-blog-primary/10 border border-blog-primary/20 mb-6">
            <svg class="w-5 h-5 text-blog-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/></svg>
            <span class="text-blog-primary text-sm font-medium">Content Management</span>
          </div>

          <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-[1.1]">
            Blog &<br><span class="text-gradient-blog">Articole</span>
          </h1>

          <p class="text-xl text-white/60 mb-8 leading-relaxed max-w-xl">
            Spune-ti povestea. <strong class="text-white">Editor rich text</strong>, SEO, multi-autor, comentarii. Transforma cititorii in cumparatori de bilete.
          </p>

          <div class="flex flex-wrap gap-4 mb-12">
            <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-blog-primary text-white hover:bg-blog-secondary hover:scale-105 hover:shadow-glow-blog transition-all duration-300">
              Incepe sa Scrii
              <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
            <a href="#functionalitati" class="inline-flex items-center gap-2 font-semibold px-8 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
              Vezi Functionalitati
            </a>
          </div>

          <div class="flex items-center gap-6">
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-blog-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"/></svg>
              <span class="text-white/60 text-sm">Rich Editor</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-blog-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
              <span class="text-white/60 text-sm">SEO Tools</span>
            </div>
            <div class="flex items-center gap-2">
              <svg class="w-5 h-5 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
              <span class="text-white/60 text-sm">Comentarii</span>
            </div>
          </div>
        </div>

        <div class="reveal reveal-delay-1">
          <div class="relative">
            <div class="editor-container shadow-2xl">
              <div class="editor-toolbar">
                <button class="editor-btn active"><strong>B</strong></button>
                <button class="editor-btn"><em>I</em></button>
                <button class="editor-btn"><u>U</u></button>
                <div class="w-px h-6 bg-white/10 mx-1"></div>
                <button class="editor-btn"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"/></svg></button>
                <button class="editor-btn"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg></button>
                <button class="editor-btn"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg></button>
              </div>
              <div class="editor-content">
                <h2>🎵 Lineup-ul Festivalului de Vara 2025</h2>
                <p>Pregatiti-va pentru cel mai mare festival al anului! Am pregatit un lineup extraordinar cu artisti de top din intreaga lume...</p>
                <p class="text-blog-primary">📸 <em>Galerie foto din culisele pregatirilor...</em></p>
              </div>
              <div class="px-4 py-3 border-t border-white/10 flex items-center justify-between">
                <div class="flex items-center gap-3">
                  <span class="status-badge draft">Draft</span>
                  <span class="reading-time">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                    5 min citire
                  </span>
                </div>
                <button class="px-4 py-1.5 rounded-lg bg-blog-primary text-white text-sm font-medium hover:bg-blog-secondary transition-colors">Salveaza</button>
              </div>
            </div>

            <div class="absolute -top-4 -right-4 bg-dark-800 rounded-xl px-4 py-3 border border-blog-primary/30 shadow-xl animate-float z-10">
              <div class="flex items-center gap-2">
                <span class="category-pill">Stiri</span>
                <span class="tag-pill">festival</span>
              </div>
            </div>

            <div class="absolute -bottom-4 -left-4 bg-dark-800 rounded-xl px-4 py-3 border border-blog-accent/30 shadow-xl animate-float [animation-delay:1s] z-10">
              <div class="flex items-center gap-3">
                <div class="author-avatar">AI</div>
                <div>
                  <div class="text-white text-sm font-medium">Ana I.</div>
                  <div class="text-white/40 text-xs">Editor</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== CONTENT ORGANIZATION ==================== -->
  <section class="py-24 relative overflow-hidden" id="functionalitati">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-blog-accent text-sm font-medium uppercase tracking-widest">Organizare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Continut<br><span class="text-gradient-blog">structurat</span></h2>
        <p class="text-lg text-white/60">Categorii, taguri, serii. Organizeaza continutul in felul tau.</p>
      </div>

      <div class="grid lg:grid-cols-2 gap-12 items-center">
        <div class="reveal">
          <div class="bg-dark-800/50 rounded-2xl p-6 border border-white/10">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-blog-primary/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-blog-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold">Categorii & Taguri</div>
                <div class="text-white/40 text-xs">Organizare flexibila</div>
              </div>
            </div>

            <div class="mb-6">
              <div class="text-white/40 text-xs uppercase mb-3">Categorii</div>
              <div class="flex flex-wrap gap-2">
                <span class="category-pill">📰 Stiri</span>
                <span class="category-pill">🎤 Interviuri</span>
                <span class="category-pill">📷 Galerii</span>
                <span class="category-pill">✍️ Recenzii</span>
                <span class="category-pill">🎬 Din Culise</span>
              </div>
            </div>

            <div>
              <div class="text-white/40 text-xs uppercase mb-3">Taguri populare</div>
              <div class="flex flex-wrap gap-2">
                <span class="tag-pill">festival</span>
                <span class="tag-pill">lineup</span>
                <span class="tag-pill">concert</span>
                <span class="tag-pill">artisti</span>
                <span class="tag-pill">bilete</span>
                <span class="tag-pill">backstage</span>
              </div>
            </div>
          </div>
        </div>

        <div class="reveal reveal-delay-1">
          <div class="bg-dark-800/50 rounded-2xl p-6 border border-blog-accent/20">
            <div class="flex items-center gap-3 mb-6">
              <div class="w-10 h-10 rounded-xl bg-blog-accent/20 flex items-center justify-center">
                <svg class="w-5 h-5 text-blog-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/></svg>
              </div>
              <div>
                <div class="text-white font-semibold">Serii de Articole</div>
                <div class="text-white/40 text-xs">Grupeaza continutul</div>
              </div>
            </div>

            <div class="p-4 rounded-xl bg-dark-900/50 mb-4">
              <div class="flex items-center justify-between mb-3">
                <span class="text-blog-accent font-medium">🎪 Numaratoare Festival 2025</span>
                <span class="text-white/40 text-xs">5 articole</span>
              </div>
              <div class="space-y-2">
                <div class="flex items-center gap-3 p-2 rounded-lg bg-blog-primary/10">
                  <span class="w-6 h-6 rounded-full bg-blog-primary/30 flex items-center justify-center text-xs text-blog-primary font-bold">1</span>
                  <span class="text-white/70 text-sm">Anuntul lineup-ului</span>
                  <span class="status-badge published ml-auto">Live</span>
                </div>
                <div class="flex items-center gap-3 p-2 rounded-lg bg-blog-primary/10">
                  <span class="w-6 h-6 rounded-full bg-blog-primary/30 flex items-center justify-center text-xs text-blog-primary font-bold">2</span>
                  <span class="text-white/70 text-sm">Interviu headliner</span>
                  <span class="status-badge published ml-auto">Live</span>
                </div>
                <div class="flex items-center gap-3 p-2 rounded-lg bg-status-scheduled/10">
                  <span class="w-6 h-6 rounded-full bg-status-scheduled/30 flex items-center justify-center text-xs text-status-scheduled font-bold">3</span>
                  <span class="text-white/70 text-sm">Ghidul participantului</span>
                  <span class="status-badge scheduled ml-auto">Programat</span>
                </div>
              </div>
            </div>
            <p class="text-white/40 text-sm">Fanii pot urmari seria completa, de la anunt pana la rezumat.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== PUBLISHING WORKFLOW ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-status-published text-sm font-medium uppercase tracking-widest">Flux Publicare</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">De la idee la<br><span class="text-gradient animate-shimmer">articol live</span></h2>
        <p class="text-lg text-white/60">Workflow clar cu draft, programare si publicare.</p>
      </div>

      <div class="max-w-4xl mx-auto reveal">
        <div class="grid md:grid-cols-4 gap-6">
          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-status-draft/20 border border-status-draft/30 flex items-center justify-center mx-auto mb-4">
              <svg class="w-10 h-10 text-status-draft" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/></svg>
            </div>
            <div class="status-badge draft mb-2">Draft</div>
            <p class="text-white/50 text-sm">Lucru in progres. Nevizibil publicului.</p>
          </div>

          <div class="hidden md:flex items-center justify-center">
            <svg class="w-8 h-8 text-white/20" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
          </div>

          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-status-scheduled/20 border border-status-scheduled/30 flex items-center justify-center mx-auto mb-4">
              <svg class="w-10 h-10 text-status-scheduled" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
            </div>
            <div class="status-badge scheduled mb-2">Programat</div>
            <p class="text-white/50 text-sm">Gata pentru publicare la data setata.</p>
          </div>

          <div class="text-center">
            <div class="w-20 h-20 rounded-2xl bg-status-published/20 border border-status-published/30 flex items-center justify-center mx-auto mb-4">
              <svg class="w-10 h-10 text-status-published" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <div class="status-badge published mb-2">Publicat</div>
            <p class="text-white/50 text-sm">Live si vizibil tuturor cititorilor.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== ENGAGEMENT FEATURES ==================== -->
  <section class="py-24 relative">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
      <div class="text-center max-w-3xl mx-auto mb-16 reveal">
        <span class="text-blog-accent text-sm font-medium uppercase tracking-widest">Engagement</span>
        <h2 class="font-display text-4xl md:text-5xl font-bold text-white mt-4 mb-6">Conecteaza-te cu<br><span class="text-gradient-blog">audienta</span></h2>
        <p class="text-lg text-white/60">Comentarii, vizualizari, newsletter. Transforma cititorii in comunitate.</p>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-blog-primary/20 hover:border-blog-primary/50 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-blog-primary/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-blog-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Comentarii</h3>
          <p class="text-white/50 text-sm mb-4">Sistem complet cu coada de moderare. Aproba sau respinge comentariile.</p>
          <div class="comment-bubble mt-4">
            <div class="flex items-center gap-2 mb-2">
              <div class="w-6 h-6 rounded-full bg-blog-accent/30 flex items-center justify-center text-xs text-white">M</div>
              <span class="text-white text-sm font-medium">Maria</span>
              <span class="text-white/40 text-xs">• acum 2h</span>
            </div>
            <p class="text-white/60 text-sm">Super lineup! Abia astept! 🎉</p>
          </div>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-cyan/20 hover:border-brand-cyan/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-brand-cyan/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-cyan" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Analize</h3>
          <p class="text-white/50 text-sm mb-4">Vizualizari, timp pe pagina, articole populare. Date pentru decizii.</p>
          <div class="grid grid-cols-2 gap-3 mt-4">
            <div class="p-3 rounded-lg bg-dark-900/50">
              <div class="text-brand-cyan font-bold text-xl">1.2K</div>
              <div class="text-white/40 text-xs">Vizualizari azi</div>
            </div>
            <div class="p-3 rounded-lg bg-dark-900/50">
              <div class="text-brand-cyan font-bold text-xl">3:42</div>
              <div class="text-white/40 text-xs">Timp mediu</div>
            </div>
          </div>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-blog-accent/20 hover:border-blog-accent/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-blog-accent/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-blog-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Newsletter</h3>
          <p class="text-white/50 text-sm mb-4">Colecteaza abonati direct din blog. Construieste lista de email-uri.</p>
          <div class="mt-4 p-3 rounded-lg bg-dark-900/50 flex items-center gap-2">
            <input type="email" placeholder="email@exemplu.ro" class="flex-1 bg-transparent text-white text-sm outline-none placeholder:text-white/30">
            <button class="px-3 py-1.5 rounded-lg bg-blog-accent text-white text-xs font-medium">Abonare</button>
          </div>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-violet/20 hover:border-brand-violet/50 transition-all duration-500 reveal">
          <div class="w-14 h-14 rounded-2xl bg-brand-violet/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-violet" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Partajare Sociala</h3>
          <p class="text-white/50 text-sm">Butoane de share pentru Facebook, Twitter, LinkedIn, WhatsApp.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-amber/20 hover:border-brand-amber/50 transition-all duration-500 reveal reveal-delay-1">
          <div class="w-14 h-14 rounded-2xl bg-brand-amber/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-amber" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Articole Conexe</h3>
          <p class="text-white/50 text-sm">Sugestii automate bazate pe categorie si taguri. Tine cititorii pe site.</p>
        </div>

        <div class="feature-card relative bg-dark-800/50 rounded-2xl p-6 border border-brand-green/20 hover:border-brand-green/50 transition-all duration-500 reveal reveal-delay-2">
          <div class="w-14 h-14 rounded-2xl bg-brand-green/10 flex items-center justify-center mb-4">
            <svg class="w-7 h-7 text-brand-green" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
          </div>
          <h3 class="text-xl font-semibold text-white mb-2">Multi-Autor</h3>
          <p class="text-white/50 text-sm">Intreaga echipa poate contribui. Profiluri autori si istoric revizii.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== TESTIMONIAL ==================== -->
  <section class="py-24 bg-dark-850 relative">
    <div class="max-w-4xl mx-auto px-6 lg:px-8">
      <div class="relative reveal">
        <div class="absolute -top-6 -left-6 text-8xl text-white/5 font-display">"</div>
        <div class="bg-gradient-to-br from-blog-primary/10 to-blog-accent/10 rounded-3xl p-8 md:p-12 border border-blog-primary/20">
          <div class="flex items-center gap-1 mb-6">
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            <svg class="w-6 h-6 text-brand-amber" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
          </div>
          <blockquote class="text-2xl md:text-3xl text-white font-light leading-relaxed mb-8">
            "Blogul a devenit arma noastra secreta. Seria de articole despre lineup a generat <span class="text-gradient-blog font-semibold">40% din traficul organic</span>. Fiecare articol converteste cititori in cumparatori."
          </blockquote>
          <div class="flex items-center gap-4">
            <div class="author-avatar text-lg">RP</div>
            <div>
              <div class="font-semibold text-white">Radu P.</div>
              <div class="text-white/50">Marketing Director, Untold Festival</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==================== FINAL CTA ==================== -->
  <section class="py-32 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-br from-blog-primary/10 via-transparent to-blog-accent/10"></div>
    <div class="absolute w-[800px] h-[800px] rounded-full top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 blur-[150px] pointer-events-none" style="background: radial-gradient(circle, rgba(99,102,241,0.2) 0%, rgba(236,72,153,0.1) 100%);"></div>

    <div class="absolute top-20 left-20 opacity-20 animate-float text-4xl">✍️</div>
    <div class="absolute bottom-20 right-20 opacity-20 animate-float text-3xl" style="animation-delay: 1s;">📰</div>

    <div class="max-w-4xl mx-auto px-6 lg:px-8 text-center relative">
      <h2 class="font-display text-5xl md:text-7xl font-bold text-white mb-6 reveal">Blog &<br><span class="text-gradient-blog">Articole</span></h2>
      <p class="text-xl text-white/60 mb-10 max-w-2xl mx-auto reveal reveal-delay-1">Evenimentele tale au povesti. E timpul sa le spui. Editor rich text, SEO, multi-autor, comentarii.</p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center reveal reveal-delay-2">
        <a href="<?php echo esc_url(home_url('/signup')); ?>" class="group inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-blog-primary text-white hover:bg-blog-secondary hover:scale-105 hover:shadow-glow-blog transition-all duration-300">
          Incepe sa Scrii
          <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="inline-flex items-center justify-center gap-2 font-semibold text-lg px-10 py-4 rounded-full bg-transparent text-white border border-white/20 hover:bg-white/10 transition-all duration-300">
          Intrebari? Contacteaza-ne
        </a>
      </div>

      <p class="text-white/30 text-sm mt-8 reveal reveal-delay-3">Rich Editor • SEO Tools • Multi-Autor • Comentarii • Newsletter • Analize</p>
    </div>
  </section>

</main>

<script>
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
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
