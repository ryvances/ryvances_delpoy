<?php get_header(); ?>
<?php get_template_part('template-customs/rank_math_the_breadcrumbs'); ?>

<?php
// $term = get_queried_object();
// if ($term->term_id == 3) {
//     get_template_part('template-parts/archive', 'service');
// } else if ($term->term_id == 4) {
//     get_template_part('template-parts/archive', 'project');
// } else if ($term->term_id == 5 || $term->term_id == 6 || $term->term_id == 7 || $term->term_id == 8 || $term->term_id == 9) {
//     get_template_part('template-parts/archive', 'project-children');
// } else {
//     get_template_part('template-parts/archive', 'post');
// }
?>
<main>
  <section class="bg-bg-primary">
    <div class="container px-4 mx-auto h-full">
      <div class="flex justify-center items-center w-full h-full min-h-[1000px]">
        <p class="text-black">Archive Blog</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>