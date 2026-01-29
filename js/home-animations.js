/**
 * Homepage animations using anime.js 4.x
 * ES6 Module
 */

import { animate, createTimeline, svg, stagger, onScroll } from 'https://cdn.jsdelivr.net/npm/animejs@4.2.2/+esm';

document.addEventListener('DOMContentLoaded', function() {

    // SVG path drawing animation for database icon
    // In anime.js 4.x, use svg.createDrawable() for path animations
    const databasePath = document.querySelector('#database-icon');

    if (databasePath) {
        const [ drawable ] = svg.createDrawable('#database-icon');

        // Animate the path drawing
        animate(drawable, {
            draw: ['0 0', '0 1', '1 1'],
            ease: 'inOutQuad',
            duration: 3000,
            delay: stagger(500),
            loop: true
        });
    }

    // Hero section timeline animation
    // In anime.js 4.x, timeline is created with createTimeline()
    const heroTimeline = createTimeline({
        defaults: {
            ease: 'out(3)'
        },
        autoplay: true
    });

    heroTimeline
        .add('.hero-title', {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 1200,
        })
        .add('.hero-subtitle', {
            opacity: [0, 1],
            translateY: [30, 0],
            duration: 1000,
        }, '-=800')
        .add('.hero-buttons', {
            opacity: [0, 1],
            translateY: [20, 0],
            duration: 800,
        }, '-=600')
        .add('.hero-image', {
            opacity: [0, 1],
            translateX: [50, 0],
            duration: 1200,
        }, '-=1000')
        .add('.hero-stat', {
            opacity: [0, 1],
            scale: [0.8, 1],
            duration: 600,
        }, '-=400');

    // Scroll-scrubbing timeline for learn section
    const learnSection = document.querySelector('#learn-more');
    const learnTag = document.querySelector('.learn-tag');
    const learnTitle = document.querySelector('.learn-title');

    if (learnSection && learnTag && learnTitle) {
        // Create timeline for learn section animations
        const learnTimeline = createTimeline({
            defaults: {
                ease: 'out(3)'
            },
            autoplay: false // Don't autoplay, we'll control with scroll
        });

        learnTimeline
            .add('.learn-tag', {
                opacity: [0, 1],
                translateY: [20, 0],
                duration: 600,
            })
            .add('.learn-title', {
                opacity: [0, 1],
                translateY: [40, 0],
                duration: 800,
            }, '-=400');

        // Get the total duration of the timeline
        const timelineDuration = learnTimeline.duration;

        // Set up scroll listener to scrub the timeline
        const updateLearnAnimation = () => {
            const rect = learnSection.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // Calculate when section enters viewport (starting from bottom of viewport)
            const scrollProgress = Math.max(0, Math.min(1,
                (windowHeight - rect.top) / (windowHeight * 0.5)
            ));

            // Convert progress (0-1) to timeline time in milliseconds
            const seekTime = scrollProgress * timelineDuration;

            // Seek timeline to the calculated time, mute callbacks to prevent issues
            learnTimeline.seek(seekTime, true);
            learnTimeline.play()
        };

        // Listen for scroll events
        window.addEventListener('scroll', updateLearnAnimation, { passive: true });

        // Initial check in case section is already in view
        updateLearnAnimation();
    }


    /**
     * onScroll CTA Timeline
     */
    const ctaTimeline = createTimeline({
        defaults: {
            ease: 'out(3)'
        },
        autoplay: onScroll({
            target: '#cta'
        })
    });
    ctaTimeline
        .set('#cta-heading', { opacity: 0, translateX: 200 })
        .set('#cta-text', { opacity: 0, translateX: -200 })
        .set('#cta-button', { opacity: 0, scale: 0.8 })
        .add('#cta-heading', {
            opacity: [0, 1],
            translateX: [200, 0],
            duration: 600,
        })
        .add('#cta-text', {
            opacity: [0, 1],
            translateX: [-200, 0],
            duration: 600,
        }, '-=400')
        .add('#cta-button', {
            opacity: [0, 1],
            scale: [0.8, 1],
            duration: 400,
        }, '-=200')

    /**
     * Smooth scroll for Learn Gateway link
     */
    console.log('Setting up Learn Gateway scroll...');
    const learnGatewayLink = document.querySelector('a[href="#learn-more"]');
    console.log('Learn Gateway Link found:', learnGatewayLink);

    if (learnGatewayLink) {
        console.log('Adding click listener to Learn Gateway link');
        learnGatewayLink.addEventListener('click', function(e) {
            console.log('Learn Gateway link CLICKED!');
            e.preventDefault();
            console.log('Default prevented');

            const targetSection = document.querySelector('#learn-more');
            console.log('Target section:', targetSection);

            if (targetSection) {
                const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset;
                const startPosition = window.pageYOffset;
                console.log('Start:', startPosition, 'Target:', targetPosition);

                // Create scroll animation object
                const scrollObj = { scroll: startPosition };

                console.log('Starting animation...');
                animate(scrollObj, {
                    scroll: targetPosition,
                    duration: 800,
                    ease: 'outBounce',
                    onUpdate: () => {
                        console.log('Animating scroll to:', scrollObj.scroll);
                        window.scrollTo(0, scrollObj.scroll);
                    }
                });
            } else {
                console.error('Target section not found!');
            }
        });
    } else {
        console.error('Learn Gateway link NOT found!');
    }

});