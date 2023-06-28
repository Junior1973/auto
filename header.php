

<?php wp_head(); ?>





</head>

<body>

  <header class="header">
    <div class="container">
      <div class="header__top">

        <?php the_custom_logo();?>

        <a class="phone" href="tel:<?php the_field('phone-number'); ?>"><?php the_field('phone'); ?></a>
      </div>
      <div class="header__content">
        <h1 data-wow-delay=".5s" class="header__title wow animate__fadeInLeft">
          <?php the_field('header');?>
        </h1>
        <h2 data-wow-delay="1s" class="header__subtitle wow animate__fadeInLeft">
        <?php the_field('subtitle');?>
        </h2>
        <p data-wow-delay="1.5s" class="header__text wow animate__fadeInLeft">
        <?php the_field('details');?>
        </p>
        <a class="button" href="#"><?php the_field('button_under_title');?></a>
        <div class="social header__social">
          <a class="social__link" href="<?php the_field('telegram');?>" target="_blank">
            <svg class="test" width="26" height="26">
              <use xlink:href="<?php bloginfo('template_url'); ?>./assets/images/icon/sprite.svg#instagram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('telegram');?>" target="_blank">
            <svg width="25" height="19">
              <use xlink:href="<?php bloginfo( 'template_url'); ?>./assets/images/icon/sprite.svg#telegram"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('telegram');?>" target="_blank">
            <svg width="26" height="26">
              <use xlink:href="<?php bloginfo( 'template_url'); ?>./assets/images/icon/sprite.svg#whatsapp"></use>
            </svg>
          </a>
          <a class="social__link" href="<?php the_field('telegram');?>" target="_blank">
            <svg width="14" height="25">
              <use xlink:href="<?php bloginfo( 'template_url'); ?>./assets/images/icon/sprite.svg#facebook"></use>
            </svg>
          </a>
        </div>
        <img data-wow-delay="2s" class="header__images wow animate__fadeInUpBig" src="<?php the_field('image_on_home'); ?>"
          alt="ford mustang">
      </div>
    </div>
  </header>

