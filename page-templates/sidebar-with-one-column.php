<?php
/*
Template Name: Sidebar with one column
*/
get_header(); ?>


<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div class="container">
        <div class="row">

          <div class="col-md-2 text-section">
            <?php get_template_part('template-parts/sidebar-menu'); ?>
          </div>

          <div class="col-md-10 text-section">
            <?php if (get_field('sub_heading')) : ?>
              <h2 class="heading-two"><?php the_field('sub_heading') ?></h2>
              <div class="gradline"></div>
            <?php endif; ?>  
            <p class="body-text"><?php the_field('body_text') ?></p>
          </div>

        </div>

        <?php get_template_part('template-parts/downloads'); ?>
      </div>

</section>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
