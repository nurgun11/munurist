<?php
/**
 * Template name: Контакты
 */

get_header();
?>

	<main id="primary" class="site-main">

  <div class="s-breadcrumbs">
      <div class="container">
		<ul><?php bcn_display($return = false, $linked = true, $reverse = false, $force = false)?></ul>
      </div>
    </div>

    <div class="s-contacts">
      <div class="container">
        <div class="def-title">Контакты</div>
        <div class="contacts-row">
          <div class="contacts-item">
            <ul>
              <li>У Вас есть вопросы?</li>
              <li>У Вас есть предложение?</li>
              <li>Вы хотите получить консультацию?</li>
              <li>Вы хотите записаться на курсы?</li>
              <li>
                Пожалуйста, воспользуйтесь электронной<br />
                почтой или формой обратной связи.
              </li>
              <li>
                <a href="mailto: regmanager19@mail.ru">regmanager19@mail.ru</a>
              </li>
            </ul>
          </div>

          <div class="form-wrap">
            <h3 class="form-title">Задайте свой вопрос</h3>
            <?php echo do_shortcode('[contact-form-7 id="ff6d7a2" title="Контактная форма 1"]');?>
           
            <div class="form-agree">
              Нажимая кнопку, я даю свое согласие на обработку моих персональных
              данных
            </div>
          </div>
        </div>
      </div>
    </div>
  
    
    </section>

	</main>

<?php
get_footer();
