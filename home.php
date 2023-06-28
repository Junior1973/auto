<?php
/*
Template Name: home
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

<?php get_header(); ?>

  <section class="services">
    <div class="container">
      <h2 class="title">НАШИ УСЛУГИ</h2>
      <div class="services__inner">
        <div class="services__content">
         
          <?php the_field('service01');?>

          <div class="services__content-box">
             <div class="services__content-textbox">
             </div>
            <a class="button button--decor" href="#">КОНСУЛЬТАЦИЯ ЭКСПЕРТА</a>
          </div>
        </div>
        <?php the_field('service02');?>
      </div>
    </div>
  </section>


  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">
        <img data-wow-delay="2s" class="benefits__images wow animate__fadeInUp" src="<?php the_field( 'image_on_homes'); ?>" alt="car">
        <div class="benefits__content">
          <h2 class="title benefits__title">ПОЧЕМУ МЫ?</h2>

          <?php the_field('service03');?>

        </div>
      </div>
    </div>
  </section>


  <section class="carousel">
    <div class="container">
      <h2 class="title">
        ПРИГНАННЫЕ НАМИ АВТО
      </h2>
      <div class="carousel__inner">
        <?php
            global $post;
            $myposts = get_posts([ 
              'numberposts' => -1,
             // 'offset'      => 2,
             // 'category'    => 0
            ]);
            if( $myposts ){
            foreach( $myposts as $post ){
            setup_postdata( $post );
        ?>
                <!-- Вывод постов, функции цикла: the_title() и т.д. -->
            <div class="carousel__item">
              <div class="carousel__item-box">
                <?php the_post_thumbnail(array(380, 250), array('class' => 'carousel__item-img',)); ?>
                <h4 class="carousel__item-title"><?php the_title();?></h4>
                <p class="carousel__item-text"><?php the_content(); ?></p>
              </div>
            </div>
        <?php } } wp_reset_postdata(); ?>
      </div>
    </div>
  </section>



  <section class="contacts">
    <div class="container">
      <div class="contacts__inner">
        <div class="contacts__info">
          <h2 class="title">
            КОНТАКТЫ
          </h2>
          <ul class="contacts__list">
            <li class="contacts__item">
              <p class="contacts__item-title">Адрес</p>
              <p class="contacts__item-text">
              <?php the_field('address'); ?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Время работы</p>
              <p class="contacts__item-text">
              <?php the_field('schedule'); ?>
              </p>
            </li>
            <li class="contacts__item">
              <p class="contacts__item-title">Телефон</p>
              <p class="contacts__item-text">
              <a href="tel:<?php the_field('phone-number'); ?>"><?php the_field('phone'); ?></a>
              </p>
            </li>
          </ul>
        </div>
        <form class="contacts__form">
          <h2 class="title contacts__title">Оставить заявку</h2>
          <?php echo do_shortcode ('[contact-form-7 id="32" title="Контактная форма"]');?>
        </form>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
