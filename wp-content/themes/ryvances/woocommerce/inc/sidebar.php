<?php
// ---------- remove sidebar ----------
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// ---------- add custom sidebar ----------
add_action('woocommerce_sidebar_custom', 'custom_woocommerce_sidebar', 10);

function custom_woocommerce_sidebar()
{
  ob_start();
?>
  <aside class="woocommerce-sidebar">
    <?php
    $terms = get_terms([
      'taxonomy'   => 'mau_website',
      'hide_empty' => false, // Để lấy cả những term chưa có sản phẩm
      'parent'     => 0,
    ]);

    if (!is_wp_error($terms)) {
      echo '<div class="space-y-4">';
      foreach ($terms as $term) {
        $term_link = get_term_link($term);
        $current_term = get_queried_object();
        $is_current = ($current_term && $current_term->term_id === $term->term_id);
    ?>
        <div class="">
          <a href="<?php echo esc_url($term_link); ?>" class="block">
            <h3 class="text-lg font-medium <?php echo $is_current ? 'text-blue-600' : 'text-gray-900'; ?>"><?php echo esc_html($term->name); ?></h3>
          </a>
        </div>
    <?php
      }
      echo '</div>';
    }
    ?>
  </aside>
<?php
  echo ob_get_clean();
}
?>