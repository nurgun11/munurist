<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package munurist
 */

get_header();
?>

	<main id="primary" class="site-main">

	

	<div class="s-breadcrumbs">
      <div class="container">
		<ul><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false)?></ul>
      </div>
    </div>

    <section class="s-single">
      <div class="container">
        <div class="single-top">
          <div class="single-thumbnail">
            <img src="<?php echo CFS()->get('blog-single-image') ?>" alt="" />
          </div>
          <div class="news-top-line">
            <div class="news-date"><?php echo get_the_date('j F Y')?></div>
          </div>
          <h1 class="single-title">
		  <?php echo the_title()?>
          </h1>
        </div>

        <div class="single-content">
          <p>
		  <?php echo the_content()?>
          </p>
        </div>

        <div class="single-navs">
	


			<?php previous_post_link( '%link', '<svg
              width="48"
              height="28"
              viewbox="0 0 48 28"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g clip-path="url(#clip0_204_822)">
                <path
                  d="M13.1646 27.1646L15.3026 25.0264L5.78827 15.5119L48 15.5119L48 12.4881L5.78827 12.4881L15.3026 2.97369L13.1646 0.835523L2.66382e-06 14.0001L13.1646 27.1646Z"
                  fill="#302D2D"
                />
              </g>
              <defs>
                <clippath id="clip0_204_822">
                  <rect
                    width="48"
                    height="28"
                    fill="white"
                    transform="translate(48 28) rotate(180)"
                  />
                </clippath>
              </defs>
            </svg> 
			<span></span> %title' ); ?>
	
            <?php if (strlen(get_previous_post()->post_title) > 0 || strlen(get_next_post()->post_title) > 0 ) : ?>
				<span class="single-navs-line"></span>
			<?php endif; ?>
   
          
		  <?php next_post_link( '%link', '<span
              ></span
            >
            <svg style="order: 1"
              width="48"
              height="28"
              viewbox="0 0 48 28"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <g clip-path="url(#clip0_204_827)">
                <path
                  d="M34.8354 0.835449L32.6974 2.97362L42.2117 12.4881L0 12.4881L0 15.5119L42.2117 15.5119L32.6974 25.0263L34.8354 27.1645L48 13.9999L34.8354 0.835449Z"
                  fill="#302D2D"
                />
              </g>
              <defs>
                <clippath id="clip0_204_827">
                  <rect width="48" height="28" fill="white" />
                </clippath>
              </defs>
            </svg> %title' ); ?>
      
        </div>

		<?php comments_template(); ?>
      </div>
    </section>

	</main>

<?php

get_footer();
