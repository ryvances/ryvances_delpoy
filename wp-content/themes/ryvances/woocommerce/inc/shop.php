<?php
// ---------- remove wrapper ----------
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

// ---------- add wrapper ----------
add_action('woocommerce_before_main_content', 'custom_woocommerce_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'custom_woocommerce_wrapper_end', 10);

function custom_woocommerce_wrapper_start() {
    ob_start();
    ?>
    <div id="primary" class="content-area bg-primary">
        <main id="main" class="site-main woocommerce container px-4 mx-auto pt-24" role="main">
            <?php if (is_woocommerce() && is_archive() && is_tax()): ?>
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12 lg:col-span-3">
                        <?php do_action('woocommerce_sidebar_custom'); ?>
                    </div>
                    <div class="col-span-12 lg:col-span-9">
            <?php endif; ?>
    <?php
echo ob_get_clean();
}

function custom_woocommerce_wrapper_end() {
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

// ---------- remove breadcrumbs ----------
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
// ---------- remove result count ----------
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

?>