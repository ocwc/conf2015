<a
  class="slider-meta"
  <?php if ( get_sub_field('link') ) : ?>
    href="<?php the_sub_field('link'); ?>"
  <?php endif; ?>
  >
  <h1 class="slider-title"><?php the_sub_field('title'); ?></h1>
  <span class="slider-description"><?php the_sub_field('description'); ?></span>
  <?php if ( get_sub_field('link') ) : ?>
    <span class="slider-link"><i class="ikon-right-dir"></i>read details</span>
  <?php endif; ?>
</a>
