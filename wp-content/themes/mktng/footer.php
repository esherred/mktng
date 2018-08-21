  <?php if ( have_rows( 'social_networks', 'options' ) || get_field( 'footer_logo', 'options' ) ) : ?>
    <footer class="pt-3 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php if (have_rows( 'social_networks', 'options' ) ) : ?>
              <nav class="nav social justify-content-center justify-content-md-start">
                <?php while ( have_rows( 'social_networks', 'options' ) ) : the_row(); ?>
                  <a target="_blank" href="<?php the_sub_field( 'url' ); ?>" class="mx-1 fa-stack <?php the_sub_field( 'network' ); ?>">
                    <i class="fas fa-circle fa-stack-2x"></i>
                    <i class="fab fa-<?php the_sub_field( 'network' ); ?> fa-stack-1x fa-inverse"></i>
                  </a>
                <?php endwhile; ?>
              </nav>
            <?php endif; ?>
          </div>
          <div class="col-md-4 logo text-center">
            <?php if ( get_field( 'footer_logo', 'options' ) ) : ?>
              <img src="<?php the_field( 'footer_logo', 'options' ); ?>" class="img-fluid" alt="<?php echo get_bloginfo( 'name' ); ?>">
            <?php endif; ?>
          </div>
          <div class="col-md-4 text-center text-lg-left"></div>
        </div>
      </div>
    </footer>
  <?php endif; ?>

  <?php wp_footer(); ?>
  </body>
</html>