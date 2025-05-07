<?php
/**
 * Template name: Руководство
 */

get_header();
?>

<div class="s-breadcrumbs">
      <div class="container">
		<ul><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false)?></ul>
      </div>
    </div>

<section class="s-experts">

    <?php $management1 = get_field('management-1'); ?>
    <?php $management2 = get_field('management-2'); ?>
    <?php $management3 = get_field('management-3'); ?>

      <div class="container">
        <h2 class="def-title"><?php echo get_field('s-management-title'); ?></h2>
      </div>
      <div class="experts-row">
        <div class="experts-item">
          <div class="experts-image">
            <img src="<?php echo $management1['management-img-1'];?>" alt="Землянский Дмитрий Юрьевич" />
          </div>
          <div class="experts-footer">
            <div class="experts-name"><?php echo $management1['management-surname-1'];?>
          <br><?php echo $management1['management-name-1'];?></div>
            <div class="experts-profi">
            <?php echo $management1['management-descr-1'];?>
            </div>
          </div>
        </div>
        <div class="experts-item">
          <div class="experts-image">
            <img src="<?php echo $management2['management-img-2'];?>" alt="Землянский Дмитрий Юрьевич" />
          </div>
          <div class="experts-footer">
            <div class="experts-name"><?php echo $management2['management-surname-2'];?>
          <br><?php echo $management2['management-name-2'];?></div>
            <div class="experts-profi">
            <?php echo $management2['management-descr-2'];?>
            </div>
          </div>
        </div>
        <div class="experts-item">
          <div class="experts-image">
            <img src="<?php echo $management3['management-img-3'];?>" alt="Землянский Дмитрий Юрьевич" />
          </div>
          <div class="experts-footer">
            <div class="experts-name"><?php echo $management3['management-surname-3'];?>
          <br><?php echo $management3['management-name-3'];?></div>
            <div class="experts-profi">
            <?php echo $management3['management-descr-3'];?>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php
get_footer();