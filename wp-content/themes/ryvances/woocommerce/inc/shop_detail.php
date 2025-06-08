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

  // Get related products
  $related_products = wc_get_related_products($product->get_id(), 8); // Get up to 8 related products

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
          <?php foreach ($related_products as $related_product_id) :
            $related_product = wc_get_product($related_product_id);
            if (!$related_product || !$related_product->is_visible()) continue;
            
            // Set up the global $product for template functions
            $GLOBALS['product'] = $related_product;
          ?>
            <div class="swiper-slide">
              <div class="product-card bg-white rounded-lg shadow-lg overflow-hidden h-full">
                <div class="product-image relative">
                  <a href="<?php echo esc_url($related_product->get_permalink()); ?>" class="block">
                    <?php echo $related_product->get_image('medium', array('class' => 'w-full h-48 object-cover')); ?>
                    <?php if ($related_product->is_on_sale()) : ?>
                      <span class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 text-xs rounded">
                        <?php _e('Sale!', 'woocommerce'); ?>
                      </span>
                    <?php endif; ?>
                  </a>
                </div>
                
                <div class="product-info p-4">
                  <h3 class="product-title text-lg font-semibold mb-2">
                    <a href="<?php echo esc_url($related_product->get_permalink()); ?>" class="text-gray-800 hover:text-blue-600 transition-colors">
                      <?php echo esc_html($related_product->get_name()); ?>
                    </a>
                  </h3>
                  
                  <div class="product-price mb-3">
                    <?php echo $related_product->get_price_html(); ?>
                  </div>
                  
                  <?php if ($related_product->get_rating_count()) : ?>
                    <div class="product-rating mb-3">
                      <?php echo wc_get_rating_html($related_product->get_average_rating()); ?>
                      <span class="text-sm text-gray-500 ml-1">
                        (<?php echo $related_product->get_rating_count(); ?>)
                      </span>
                    </div>
                  <?php endif; ?>
                  
                  <div class="product-actions">
                    <?php
                    woocommerce_template_loop_add_to_cart();
                    ?>
                  </div>
                </div>
              </div>
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
    
    .related-products-slider .product-card {
      display: flex;
      flex-direction: column;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .related-products-slider .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }
    
    .related-products-slider .product-info {
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    
    .related-products-slider .product-actions {
      margin-top: auto;
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
        slidesPerView: 4,
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