<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package munurist
 */

get_header();
?>

<div class="s-breadcrumbs">
      <div class="container">
		<ul><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false)?></ul>
      </div>
    </div>

	<main id="primary" class="site-main">

	<div class="container">
		<section class="s-single">
		<h2 class="def-title"><?php echo get_field('page-title'); ?></h2>
		<p><?php echo get_field('page-content'); ?></p>
		</section>
</div>

	</main><!-- #main -->

<?php
get_footer();
