<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <title>Ryvances</title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header" class="fixed top-0 left-0 right-0 z-50 h-24 transition-all duration-200">
    <section class="container px-4 mx-auto h-full flex justify-between items-center">
      <div class="h-full w-full flex justify-between items-center">
        <!-- logo -->
        <a href="/" title="logo Ryvances" class="">
          <span class="text-3xl font-bold bg-gradient-to-r from-[#7900ff] to-[#381ee5] bg-clip-text text-transparent">HOZI</span>
          <span class="text-3xl font-bold text-gray-600">Web</span>
          <!-- <img src="<?php echo get_template_directory_uri(); ?>/public/logo.png" alt="logo Ryvances" class="w-10 h-10"> -->
        </a>

        <!-- menu -->
        <?php get_template_part('template-customs/wp_nav_menu'); ?>

        <!-- button phone number contact -->
        <!-- <?php echo do_shortcode('[gtranslate]'); ?> -->
        <?php get_template_part('template-components/button-phone-number-contact'); ?>
        
        <!-- <a href="<?php echo wc_get_cart_url(); ?>" class="relative">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
          </svg>
          <?php if(WC()->cart->get_cart_contents_count() > 0): ?>
            <span class="absolute -top-2 -right-2 bg-gradient-to-r from-[#7900ff] to-[#381ee5] text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">
              <?php echo WC()->cart->get_cart_contents_count(); ?>
            </span>
          <?php endif; ?>
        </a> -->

        <!-- menu mobile -->
        <div class="relative inline-block lg:hidden">
          <button id="menu-mobile-button" class="lg:hidden bg-gradient-to-r from-[#7900ff] to-[#381ee5] text-white w-11 h-11 rounded-full p-1 relative z-[100]">
            <div class="relative w-full h-full">
              <svg id="menu-icon" class="absolute inset-0 transition-transform duration-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
              </svg>
              <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 transition-transform duration-300 rotate-90 opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </div>
          </button>
          <!-- bg menu mobile -->
          <span id="bg-menu-mobile" class="absolute top-0 left-0 w-11 h-11 bg-gradient-to-r from-[#7900ff] to-[#381ee5] z-[98] rounded-full transition-all duration-300"></span>
        </div>
      </div>
    </section>
  </header>

  <!-- header scroll fixed -->
  <script>
    document.addEventListener('scroll', function() {
      const header = document.getElementById('header');
      const siteScroll = window.scrollY;
      if (siteScroll <= 50) {
        header.classList.remove('h-20');
        header.classList.add('h-24');
        header.classList.remove('bg-white');
        header.classList.add('bg-transparent');
      } else {
        header.classList.remove('h-24');
        header.classList.add('h-20');
        header.classList.remove('bg-transparent');
        header.classList.add('bg-white');
      }
    });
  </script>

  <!-- menu mobile fixed -->
  <script>
    const menuMobileButton = document.getElementById('menu-mobile-button');
    const menuMobile = document.getElementById('id-nav-container');
    const menuIcon = document.getElementById('menu-icon');
    const closeIcon = document.getElementById('close-icon');
    const html = document.querySelector('html');

    menuMobileButton.addEventListener('click', function() {
      const bgMenuMobile = document.getElementById('bg-menu-mobile');

      if (menuMobile.classList.contains('menu-mobile-active')) {
        menuMobile.classList.remove('menu-mobile-active');
        bgMenuMobile.style.transform = 'scale(1)';
        menuIcon.classList.remove('-rotate-90', 'opacity-0');
        menuIcon.classList.add('rotate-0', 'opacity-100');
        closeIcon.classList.remove('-rotate-90', 'opacity-100');
        closeIcon.classList.add('rotate-90', 'opacity-0');
        html.style.overflow = 'auto';
      } else {
        menuMobile.classList.add('menu-mobile-active');
        bgMenuMobile.style.transform = 'scale(100)';
        menuIcon.classList.remove('rotate-0', 'opacity-100');
        menuIcon.classList.add('-rotate-90', 'opacity-0');
        closeIcon.classList.remove('rotate-90', 'opacity-0');
        closeIcon.classList.add('-rotate-90', 'opacity-100');
        html.style.overflow = 'hidden';
      }
    });

    window.addEventListener('resize', function() {
      if (window.innerWidth > 1024) {
        menuMobile.classList.remove('menu-mobile-active');
        const bgMenuMobile = document.getElementById('bg-menu-mobile');
        bgMenuMobile.style.transform = 'scale(1)';
        menuIcon.classList.remove('-rotate-90', 'opacity-0');
        menuIcon.classList.add('rotate-0', 'opacity-100');
        closeIcon.classList.remove('-rotate-90', 'opacity-100');
        closeIcon.classList.add('rotate-90', 'opacity-0');
        html.style.overflow = 'auto';
      }
    });
  </script>

  <!-- menu item has children mobile -->
  <script>
    if (window.innerWidth <= 1024) {
      const menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');
      let currentOpenItem = null;

      menuItemHasChildren.forEach(function(item) {
        const link = item.querySelector('a');

        link.addEventListener('click', function(e) {
          const rect = link.getBoundingClientRect();
          const isClickOnArrow = (e.clientX > rect.right - 50);

          if (isClickOnArrow) {
            e.preventDefault();

            if (currentOpenItem && currentOpenItem !== item) {
              currentOpenItem.classList.remove('active');
              const prevSubMenu = currentOpenItem.querySelector('.sub-menu');
              if (prevSubMenu) {
                prevSubMenu.classList.remove('active');
                prevSubMenu.style.maxHeight = '0';
              }
            }

            item.classList.toggle('active');

            const subMenu = item.querySelector('.sub-menu');
            if (subMenu) {
              subMenu.classList.toggle('active');

              if (subMenu.classList.contains('active')) {
                currentOpenItem = item;

                subMenu.style.transition = 'none';
                subMenu.style.maxHeight = 'none';

                const height = subMenu.scrollHeight;

                subMenu.style.maxHeight = '0';

                subMenu.offsetHeight;

                subMenu.style.transition = '.4s ease-in-out all';
                subMenu.style.maxHeight = height + 'px';
              } else {
                currentOpenItem = null;
                subMenu.style.maxHeight = '0';
              }
            }
          }
        });
      });
    }
  </script>