<?php
/**
 * Template name: Репетиторский центр
 */

get_header();
?>

<div class="s-breadcrumbs">
      <div class="container">
		<ul><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false)?></ul>
      </div>
    </div>

<section class="s-teachers">

    <?php $teacher1 = get_field('teacher-1'); ?>
    <?php $teacher2 = get_field('teacher-2'); ?>
  

      <div class="container">
        <h2 class="def-title"><?php echo get_field('s-teachers-title'); ?></h2>
      </div>
      <div class="teachers-row">
        <div class="teachers-item">
          <div class="teachers-image">
            <img src="<?php echo $teacher1['teacher-img-1'];?>" alt="Землянский Дмитрий Юрьевич" />
          </div>
          <div class="teachers-footer">
            <div class="teachers-name"><?php echo $teacher1['teacher-surname-1'];?>
          <br><?php echo $teacher1['teacher-name-1'];?></div>
            <div class="teachers-profi">
            <?php echo $teacher1['teacher-descr-1'];?>
            </div>
          </div>
        </div>
        <div class="teachers-item">
          <div class="teachers-image">
            <img src="<?php echo $teacher2['teacher-img-2'];?>" alt="Землянский Дмитрий Юрьевич" />
          </div>
          <div class="teachers-footer">
            <div class="teachers-name"><?php echo $teacher2['teacher-surname-2'];?>
          <br><?php echo $teacher2['teacher-name-2'];?></div>
            <div class="teachers-profi">
            <?php echo $teacher2['teacher-descr-2'];?>
            </div>
          </div>
</div>


      </div>
    </section>
    <div class="container">


      <div class="content-row">
        <div class="content-item">
        <section class="s-single">
        <p><?php echo get_field('bright-minds-content-1'); ?></p>
        </section>
        </div>
        <div class="content-item">
        <section class="s-single">
        <p><?php echo get_field('bright-minds-content-2'); ?></p>
        </div>
        </div>
      </div>

      <section class="s-single">
		    <p><?php echo get_field('bright-minds-content'); ?></p>
		  </section>
    </div>
    <?php
get_footer();