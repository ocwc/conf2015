<?php if ( have_rows('home_gallery', 'options') ) : ?>
<div class="home-gallery-container">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center boffset-35">
    		<h2 class="u-text-white"><?php the_field('home_gallery_title', 'options'); ?></h2>
        <p class="text-center u-text-white"><?php the_field('home_gallery_description', 'options'); ?></p>
    	</div>
    </div>

    <div class="row home-gallery">
    <?php while ( have_rows('home_gallery', 'options') ) : the_row(); ?>
      <div class="home-gallery-image">
        <?php $image = get_sub_field('image'); ?>

        <a
          class="home-gallery-item"
          title="<?php the_sub_field('attribution'); ?>"
          href="<?php echo $image['sizes']['large']; ?>"
          >

          <img
            src="<?php echo $image['sizes']['home-small']; ?>"
            class="img-responsive"
            />
        </a>
      </div>
    <?php endwhile; ?>
    </div>
  </div>
</div>
<?php endif; ?>
