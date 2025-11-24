<?php get_header('showcase'); ?>

<div>

    <h1>Prototype UI</h1>
    <p>Our layout components ship without constraints. Boxing or constraining the layouts is something we have dedicated components for as they really provide the vast majority of responsive handling using traditional breakpoints and/or container queries.</p>

    <ul>
        <li>
            <h2>3-Up Component</h2>
            <h3>Layout that presents as 3 cards when it has enough space to do so and collapses to a stack of cards.</h3>
            <div class="container container--narrow">
                <div class="layout-3-up">
                    <div class="layout-3-up__item">1</div>
                    <div class="layout-3-up__item">2</div>
                    <div class="layout-3-up__item">3</div>
                </div>
            </div>
        </li>

        <li>
            <h2>Wrap Component</h2>
        </li>

        <li>
            <h2>2-Up Component</h2>
            <h3>Layout that presents as 2 cards when it has enough space to do so and collapses to a stack of cards.</h3>
            <div class="container">
                <div class="layout-2-up">
                    <div class="layout-2-up__item">A</div>
                    <div class="layout-2-up__item">B</div>
                </div>
            </div>
        </li>

        <li>
            <h2>4-Up Component</h2>
            <h3>Layout that presents as 4 cards when it has enough space to do so and collapses to a stack of cards.</h3>
            <div class="container">
                <div class="layout-4-up">
                    <div class="layout-4-up__item">A</div>
                    <div class="layout-4-up__item">B</div>
                    <div class="layout-4-up__item">C</div>
                    <div class="layout-4-up__item">D</div>
                </div>
            </div>
        </li>
    
    </ul>

</div>

<?php get_footer('showcase'); ?>

<style>

/* 3-Up layout using BEM */
.layout-3-up {
    container-type: inline-size;
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.layout-3-up__item {
    flex: 1 1 200px;
    background: #eee;
    padding: 1.5rem;
    text-align: center;
    border-radius: 0.5rem;
}

@container (max-width: 700px) {
    .layout-3-up__item {
        flex-basis: 100%;
    }
}

/**
 * 
 * Wraps
 *
 * Container components that wrap stuff.
 * 
 */

/* Base wrap */
.wrap {
  container-type: inline-size;
  padding-inline: 1rem;
}

/* Modifiers for width constraints */
.wrap--narrow {
  max-width: 800px;
  margin-inline: auto;
}

.wrap--boxed {
  max-width: 1200px;
  margin-inline: auto;
}

.wrap--wide {
  max-width: 1400px;
  margin-inline: auto;
}

.wrap--full {
  max-width: none;
  padding-inline: 2rem;
}

.wrap--bleed {
  max-width: none;
  padding-inline: 0;
}

/* Inner element for styling */
.wrap__inner {
  /* backgrounds, borders, etc */
}

/* 2-Up layout using BEM */
.layout-2-up {
    container-type: inline-size;
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.layout-2-up__item {
    flex: 1 1 200px;
    background: #eee;
    padding: 1.5rem;
    text-align: center;
    border-radius: 0.5rem;
}

@container (max-width: 700px) {
    .layout-2-up__item {
        flex-basis: 100%;
    }
}

/* 4-Up layout using BEM */
.layout-4-up {
    container-type: inline-size;
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
}

.layout-4-up__item {
    flex: 1 1 200px;
    background: #eee;
    padding: 1.5rem;
    text-align: center;
    border-radius: 0.5rem;
}

@container (max-width: 700px) {
    .layout-4-up__item {
        flex-basis: 100%;
    }
}

</style>