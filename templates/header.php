<header id="header">

  <section class="searchbar navbar navbar-default navbar-static-top">

    <div class="container">

      <?php get_search_form(); ?>

      <?php if(have_rows('social_icons', 'options')): ?>

        <ul class="socialicons nav navbar-nav navbar-right">

        <?php while(have_rows('social_icons', 'options')): the_row(); ?>

          <li><a href="<?php the_sub_field('url'); ?>" class="<?php the_sub_field('slug'); ?>-white" target="_blank"><?php the_sub_field('name'); ?></a></li>

        <?php endwhile; ?>

        </ul>

      <?php endif; ?>

      <div class="navbar-header">

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>

    </div>

  </section>

  <section class="headbar navbar navbar-default navbar-static-top" role="banner">

    <div class="collapse navbar-collapse">

      <div class="container">

        <?php $logo = '<a href="'. get_bloginfo('url') .'"><img src="'. get_template_directory_uri() .'/assets/img/bg/one-bride-guide-logo.png" alt="'. get_bloginfo('name') .'"></a>'; ?>

        <?php if(is_home()): ?>
          <h1 class="logo"><?php echo $logo; ?></h1>
        <?php else: ?>
          <strong class="logo"><?php echo $logo; ?></strong>
        <?php endif; ?>

        <p class="tagline"><?php echo get_bloginfo('description'); ?></p>

        <nav role="navigation">
          <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
            endif;
          ?>
        </nav>

      </div>

    </div>

  </section>

</header>

<section class="top-banner">

  <div class="container">
    <?php echo do_shortcode('[cm_ad_changer campaign_id=1]') ?>
  </div>

</section>