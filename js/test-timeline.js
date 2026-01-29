/**
 * Test Timeline Animation
 * ES6 Module for anime.js timeline test
 */

import { createTimeline } from 'https://cdn.jsdelivr.net/npm/animejs@4.2.2/+esm';

/**
 * Create and export the timeline
 * This timeline animates two circles with bouncing, moving, and scaling
 */
export function createTestTimeline() {
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

    return timeline;
}
