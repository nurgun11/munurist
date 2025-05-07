<?php
/**
 * The template for displaying all pages
 * Template name: Главная

 */

get_header();
?>

	<main id="primary" class="site-main">

    <section class="s-banner">
      <div class="container">
        <div class="banner-row">
          <div class="banner-left wow animate__animated animate__fadeInLeft">
            <img
              class="banner-image-small"
              src="<?php echo get_field('banner-image'); ?>"
              alt="Sakha"
            />
            <h1 class="banner-title">
			<?php echo get_field('banner-title'); ?>
            </h1>
            <a href="<?php echo get_field('banner-btn-link'); ?>" class="banner-btn"><?php echo get_field('banner-btn-text'); ?></a>
          </div>
          <div class="banner-right wow animate__animated animate__fadeInRight">
            <img class="banner-image" src="<?php echo get_field('banner-image'); ?>" alt="Sakha" />
          </div>
        </div>
      </div>
    </section>

    <section class="s-services wow animate__animated animate__fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">

	<?php $service1 = get_field('service-1'); ?>
	<?php $service2 = get_field('service-2'); ?>
	<?php $service3 = get_field('service-3'); ?>
      <div class="container">
        <div class="def-title"><?php echo get_field('s-services-title'); ?></div>
        <div class="services-row">
          <div class="services-item">
            <div class="services-thumb">
              <img src="<?php echo $service1['service-image-1'];?>" alt="Миниатюра" />
            </div>

            <div class="services-body">
              <h3 class="services-title">
                <a href="<?php echo $service1['service-btn-link-1'];?>"
                  ><?php echo $service1['service-title-1'];?></a
                >
              </h3>
            
              <a href="<?php echo $service1['service-btn-link-1'];?>" class="services-readmore"><?php echo $service1['service-btn-text-1'];?></a>
            </div>
          </div>

          <div class="services-item">
            <div class="services-thumb">
              <img src="<?php echo $service2['service-image-2'];?>" alt="Миниатюра" />
            </div>

            <div class="services-body">
              <h3 class="services-title">
                <a href="<?php echo $service2['service-btn-link-2'];?>"
                  ><?php echo $service2['service-title-2'];?></a
                >
              </h3>
              
              <a href="<?php echo $service2['service-btn-link-2'];?>" class="services-readmore"><?php echo $service2['service-btn-text-2'];?></a>
            </div>
          </div>

          <div class="services-item">
            <div class="services-thumb">
              <img src="<?php echo $service3['service-image-3'];?>" alt="Миниатюра" />
            </div>

            <div class="services-body">
              <h3 class="services-title">
                <a href="<?php echo $service3['service-btn-link-3'];?>"
                  ><?php echo $service3['service-title-3'];?></a
                >
              </h3>
              <a href="<?php echo $service3['service-btn-link-3'];?>" class="services-readmore"><?php echo $service3['service-btn-text-3'];?></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s-work wow animate__animated animate__fadeInUp"  data-wow-duration="2s" data-wow-delay="0.5s">

    <?php $work1 = get_field('work-1'); ?>
    <?php $work2 = get_field('work-2'); ?>
    <?php $work3 = get_field('work-3'); ?>
    <?php $work4 = get_field('work-4'); ?>
    <?php $work5 = get_field('work-5'); ?>

      <div class="container">
        <h2 class="def-title"><?php echo get_field('s-work-title'); ?></h2>
        <div class="work-row">
          <div class="work-item">
            <div class="work-icon">
              <img src="<?php echo $work1['work-icon-1'];?>" alt="Заявка на обучение" />
            </div>
            <div class="work-title"><?php echo $work1['work-text-1'];?></div>
          </div>
          <div class="work-item">
            <div class="work-icon">
              <img src="<?php echo $work2['work-icon-2'];?>" alt="Консультация" />
            </div>
            <div class="work-title"><?php echo $work2['work-text-2'];?></div>
          </div>
          <div class="work-item">
            <div class="work-icon">
              <img src="<?php echo $work3['work-icon-3'];?>" alt="Договор и оплата" />
            </div>
            <div class="work-title"><?php echo $work3['work-text-3'];?></div>
          </div>
          <div class="work-item">
            <div class="work-icon">
              <img src="<?php echo $work4['work-icon-4'];?>" alt="Обучение" />
            </div>
            <div class="work-title"><?php echo $work4['work-text-4'];?></div>
          </div>
          <div class="work-item">
            <div class="work-icon">
              <img src="<?php echo $work5['work-icon-5'];?>" alt="Отправка диплома" />
            </div>
            <div class="work-title"><?php echo $work5['work-text-5'];?></div>
          </div>
        </div>
      </div>
    </section>

    <div class="s-docs wow animate__animated animate__fadeInUp"  data-wow-duration="2s" data-wow-delay="0.5s">
      <div class="container">
        <div class="docs-list-wrap">
          <div class="docs-list-title">
            Для поступления на программу переподготовки <br />
            необходимо предоставить следующие документы:
          </div>
          <ul>
            <li>Заявление на имя руководителя РШУ</li>
            <li>
              Копия диплома о высшем или среднем <br />
              профессиональном образовании с выпиской оценок
            </li>
            <li>Фотографии 3*4 – 3 штуки</li>
            <li>Копия паспорта с адресом регистрации</li>
            <li>Согласие на обработку персональных данных</li>
          </ul>
        </div>
      </div>
    </div>

    <section class="s-experts wow animate__animated animate__fadeInUp"  data-wow-duration="2s" data-wow-delay="0.5s"">

    <?php $expert1 = get_field('expert-1'); ?>
    <?php $expert2 = get_field('expert-2'); ?>
    <?php $expert3 = get_field('expert-3'); ?>

      <div class="container">
        <h2 class="def-title"><?php echo get_field('s-experts-title'); ?></h2>
      </div>
      <div class="experts-row">
        <div class="experts-item">
          <div class="experts-image">
            <img src="<?php echo $expert1['expert-img-1'];?>" alt="Землянский Дмитрий Юрьевич" />
          </div>
          <div class="experts-footer">
            <div class="experts-name"><?php echo $expert1['expert-surname-1'];?>
          <br><?php echo $expert1['expert-name-1'];?></div>
            <div class="experts-profi">
            <?php echo $expert1['expert-descr-1'];?>
            </div>
          </div>
        </div>
        <div class="experts-item">
          <div class="experts-image">
            <img
              src="<?php echo $expert2['expert-img-2'];?>"
              alt="Покровский Никита Евгеньевич"
            />
          </div>
          <div class="experts-footer">
            <div class="experts-name"><?php echo $expert2['expert-surname-2'];?><br><?php echo $expert2['expert-name-2'];?></div>
            <div class="experts-profi">
            <?php echo $expert2['expert-descr-2'];?>
            </div>
          </div>
        </div>
        <div class="experts-item">
          <div class="experts-image">
            <img src="<?php echo $expert3['expert-img-3'];?>" alt="Согомонов Александр Юрьевич" />
          </div>
          <div class="experts-footer">
            <div class="experts-name"><?php echo $expert3['expert-surname-3'];?><br><?php echo $expert3['expert-name-3'];?></div>
            <div class="experts-profi">
            <?php echo $expert3['expert-descr-3'];?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s-news wow animate__animated animate__fadeInUp" data-wow-duration="2s" data-wow-delay="0.5s">
      <div class="container">
        <div class="def-title">Новости</div>
     
        <div class="news-row">
        <?php 
          $wp_query = new WP_Query();
          $wp_query->query('posts_per_page=6' . '&paged='.$paged);
          while ($wp_query->have_posts()) : $wp_query->the_post();?>
            <article class="news-item">
            <div class="news-thumb">
              <?php the_post_thumbnail('large');?>
            </div>

            <div class="news-body">
              <div class="news-top-line">
                <div class="news-date"><?php echo get_the_date('j F Y')?></div>
              </div>
              <h3 class="news-title">
                <a href="<?php the_permalink();?>"
                  ><?php the_title(); ?></a
                >
              </h3>
              <div class="news-description">
              <?php echo wp_trim_words(get_the_content(), 15, '...'); ?>
              </div>
              <a href="<?php the_permalink();?>" class="news-readmore">Читать далее</a>
            </div>
          </article>
            
         <?php endwhile;
          wp_reset_postdata();
        ?>
 
          


        </div>
      </div>
    </section>

    <section class="s-form">
      <div class="container">
        <div class="form-row">
          <div class="form-wrap wow animate__animated animate__fadeInLeft"  data-wow-delay="0.5s">
            <h3 class="form-title">Задайте свой вопрос</h3>
            <?php echo do_shortcode('[contact-form-7 id="ff6d7a2" title="Контактная форма 1"]');?>
           
            <div class="form-agree">
              Нажимая кнопку, я даю свое согласие на обработку моих персональных
              данных
            </div>
          </div>
          <div class="form-image wow animate__animated animate__fadeInRight"  data-wow-delay="0.5s">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/form-image.png" alt="Задать вопрос" />
          </div>
        </div>
      </div>
    </section>

	</main>

<?php
get_footer();
