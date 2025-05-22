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
  <section class="bg-primary h-[785px] md:h-[1000px] relative">
    <div class="relative z-20 container px-4 mx-auto">
      <div class="pt-44 flex flex-col items-center justify-center h-full gap-y-8">
        <h1 class="text-tx-primary font-bold text-4xl uppercase tracking-widest">THIẾT KẾ WEBSITE WORDPRESS</h1>
        <h2 class="text-tx-primary font-semibold text-[28px]">Phát triển doanh nghiệp của bạn với....</h2>
        <h3 class="text-transparent font-extrabold bg-clip-text bg-gradient-to-r from-[#F53CE6] to-[#7220CF] text-7xl leading-tight">HOZIDesign VIỆT NAM</h3>
        <p class="text-tx-primary text-xl text-center">Mang đến những thiết kế <b>độc đáo</b> & <b>chuyên nghiệp</b> giúp doanh nghiệp của bạn <b>nổi bật</b> trong thế giới số.</p>
        <div class="flex justify-center items-center w-full gap-x-10 mt-10">
          <?php get_template_part('template-components/button-position-aware-hover', null, array('text' => 'THIẾT KẾ WEBSITE')); ?>
          <?php get_template_part('template-components/button-position-aware-hover', null, array('text' => 'LIÊN HỆ TƯ VẤN')); ?>
        </div>
      </div>
    </div>
    <!-- <div id="bg-wrap" class="w-40 h-40 rounded-full">
      <svg viewBox="0 0 100 100" preserveAspectRatio="xMidYMid slice">
        <defs>
          <radialGradient id="Gradient1" cx="50%" cy="50%" fx="0.441602%" fy="50%" r=".5">
            <animate attributeName="fx" dur="34s" values="0%;3%;0%" repeatCount="indefinite"></animate>
            <stop offset="0%" stop-color="rgba(255, 0, 255, 1)"></stop>
            <stop offset="100%" stop-color="rgba(255, 0, 255, 0)"></stop>
          </radialGradient>
          <radialGradient id="Gradient2" cx="50%" cy="50%" fx="2.68147%" fy="50%" r=".5">
            <animate attributeName="fx" dur="23.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
            <stop offset="0%" stop-color="rgba(255, 255, 0, 1)"></stop>
            <stop offset="100%" stop-color="rgba(255, 255, 0, 0)"></stop>
          </radialGradient>
          <radialGradient id="Gradient3" cx="50%" cy="50%" fx="0.836536%" fy="50%" r=".5">
            <animate attributeName="fx" dur="21.5s" values="0%;3%;0%" repeatCount="indefinite"></animate>
            <stop offset="0%" stop-color="rgba(0, 255, 255, 1)"></stop>
            <stop offset="100%" stop-color="rgba(0, 255, 255, 0)"></stop>
          </radialGradient>
          <radialGradient id="Gradient4" cx="50%" cy="50%" fx="4.56417%" fy="50%" r=".5">
            <animate attributeName="fx" dur="23s" values="0%;5%;0%" repeatCount="indefinite"></animate>
            <stop offset="0%" stop-color="rgba(0, 255, 0, 1)"></stop>
            <stop offset="100%" stop-color="rgba(0, 255, 0, 0)"></stop>
          </radialGradient>
          <radialGradient id="Gradient5" cx="50%" cy="50%" fx="2.65405%" fy="50%" r=".5">
            <animate attributeName="fx" dur="24.5s" values="0%;5%;0%" repeatCount="indefinite"></animate>
            <stop offset="0%" stop-color="rgba(0,0,255, 1)"></stop>
            <stop offset="100%" stop-color="rgba(0,0,255, 0)"></stop>
          </radialGradient>
          <radialGradient id="Gradient6" cx="50%" cy="50%" fx="0.981338%" fy="50%" r=".5">
            <animate attributeName="fx" dur="25.5s" values="0%;5%;0%" repeatCount="indefinite"></animate>
            <stop offset="0%" stop-color="rgba(255,0,0, 1)"></stop>
            <stop offset="100%" stop-color="rgba(255,0,0, 0)"></stop>
          </radialGradient>
        </defs>
        <rect x="13.744%" y="1.18473%" width="100%" height="100%" fill="url(#Gradient1)" transform="rotate(334.41 50 50)">
          <animate attributeName="x" dur="20s" values="25%;0%;25%" repeatCount="indefinite"></animate>
          <animate attributeName="y" dur="21s" values="0%;25%;0%" repeatCount="indefinite"></animate>
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="7s" repeatCount="indefinite"></animateTransform>
        </rect>
        <rect x="-2.17916%" y="35.4267%" width="100%" height="100%" fill="url(#Gradient2)" transform="rotate(255.072 50 50)">
          <animate attributeName="x" dur="23s" values="-25%;0%;-25%" repeatCount="indefinite"></animate>
          <animate attributeName="y" dur="24s" values="0%;50%;0%" repeatCount="indefinite"></animate>
          <animateTransform attributeName="transform" type="rotate" from="0 50 50" to="360 50 50" dur="12s" repeatCount="indefinite"></animateTransform>
        </rect>
        <rect x="9.00483%" y="14.5733%" width="100%" height="100%" fill="url(#Gradient3)" transform="rotate(139.903 50 50)">
          <animate attributeName="x" dur="25s" values="0%;25%;0%" repeatCount="indefinite"></animate>
          <animate attributeName="y" dur="12s" values="0%;25%;0%" repeatCount="indefinite"></animate>
          <animateTransform attributeName="transform" type="rotate" from="360 50 50" to="0 50 50" dur="9s" repeatCount="indefinite"></animateTransform>
        </rect>
      </svg>
    </div> -->
    <div class="slider-thumb z-10 absolute top-0 left-0 w-full h-full">
      <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
      </div>
      <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
      </div>
      <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
      </div>
      <div class="glowing">
        <span style="--i:1;"></span>
        <span style="--i:2;"></span>
        <span style="--i:3;"></span>
      </div>
    </div>
    <svg class="w-full fill-white absolute z-20 bottom-0" viewBox="0 0 1920 222" xmlns="http://www.w3.org/2000/svg">
      <path d="m1920.5 91.325c-878.73-165.59-1537.7-68.638-1920.5 1e-4v130.67h1920.5v-130.67z" fill="#fff"></path>
    </svg>
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

