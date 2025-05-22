<?php
// Loại bỏ wrapper mặc định
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// Thêm wrapper tùy chỉnh với class mới
add_action('woocommerce_before_main_content', 'custom_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'custom_woocommerce_wrapper_end', 10);

function custom_woocommerce_wrapper_start()
{
    echo '<div id="primary" class="content-area bg-primary"><main id="main" class="site-main woocommerce container px-4 mx-auto pt-24" role="main">';
}

function custom_woocommerce_wrapper_end()
{
    echo '</main></div>';
}

// remove breadcrumbs
// remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// add_action('woocommerce_before_main_content', 'custom_woocommerce_breadcrumb', 20);

function custom_woocommerce_breadcrumb()
{
    ob_start();
?>
    <div class="bg-primary">
        <?php
        if (function_exists('rank_math_the_breadcrumbs')) {
            rank_math_the_breadcrumbs();
        }
        ?>
    </div>
<?php
    echo ob_get_clean();
}
?>