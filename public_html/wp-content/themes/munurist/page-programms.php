<?php
/**
 * Template name: Программы профессиональной переподготовки
 */

get_header();
?>

	<main id="primary" class="site-main">


  <div class="s-courses">
      <div class="container">
        <div class="def-title">Программы профессиональной переподготовки</div>

        <div class="courses-row">

        <?php 
        $args_programms = array(
          'post_type' => 'programms',
        );

        $the_programms = new WP_Query($args_programms);

        if ($the_programms->have_posts()) {

          while ($the_programms->have_posts()) {
            $the_programms->the_post(); ?>


        <div class="courses-item">
          <div class="courses-left">
            <?php the_post_thumbnail('medium')?>
          </div>

          <div class="courses-right">
            <div class="course-title">
              <?php the_title(); ?>
            </div>
            <?php $programms_fields = CFS()->get( 'programms-loop' );
              foreach ( $programms_fields as $field ) : ?>                
              <!-- echo $field['upload']; -->
                <div class="course-text">
                  <h3>
                    <?php echo $field['programms-info-title']; ?>
                  </h3>
                </div>
                <div class="courses-list-wrap">
                  <?php echo $field['programms-info-content']?>
                </div>               
              <?php endforeach;?>
              <div class="courses-subitem">
                  <a href="<?php the_permalink(); ?>" class="courses-button">Подробнее</a>
              </div>
            </div>
          </div>
           <?php } 
          } else {
              echo 'Нет курсов';
          }
          wp_reset_postdata();
        ?>
        </div>       
      </div>
    </div>

	</main>

<?php
get_footer();
