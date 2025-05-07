<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package munurist
 */

?>

<footer class="site-footer">
      <div class="container">
        <div class="footer-row">
          <div class="footer-left">
            <a href="/" class="footer-logo"
              ><img src="<?php echo get_field('footer-logo', 15); ?>" alt="Лого"
            /></a>
            <div class="footer-info">
              <div class="footer-info-item">
                <span class="footer-info-icon">
                  <img src="<?php echo get_template_directory_uri();?>/assets/images/email.svg" alt="Email" />
                </span>
                <span><?php echo get_field('email', 15); ?></span>
              </div>
            </div>
          </div>
          <div class="footer-right">
            <div class="footer-menu">
            
              <div class="footer-title">Наши услуги</div>
              <?php
			           wp_nav_menu(
				          array(
					        'theme_location' => 'menu-services',
					        'menu_id'        => 'menu-services',
				          )
			          );
			        ?>
            </div>

            <div class="footer-menu">
              <div class="footer-title">О нас</div>
              <?php
			           wp_nav_menu(
				          array(
					        'theme_location' => 'menu-about',
					        'menu_id'        => 'menu-about',
				          )
			          );
			        ?>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
      <?php echo get_field('footer-copyright', 15); ?>
      </div>
    </footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
