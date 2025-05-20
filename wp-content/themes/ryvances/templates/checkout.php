<?php

/**
 * Template Name: Checkout
 *
 * @author ryan
 */

get_header();
?>
<?php get_template_part('template-customs/rank_math_the_breadcrumbs'); ?>

<main>
  <section class="container px-4 mx-auto">
      <?php the_content(); ?>
  </section>
</main>

<?php get_footer(); ?>