<style>
  .slider-thumb {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    min-height: 100vh;
    overflow: hidden;
  }

  .glowing {
    position: relative;
    min-width: 700px;
    height: 550px;
    margin: -150px;
    transform-origin: right;
    animation: colorChange 5s linear infinite;
  }

  .glowing:nth-child(even) {
    transform-origin: left;
  }

  @keyframes colorChange {
    0% {
      filter: hue-rotate(0deg);
      transform: rotate(0deg);
    }

    100% {
      filter: hue-rotate(360deg);
      transform: rotate(360deg);
    }
  }

  .glowing span {
    position: absolute;
    top: calc(80px * var(--i));
    left: calc(80px * var(--i));
    bottom: calc(80px * var(--i));
    right: calc(80px * var(--i));
  }

  .glowing span::before {
    content: "";
    position: absolute;
    top: 50%;
    left: -8px;
    width: 15px;
    height: 15px;
    background: #f00;
    border-radius: 50%;
  }

  .glowing span:nth-child(3n + 1)::before {
    background: rgba(134, 255, 0, 1);
    box-shadow: 0 0 20px rgba(134, 255, 0, 1),
      0 0 40px rgba(134, 255, 0, 1),
      0 0 60px rgba(134, 255, 0, 1),
      0 0 80px rgba(134, 255, 0, 1),
      0 0 0 8px rgba(134, 255, 0, .1);
  }

  .glowing span:nth-child(3n + 2)::before {
    background: rgba(255, 214, 0, 1);
    box-shadow: 0 0 20px rgba(255, 214, 0, 1),
      0 0 40px rgba(255, 214, 0, 1),
      0 0 60px rgba(255, 214, 0, 1),
      0 0 80px rgba(255, 214, 0, 1),
      0 0 0 8px rgba(255, 214, 0, .1);
  }

  .glowing span:nth-child(3n + 3)::before {
    background: rgba(0, 226, 255, 1);
    box-shadow: 0 0 20px rgba(0, 226, 255, 1),
      0 0 40px rgba(0, 226, 255, 1),
      0 0 60px rgba(0, 226, 255, 1),
      0 0 80px rgba(0, 226, 255, 1),
      0 0 0 8px rgba(0, 226, 255, .1);
  }

  .glowing span:nth-child(3n + 1) {
    animation: animate 10s alternate infinite;
  }

  .glowing span:nth-child(3n + 2) {
    animation: animate-reverse 3s alternate infinite;
  }

  .glowing span:nth-child(3n + 3) {
    animation: animate 8s alternate infinite;
  }

  @keyframes animate {
    0% {
      transform: rotate(180deg);
    }

    50% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes animate-reverse {
    0% {
      transform: rotate(360deg);
    }

    50% {
      transform: rotate(180deg);
    }

    100% {
      transform: rotate(0deg);
    }
  }
</style>