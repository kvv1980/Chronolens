  </main>

  <footer>
    <div class="content-width">
      <div class="content">
        <div class="left">
          <p><a href="mailto:<?php the_field('mail_footer', 'option') ?>"><?php the_field('mail_footer', 'option') ?></a></p>
          <ul class="rating">

            <?php if( have_rows('links_footer', 'option') ): ?>
              <?php while( have_rows('links_footer', 'option') ): the_row(); ?>

                <li>
                  <a href="<?php the_sub_field('link') ?>" target="_blank">
                    <img src="<?= get_sub_field('icon')['url'] ?>" alt="">
                  </a>
                </li>

              <?php endwhile; ?>
            <?php endif; ?>

          </ul>
          <ul class="soc">

            <?php if( have_rows('socials_footer', 'option') ): ?>
              <?php while( have_rows('socials_footer', 'option') ): the_row(); ?>

                <li>
                  <a href="<?php the_sub_field('link_soc') ?>" target="_blank">
                    <i class="<?php the_sub_field('icon_soc') ?>"></i>
                  </a>
                </li>

              <?php endwhile; ?>
            <?php endif; ?>

          </ul>
        </div>
        <div class="logo-wrap">
          <a href="<?php echo get_home_url(); ?>">
            <img src="<?= get_field('logo_footer', 'option')['url'] ?>" alt="">
            <img src="<?= get_field('logo_mob_footer', 'option')['url'] ?>" alt="" class="logo-mob">
          </a>
        </div>
        <div class="right">

          <?php if( have_rows('company_info', 'option') ): ?>
            <?php while( have_rows('company_info', 'option') ): the_row(); ?>

              <p><?php the_sub_field('information') ?></p>

            <?php endwhile; ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>