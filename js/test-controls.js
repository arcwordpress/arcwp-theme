/**
 * Test Timeline Controls
 * ES6 Module for controlling the anime.js timeline
 */

import { createTimeline } from 'https://cdn.jsdelivr.net/npm/animejs@4.2.2/+esm';

console.log('[TEST] Script loaded');

document.addEventListener('DOMContentLoaded', function() {
    console.log('[TEST] DOM Content Loaded');

    // Create the timeline
    console.log('[TEST] Creating timeline...');
    const timeline = createTimeline({
        defaults: {
            ease: 'inOutQuad'
        },
        autoplay: false, // Don't autoplay - controlled by controls
        loop: false
    });

    // Build the timeline with various animations for the two circles
    timeline
        // Circle 1: Move right and scale up
        .add('#circle-1', {
            translateX: [0, 300],
            scale: [1, 1.5],
            duration: 1000,
        })
        // Circle 2: Move down and bounce
        .add('#circle-2', {
            translateY: [0, 200],
            scale: [1, 1.2],
            ease: 'outBounce',
            duration: 1200,
        }, '-=800') // Start 800ms before previous animation ends
        // Circle 1: Move down
        .add('#circle-1', {
            translateY: [0, 150],
            duration: 800,
        })
        // Circle 2: Move right
        .add('#circle-2', {
            translateX: [0, 250],
            duration: 800,
        }, '-=600')
        // Both circles: Bounce and scale
        .add('#circle-1, #circle-2', {
            scale: [null, 0.8, 1.3, 1],
            ease: 'outElastic(2, .5)',
            duration: 1500,
        })
        // Circle 1: Return to start position
        .add('#circle-1', {
            translateX: [null, 0],
            translateY: [null, 0],
            scale: [null, 1],
            duration: 1000,
        })
        // Circle 2: Return to start position
        .add('#circle-2', {
            translateX: [null, 0],
            translateY: [null, 0],
            scale: [null, 1],
            duration: 1000,
        }, '-=800');

    console.log('[TEST] Timeline created. Duration:', timeline.duration);

    // Get control buttons
    const btnPlay = document.getElementById('btn-play');
    const btnPause = document.getElementById('btn-pause');
    const btnRestart = document.getElementById('btn-restart');
    const btnReverse = document.getElementById('btn-reverse');
    const btnSkipForward = document.getElementById('btn-skip-forward');
    const btnSkipBackward = document.getElementById('btn-skip-backward');

    console.log('[TEST] Buttons found:', {
        play: !!btnPlay,
        pause: !!btnPause,
        restart: !!btnRestart,
        reverse: !!btnReverse,
        skipForward: !!btnSkipForward,
        skipBackward: !!btnSkipBackward
    });

    // Get status display elements
    const statusEl = document.getElementById('timeline-status');
    const progressEl = document.getElementById('timeline-progress');
    const durationEl = document.getElementById('timeline-duration');

    console.log('[TEST] Status elements found:', {
        status: !!statusEl,
        progress: !!progressEl,
        duration: !!durationEl
    });

    // Set initial duration
    if (durationEl) {
        durationEl.textContent = Math.round(timeline.duration) + 'ms';
        console.log('[TEST] Duration set to:', timeline.duration);
    }

    /**
     * Update status display
     */
    function updateStatus() {
        if (statusEl) {
            const paused = timeline.paused;
            const completed = timeline.completed;
            const reversed = timeline.reversed;

            if (completed) {
                statusEl.textContent = 'Completed';
            } else if (paused) {
                statusEl.textContent = 'Paused';
            } else if (reversed) {
                statusEl.textContent = 'Playing (Reversed)';
            } else {
                statusEl.textContent = 'Playing';
            }
        }

        if (progressEl) {
            progressEl.textContent = Math.round(timeline.currentTime) + 'ms';
        }
    }

    /**
     * Update progress periodically while playing
     */
    function startProgressUpdates() {
        if (window.timelineProgressInterval) {
            clearInterval(window.timelineProgressInterval);
        }

        window.timelineProgressInterval = setInterval(() => {
            if (!timeline.paused) {
                updateStatus();
            }
        }, 50);
    }

    /**
     * Play the timeline
     */
    function playTimeline() {
        console.log('[TEST] Play clicked');
        timeline.play();
        startProgressUpdates();
        updateStatus();
    }

    /**
     * Pause the timeline
     */
    function pauseTimeline() {
        console.log('[TEST] Pause clicked');
        timeline.pause();
        updateStatus();
    }

    /**
     * Restart the timeline from the beginning
     */
    function restartTimeline() {
        console.log('[TEST] Restart clicked');
        timeline.restart();
        startProgressUpdates();
        updateStatus();
    }

    /**
     * Reverse the timeline direction
     */
    function reverseTimeline() {
        console.log('[TEST] Reverse clicked');
        timeline.reverse();
        startProgressUpdates();
        updateStatus();
    }

    /**
     * Skip forward by 500ms
     */
    function skipForward() {
        console.log('[TEST] Skip forward clicked');
        const newTime = Math.min(timeline.currentTime + 500, timeline.duration);
        timeline.seek(newTime);
        updateStatus();
    }

    /**
     * Skip backward by 500ms
     */
    function skipBackward() {
        console.log('[TEST] Skip backward clicked');
        const newTime = Math.max(timeline.currentTime - 500, 0);
        timeline.seek(newTime);
        updateStatus();
    }

    // Attach event listeners
    if (btnPlay) {
        btnPlay.addEventListener('click', playTimeline);
        console.log('[TEST] Play listener attached');
    }

    if (btnPause) {
        btnPause.addEventListener('click', pauseTimeline);
        console.log('[TEST] Pause listener attached');
    }

    if (btnRestart) {
        btnRestart.addEventListener('click', restartTimeline);
        console.log('[TEST] Restart listener attached');
    }

    if (btnReverse) {
        btnReverse.addEventListener('click', reverseTimeline);
        console.log('[TEST] Reverse listener attached');
    }

    if (btnSkipForward) {
        btnSkipForward.addEventListener('click', skipForward);
        console.log('[TEST] Skip forward listener attached');
    }

    if (btnSkipBackward) {
        btnSkipBackward.addEventListener('click', skipBackward);
        console.log('[TEST] Skip backward listener attached');
    }

    // Listen for timeline completion
    timeline.onComplete = () => {
        console.log('[TEST] Timeline completed');
        updateStatus();
        if (window.timelineProgressInterval) {
            clearInterval(window.timelineProgressInterval);
        }
    };

    // Initial status update
    console.log('[TEST] Calling initial updateStatus');
    updateStatus();
    console.log('[TEST] Initialization complete');
});
