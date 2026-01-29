=== ARCWP Theme ===
Contributors: arcwp
Requires at least: 6.0
Tested up to: 6.7
Requires PHP: 7.4
Stable tag: 1.1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A modern, lightweight WordPress theme built with Tailwind CSS for the ARC WP ecosystem.

== Description ==

ARC WP Theme is a clean, performance-focused WordPress theme designed for modern web development. Built with Tailwind CSS and optimized for speed, it provides a solid foundation for custom WordPress projects.

**Key Features:**

* Tailwind CSS integration
* Automatic updates via GitHub
* Custom post type support
* Optimized asset loading
* Full menu and thumbnail support
* Developer-friendly architecture

== Installation ==

1. Download the theme zip file
2. Go to Appearance > Themes > Add New > Upload Theme
3. Choose the downloaded zip file and click Install Now
4. Activate the theme

== Support ==

For support and documentation, visit: https://arcwp.ca/docs

== Development ==

To watch for Tailwind CSS changes during development:

```
npm run dev
```

This runs `npx tailwindcss -i ./tailwind/input.css -o ./tailwind.css --watch` to compile Tailwind CSS and watch for changes.

**Note for deployment:** If you make changes to the packages browser in `apps/packages/`, you'll need to run the build commands there as well:

```
cd apps/packages
npm run dev    # for development (wp-scripts start)
npm run build  # for production (wp-scripts build)
```

Make sure to run both the root Tailwind build and the apps/packages build before deploying if changes were made in both areas.
