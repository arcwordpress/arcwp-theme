<?php
/**
 * Template Name: Test1 Animation
 * Description: Test page for anime.js timeline controls
 */

get_header();
?>

<div class="container mx-auto px-4 py-12">
    <h1 class="text-4xl font-bold mb-8 text-gray-900">Timeline Animation Test</h1>

    <!-- Animation Stage -->
    <div id="animation-stage" class="relative w-full h-96 bg-gray-800 rounded-lg mb-8 overflow-hidden border-4 border-gray-900">
        <div class="absolute top-4 left-4 text-white text-sm">Animation Stage - Two circles should appear below</div>
        <div id="circle-1" class="absolute w-20 h-20 bg-blue-500 rounded-full border-4 border-blue-700" style="left: 50px; top: 80px;"></div>
        <div id="circle-2" class="absolute w-20 h-20 bg-red-500 rounded-full border-4 border-red-700" style="left: 150px; top: 80px;"></div>
    </div>

    <!-- Controls Panel -->
    <div id="controls-panel" class="bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-gray-900">Timeline Controls</h2>

        <div class="flex flex-wrap gap-3">
            <button id="btn-play" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">
                ▶️ Play
            </button>
            <button id="btn-pause" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
                ⏸️ Pause
            </button>
            <button id="btn-restart" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                ⏮️ Restart
            </button>
            <button id="btn-reverse" class="px-4 py-2 bg-purple-500 text-white rounded hover:bg-purple-600 transition">
                ◀️ Reverse
            </button>
            <button id="btn-skip-forward" class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-600 transition">
                ⏩ Skip Forward
            </button>
            <button id="btn-skip-backward" class="px-4 py-2 bg-pink-500 text-white rounded hover:bg-pink-600 transition">
                ⏪ Skip Backward
            </button>
        </div>

        <!-- Timeline Info -->
        <div class="mt-4 p-4 bg-gray-100 rounded">
            <p class="text-sm text-gray-900">
                <strong>Status:</strong> <span id="timeline-status" class="font-mono text-gray-800">Ready</span>
            </p>
            <p class="text-sm mt-1 text-gray-900">
                <strong>Progress:</strong> <span id="timeline-progress" class="font-mono text-gray-800">0ms</span> / <span id="timeline-duration" class="font-mono text-gray-800">0ms</span>
            </p>
        </div>
    </div>
</div>

<?php
get_footer();
