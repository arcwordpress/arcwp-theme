<?php

add_action('wp_enqueue_scripts', function() {
    // Enqueue Google Fonts (Geist and Lexend Exa)
    wp_enqueue_style(
        'arcwp-fonts',
        'https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700;800;900&family=Lexend+Exa:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'arcwp-style',
        get_stylesheet_uri(),
        ['arcwp-fonts'],
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'arcwp-tailwind',
        get_template_directory_uri() . '/tailwind.css',
        ['arcwp-fonts'],
        wp_get_theme()->get('Version')
    );

    // Enqueue mobile menu toggle script (on all pages)
    wp_enqueue_script(
        'arcwp-mobile-menu',
        get_template_directory_uri() . '/js/mobile-menu.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    // Enqueue home page animations as ES6 module (only on homepage)
    // The module imports anime.js directly, so we don't need to enqueue it separately
    if (is_front_page() || is_page_template('page-home.php')) {
        wp_enqueue_script(
            'arcwp-home-animations',
            get_template_directory_uri() . '/js/home-animations.js',
            [], // No dependencies - module imports anime.js itself
            wp_get_theme()->get('Version'),
            true
        );

        // Add type="module" attribute to the script tag
        add_filter('script_loader_tag', function($tag, $handle) {
            if ('arcwp-home-animations' === $handle) {
                $tag = str_replace('<script ', '<script type="module" ', $tag);
            }
            return $tag;
        }, 10, 2);
    }

    // Enqueue packages React app
    if (is_page('packages')) {
        $asset_file = get_template_directory() . '/apps/packages/build/index.asset.php';

        if (file_exists($asset_file)) {
            $asset = require $asset_file;

            wp_enqueue_script(
                'arcwp-packages-app',
                get_template_directory_uri() . '/apps/packages/build/index.js',
                $asset['dependencies'],
                $asset['version'],
                true
            );

            // Localize script with API settings
            wp_localize_script('arcwp-packages-app', 'arcwpPackages', [
                'apiUrl' => rest_url(),
                'nonce' => wp_create_nonce('wp_rest')
            ]);
        }
    }

    // ========================================================================
    // TEST1 ANIMATION - Timeline Controls Test
    // This section can be removed after testing is complete
    // ========================================================================
    if (is_page('test1')) {
        // Enqueue test controls script as ES6 module
        // The module imports anime.js and test-timeline.js
        wp_enqueue_script(
            'arcwp-test-controls',
            get_template_directory_uri() . '/js/test-controls.js',
            [], // No dependencies - module imports everything itself
            wp_get_theme()->get('Version'),
            true
        );

        // Add type="module" attribute to the script tag
        add_filter('script_loader_tag', function($tag, $handle) {
            if ('arcwp-test-controls' === $handle) {
                $tag = str_replace('<script ', '<script type="module" ', $tag);
            }
            return $tag;
        }, 10, 2);
    }
    // ========================================================================
    // END TEST1 ANIMATION
    // ========================================================================
});

// Add theme support for menus and features
add_action('after_setup_theme', function() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'arcwp'),
    ));
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
});

// Add rewrite rules for packages routes
add_action('init', function() {
    // Add rewrite rule for /packages/{slug} to route to the packages page
    // This allows React Router to handle the slug parameter
    add_rewrite_rule(
        '^packages/([^/]+)/?$',
        'index.php?pagename=packages&package_slug=$matches[1]',
        'top'
    );
}, 10, 0);

// Add custom query var for package slug
add_filter('query_vars', function($vars) {
    $vars[] = 'package_slug';
    return $vars;
});

// Custom login redirects - force all users (including admins) to /dashboard
add_filter('login_redirect', function($redirect_to, $request, $user) {
    // Redirect ALL users to /dashboard on successful login (including admins)
    if (isset($user->ID)) {
        return site_url('/dashboard/');
    }
    return $redirect_to;
}, 999, 3);

// Redirect failed logins back to /account
add_action('wp_login_failed', function($username) {
    $referrer = wp_get_referer();

    // Check if the login attempt came from /account page
    if ($referrer && strpos($referrer, 'account') !== false) {
        wp_redirect(site_url('/account/?login=failed'));
        exit;
    }
});

// Redirect on authentication error (wrong password, empty fields, etc.)
add_filter('authenticate', function($user, $username, $password) {
    $referrer = wp_get_referer();

    // Only process if it's from our custom login page
    if ($referrer && strpos($referrer, 'account') !== false) {
        // Check if username or password is empty
        if (empty($username) || empty($password)) {
            wp_redirect(site_url('/account/?login=empty'));
            exit;
        }
    }

    return $user;
}, 101, 3);

// Redirect logout to home page
add_action('wp_logout', function() {
    wp_redirect(home_url());
    exit;
});

// Set a flag when user logs in successfully
add_action('wp_login', function($user_login, $user) {
    set_transient('redirect_after_login_' . $user->ID, true, 60);
}, 10, 2);

// Check for the flag and redirect from wp-admin to dashboard
add_action('admin_init', function() {
    $user_id = get_current_user_id();

    if (get_transient('redirect_after_login_' . $user_id)) {
        delete_transient('redirect_after_login_' . $user_id);
        wp_redirect(site_url('/dashboard/'));
        exit;
    }
});

// Theme updater management
require_once get_template_directory() . '/updater/manage.php';

add_action('template_redirect', function() {
    if (is_page('showcase') || is_page('prototype-ui')) {
        show_admin_bar(false);
    }
});