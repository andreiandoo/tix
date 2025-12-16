<?php
/**
 * Template Name: Tixello Careers
 * Description: Careers/jobs page template with dark theme
 */

get_header();
?>

<main class="font-body bg-zinc-950 text-zinc-200 antialiased min-h-screen">

    <!-- Hero Section -->
    <section class="relative py-20 sm:py-28 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-violet-950/40 via-transparent to-transparent"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[1000px] h-[1000px] bg-violet-600/10 rounded-full blur-3xl"></div>

        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-violet-600/10 border border-violet-500/20 text-violet-400 text-sm font-medium mb-6">
                    <span>🚀</span>
                    <?php esc_html_e( "We're hiring!", 'tixello' ); ?>
                </span>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                    <?php esc_html_e( 'Help Us Build the Future of', 'tixello' ); ?><br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-violet-400 via-pink-400 to-cyan-400"><?php esc_html_e( 'Live Events', 'tixello' ); ?></span>
                </h1>
                <p class="text-lg sm:text-xl text-white/60 mb-10 max-w-2xl mx-auto">
                    <?php esc_html_e( 'Join a passionate team of 85+ people across 12 countries, working to revolutionize how the world experiences live entertainment.', 'tixello' ); ?>
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#positions" class="px-8 py-4 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 transition-all shadow-lg shadow-violet-600/20">
                        <?php esc_html_e( 'View Open Positions', 'tixello' ); ?>
                    </a>
                    <a href="#culture" class="px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-semibold hover:bg-white/10 transition-all">
                        <?php esc_html_e( 'Our Culture', 'tixello' ); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats -->
    <section class="py-12 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <p class="text-4xl sm:text-5xl font-bold text-white mb-2">85+</p>
                    <p class="text-white/50"><?php esc_html_e( 'Team Members', 'tixello' ); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-4xl sm:text-5xl font-bold text-white mb-2">12</p>
                    <p class="text-white/50"><?php esc_html_e( 'Countries', 'tixello' ); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-4xl sm:text-5xl font-bold text-white mb-2">60%</p>
                    <p class="text-white/50"><?php esc_html_e( 'Remote Team', 'tixello' ); ?></p>
                </div>
                <div class="text-center">
                    <p class="text-4xl sm:text-5xl font-bold text-white mb-2">€15M</p>
                    <p class="text-white/50"><?php esc_html_e( 'Series A Funding', 'tixello' ); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Tixello -->
    <section id="culture" class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-cyan-600/10 border border-cyan-500/20 text-cyan-400 text-sm font-medium mb-6">
                    <span>💜</span>
                    <?php esc_html_e( 'Why Tixello?', 'tixello' ); ?>
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    <?php esc_html_e( 'More Than Just a Job', 'tixello' ); ?>
                </h2>
                <p class="text-lg text-white/60 max-w-2xl mx-auto">
                    <?php esc_html_e( "We're building something special, and we want you to be part of it.", 'tixello' ); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Benefit 1 -->
                <div class="group p-8 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-violet-600/20 to-violet-600/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="text-2xl">🌍</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Remote-First Culture', 'tixello' ); ?></h3>
                    <p class="text-white/50">
                        <?php esc_html_e( "Work from anywhere in the world. We've been remote-first since day one, with async communication and flexible hours.", 'tixello' ); ?>
                    </p>
                </div>

                <!-- Benefit 2 -->
                <div class="group p-8 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-cyan-500/30 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-cyan-600/20 to-cyan-600/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="text-2xl">💰</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Competitive Compensation', 'tixello' ); ?></h3>
                    <p class="text-white/50">
                        <?php esc_html_e( 'Top-market salaries, equity options, and performance bonuses. We believe in sharing our success with everyone.', 'tixello' ); ?>
                    </p>
                </div>

                <!-- Benefit 3 -->
                <div class="group p-8 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-pink-500/30 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-600/20 to-pink-600/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="text-2xl">🏖️</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Unlimited PTO', 'tixello' ); ?></h3>
                    <p class="text-white/50">
                        <?php esc_html_e( 'Take the time you need. We trust you to manage your work-life balance. Minimum 25 days recommended.', 'tixello' ); ?>
                    </p>
                </div>

                <!-- Benefit 4 -->
                <div class="group p-8 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-emerald-500/30 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-emerald-600/20 to-emerald-600/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="text-2xl">📚</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Learning Budget', 'tixello' ); ?></h3>
                    <p class="text-white/50">
                        <?php esc_html_e( '€2,000 annual budget for courses, conferences, and books. Never stop growing.', 'tixello' ); ?>
                    </p>
                </div>

                <!-- Benefit 5 -->
                <div class="group p-8 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-amber-500/30 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-amber-600/20 to-amber-600/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="text-2xl">🎫</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Event Perks', 'tixello' ); ?></h3>
                    <p class="text-white/50">
                        <?php esc_html_e( "Free tickets to events on our platform. Experience what you're building, live.", 'tixello' ); ?>
                    </p>
                </div>

                <!-- Benefit 6 -->
                <div class="group p-8 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-blue-500/30 transition-all">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-blue-600/20 to-blue-600/5 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <span class="text-2xl">💻</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( 'Best-in-Class Equipment', 'tixello' ); ?></h3>
                    <p class="text-white/50">
                        <?php esc_html_e( "MacBook Pro, external monitor, ergonomic chair—whatever you need to do your best work.", 'tixello' ); ?>
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Team Photos -->
    <section class="py-16 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white mb-4"><?php esc_html_e( 'Life at Tixello', 'tixello' ); ?></h2>
                <p class="text-white/60"><?php esc_html_e( 'Team retreats, hackathons, and everything in between.', 'tixello' ); ?></p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square rounded-2xl overflow-hidden bg-zinc-900">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=400&fit=crop" alt="<?php esc_attr_e( 'Team', 'tixello' ); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden bg-zinc-900">
                    <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?w=400&h=400&fit=crop" alt="<?php esc_attr_e( 'Team', 'tixello' ); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden bg-zinc-900">
                    <img src="https://images.unsplash.com/photo-1515187029135-18ee286d815b?w=400&h=400&fit=crop" alt="<?php esc_attr_e( 'Team', 'tixello' ); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden bg-zinc-900">
                    <img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?w=400&h=400&fit=crop" alt="<?php esc_attr_e( 'Team', 'tixello' ); ?>" class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Open Positions -->
    <section id="positions" class="py-20 bg-zinc-900/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <span class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-emerald-600/10 border border-emerald-500/20 text-emerald-400 text-sm font-medium mb-6">
                    <span>💼</span>
                    <?php esc_html_e( 'Open Positions', 'tixello' ); ?>
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4">
                    <?php esc_html_e( 'Find Your Next Role', 'tixello' ); ?>
                </h2>
                <p class="text-lg text-white/60 max-w-2xl mx-auto">
                    <?php esc_html_e( "We're looking for talented people to join our team. Check out our open positions below.", 'tixello' ); ?>
                </p>
            </div>

            <!-- Filters -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-10" x-data="{ filter: 'all' }">
                <button @click="filter = 'all'" :class="filter === 'all' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'All Departments', 'tixello' ); ?></button>
                <button @click="filter = 'engineering'" :class="filter === 'engineering' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'Engineering', 'tixello' ); ?></button>
                <button @click="filter = 'product'" :class="filter === 'product' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'Product', 'tixello' ); ?></button>
                <button @click="filter = 'design'" :class="filter === 'design' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'Design', 'tixello' ); ?></button>
                <button @click="filter = 'marketing'" :class="filter === 'marketing' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'Marketing', 'tixello' ); ?></button>
                <button @click="filter = 'sales'" :class="filter === 'sales' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'Sales', 'tixello' ); ?></button>
                <button @click="filter = 'operations'" :class="filter === 'operations' ? 'bg-violet-600 text-white' : 'bg-white/5 border border-white/10 text-white/70 hover:text-white hover:border-white/20'" class="px-4 py-2 rounded-full text-sm font-medium transition-all"><?php esc_html_e( 'Operations', 'tixello' ); ?></button>
            </div>

            <!-- Job Listings -->
            <div class="space-y-4 max-w-4xl mx-auto" x-data="{ filter: 'all' }">

                <!-- Engineering -->
                <div class="mb-8" x-show="filter === 'all' || filter === 'engineering'">
                    <h3 class="text-lg font-semibold text-white/50 mb-4 flex items-center gap-2">
                        <span class="text-violet-400">⚡</span>
                        <?php esc_html_e( 'Engineering', 'tixello' ); ?>
                    </h3>

                    <div class="space-y-3">
                        <a href="<?php echo esc_url( home_url( '/careers/senior-backend-engineer' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Senior Backend Engineer', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">PHP, Laravel, PostgreSQL • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-xs font-medium"><?php esc_html_e( 'Remote', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€80-100k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/careers/frontend-engineer' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Frontend Engineer', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">React, TypeScript, Tailwind • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-xs font-medium"><?php esc_html_e( 'Remote', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€60-80k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/careers/devops-engineer' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'DevOps Engineer', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">AWS, Kubernetes, Terraform • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-xs font-medium"><?php esc_html_e( 'Remote', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€70-90k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Product & Design -->
                <div class="mb-8" x-show="filter === 'all' || filter === 'product' || filter === 'design'">
                    <h3 class="text-lg font-semibold text-white/50 mb-4 flex items-center gap-2">
                        <span class="text-pink-400">🎨</span>
                        <?php esc_html_e( 'Product & Design', 'tixello' ); ?>
                    </h3>

                    <div class="space-y-3">
                        <a href="<?php echo esc_url( home_url( '/careers/senior-product-designer' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Senior Product Designer', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">Figma, Design Systems, User Research • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-xs font-medium"><?php esc_html_e( 'Remote', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€65-85k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/careers/product-manager' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Product Manager', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">B2B SaaS, Analytics, Roadmap Planning • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-cyan-600/20 text-cyan-400 text-xs font-medium"><?php esc_html_e( 'Bucharest', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€70-90k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Marketing & Sales -->
                <div class="mb-8" x-show="filter === 'all' || filter === 'marketing' || filter === 'sales'">
                    <h3 class="text-lg font-semibold text-white/50 mb-4 flex items-center gap-2">
                        <span class="text-cyan-400">📈</span>
                        <?php esc_html_e( 'Marketing & Sales', 'tixello' ); ?>
                    </h3>

                    <div class="space-y-3">
                        <a href="<?php echo esc_url( home_url( '/careers/growth-marketing-manager' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Growth Marketing Manager', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">SEO, Paid Ads, Analytics • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-xs font-medium"><?php esc_html_e( 'Remote', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€55-70k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/careers/account-executive' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Account Executive - DACH Region', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50"><?php esc_html_e( 'B2B Sales, German fluency required', 'tixello' ); ?> • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-cyan-600/20 text-cyan-400 text-xs font-medium"><?php esc_html_e( 'Berlin', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€50-65k + <?php esc_html_e( 'Commission', 'tixello' ); ?></span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/careers/content-writer' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Content Writer', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50">Blog, Case Studies, Documentation • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-emerald-600/20 text-emerald-400 text-xs font-medium"><?php esc_html_e( 'Remote', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€40-55k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Operations -->
                <div x-show="filter === 'all' || filter === 'operations'">
                    <h3 class="text-lg font-semibold text-white/50 mb-4 flex items-center gap-2">
                        <span class="text-amber-400">⚙️</span>
                        <?php esc_html_e( 'Operations', 'tixello' ); ?>
                    </h3>

                    <div class="space-y-3">
                        <a href="<?php echo esc_url( home_url( '/careers/customer-success-manager' ) ); ?>" class="group flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-6 rounded-2xl bg-zinc-900/50 border border-white/5 hover:border-violet-500/30 transition-all">
                            <div>
                                <h4 class="text-lg font-bold text-white group-hover:text-violet-400 transition-colors mb-1"><?php esc_html_e( 'Customer Success Manager', 'tixello' ); ?></h4>
                                <p class="text-sm text-white/50"><?php esc_html_e( 'Enterprise Clients, Romanian required', 'tixello' ); ?> • <?php esc_html_e( 'Full-time', 'tixello' ); ?></p>
                            </div>
                            <div class="flex items-center gap-4">
                                <span class="px-3 py-1 rounded-full bg-cyan-600/20 text-cyan-400 text-xs font-medium"><?php esc_html_e( 'Bucharest', 'tixello' ); ?></span>
                                <span class="px-3 py-1 rounded-full bg-white/5 text-white/50 text-xs font-medium">€45-60k</span>
                                <svg class="w-5 h-5 text-white/30 group-hover:text-violet-400 group-hover:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <!-- Don't see a fit? -->
            <div class="mt-12 p-8 rounded-3xl bg-gradient-to-br from-violet-600/10 via-pink-600/5 to-cyan-600/10 border border-violet-500/20 text-center max-w-4xl mx-auto">
                <h3 class="text-xl font-bold text-white mb-3"><?php esc_html_e( "Don't see a perfect fit?", 'tixello' ); ?></h3>
                <p class="text-white/60 mb-6"><?php esc_html_e( "We're always looking for talented people. Send us your CV and tell us how you can contribute.", 'tixello' ); ?></p>
                <a href="mailto:careers@tixello.com" class="inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-violet-600 text-white font-semibold hover:bg-violet-500 transition-colors">
                    <?php esc_html_e( 'Send Open Application', 'tixello' ); ?>
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- Hiring Process -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-white mb-4"><?php esc_html_e( 'Our Hiring Process', 'tixello' ); ?></h2>
                <p class="text-lg text-white/60 max-w-2xl mx-auto">
                    <?php esc_html_e( 'Transparent, efficient, and respectful of your time.', 'tixello' ); ?>
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-violet-600/20 border border-violet-500/30 flex items-center justify-center text-violet-400 font-bold">1</div>
                        <div class="hidden md:block flex-1 h-px bg-gradient-to-r from-violet-500/50 to-transparent"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Application Review', 'tixello' ); ?></h3>
                    <p class="text-sm text-white/50"><?php esc_html_e( 'We review every application within 48 hours and get back to you with feedback.', 'tixello' ); ?></p>
                </div>

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-pink-600/20 border border-pink-500/30 flex items-center justify-center text-pink-400 font-bold">2</div>
                        <div class="hidden md:block flex-1 h-px bg-gradient-to-r from-pink-500/50 to-transparent"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Intro Call', 'tixello' ); ?></h3>
                    <p class="text-sm text-white/50"><?php esc_html_e( '30-minute video call with our recruiter to learn about your experience and goals.', 'tixello' ); ?></p>
                </div>

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-cyan-600/20 border border-cyan-500/30 flex items-center justify-center text-cyan-400 font-bold">3</div>
                        <div class="hidden md:block flex-1 h-px bg-gradient-to-r from-cyan-500/50 to-transparent"></div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Technical/Skills Assessment', 'tixello' ); ?></h3>
                    <p class="text-sm text-white/50"><?php esc_html_e( "Practical task or case study relevant to the role. We respect your time—max 2-3 hours.", 'tixello' ); ?></p>
                </div>

                <div class="relative">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-600/20 border border-emerald-500/30 flex items-center justify-center text-emerald-400 font-bold">4</div>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2"><?php esc_html_e( 'Final Interview & Offer', 'tixello' ); ?></h3>
                    <p class="text-sm text-white/50"><?php esc_html_e( 'Meet the team, ask questions, and receive a decision within 5 business days.', 'tixello' ); ?></p>
                </div>

            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
