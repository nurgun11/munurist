<?php
/**
 * The template for displaying 404 pages (not found)
 * 
 * Template name: 404
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package munurist
 */

get_header();
?>

	<main id="primary" class="site-main">

	<div class="s-not-found">
      <div class="container">
        <div class="not-found-wrap">
          <img src="<?php echo get_field('404-img'); ?> alt="404" />
          <div class="not-found-content">
            <div class="not-found-title">Страница не найдена</div>
            <a href="<?php echo get_home_url();?>">Перейти на <span class="has-line">главную</span></a>
          </div>
        </div>
      </div>
    </div>

	</main>

<?php
get_footer();
