<?php get_header(); ?>

<?php 

class EventView extends \Gateway\View {

}

$eventView = new EventView();

echo '<pre>';
var_dump( $eventView );
echo '</pre>';

?>

<section id="view-123" class="gt-view">
    <h1>View Title</h1>
</section>

<?php get_footer(); ?>

<style>

.gt-view {
    max-width: 1280px;
    margin: 60px auto;
}

</style>