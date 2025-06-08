<?php 
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
add_action('woocommerce_after_single_product_summary', 'hozi_woocommerce_output_related_products', 20);
function hozi_woocommerce_output_related_products() {
  echo '<div class="related-products">';
  echo '<h2>Related Products</h2>';
  echo '</div>';
}
?>