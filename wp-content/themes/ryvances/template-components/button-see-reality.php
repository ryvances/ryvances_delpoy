<a href="<?php echo esc_url(get_the_permalink()); ?>" class="holographic-card flex flex-1 justify-center items-center bg-white border border-btn-primary text-btn-primary px-3 py-2 rounded text-[13px] hover:bg-btn-primary hover:text-white transition-all duration-500">
  <?php echo esc_html__('Xem thực tế', 'ryvances'); ?>
</a>
<style>
  .holographic-card {
    position: relative;
    overflow: hidden;
    transition: all 0.5s ease;
  }

  .holographic-card::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(0deg,
        transparent,
        transparent 30%,
        rgba(0, 255, 255, 0.3));
    transform: rotate(-45deg);
    transition: all 0.5s ease;
    opacity: 0;
  }

  .holographic-card:hover::before {
    opacity: 1;
    transform: rotate(-45deg) translateY(150%);
  }
</style>