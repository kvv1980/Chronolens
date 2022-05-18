<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>

  <!-- Main style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  
</head>
<body <?php body_class() ?>>

  <header>
    <div class="top-line">
      <div class="content-width">
        <div class="logo-wrap">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?= get_field('logo_header', 'option')['url'] ?>" alt="">
          </a>
        </div>
        <nav class="top-menu">

          <?php wp_nav_menu( array(
           'theme_location'  => 'header',
           'container'       => '',
           'items_wrap'      => '<ul>%3$s</ul>'
          ) ); ?>

          <div class="open-menu">
            <a href="#">
              <span></span>
              <span></span>
              <span></span>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </header>

  <div class="menu-responsive" id="menu-responsive" style="display: none">
    <div class="menu-wrap">
      <div class="bg">
        <span></span>
      </div>


      <nav class="mob-menu">
        <div class="logo-wrap">
          <a href="<?php echo get_home_url(); ?>"><img src="<?= get_field('logo_header_mobile', 'option')['url'] ?>" alt=""></a>
        </div>

        <?php wp_nav_menu( array(
         'theme_location'  => 'header',
         'container'       => '',
         'items_wrap'      => '<ul>%3$s</ul>'
        ) ); ?>

      </nav>
      <div class="bottom-wrap">
        <div class="mail-wrap">
          <a href="mailto:<?php the_field('mail_footer', 'option') ?>"><?php the_field('mail_footer', 'option') ?></a>
        </div>
        <ul class="soc">

          <?php if( have_rows('socials_footer', 'option') ): ?>
            <?php while( have_rows('socials_footer', 'option') ): the_row(); ?>

              <li>
                <a href="<?php the_sub_field('link_soc') ?>">
                  <i class="<?php the_sub_field('icon_soc') ?>"></i>
                </a>
              </li>

            <?php endwhile; ?>
          <?php endif; ?>

        </ul>
      </div>
    </div>
  </div>

  <main>