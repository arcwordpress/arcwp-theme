<footer class="border-t border-slate-300 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 text-slate-900 dark:text-slate-50 pt-16 pb-4 mt-auto">
    <!-- Mobile Menu Overlay (full screen) -->
    <div id="mobile-menu-overlay" class="fixed inset-0 bg-slate-50 dark:bg-slate-900 z-50 hidden flex-col overflow-y-auto">
        <!-- Close button -->
        <div class="flex justify-end p-6">
            <button id="mobile-menu-close" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 dark:hover:text-orange-600 transition-colors" aria-label="Close menu">
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
                    <li><a href="<?php echo esc_url(site_url('packages/gateway')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Gateway</a></li>
                    <li><a href="<?php echo esc_url(site_url('packages/waypoint')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Waypoint</a></li>
                    <li><a href="<?php echo esc_url(site_url('roadmap')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Roadmap</a></li>
                </ul>
            </div>

            <!-- Resources Section -->
            <div class="mb-8 pb-8 border-b border-slate-300 dark:border-slate-700">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Resources</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo esc_url(site_url('docs')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Docs</a></li>
                    <li><a href="<?php echo esc_url(site_url('blog')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Blog</a></li>
                    <li><a href="<?php echo esc_url(site_url('support')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Support</a></li>
                </ul>
            </div>

            <!-- Legal Section -->
            <div class="mb-8 pb-8 border-b border-slate-300 dark:border-slate-700">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Legal</h3>
                <ul class="space-y-4">
                    <li><a href="<?php echo esc_url(site_url('privacy')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Privacy</a></li>
                    <li><a href="<?php echo esc_url(site_url('terms')); ?>" class="font-geist text-lg block py-3 hover:text-orange-600 transition-colors">Terms</a></li>
                </ul>
            </div>

            <!-- Social Links -->
            <div class="mb-8">
                <h3 class="font-lexend font-bold text-xl mb-6 text-slate-900 dark:text-slate-50">Connect</h3>
                <div class="flex items-center gap-6">
                    <a href="https://x.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 transition-colors inline-flex" aria-label="Visit us on X (formerly Twitter)">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                        </svg>
                    </a>
                    <a href="https://github.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 transition-colors" aria-label="Visit us on GitHub">
                        <svg class="w-9 h-9" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/@arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 transition-colors" aria-label="Visit us on YouTube">
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
                <!-- Slogan - order 1 on mobile -->
                <p class="font-lexend font-semibold text-xs md:text-sm leading-relaxed max-w-xs md:max-w-md mb-4 order-1">
                    WHERE <span class="text-orange-500">SPEED</span> AND <span class="text-orange-500">PRECISION</span> MEET
                </p>

                <!-- Logo and Hamburger Container - order 2 on mobile -->
                <div class="flex items-center gap-4 order-2">
                    <a href="<?php echo home_url('/'); ?>" class="inline-flex hover:opacity-80 transition-opacity" aria-label="Go to homepage">
                    <!-- Light mode logo -->
                    <svg width="221" height="88" viewBox="0 0 221 88" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[112px] h-auto dark:hidden">
                        <path d="M69.664 68L89.184 23.2H98.848L118.24 68H107.104L96.736 43.744C96.352 42.8053 95.968 41.8667 95.584 40.928C95.2427 39.9893 94.9013 39.0293 94.56 38.048C94.2187 37.0667 93.8987 36.1067 93.6 35.168C93.3013 34.2293 93.024 33.3333 92.768 32.48L94.944 32.416C94.688 33.44 94.3893 34.4213 94.048 35.36C93.7493 36.2987 93.4293 37.2373 93.088 38.176C92.7467 39.072 92.384 39.9893 92 40.928C91.616 41.8667 91.232 42.8267 90.848 43.808L80.48 68H69.664ZM78.816 59.68L82.336 51.488H105.376L108 59.68H78.816ZM127.683 68V23.2H150.147C153.304 23.2 156.078 23.8187 158.467 25.056C160.856 26.2507 162.712 27.9147 164.035 30.048C165.358 32.1813 166.019 34.656 166.019 37.472C166.019 40.3307 165.315 42.8907 163.907 45.152C162.542 47.3707 160.643 49.1413 158.211 50.464C155.822 51.744 153.134 52.384 150.147 52.384H138.051V68H127.683ZM155.715 68L142.787 47.776L154.051 46.176L168.259 68H155.715ZM138.051 44.064H149.059C150.254 44.064 151.299 43.808 152.195 43.296C153.134 42.784 153.859 42.08 154.371 41.184C154.926 40.288 155.203 39.2427 155.203 38.048C155.203 36.896 154.904 35.8933 154.307 35.04C153.752 34.144 152.963 33.4613 151.939 32.992C150.958 32.5227 149.784 32.288 148.419 32.288H138.051V44.064ZM202.074 68.64C198.533 68.64 195.226 68.0853 192.154 66.976C189.125 65.824 186.458 64.224 184.154 62.176C181.893 60.128 180.143 57.696 178.906 54.88C177.669 52.0213 177.05 48.864 177.05 45.408C177.05 42.0373 177.69 38.944 178.97 36.128C180.293 33.312 182.085 30.88 184.346 28.832C186.607 26.784 189.274 25.184 192.346 24.032C195.418 22.88 198.725 22.304 202.266 22.304C204.698 22.304 207.045 22.6027 209.306 23.2C211.61 23.7973 213.743 24.6293 215.706 25.696C217.669 26.7627 219.333 27.9787 220.698 29.344L214.234 37.408C213.21 36.4267 212.101 35.5733 210.906 34.848C209.711 34.08 208.367 33.4827 206.874 33.056C205.381 32.5867 203.738 32.352 201.946 32.352C200.197 32.352 198.49 32.6507 196.826 33.248C195.162 33.8453 193.69 34.72 192.41 35.872C191.13 36.9813 190.106 38.368 189.338 40.032C188.613 41.6533 188.25 43.488 188.25 45.536C188.25 47.584 188.634 49.4187 189.402 51.04C190.17 52.6613 191.215 54.048 192.538 55.2C193.903 56.3093 195.482 57.1627 197.274 57.76C199.066 58.3573 201.007 58.656 203.098 58.656C204.933 58.656 206.597 58.4 208.09 57.888C209.583 57.376 210.927 56.7573 212.122 56.032C213.317 55.264 214.383 54.4533 215.322 53.6L220.506 61.984C219.354 63.0933 217.818 64.16 215.898 65.184C213.978 66.208 211.823 67.04 209.434 67.68C207.045 68.32 204.591 68.64 202.074 68.64Z" fill="#0F172A"/>
                        <path d="M5.30034e-06 26L43.5 0.885266L43.5 51.1147L5.30034e-06 26Z" fill="#0F172A"/>
                        <rect x="7.48385" y="19.8279" width="1.65338" height="44.2501" transform="rotate(-60 7.48385 19.8279)" fill="#F8FAFC"/>
                        <path d="M59 62L15.5 87.1147L15.5 36.8853L59 62Z" fill="#0F172A"/>
                        <rect x="51.5162" y="68.1721" width="1.65338" height="44.2501" transform="rotate(120 51.5162 68.1721)" fill="#F8FAFC"/>
                    </svg>
                    <!-- Dark mode logo -->
                    <svg width="223" height="88" viewBox="0 0 223 88" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-[112px] h-auto hidden dark:block">
                        <path d="M70.664 68L90.184 23.2H99.848L119.24 68H108.104L97.736 43.744C97.352 42.8053 96.968 41.8667 96.584 40.928C96.2427 39.9893 95.9013 39.0293 95.56 38.048C95.2187 37.0667 94.8987 36.1067 94.6 35.168C94.3013 34.2293 94.024 33.3333 93.768 32.48L95.944 32.416C95.688 33.44 95.3893 34.4213 95.048 35.36C94.7493 36.2987 94.4293 37.2373 94.088 38.176C93.7467 39.072 93.384 39.9893 93 40.928C92.616 41.8667 92.232 42.8267 91.848 43.808L81.48 68H70.664ZM79.816 59.68L83.336 51.488H106.376L109 59.68H79.816ZM128.683 68V23.2H151.147C154.304 23.2 157.078 23.8187 159.467 25.056C161.856 26.2507 163.712 27.9147 165.035 30.048C166.358 32.1813 167.019 34.656 167.019 37.472C167.019 40.3307 166.315 42.8907 164.907 45.152C163.542 47.3707 161.643 49.1413 159.211 50.464C156.822 51.744 154.134 52.384 151.147 52.384H139.051V68H128.683ZM156.715 68L143.787 47.776L155.051 46.176L169.259 68H156.715ZM139.051 44.064H150.059C151.254 44.064 152.299 43.808 153.195 43.296C154.134 42.784 154.859 42.08 155.371 41.184C155.926 40.288 156.203 39.2427 156.203 38.048C156.203 36.896 155.904 35.8933 155.307 35.04C154.752 34.144 153.963 33.4613 152.939 32.992C151.958 32.5227 150.784 32.288 149.419 32.288H139.051V44.064ZM203.074 68.64C199.533 68.64 196.226 68.0853 193.154 66.976C190.125 65.824 187.458 64.224 185.154 62.176C182.893 60.128 181.143 57.696 179.906 54.88C178.669 52.0213 178.05 48.864 178.05 45.408C178.05 42.0373 178.69 38.944 179.97 36.128C181.293 33.312 183.085 30.88 185.346 28.832C187.607 26.784 190.274 25.184 193.346 24.032C196.418 22.88 199.725 22.304 203.266 22.304C205.698 22.304 208.045 22.6027 210.306 23.2C212.61 23.7973 214.743 24.6293 216.706 25.696C218.669 26.7627 220.333 27.9787 221.698 29.344L215.234 37.408C214.21 36.4267 213.101 35.5733 211.906 34.848C210.711 34.08 209.367 33.4827 207.874 33.056C206.381 32.5867 204.738 32.352 202.946 32.352C201.197 32.352 199.49 32.6507 197.826 33.248C196.162 33.8453 194.69 34.72 193.41 35.872C192.13 36.9813 191.106 38.368 190.338 40.032C189.613 41.6533 189.25 43.488 189.25 45.536C189.25 47.584 189.634 49.4187 190.402 51.04C191.17 52.6613 192.215 54.048 193.538 55.2C194.903 56.3093 196.482 57.1627 198.274 57.76C200.066 58.3573 202.007 58.656 204.098 58.656C205.933 58.656 207.597 58.4 209.09 57.888C210.583 57.376 211.927 56.7573 213.122 56.032C214.317 55.264 215.383 54.4533 216.322 53.6L221.506 61.984C220.354 63.0933 218.818 64.16 216.898 65.184C214.978 66.208 212.823 67.04 210.434 67.68C208.045 68.32 205.591 68.64 203.074 68.64Z" fill="#F8FAFC"/>
                        <path d="M0.999998 26L44.5 0.885266L44.5 51.1147L0.999998 26Z" fill="#F8FAFC"/>
                        <rect x="8.48386" y="19.8279" width="1.65338" height="44.2501" transform="rotate(-60 8.48386 19.8279)" fill="#0F172A"/>
                        <path d="M60 62L16.5 87.1147L16.5 36.8853L60 62Z" fill="#F8FAFC"/>
                        <rect x="52.5161" y="68.1721" width="1.65338" height="44.2501" transform="rotate(120 52.5161 68.1721)" fill="#0F172A"/>
                    </svg>
                    </a>

                    <!-- Mobile Menu Toggle Button (visible only on small mobile) -->
                    <button id="mobile-menu-toggle" class="sm:hidden flex-grow text-orange-600 hover:text-orange-700 p-3 rounded-lg border border-slate-300 dark:border-slate-700 transition-colors flex items-center justify-center" aria-label="Open menu">
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
                        <li><a href="<?php echo esc_url(site_url('packages/gateway')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Gateway</a></li>
                        <li><a href="<?php echo esc_url(site_url('packages/waypoint')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Waypoint</a></li>
                        <li><a href="<?php echo esc_url(site_url('roadmap')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Roadmap</a></li>
                    </ul>
                </div>

                <!-- Resources -->
                <div>
                    <h3 class="font-lexend font-bold text-sm mb-4">Resources</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(site_url('docs')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Docs</a></li>
                        <li><a href="<?php echo esc_url(site_url('blog')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Blog</a></li>
                        <li><a href="<?php echo esc_url(site_url('support')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Support</a></li>
                    </ul>
                </div>

                <!-- Legal -->
                <div>
                    <h3 class="font-lexend font-bold text-sm mb-4">Legal</h3>
                    <ul class="space-y-2">
                        <li><a href="<?php echo esc_url(site_url('privacy')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Privacy</a></li>
                        <li><a href="<?php echo esc_url(site_url('terms')); ?>" class="font-geist text-sm hover:text-orange-600 transition-colors">Terms</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Social and Copyright -->
        <div class="mt-[100px]">
            <div class="flex items-center gap-4 mb-4">
                <a href="https://x.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 transition-colors inline-flex" aria-label="Visit us on X (formerly Twitter)">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z" />
                    </svg>
                </a>
                <a href="https://github.com/arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 transition-colors" aria-label="Visit us on GitHub">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                    </svg>
                </a>
                <a href="https://www.youtube.com/@arcwordpress" target="_blank" rel="noopener noreferrer" class="text-slate-900 dark:text-slate-50 hover:text-orange-600 transition-colors" aria-label="Visit us on YouTube">
                    <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 32 23" aria-hidden="true">
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