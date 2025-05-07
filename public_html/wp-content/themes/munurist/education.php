<?php
/**
 * Template name: Дополнительное профессиональное обучение
 */

get_header();
?>

<div class="s-breadcrumbs">
      <div class="container">
		<ul><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false)?></ul>
      </div>
    </div>

    <section class="s-education">

<?php $education1 = get_field('education-1'); ?>
<?php $education2 = get_field('education-2'); ?>

    <div class="container">
      <div class="def-title"><?php echo get_field('s-education-title'); ?></div>
      <div class="education-row">
        <div class="education-item">
          <div class="education-thumb">
            <img src="<?php echo $education1['education-image-1'];?>" alt="Миниатюра" />
          </div>

          <div class="education-body">
            <h3 class="education-title">
              <a href="<?php echo $education1['education-btn-link-1'];?>"
                ><?php echo $education1['education-title-1'];?></a
              >
            </h3>
          
            <a href="<?php echo $education1['education-btn-link-1'];?>" class="education-readmore"><?php echo $education1['education-btn-text-1'];?></a>
          </div>
        </div>

        <div class="education-item">
          <div class="education-thumb">
            <img src="<?php echo $education2['education-image-2'];?>" alt="Миниатюра" />
          </div>

          <div class="education-body">
            <h3 class="education-title">
              <a href="<?php echo $education2['education-btn-link-2'];?>"
                ><?php echo $education2['education-title-2'];?></a
              >
            </h3>
            
            <a href="<?php echo $education2['education-btn-link-2'];?>" class="education-readmore"><?php echo $education2['education-btn-text-2'];?></a>
          </div>
        </div>

        
      </div>
    </div>
  </section>

    <?php
get_footer();