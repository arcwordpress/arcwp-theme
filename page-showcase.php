<?php get_header('showcase'); ?>

<style>

/* Skeleton load prioritized styles. */

html, body {
    margin: 0;
    padding: 0;
    overflow: hidden;
}

#gty-showcase-skeleton {
    background-color: #000;
    height: 100vh; /* Fallback for older browsers */
    height: 100dvh; /* Modern browsers */
    width: 100vw;
    font-size: clamp(2rem, 12vw, 20rem);
    font-weight: 800;
    letter-spacing: 0.05em;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

</style>

<div id="gty-showcase-skeleton">GATEWAY</div>

<!-- Main content - hidden initially, fades in as letters fly away -->
<div id="gty-showcase-content" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: #3B1603; opacity: 0; z-index: -1;">
    <!-- Intro text placeholders -->
    <div class="intro-text" id="intro-field-types" style="position: absolute; bottom: 20%; left: 5%; font-size: clamp(2rem, 9vw, 15rem); font-weight: 800; letter-spacing: 0.05em; color: white; transform: rotate(-25deg); opacity: 0;">FIELD TYPES</div>
    <div class="intro-text" id="intro-form-types" style="position: absolute; bottom: 20%; left: 5%; font-size: clamp(2rem, 9vw, 15rem); font-weight: 800; letter-spacing: 0.05em; color: white; transform: rotate(-25deg); opacity: 0;">FORM TYPES</div>
    <div class="intro-text" id="intro-facet-filters" style="position: absolute; bottom: 20%; left: 5%; font-size: clamp(2rem, 9vw, 15rem); font-weight: 800; letter-spacing: 0.05em; color: white; transform: rotate(-25deg); opacity: 0;">FACET FILTERS</div>
    <div class="intro-text" id="intro-grid-types" style="position: absolute; bottom: 20%; left: 5%; font-size: clamp(2rem, 9vw, 15rem); font-weight: 800; letter-spacing: 0.05em; color: white; transform: rotate(-25deg); opacity: 0;">GRID TYPES</div>

    <!-- Menu items container - vertical menu on left -->
    <div id="menu-container" style="position: fixed; top: 2rem; left: 2rem; display: flex; flex-direction: column; gap: 1rem;">
        <div id="field-types-text" style="font-size: 1.5rem; font-weight: 800; letter-spacing: 0.05em; color: white; white-space: nowrap; cursor: pointer; opacity: 0;">
            FIELD TYPES
        </div>
        
        <div id="form-types-text" style="font-size: 1.5rem; font-weight: 800; letter-spacing: 0.05em; color: white; white-space: nowrap; cursor: pointer; opacity: 0;">
            FORM TYPES
        </div>
        
        <div id="facet-filters-text" style="font-size: 1.5rem; font-weight: 800; letter-spacing: 0.05em; color: white; white-space: nowrap; cursor: pointer; opacity: 0;">
            FACET FILTERS
        </div>
        
        <div id="grid-types-text" style="font-size: 1.5rem; font-weight: 800; letter-spacing: 0.05em; color: white; white-space: nowrap; cursor: pointer; opacity: 0;">
            GRID TYPES
        </div>
    </div>
    
    <!-- Container for all type lists -->
    <div id="types-lists-container" style="position: absolute; bottom: 5%; right: 5%; display: flex; gap: 0.5rem; justify-content: flex-end;">
        <!-- Field types list -->
        <div id="field-types-list">
            <div class="field-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Text Field</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="field-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Select Field</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="field-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Checkbox Field</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="field-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Date Field</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="field-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">File Upload</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
        </div>
        
        <!-- Form types list -->
        <div id="form-types-list">
            <div class="form-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Web Forms</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="form-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">App Forms</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
        </div>
        
        <!-- Facet filters list -->
        <div id="facet-filters-list">
            <div class="facet-filter-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Date Range</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="facet-filter-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Text Search</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="facet-filter-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Select Filter</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="facet-filter-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Range Filter</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
        </div>
        
        <!-- Grid types list -->
        <div id="grid-types-list">
            <div class="grid-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Board</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="grid-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">List</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="grid-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Table</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="grid-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Masonry</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="grid-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Bento</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
            <div class="grid-type-item" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 1.5rem; margin-bottom: 0.5rem; background: rgba(0,0,0,0.3); border-radius: 8px; min-width: 250px; cursor: pointer; transition: background 0.2s;">
                <span style="color: white; font-size: 1.1rem; font-weight: 600;">Map</span>
                <span style="color: white; font-size: 1.2rem;">→</span>
            </div>
        </div>
    </div>
</div>

<script>
    // Execute immediately - split text right away for instant display
    const skeleton = document.querySelector('#gty-showcase-skeleton');
    const text = skeleton.textContent;
    
    // Split text into individual letter spans
    skeleton.innerHTML = text.split('').map(letter => 
        `<span class="letter" style="display: inline-block;">${letter}</span>`
    ).join('');

    // Split intro text for animation
    document.querySelectorAll('.intro-text').forEach(textElement => {
        const text = textElement.textContent;
        textElement.innerHTML = text.split('').map(letter => 
            `<span class="intro-letter" style="display: inline-block; opacity: 0;">${letter === ' ' ? '&nbsp;' : letter}</span>`
        ).join('');
    });
