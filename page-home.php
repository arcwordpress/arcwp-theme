<?php get_header(); ?>

<main class="min-h-screen">

    <!-- Hero Section -->
    <section class="py-24 lg:py-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 lg:gap-20 items-center">
                <!-- Left Content -->
                <div>
                    <h1 class="font-lexend text-6xl lg:text-6xl font-black text-slate-900 dark:text-slate-50 mb-8 hero-title" style="opacity: 0;">
                        Gateway <span class="text-orange-800 dark:text-orange-500">Collections</span> are content types that <span class="text-orange-800 dark:text-orange-500">scale</span>
                    </h1>
                    <p class="text-xl text-slate-900 dark:text-slate-50 mb-10 leading-relaxed hero-subtitle" style="opacity: 0;">
                        Put custom database tables on the same footing as custom post types with full CRUD support, field system and auto-generated API routes.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-3 mb-12 hero-buttons" style="opacity: 0;">
                        <a href="<?php echo site_url('packages/gateway'); ?>" class="font-lexend group inline-flex items-center justify-center bg-orange-800 text-white px-10 py-5 rounded-full text-base font-bold hover:bg-orange-700 transition-all shadow-xl hover:shadow-2xl hover:scale-105">
                            Install Gateway
                        </a>
                        <a href="#learn-more" class="font-lexend inline-flex items-center justify-center gap-1 text-slate-900 dark:text-slate-50 px-8 py-5 text-base font-semibold hover:opacity-70 transition-colors whitespace-nowrap">
                            Learn Gateway
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="relative lg:ml-auto hero-image" style="opacity: 0; max-width: 652px;">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/collection-extends-light.png" alt="Gateway Collections" width="652" height="384" class="w-full h-auto object-contain dark:hidden">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/collection-extends-dark.png" alt="Gateway Collections" width="652" height="384" class="w-full h-auto object-contain hidden dark:block">
                    </div>

                    <!-- Floating Stats Card -->
                    <div class="absolute -left-16 top-1/8 bg-slate-900 dark:bg-slate-50 rounded-xl shadow-xl p-4 hero-stat" style="opacity: 0;">
                        <div class="text-3xl font-black text-slate-50 dark:text-slate-900 mb-1">10x</div>
                        <div class="text-xs text-slate-50 dark:text-slate-900 font-medium">Scalability</div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Learn More Section -->
    <section id="learn-more" class="py-24">

        <!-- Part 1: Title (left aligned) -->
        <div class="max-w-3xl mx-auto px-4 mb-20">
            <div class="inline-flex items-center gap-3 bg-gradient-to-r from-orange-800 via-orange-700 to-orange-800 dark:from-orange-900 dark:via-orange-800 dark:to-orange-900 px-6 py-3 rounded-full mb-8 learn-tag" style="opacity: 0;">
                <span class="text-sm font-bold text-white">GATEWAY PLUGIN FOR WORDPRESS</span>
            </div>
            <h2 class="text-6xl font-black mb-6 learn-title" style="opacity: 0;">
                <span class="text-orange-800 dark:text-orange-500">Eloquent Models</span> supercharged for <span class="text-orange-800 dark:text-orange-500">WordPress</span>
            </h2>
            <p class="text-3xl leading-relaxed mb-8">
                Every Collection is an Eloquent model which makes working with custom database tables efficient and systematic.
            </p>
            <div class="bg-slate-900 dark:bg-slate-950 rounded-2xl p-8 font-mono text-lg space-y-3">
                <div class="text-orange-400">Ticket extends \Gateway\Collection</div>
                <div class="text-blue-400">Ticket::register()</div>
                <div class="text-slate-300 dark:text-slate-400">$ticket = Ticket::find(10)</div>
                <div class="text-slate-300 dark:text-slate-400">$ticket→setDueDate('2026-01-15')→save()</div>
            </div>
        </div>

        <!-- Part 4: Comparison table -->
        <div class="max-w-6xl mx-auto px-4 mt-32">
            <div class="mb-12 max-w-3xl">
                <h3 class="text-4xl font-bold text-slate-900 dark:text-slate-50 mb-6">The Modern Framework for WordPress</h3>
                <p class="text-xl text-slate-700 dark:text-slate-300 leading-relaxed">
                    Build scalable features with custom database tables that excel at intensive queries like facet filtering and search, where traditional WordPress approaches fall short.
                </p>
            </div>
            <div class="border border-slate-300 dark:border-slate-700 overflow-hidden">
                <!-- Header Row -->
                <div class="grid grid-cols-[1fr_1fr_0.8fr]">
                    <div class="p-6 border-b border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-900">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-slate-50">Traditional WordPress</h3>
                    </div>
                    <div class="p-6 border-b border-r border-slate-300 dark:border-slate-700 border-l border-slate-300 dark:border-slate-700 bg-slate-100 dark:bg-slate-900">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-slate-50">Scalable Gateway</h3>
                    </div>
                    <div class="p-6 border-b border-slate-300 dark:border-slate-700">
                    </div>
                </div>

                <!-- Row 1 -->
                <div class="grid grid-cols-[1fr_1fr_0.8fr] border-b border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-950">
                    <div class="p-6">
                        <code class="text-base font-mono text-slate-900 dark:text-slate-50">register_post_type('property')</code>
                    </div>
                    <div class="p-6 border-r border-slate-300 dark:border-slate-700 border-l border-orange-600">
                        <code class="text-base font-mono text-slate-900 dark:text-slate-50">Property extends Model</code>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-slate-600 dark:text-slate-400">Model-based approach</p>
                    </div>
                </div>

                <!-- Row 2 -->
                <div class="grid grid-cols-[1fr_1fr_0.8fr] border-b border-slate-300 dark:border-slate-700">
                    <div class="p-6">
                        <code class="text-base font-mono text-slate-900 dark:text-slate-50">WP_Query($inefficient_meta_query)</code>
                    </div>
                    <div class="p-6 border-r border-slate-300 dark:border-slate-700 border-l border-orange-600">
                        <code class="text-base font-mono text-slate-900 dark:text-slate-50">Property->where('status', 'published')</code>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-slate-600 dark:text-slate-400">Direct SQL queries</p>
                    </div>
                </div>

                <!-- Row 3 -->
                <div class="grid grid-cols-[1fr_1fr_0.8fr] bg-slate-50 dark:bg-slate-950">
                    <div class="p-6">
                        <div class="text-base text-slate-900 dark:text-slate-50">Get field from ACF or Meta Box</div>
                    </div>
                    <div class="p-6 border-r border-slate-300 dark:border-slate-700 border-l border-orange-600">
                        <div class="text-base text-slate-900 dark:text-slate-50">Get fields from Gateway</div>
                    </div>
                    <div class="p-6">
                        <p class="text-sm text-slate-600 dark:text-slate-400">Built-in field system</p>
                    </div>
                </div>
            </div>
        </div>
    
    </section>

    <!-- Features Showcase -->
    <section class="py-24 mt-20 mb-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">

                <!-- Feature 1 -->
                <div>
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-50 mb-3">Lightning Fast Queries</h3>
                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">Direct Database Access</h4>
                    <p class="text-base text-slate-600 dark:text-slate-400">Skip WordPress's meta query overhead and query custom tables directly for dramatically faster performance.</p>
                </div>

                <!-- Feature 2 -->
                <div>
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-50 mb-3">Custom Tables</h3>
                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">Optimized Schema Design</h4>
                    <p class="text-base text-slate-600 dark:text-slate-400">Create purpose-built database tables with proper indexing for your specific data needs.</p>
                </div>

                <!-- Feature 3 -->
                <div>
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-50 mb-3">Auto-Generated APIs</h3>
                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">REST Endpoints Ready</h4>
                    <p class="text-base text-slate-600 dark:text-slate-400">Every collection automatically gets REST API endpoints for create, read, update, and delete operations.</p>
                </div>

                <!-- Feature 4 -->
                <div>
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-50 mb-3">Scales Infinitely</h3>
                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">Handle Millions of Records</h4>
                    <p class="text-base text-slate-600 dark:text-slate-400">Built to handle massive datasets that would bring traditional WordPress installations to their knees.</p>
                </div>

                <!-- Feature 5 -->
                <div>
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-50 mb-3">Powerful Filtering</h3>
                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">Faceted Search Built-In</h4>
                    <p class="text-base text-slate-600 dark:text-slate-400">Complex filtering and faceted search queries that execute in milliseconds, not seconds.</p>
                </div>

                <!-- Feature 6 -->
                <div>
                    <div class="mb-6">
                        <svg class="w-16 h-16 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="18" height="18" rx="2" stroke-width="1.5"/>
                            <line x1="3" y1="9" x2="21" y2="9" stroke-width="1.5"/>
                            <line x1="9" y1="9" x2="9" y2="21" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <h3 class="text-3xl font-bold text-slate-900 dark:text-slate-50 mb-3">Flexible Field System</h3>
                    <h4 class="text-xl font-semibold text-slate-700 dark:text-slate-300 mb-2">Define Fields Easily</h4>
                    <p class="text-base text-slate-600 dark:text-slate-400">Intuitive field definitions with validation, relationships, and custom data types all built in.</p>
                </div>

            </div>
        </div>
    </section>

    <?php the_content(); ?>

    <!-- CTA Section -->
    <section id="cta" class="max-w-md mx-auto mt-20 mb-40">
        <article id="cta-content" class="flex flex-col items-center">
            <h2 id="cta-heading" class="text-5xl text-center text-slate-900 dark:text-slate-50 mb-4">Try Gateway for Free</h2>
            <p id="cta-text" class="text-2xl text-center mb-8 text-slate-900 dark:text-slate-50">Experience collections with a 14-day free trial.</p>
            <a id="cta-button" href="<?php echo site_url('get'); ?>" class="inline-flex items-center justify-center text-slate-50 bg-orange-600 px-10 py-5 text-base font-semibold hover:bg-orange-700 transition-colors">Get Started</a>
        </article>
    </section>

</main>

<?php
get_footer();