<?php

add_action('wp_enqueue_scripts', function() {
    
    // 1. Enqueue Google Fonts (Geist and Lexend Exa)
    wp_enqueue_style(
        'arcwp-fonts',
        'https://fonts.googleapis.com/css2?family=Geist:wght@400;500;600;700;800;900&family=Lexend+Exa:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );

    // 2. Enqueue Main Stylesheet
    wp_enqueue_style(
        'arcwp-style',
        get_stylesheet_uri(),
        ['arcwp-fonts'],
        wp_get_theme()->get('Version')
    );

    // 3. Enqueue Tailwind
    wp_enqueue_style(
        'arcwp-tailwind',
        get_template_directory_uri() . '/tailwind.css',
        ['arcwp-fonts'],
        wp_get_theme()->get('Version')
    );

    // --- NEW: Enqueue Landing Page CSS for /courses/ ---
    $is_page = is_page('courses');
    error_log("IS PAGE COURSES: " . $is_page);
    wp_enqueue_style(
        'arcwp-lp-style',
        get_template_directory_uri() . '/assets/css/lp.css',
        [],
        wp_get_theme()->get('Version')
    );

    // 4. Enqueue mobile menu toggle script (on all pages)
    wp_enqueue_script(
        'arcwp-mobile-menu',
        get_template_directory_uri() . '/js/mobile-menu.js',
        [],
        wp_get_theme()->get('Version'),
        true
    );

    // 5. Enqueue home page animations
    if (is_front_page() || is_page_template('page-home.php')) {
        wp_enqueue_script(
            'arcwp-home-animations',
            get_template_directory_uri() . '/js/home-animations.js',
            [],
            wp_get_theme()->get('Version'),
            true
        );

        add_filter('script_loader_tag', function($tag, $handle) {
            if ('arcwp-home-animations' === $handle) {
                $tag = str_replace('<script ', '<script type="module" ', $tag);
            }
            return $tag;
        }, 10, 2);
    }

    // 6. Enqueue packages React app
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

            wp_localize_script('arcwp-packages-app', 'arcwpPackages', [
                'apiUrl' => rest_url(),
                'nonce' => wp_create_nonce('wp_rest')
            ]);
        }
    }

    // 7. TEST1 ANIMATION
    if (is_page('test1')) {
        wp_enqueue_script(
            'arcwp-test-controls',
            get_template_directory_uri() . '/js/test-controls.js',
            [],
            wp_get_theme()->get('Version'),
            true
        );

        add_filter('script_loader_tag', function($tag, $handle) {
            if ('arcwp-test-controls' === $handle) {
                $tag = str_replace('<script ', '<script type="module" ', $tag);
            }
            return $tag;
        }, 10, 2);
    }
});

// Add theme support for menus and features
add_action('after_setup_theme', function() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'arcwp'),
    ));
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support( '__experimentalBlockRenaming' );
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

add_filter('body_class', function($classes) {
    $classes[] = 'bg-black';
    $classes[] = 'text-white';
    return $classes;
});

add_action('admin_init', function () {
    // Redirect any user trying to access the comments page in the backend
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove the "Comments" menu item from the sidebar
    remove_menu_page('edit-comments.php');

    // Remove comment support from all post types (Posts, Pages, and LearnPress)
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the frontend
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments if they already exist
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove the comments icon from the Admin Bar
add_action('wp_before_admin_bar_render', function() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
});