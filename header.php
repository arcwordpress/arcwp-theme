<!DOCTYPE html>
<html <?php language_attributes(); ?> class="dark">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-black text-white'); ?>>
<?php wp_body_open(); ?>

<?php require_once get_template_directory() . '/templates/site-header.php'; ?>