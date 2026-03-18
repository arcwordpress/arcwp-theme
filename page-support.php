<?php
get_header();
?>

<main class="min-h-screen">
    <div class="max-w-5xl mx-auto px-4 py-16 lg:py-20">
        <!-- Header -->
        <div class="mb-16">
            <h1 class="text-3xl lg:text-4xl font-black text-zinc-300 mb-4 leading-tight">
                Support & Resources
            </h1>
        </div>

        <!-- Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 auto-rows-fr">

            <!-- Row 1 - Documentation (large) -->
            <div class="lg:col-span-2 bg-zinc-900 border-2 border-zinc-300 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold border border-blue-800 text-zinc-300 px-3 py-1 rounded-full">
                        Learn
                    </span>
                </div>
                <h3 class="font-lexend text-2xl font-bold text-zinc-300 mb-3">
                    Documentation
                </h3>
                <p class="text-zinc-300 leading-relaxed mb-6">
                    Comprehensive guides, tutorials, and API references to help you build with ArcWP. From getting started to advanced implementations.
                </p>
                <a href="/docs" class="inline-block border border-zinc-300 text-zinc-300 text-sm px-4 py-2 rounded-md font-semibold hover:bg-zinc-800 hover:text-zinc-50 transition-colors">
                    Browse Docs
                </a>
            </div>

            <!-- Row 1 - Contact Support (small) -->
            <div class="bg-zinc-900 border-2 border-zinc-300 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold text-zinc-300 px-3 py-1 border border-zinc-300 rounded-full">
                        Contact
                    </span>
                </div>
                <h3 class="font-lexend text-xl font-bold text-zinc-300 mb-3">
                    Email Support
                </h3>
                <p class="text-zinc-300 leading-relaxed mb-4">
                    Get personalized help from our team.
                </p>
                <a href="mailto:support@arcwp.ca" class="text-zinc-300 font-semibold hover:underline">
                    support@arcwp.ca
                </a>
            </div>

            <!-- Row 2 - Packages (small) -->
            <div class="bg-zinc-900 border-2 border-zinc-300 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold border border-blue-800 text-zinc-300 px-3 py-1 rounded-full">
                        Download
                    </span>
                </div>
                <h3 class="font-lexend text-xl font-bold text-zinc-300 mb-3">
                    Packages
                </h3>
                <p class="text-zinc-300 leading-relaxed mb-4">
                    Get the latest plugins and tools.
                </p>
                <a href="<?php echo site_url('get'); ?>" class="inline-block border border-zinc-300 text-zinc-300 text-sm px-4 py-2 rounded-md font-semibold hover:bg-zinc-800 hover:text-zinc-50 transition-colors">
                    Get Gateway
                </a>
            </div>

            <!-- Row 2 - Community (medium) -->
            <div class="lg:col-span-2 bg-zinc-900 border-2 border-zinc-300 rounded-xl p-8 hover:shadow-xl transition-all">
                <div class="mb-4">
                    <span class="text-xs font-semibold text-zinc-300 px-3 py-1 border border-zinc-300 rounded-full">
                        Connect
                    </span>
                </div>
                <h3 class="font-lexend text-2xl font-bold text-zinc-300 mb-3">
                    Community & Discussion
                </h3>
                <p class="text-zinc-300 leading-relaxed mb-4">
                    Join our community to ask questions, share projects, and connect with other developers using ArcWP.
                </p>
                <ul class="list-disc pl-8 space-y-2 text-zinc-300">
                    <li class="text-sm">Ask questions and get help from the community</li>
                    <li class="text-sm">Share your projects and get feedback</li>
                    <li class="text-sm">Stay updated on latest releases</li>
                </ul>
            </div>

        </div>

        <!-- Submit Support Ticket -->
        <div class="mt-8">
            <div class="bg-transparent border-2 border-zinc-800 rounded-xl p-8">
                <div class="mb-6">
                    <span class="text-xs font-semibold border border-blue-800 text-zinc-300 px-3 py-1 rounded-full">
                        Submit Ticket
                    </span>
                </div>
                <h3 class="font-lexend text-2xl font-bold text-zinc-300 mb-3">
                    Create a Support Ticket
                </h3>
                <p class="text-zinc-300 leading-relaxed mb-6">
                    Need help? Submit a support ticket and our team will get back to you as soon as possible.
                </p>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</main>

<?php
get_footer();
