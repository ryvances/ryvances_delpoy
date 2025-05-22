<?php

/**
 * Template Name: Home
 *
 * @author ryan
 */

get_header();
?>
<!-- <?php get_template_part('template-customs/rank_math_the_breadcrumbs'); ?> -->

<main>
  <section class="bg-primary h-[785px] md:h-[1100px]">
    <div class="container px-4 mx-auto">
      <div class="pt-44 flex flex-col items-center justify-center h-full gap-y-8">
        <h1 class="text-tx-primary font-bold text-4xl uppercase tracking-widest">THIẾT KẾ WEBSITE WORDPRESS</h1>
        <h2 class="text-tx-primary font-semibold text-[28px]">Phát triển doanh nghiệp của bạn với....</h2>
        <h3 class="text-transparent font-extrabold bg-clip-text bg-gradient-to-r from-[#F53CE6] to-[#7220CF] text-7xl leading-tight">HOZIDesign VIỆT NAM</h3>
        <p class="text-tx-primary text-xl text-center">Mang đến những thiết kế <b>độc đáo</b> & <b>chuyên nghiệp</b> giúp doanh nghiệp của bạn <b>nổi bật</b> trong thế giới số.</p>
        <div class="flex justify-center items-center w-full gap-x-4">
          <?php get_template_part('template-components/button-position-aware-hover', null, array('text' => 'THIẾT KẾ WEBSITE')); ?>
          <?php get_template_part('template-components/button-position-aware-hover', null, array('text' => 'LIÊN HỆ TƯ VẤN')); ?>
        </div>
      </div>

    </div>
  </section>

  <section class="">
    <div class="container px-4 mx-auto h-full">
      <div class="flex justify-center items-center w-full h-full min-h-[500px]">
        <p class="text-black">Home 2</p>
      </div>
    </div>
  </section>
  <section class="bg-primary">
    <div class="container px-4 mx-auto h-full">
      <div class="flex justify-center items-center w-full h-full min-h-[500px]">
        <p class="text-black">Home</p>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>