</script>

<script type="module">
    // Import anime.js after skeleton is already displayed
    import anime from 'https://cdn.jsdelivr.net/npm/animejs@3.2.2/lib/anime.es.js';

    // Get computed font size and calculate bounce distance as a ratio
    const letter = document.querySelector('.letter');
    const fontSize = parseFloat(window.getComputedStyle(letter).fontSize);
    const bounceDistance = fontSize * 0.375; // 37.5% of font size (25% more than 0.3)

    // Staggered bounce animation with smoother easing
    const loopingAnimation = anime({
        targets: '.letter',
        translateY: [
            { value: -bounceDistance, duration: 400, easing: 'easeOutCubic' },
            { value: 0, duration: 400, easing: 'easeInOutCubic' }
        ],
        delay: anime.stagger(50), // 50ms delay - creates wave effect with lots of overlap
        loop: true,
        loopDelay: 0
    });

    // Detect when page is ready (all assets loaded)
    window.addEventListener('load', () => {
        // NO MORE 2-SECOND DELAY.
        loopingAnimation.pause();

        const content = document.querySelector('#gty-showcase-content');
        const skeletonContainer = document.querySelector('#gty-showcase-skeleton');

        // Letters fly away - this part is fine
        anime({
            targets: '.letter',
            translateY: -window.innerHeight * 0.8,
            scale: [1, 3],
            opacity: [1, 0],
            duration: 1200,
            delay: anime.stagger(40),
            easing: 'easeInCubic',
            complete: () => {
                skeletonContainer.style.display = 'none';
            }
        });

        // --- REBUILT, SIMPLIFIED TIMELINE ---

        // Set initial states for all elements using anime.set
        // This ensures they are hidden and positioned correctly before any animation starts.
        anime.set(['#field-types-list', '#form-types-list', '#facet-filters-list', '#grid-types-list'], { opacity: 0 });
        anime.set('.intro-text .intro-letter', { opacity: 0 });

        const mainTimeline = anime.timeline({
            easing: 'easeOutCubic',
            delay: 400 // Start shortly after fly-away begins
        });

        // 1. Fade in the brown background
        mainTimeline.add({
            targets: '#gty-showcase-content',
            opacity: [0, 1],
            duration: 1000,
            begin: () => {
                content.style.zIndex = '1';
            }
        });

        // --- SEQUENCE FOR "FIELD TYPES" ---
        mainTimeline.add({
            targets: '#intro-field-types .intro-letter',
            opacity: [0, 1],
            duration: 50,
            delay: anime.stagger(50)
        }, '-=500') // Overlap with background fade
        .add({
            targets: '#field-types-list',
            opacity: [0, 1],
            duration: 800
        }, '-=500')
        .add({
            targets: '#intro-field-types',
            opacity: [1, 0],
            duration: 500
        })
        .add({
            targets: '#field-types-text',
            opacity: [0, 1],
            duration: 500
        }, '-=500');

        // --- SEQUENCE FOR "FORM TYPES" ---
        mainTimeline.add({
            targets: '#intro-form-types .intro-letter',
            opacity: [0, 1],
            duration: 50,
            delay: anime.stagger(50)
        }, '+=500') // Pause before next section
        .add({
            targets: '#form-types-list',
            opacity: [0, 1],
            duration: 800
        }, '-=500')
        .add({
            targets: '#intro-form-types',
            opacity: [1, 0],
            duration: 500
        })
        .add({
            targets: '#form-types-text',
            opacity: [0, 1],
            duration: 500
        }, '-=500');

        // --- SEQUENCE FOR "FACET FILTERS" ---
        mainTimeline.add({
            targets: '#intro-facet-filters .intro-letter',
            opacity: [0, 1],
            duration: 50,
            delay: anime.stagger(50)
        }, '+=500')
        .add({
            targets: '#facet-filters-list',
            opacity: [0, 1],
            duration: 800
        }, '-=500')
        .add({
            targets: '#intro-facet-filters',
            opacity: [1, 0],
            duration: 500
        })
        .add({
            targets: '#facet-filters-text',
            opacity: [0, 1],
            duration: 500
        }, '-=500');

        // --- SEQUENCE FOR "GRID TYPES" ---
        mainTimeline.add({
            targets: '#intro-grid-types .intro-letter',
            opacity: [0, 1],
            duration: 50,
            delay: anime.stagger(50)
        }, '+=500')
        .add({
            targets: '#grid-types-list',
            opacity: [0, 1],
            duration: 800
        }, '-=500')
        .add({
            targets: '#intro-grid-types',
            opacity: [1, 0],
            duration: 500
        })
        .add({
            targets: '#grid-types-text',
            opacity: [0, 1],
            duration: 500
        }, '-=500');

        // Finally, fade the background to black after everything is done.
        mainTimeline.add({
            targets: '#gty-showcase-content',
            backgroundColor: '#000000',
            duration: 1500,
            easing: 'linear'
        }, '+=1000');
    });
</script>

<?php get_footer('showcase'); ?>