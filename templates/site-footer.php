<footer class="border-t border-slate-700 bg-black pt-8 pb-4 mt-auto">
    <!-- Mobile Menu Overlay (full screen) -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-slate-50 dark:bg-slate-900 z-50 hidden flex-col overflow-y-auto">
        <!-- Close button -->
        <div class="flex justify-end p-6">
            <button id="mobile-menu-close" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 dark:hover:text-sky-600 transition-colors" aria-label="Close menu">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Mobile menu content -->
        <nav class="flex-1 px-8 pb-8">
            <!-- Products Section -->
            <div class="mb-8 pb-8 border-b border-slate-300 dark:border-slate-700">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Products</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo esc_url(site_url('packages/gateway')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Gateway</a></li>
                    <li><a href="<?php echo esc_url(site_url('packages/waypoint')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Waypoint</a></li>
                    <li><a href="<?php echo esc_url(site_url('roadmap')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Roadmap</a></li>
                </ul>
            </div>

            <!-- Resources Section -->
            <div class="mb-8 pb-8 border-b border-slate-300 dark:border-slate-700">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Resources</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo esc_url(site_url('docs')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Docs</a></li>
                    <li><a href="<?php echo esc_url(site_url('blog')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Blog</a></li>
                    <li><a href="<?php echo esc_url(site_url('support')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Support</a></li>
                </ul>
            </div>

            <!-- Legal Section -->
            <div class="mb-8 pb-8 border-b border-slate-300 dark:border-slate-700">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Legal</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo esc_url(site_url('privacy')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Privacy</a></li>
                    <li><a href="<?php echo esc_url(site_url('terms')); ?>" class="font-geist text-lg block py-3 hover:text-sky-600 transition-colors">Terms</a></li>
                </ul>
            </div>

            <!-- Social Links -->
            <div class="mb-8">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Connect</h3>
                <div class="flex items-center gap-6">
                    <a href="https://x.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 transition-colors inline-flex" aria-label="Visit us on X (formerly Twitter)">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://github.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 transition-colors" aria-label="Visit us on GitHub">
                        <svg class="w-9 h-9" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 transition-colors" aria-label="Visit us on YouTube">
                        <svg class="w-9 h-9" fill="currentColor" viewBox="0 0 32 23" aria-hidden="true">
                            <path d="M16.102 0H16.28C17.924 0.006 26.254 0.0660003 28.5 0.67C29.179 0.854337 29.7977 1.21364 30.2943 1.71202C30.7909 2.21039 31.1481 2.83037 31.33 3.51C31.532 4.27 31.674 5.276 31.77 6.314L31.79 6.522L31.834 7.042L31.85 7.25C31.98 9.078 31.996 10.79 31.998 11.164V11.314C31.996 11.702 31.978 13.53 31.834 15.434L31.818 15.644L31.8 15.852C31.7 16.996 31.552 18.132 31.33 18.968C31.1481 19.6476 30.7909 20.2676 30.2943 20.766C29.7977 21.2644 29.179 21.6237 28.5 21.808C26.18 22.432 17.362 22.476 16.14 22.478H15.856C15.238 22.478 12.682 22.466 10.002 22.374L9.662 22.362L9.488 22.354L9.146 22.34L8.804 22.326C6.584 22.228 4.47 22.07 3.496 21.806C2.81725 21.6218 2.1987 21.2628 1.7021 20.7648C1.20551 20.2668 0.848247 19.6473 0.666 18.968C0.444 18.134 0.296 16.996 0.196 15.852L0.18 15.642L0.164 15.434C0.0647268 14.0788 0.0100306 12.7208 0 11.362L0 11.116C0.004 10.686 0.02 9.2 0.128 7.56L0.142 7.354L0.148 7.25L0.164 7.042L0.208 6.522L0.228 6.314C0.324 5.276 0.466 4.268 0.668 3.51C0.849941 2.83037 1.20706 2.21039 1.70368 1.71202C2.2003 1.21364 2.81901 0.854337 3.498 0.67C4.472 0.41 6.586 0.25 8.806 0.15L9.146 0.136L9.49 0.124L9.662 0.118L10.004 0.104C11.9074 0.0428072 13.8116 0.00880352 15.716 0.00200009L16.102 0ZM12.8 6.42V16.056L21.114 11.24L12.8 6.42Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row justify-between gap-8 md:gap-12 lg:gap-16 mb-12">
            <!-- Logo and Slogan -->
            <div class="flex-shrink-0">
                
                <a href="<?php echo home_url('/'); ?>" class="inline-flex hover:opacity-80 transition-opacity" aria-label="Go to homepage">
                    <svg width="45" viewBox="0 0 60 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M55.9603 0C53.91 0 52.2161 1.47434 51.9588 3.37467H34.0001C33.7435 1.47434 32.049 0 29.9993 0C27.9489 0 26.2551 1.47434 25.9978 3.37467H8.03912C7.78248 1.47434 6.08795 0 4.03829 0C1.81175 0 0 1.73792 0 3.87388C0 6.01117 1.81175 7.74975 4.03829 7.74975C6.08865 7.74975 7.78248 6.27475 8.03912 4.37309H25.9985C26.2551 6.27475 27.9496 7.74975 30 7.74975C32.0497 7.74975 33.7435 6.27475 34.0008 4.37309H50.2913C47.2727 5.69966 43.0145 8.71357 41.4622 15.393C40.6298 18.9734 39.1461 21.3236 37.0535 22.378C35.9659 22.9258 34.8817 23.023 34.0307 22.973C33.946 20.907 32.1738 19.2502 30.0007 19.2502C27.7742 19.2502 25.9624 20.9882 25.9624 23.1248C25.9624 25.2614 27.7742 27 30.0007 27C31.9227 27 33.5326 25.7034 33.9377 23.9741C34.091 23.9841 34.2498 23.9894 34.4149 23.9894C35.3298 23.9894 36.4174 23.8217 37.521 23.2692C39.9057 22.0758 41.5731 19.4992 42.4776 15.6093C44.2131 8.14313 49.3626 5.5905 52.0323 4.75316C52.4492 6.46711 54.0508 7.74909 55.9617 7.74909C58.1883 7.74909 60 6.0105 60 3.87321C59.9979 1.73792 58.1869 0 55.9603 0Z" fill="white"/>
                    </svg>
                </a>

                <div class="flex items-center gap-4 order-2">
                    <p class="font-lexend font-medium text-xs leading-relaxed max-w-xs md:max-w-md mb-4 order-1">
                        WHEN <span class="text-sky-400">PRECISION</span> MATTERS
                    </p>

                    <!-- Mobile Menu Toggle Button (visible only on small mobile) -->
                    <button id="mobile-menu-toggle" class="sm:hidden flex-grow over:text-sky-700 p-3 rounded-lg border border-slate-300 dark:border-slate-700 transition-colors flex items-center justify-center" aria-label="Open menu">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Link Blocks - 3 columns, hide only on very small mobile (use hamburger instead) -->
            <div class="hidden sm:grid grid-cols-3 gap-x-16 md:gap-x-24 lg:gap-x-32 ml-auto">
                <!-- Products -->
                <div>
                    <h3 class="font-lexend font-bold text-sm mb-4">Products</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(site_url('get')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Gateway</a></li>
                        <li><a href="<?php echo esc_url(site_url('showcase/packages/waypoint')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Waypoint</a></li>
                        <li><a href="<?php echo esc_url(site_url('roadmap')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Roadmap</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="font-lexend font-bold text-sm mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(site_url('docs')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Docs</a></li>
                        <li><a href="<?php echo esc_url(site_url('blog')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Blog</a></li>
                        <li><a href="<?php echo esc_url(site_url('support')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Support</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="font-lexend font-bold text-sm mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(site_url('privacy')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Privacy</a></li>
                        <li><a href="<?php echo esc_url(site_url('terms')); ?>" class="font-geist text-sm hover:text-sky-600 transition-colors">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Social and Copyright -->
        <div class="mt-[100px]">
            <div class="flex items-center gap-4 mb-4">
                <a href="https://x.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 transition-colors inline-flex" aria-label="Visit us on X (formerly Twitter)">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </a>
                <a href="https://github.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 transition-colors" aria-label="Visit us on GitHub">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/@arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-sky-600 transition-colors" aria-label="Visit us on YouTube">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 32 23" aria-hidden="true">
                        <path d="M16.102 0H16.28C17.924 0.006 26.254 0.0660003 28.5 0.67C29.179 0.854337 29.7977 1.21364 30.2943 1.71202C30.7909 2.21039 31.1481 2.83037 31.33 3.51C31.532 4.27 31.674 5.276 31.77 6.314L31.79 6.522L31.834 7.042L31.85 7.25C31.98 9.078 31.996 10.79 31.998 11.164V11.314C31.996 11.702 31.978 13.53 31.834 15.434L31.818 15.644L31.8 15.852C31.7 16.996 31.552 18.132 31.33 18.968C31.1481 19.6476 30.7909 20.2676 30.2943 20.766C29.7977 21.2644 29.179 21.6237 28.5 21.808C26.18 22.432 17.362 22.476 16.14 22.478H15.856C15.238 22.478 12.682 22.466 10.002 22.374L9.662 22.362L9.488 22.354L9.146 22.34L8.804 22.326C6.584 22.228 4.47 22.07 3.496 21.806C2.81725 21.6218 2.1987 21.2628 1.7021 20.7648C1.20551 20.2668 0.848247 19.6473 0.666 18.968C0.444 18.134 0.296 16.996 0.196 15.852L0.18 15.642L0.164 15.434C0.0647268 14.0788 0.0100306 12.7208 0 11.362L0 11.116C0.004 10.686 0.02 9.2 0.128 7.56L0.142 7.354L0.148 7.25L0.164 7.042L0.208 6.522L0.228 6.314C0.324 5.276 0.466 4.268 0.668 3.51C0.849941 2.83037 1.20706 2.21039 1.70368 1.71202C2.2003 1.21364 2.81901 0.854337 3.498 0.67C4.472 0.41 6.586 0.25 8.806 0.15L9.146 0.136L9.49 0.124L9.662 0.118L10.004 0.104C11.9074 0.0428072 13.8116 0.00880352 15.716 0.00200009L16.102 0ZM12.8 6.42V16.056L21.114 11.24L12.8 6.42Z" />
                    </svg>
                </a>
            </div>
            <p class="font-geist font-normal text-xs text-slate-900 dark:text-slate-50">
                &copy; <?php echo date('Y'); ?> ARC Software. All rights reserved.
            </p>
        </div>
    </div>
</footer>