<?php if ( have_rows('sponsors', 'options') ) : ?>
  <div class="container home-vertical-spacing">
    <div class="row">
      <div class="col-sm-12 text-center">
    		<h2><?php the_field('sponsors_title', 'options'); ?></h2>
    	</div>

      <div class="row row-centered">
        <?php while ( have_rows('sponsors', 'options') ) : the_row(); ?>

          <?php if( get_row_layout() === 'heading' ) : ?>
            <div class="col-sm-12 col-centered">
              <h3 class="heading-underlined clearfix"><?php the_sub_field('text'); ?></h3>
            </div>
          <?php endif; ?>

          <?php if( get_row_layout() === 'sponsor' ) : ?>
            <div class="col-sm-3 col-centered">
              <?php $image = get_sub_field('logo'); ?>
              <?php if ( get_sub_field('link') ) : ?>
                <a href="<?php get_sub_field('link'); ?>">
                  <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>" />
                </a>
              <?php else : ?>
                <img class="img-responsive" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['title']; ?>" />
              <?php endif; ?>
            </div>
          <?php endif; ?>

        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
