<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php the_post(); ?>

<?php if ( get_field( 'logo', 'options' ) || get_the_content( get_the_ID() ) ) : ?>
  <header class="parallax-window pb-3" data-parallax="scroll" data-image-src="<?php the_post_thumbnail_url( get_the_ID() ); ?>">
    <div class="container background">
      <div class="row justify-content-center">
        <?php if ( get_field( 'logo', 'options' ) ) : ?>
          <div class="col-10 text-center logo my-3">
            <img src="<?php the_field( 'logo', 'options' ); ?>" class="img-fluid" alt="<?php echo get_bloginfo( 'name' ); ?>">
          </div>
        <?php endif; ?>
        <div class="col-md-10 col content my-3 text-center">
          <?php the_content( get_the_ID() ); ?>
        </div>
      </div>
    </div>
    <?php if ( have_rows( 'buttons' ) ) : ?>
      <div class="container mt-3">
        <div class="row justify-content-center">
          <nav class="nav col">
            <?php while ( have_rows( 'buttons' ) ) : the_row(); ?>
              <a class="nav-link flex-fill btn btn-primary mx-3 mb-3 mb-lg-0" href="<?php the_sub_field( 'url' ); ?>"><?php the_sub_field( 'text' ); ?></a>
            <?php endwhile; ?>
          </nav>
        </div>
      </div>
    <?php endif; ?>
  </header>
<?php endif; ?>

<?php $posts = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1, ) ); ?>
<?php if ( get_field( 'vv_header_text', 'options' ) || get_field( 'vv_iframe', 'options' ) || $posts->have_posts() ) : ?>
  <main class="pb-3 pt-5">
    <?php if ( get_field( 'vv_header_text', 'options' ) || get_field( 'vv_iframe', 'options' ) ) : ?>
      <div class="container p-5 mb-5">
        <div class="row">
          <div class="col text-center">
            <a id="contact"></a>
            <?php if ( get_field( 'vv_header_text', 'options' ) ) : ?>
              <h2><?php the_field( 'vv_header_text', 'options' ); ?></h2>
            <?php endif; ?>
            <?php if ( get_field( 'vv_iframe', 'options' ) ) : ?>
              <div class="vv">
                <?php the_field( 'vv_iframe', 'options' ); ?>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
    <?php if ( $posts->have_posts() ) :  ?>
      <div class="container p-5">
        <div class="row">
          <div class="col">
            <a id="media"></a>
            <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>
              <article class="mb-3 pb-3">
                <h2><a target="_blank" href="<?php the_field( 'link' ); ?>"><?php the_title(); ?></a></h2>
                <div class="meta"><?php the_date( 'F j, Y' ); ?></div>
                <?php if ( get_the_excerpt() ) : ?>
                  <div class="excerpt">
                    <?php the_excerpt(); ?> <a target="_blank" href="<?php the_field( 'link' ); ?>">READ MORE</a>
                  </div>
                <?php endif; ?>
              </article>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </main>
<?php endif; ?>

<?php get_footer(); ?>