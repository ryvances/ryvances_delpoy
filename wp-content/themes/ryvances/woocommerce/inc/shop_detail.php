<?php
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product_summary', 'hozi_woocommerce_output_related_products', 20);

// custom related products with swiper
function hozi_woocommerce_output_related_products()
{
  global $product;

  if (!$product) {
    return;
  }

  // Get related products using WooCommerce function (similar to default)
  $related_products_ids = wc_get_related_products($product->get_id(), 8);
  
  if (empty($related_products_ids)) {
    return;
  }

  // Convert IDs to product objects and filter visible products
  $related_products = array_filter(array_map('wc_get_product', $related_products_ids), 'wc_products_array_filter_visible');

  if (empty($related_products)) {
    return;
  }

  ob_start();
?>
  <section class="related-products-swiper my-8">
    <div class="container mx-auto px-4">
      <h2 class="text-2xl font-bold mb-6 text-center"><?php _e('Related Products', 'woocommerce'); ?></h2>
      
      <!-- Swiper -->
      <div class="swiper related-products-slider">
        <div class="swiper-wrapper">
          <?php foreach ($related_products as $related_product) : ?>
            <div class="swiper-slide">
              <?php
              $post_object = get_post($related_product->get_id());
              setup_postdata($GLOBALS['post'] = $post_object);
              
              // Use WooCommerce template to render product
              wc_get_template_part('content', 'product');
              ?>
            </div>
          <?php endforeach; ?>
        </div>
        
        <!-- Navigation buttons -->
        <div class="swiper-button-next related-products-next"></div>
        <div class="swiper-button-prev related-products-prev"></div>
        
        <!-- Pagination -->
        <div class="swiper-pagination related-products-pagination mt-6"></div>
      </div>
    </div>
  </section>

  <style>
    .related-products-swiper {
      position: relative;
    }
    
    .related-products-slider {
      width: 100%;
      padding-bottom: 40px;
    }
    
    .related-products-slider .swiper-slide {
      height: auto;
      display: flex;
    }
    
    /* Ensure product cards in swiper have consistent height */
    .related-products-slider .swiper-slide > div {
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
    }
    
    .related-products-next,
    .related-products-prev {
      background: rgba(0, 0, 0, 0.8);
      color: white;
      width: 42px;
      height: 42px;
      border-radius: 50%;
      top: 50%;
      transform: translateY(-50%);
    }
    
    .related-products-next:after,
    .related-products-prev:after {
      font-size: 16px;
      font-weight: bold;
    }
    
    .related-products-next:hover,
    .related-products-prev:hover {
      background: rgba(0, 0, 0, 1);
    }
    
    .related-products-pagination .swiper-pagination-bullet {
      background: #ccc;
      opacity: 1;
    }
    
    .related-products-pagination .swiper-pagination-bullet-active {
      background: #007cba;
    }
    
    @media (max-width: 640px) {
      .related-products-next,
      .related-products-prev {
        display: none;
      }
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Initialize Swiper for related products
      const relatedProductsSwiper = new Swiper('.related-products-slider', {
        loop: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 24
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 24
          },
          1280: {
            slidesPerView: 4,
            spaceBetween: 30
          }
        },
        pagination: {
          el: '.related-products-pagination',
          clickable: true,
          dynamicBullets: true
        },
        navigation: {
          nextEl: '.related-products-next',
          prevEl: '.related-products-prev',
        },
        // Enable grab cursor
        grabCursor: true,
        // Auto height for consistent card heights
        autoHeight: false,
        // Lazy loading for better performance
        lazy: {
          loadPrevNext: true,
        },
        // Accessibility
        a11y: {
          prevSlideMessage: 'Previous related product',
          nextSlideMessage: 'Next related product',
        }
      });
    });
  </script>
  
<?php
  // Reset global product
  wp_reset_postdata();
  echo ob_get_clean();
}
?>