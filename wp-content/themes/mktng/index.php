<?php get_header(); ?>

<main class="pb-3 pt-5">
  <?php if ( have_posts() ) :  ?>
      <div class="container p-5">
        <div class="row">
          <div class="col">
            <a id="media"></a>
            <?php while ( have_posts() ) : the_post(); ?>
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

<?php get_footer(); ?>