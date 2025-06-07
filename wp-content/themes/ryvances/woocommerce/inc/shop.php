<?php
// remove wrapper
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
// remove breadcrumbs
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// remove result count
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
// remove woocommerce_catalog_ordering
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

// ---------- add action ----------
// add wrapper
add_action('woocommerce_before_main_content', 'hozi_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'hozi_woocommerce_wrapper_end', 10);

function hozi_woocommerce_wrapper_start() {
    ob_start();
    ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main woocommerce container px-4 mx-auto pt-24" role="main">
            <?php if (function_exists('rank_math_the_breadcrumbs')): ?>
                <div class="mb-10">
                    <?php rank_math_the_breadcrumbs(); ?>
                </div>
            <?php endif; ?>
            
            <?php if (is_woocommerce() && is_archive() && is_tax()): ?>
                <div class="grid grid-cols-12 gap-5 mb-10">
                    <div class="col-span-12 lg:col-span-3">
                        <?php do_action('woocommerce_sidebar_custom'); ?>
                    </div>
                    <div class="flex flex-col col-span-12 lg:col-span-9 rounded-lg border border-gray-200 shadow-md p-4">
            <?php endif; ?>
    <?php
echo ob_get_clean();
}

function hozi_woocommerce_wrapper_end() {
    ob_start();
    ?>
        <?php if (is_woocommerce() && is_archive() && is_tax()): ?>
            </div>
        </div>
        <?php endif; ?>
        </main>
    </div>
    <?php
echo ob_get_clean();
}

// add custom title
remove_action('woocommerce_shop_loop_header', 'woocommerce_product_taxonomy_archive_header', 10);
add_action('woocommerce_shop_loop_header', 'hozi_woocommerce_product_taxonomy_archive_header', 10);
function hozi_woocommerce_product_taxonomy_archive_header() {
    ob_start();
    ?>
    <div class="flex items-center gap-2 mb-4">
        <h1 class="text-2xl font-bold uppercase text-btn-primary"><?php echo get_queried_object()->name; ?></h1>
        <div class="h-1 w-10 bg-btn-primary"></div>
    </div>
    <p class="text-gray-500 mb-4"><?php echo get_queried_object()->description; ?></p>
    <?php
    echo ob_get_clean();
}    

// add custom sale flash
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
add_action('woocommerce_before_shop_loop_item_title', 'hozi_woocommerce_show_product_loop_sale_flash', 10);
function hozi_woocommerce_show_product_loop_sale_flash() {
    ob_start();
    ?>
    <div class="absolute top-0 right-0 z-10">
        <?php
        global $product;
        if ( $product && $product->is_on_sale() ) :
            $regular_price = floatval( $product->get_regular_price() );
            $sale_price    = floatval( $product->get_sale_price() );
            if ( $regular_price > 0 && $sale_price > 0 && $regular_price > $sale_price ) {
                $discount = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
            } else {
                $discount = false;
            }
        ?>
        <span class="w-10 h-10 absolute top-2 right-2 z-10 flex items-center justify-center rounded-l-full rounded-br-full bg-red-500 text-white text-sm">
            <?php if ( $discount ) : ?>
                -<?php echo esc_html( $discount ); ?>%
            <?php else : ?>
                <?php echo esc_html__('Sale!', 'woocommerce'); ?>
            <?php endif; ?>
        </span>
        <?php endif; ?>
    </div>
    <?php
    echo ob_get_clean();
}

// add custom pagination
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
add_action('woocommerce_after_main_content', 'hozi_woocommerce_pagination', 9);
function hozi_woocommerce_pagination() {
    ob_start();
    ?>
    <div class="col-span-12 mt-10">
        <?php woocommerce_pagination(); ?>
    </div>
    <?php
    echo ob_get_clean();
}   
?>
<?php
// ---------- content product ----------
// remove content product
remove_action('woocommerce_shop_loop', 'woocommerce_template_loop_product_link_open', 10);
// remove link
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);
// remove price
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price', 10);
// remove add to cart
remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);

// add custom product loop start
add_filter('woocommerce_product_loop_start', function($html) {
    $html = str_replace(
        ['<ul class="products', '</ul>'],
        ['<div class="grid grid-cols-12 gap-4"', '</div>'],
        $html
    );
    return $html;
});

// add custom product loop start
add_action('woocommerce_before_shop_loop_item', 'hozi_woocommerce_template_wrapper_product', 10);
function hozi_woocommerce_template_wrapper_product() {
    ob_start();
    ?>
    <div class="cart flex flex-col h-full shadow-md rounded-lg overflow-hidden border border-transparent hover:border-btn-primary transition-all duration-300">
    <?php
    echo ob_get_clean();
}

// add custom product loop end
add_action('woocommerce_after_shop_loop_item', 'hozi_woocommerce_template_wrapper_product_end', 10);
function hozi_woocommerce_template_wrapper_product_end() {
    ob_start();
    ?>
    </div>
    <?php
    echo ob_get_clean();
}

// add custom product image
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action('woocommerce_before_shop_loop_item_title', 'hozi_woocommerce_template_loop_product_thumbnail', 10);
function hozi_woocommerce_template_loop_product_thumbnail() {
    ob_start();
    ?>
    <div class="group w-full h-[300px] md:h-[400px] lg:h-[300px] bg-gray-200 overflow-hidden rounded-lg cursor-pointer relative">
        <img 
            src="https://thietkeweb.dev/wp-content/uploads/2025/06/FireShot-Capture-033-Organic-Food-110211.thietkeweb.dev_-scaled.png"
            alt="<?php echo esc_attr(get_the_title()); ?>"
            class="w-full h-full !mb-0 object-cover transform translate-y-0 group-hover:-translate-y-[calc(100%-300px)] md:group-hover:-translate-y-[calc(100%-400px)] lg:group-hover:-translate-y-[calc(100%-300px)] transition-transform duration-[2000ms] linear"
        >
        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="group-hover:bg-black/30 group-hover:opacity-100 opacity-0 absolute top-0 left-0 w-full h-full flex justify-center items-center transition-all duration-300">
            <div class="btn-posnawr flex items-center gap-1 text-white text-sm font-bold">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
                <span><?php echo esc_html('Xem chi tiết'); ?></span>
            </div>
        </a>
    </div>
    <?php
    echo ob_get_clean();
}

// add custom product title
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'hozi_woocommerce_template_loop_product_title', 10);
function hozi_woocommerce_template_loop_product_title() {
    ob_start();
    ?>
    <div class="flex flex-grow flex-col gap-4 p-3">
        <h2 class="flex flex-grow items-center justify-center font-bold text-center"><a class="hover:text-btn-primary line-clamp-2" href="<?php echo esc_url(get_the_permalink()); ?>"><?php echo get_the_title(); ?></a></h2>
        <div class="flex justify-between gap-2">
            <a href="<?php echo esc_url(get_the_permalink()); ?>" class="flex flex-1 justify-center items-center bg-white border border-btn-primary text-btn-primary px-3 py-2 rounded text-[13px] hover:bg-btn-primary hover:text-white transition-all duration-500">
                <?php echo esc_html__('Xem thực tế', 'ryvances'); ?>
            </a>
            <?php get_template_part('template-components/button-add-to-cart'); ?>
        </div>
    </div>
    <?php
    echo ob_get_clean();
}
?>