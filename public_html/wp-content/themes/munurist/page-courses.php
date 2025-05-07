<?php
/**
 * Template name: Курсы повышения квалификации
 */

get_header();
?>

	<main id="primary" class="site-main">


  <div class="s-courses">
      <div class="container">
        <div class="def-title">Курсы повышения квалификации</div>

        <div class="courses-row">

        <?php 
        $args_courses = array(
          'post_type' => 'courses',
        );

        $the_courses = new WP_Query($args_courses);

        if ($the_courses->have_posts()) {

          while ($the_courses->have_posts()) {
            $the_courses->the_post(); ?>
        <div class="courses-item">
          <div class="courses-left">
            <?php the_post_thumbnail('medium')?>
          </div>

          <div class="courses-right">
            <div class="course-title">
              <?php the_title(); ?>
            </div>
            <?php $courses_fields = CFS()->get( 'courses-loop' );
              foreach ( $courses_fields as $field ) : ?>                
              <!-- echo $field['upload']; -->
              
                <div class="course-text">
                  <h3>
                    <?php echo $field['courses-info-title']; ?>
                  </h3>
                </div>
                <div class="courses-list-wrap">
                  <?php echo $field['courses-info-content']?>
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
