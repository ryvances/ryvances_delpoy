<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Ryvances</title>
  <?php wp_head(); ?>
</head>

<body>
  <header id="header" class="fixed top-0 left-0 right-0 z-50 h-24 transition-all duration-200">
    <section class="container px-4 mx-auto h-full flex justify-between items-center">
      <div class="h-full w-full flex justify-between items-center">
        <!-- logo -->
        <a href="/" title="logo Ryvances" class="">
          <img src="<?php echo get_template_directory_uri(); ?>/public/logo.svg" alt="Ryvances" class="h-[45px] md:h-[53px] w-[150px] md:w-[173px]">
        </a>

        <!-- menu -->
        <?php get_template_part('template-customs/wp_nav_menu'); ?>

        <!-- contact -->
        <a href="tel:0393950385" class="py-1 lg:py-3 px-4 lg:px-8 ml-0 lg:ml-4 rounded-lg lg:bg-puramu-purple-gradient text-puramu-dark-purple lg:text-tx-primary font-semibold text-lg hidden lg:inline-flex items-center">
          <span class="hidden lg:inline h-6">039 395 0385</span>
        </a>

        <!-- menu mobile -->
        <div class="relative inline-block lg:hidden">
          <button id="menu-mobile-button" class="lg:hidden bg-gradient-to-r from-[#7900ff] to-[#381ee5] text-white w-10 h-10 rounded-full p-1 relative z-[100]">
            <div class="relative w-full h-full">
              <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
              </svg>
              <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" class="absolute inset-0 transition-transform duration-300 rotate-90 opacity-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
              </svg>
            </div>
          </button>
          <!-- bg menu mobile -->
          <span id="bg-menu-mobile" class="absolute top-0 left-0 w-full h-full bg-gradient-to-r from-[#7900ff] to-[#381ee5] z-[98] rounded-full transition-all duration-300"></span>
        </div>

      </div>
    </section>
  </header>
  <script>
    // header scroll
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

  <!-- menu mobile -->
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

    // Fix for responsive change
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

  <script>
    if (window.innerWidth <= 1024) {
      const menuItemHasChildren = document.querySelectorAll('.menu-item-has-children');

      menuItemHasChildren.forEach(function(item) {
        const link = item.querySelector('a');
        
        link.addEventListener('click', function(e) {
          const rect = link.getBoundingClientRect();
          const isClickOnArrow = (e.clientX > rect.right - 50);
          
          if (isClickOnArrow) {
            e.preventDefault();
            
            item.classList.toggle('active');
            
            const subMenu = item.querySelector('.sub-menu');
            if (subMenu) {
              subMenu.classList.toggle('active');
              
              if (subMenu.classList.contains('active')) {
                subMenu.style.transition = 'none';
                subMenu.style.maxHeight = 'none';
                
                const height = subMenu.scrollHeight;
                
                subMenu.style.maxHeight = '0';
                
                subMenu.offsetHeight;
                
                subMenu.style.transition = '.4s ease-in-out all';
                subMenu.style.maxHeight = height + 'px';
              } else {
                subMenu.style.maxHeight = '0';
              }
            }
          }
        });
      });
    }
  </script>