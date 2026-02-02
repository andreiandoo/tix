<?php
/**
 * Template Name: Changelog Page
 */

get_header();
?>

<div class="container mx-auto px-4 py-8 mt-16">
    <?php echo do_shortcode('[epas_changelog show_summary="true" group_by="module" type="feat"]'); ?>

    <?php //echo do_shortcode('[epas_changelog show_summary="true" group_by="module"]'); ?>
</div>


<?php
get_footer();?>