<?php
get_header();
?>

<main class="min-h-screen">
    <div class="max-w-5xl mx-auto px-4 py-16 lg:py-20">
        <!-- Header -->
        <div class="mb-16">
            <h1 class="text-3xl lg:text-4xl font-black text-slate-900 dark:text-slate-50 mb-4 leading-tight">
                Support & Resources
            </h1>
            <p class="text-lg text-slate-900 dark:text-slate-50 leading-relaxed">
                Everything you need to get started with Gateway and get help from ARCWP.
            </p>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 auto-rows-fr">

            <!-- Row 1 - Documentation (large) -->
            <div class="lg:col-span-2 bg-slate-50 dark:bg-slate-900 border-2 border-slate-900 dark:border-slate-50 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold bg-orange-600 text-slate-50 px-3 py-1 rounded-full">
                        Learn
                    </span>
                </div>
                <h3 class="font-lexend text-2xl font-bold text-slate-900 dark:text-slate-50 mb-3">
                    Documentation
                </h3>
                <p class="text-slate-900 dark:text-slate-50 leading-relaxed mb-6">
                    Comprehensive guides, tutorials, and API references to help you build with ArcWP. From getting started to advanced implementations.
                </p>
                <a href="/docs" class="inline-block bg-slate-900 dark:bg-slate-50 text-slate-50 dark:text-slate-900 px-6 py-3 rounded-md font-semibold hover:opacity-90 transition-opacity">
                    Browse Docs
                </a>
            </div>

            <!-- Row 1 - Contact Support (small) -->
            <div class="bg-slate-50 dark:bg-slate-900 border-2 border-slate-900 dark:border-slate-50 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold text-slate-900 dark:text-slate-50 px-3 py-1 border border-slate-900 dark:border-slate-50 rounded-full">
                        Contact
                    </span>
                </div>
                <h3 class="font-lexend text-xl font-bold text-slate-900 dark:text-slate-50 mb-3">
                    Email Support
                </h3>
                <p class="text-slate-900 dark:text-slate-50 leading-relaxed mb-4">
                    Get personalized help from our team.
                </p>
                <a href="mailto:support@arcwp.ca" class="text-orange-600 dark:text-orange-500 font-semibold hover:underline">
                    support@arcwp.ca
                </a>
            </div>

            <!-- Row 2 - Packages (small) -->
            <div class="bg-slate-50 dark:bg-slate-900 border-2 border-slate-900 dark:border-slate-50 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold bg-orange-600 text-slate-50 px-3 py-1 rounded-full">
                        Download
                    </span>
                </div>
                <h3 class="font-lexend text-xl font-bold text-slate-900 dark:text-slate-50 mb-3">
                    Packages
                </h3>
                <p class="text-slate-900 dark:text-slate-50 leading-relaxed mb-4">
                    Get the latest plugins and tools.
                </p>
                <a href="/packages" class="text-orange-600 dark:text-orange-500 font-semibold hover:underline">
                    View All
                </a>
            </div>

            <!-- Row 2 - Community (medium) -->
            <div class="lg:col-span-2 bg-slate-50 dark:bg-slate-900 border-2 border-slate-900 dark:border-slate-50 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold text-slate-900 dark:text-slate-50 px-3 py-1 border border-slate-900 dark:border-slate-50 rounded-full">
                        Connect
                    </span>
                </div>
                <h3 class="font-lexend text-2xl font-bold text-slate-900 dark:text-slate-50 mb-3">
                    Community & Discussion
                </h3>
                <p class="text-slate-900 dark:text-slate-50 leading-relaxed mb-4">
                    Join our community to ask questions, share projects, and connect with other developers using ArcWP.
                </p>
                <ul class="list-disc pl-8 space-y-2 text-slate-900 dark:text-slate-50">
                    <li class="text-sm">Ask questions and get help from the community</li>
                    <li class="text-sm">Share your projects and get feedback</li>
                    <li class="text-sm">Stay updated on latest releases</li>
                </ul>
            </div>

        </div>

        <!-- Submit Support Ticket -->
        <div class="mt-8">
            <div class="bg-slate-50 dark:bg-slate-900 border-2 border-slate-900 dark:border-slate-50 rounded-xl p-8">
                <div class="mb-6">
                    <span class="text-xs font-semibold bg-orange-600 text-slate-50 px-3 py-1 rounded-full">
                        Submit Ticket
                    </span>
                </div>
                <h3 class="font-lexend text-2xl font-bold text-slate-900 dark:text-slate-50 mb-3">
                    Create a Support Ticket
                </h3>
                <p class="text-slate-900 dark:text-slate-50 leading-relaxed mb-6">
                    Need help? Submit a support ticket and our team will get back to you as soon as possible.
                </p>

                <?php
                // Render Gateway form for Ticket collection
                if (class_exists('Gateway\Forms\Render')) {
                    \Gateway\Forms\Render::form('tickets');
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
