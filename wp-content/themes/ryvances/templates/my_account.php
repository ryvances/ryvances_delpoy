<?php

/**
 * Template Name: My Account
 *
 * @author ryan
 */

get_header();
?>
<?php get_template_part('template-customs/rank_math_the_breadcrumbs'); ?>

<main>
  <section class="bg-bg-primary">
    <div class="container px-4 mx-auto h-full">
      <?php the_content(); ?>
    </div>
  </section>
</main>

<?php get_footer(); ?>