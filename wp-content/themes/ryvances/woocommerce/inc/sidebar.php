<?php
// ---------- remove sidebar ----------
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// ---------- add custom sidebar ----------
add_action('woocommerce_sidebar_custom', 'custom_woocommerce_sidebar', 10);

function custom_woocommerce_sidebar()
{
  ob_start();
?>
  <aside class="woocommerce-sidebar rounded-lg border border-gray-200 shadow-md">
    <?php
    $terms = get_terms([
      'taxonomy'   => 'mau_website',
      'hide_empty' => false, // Để lấy cả những term chưa có sản phẩm
      'parent'     => 0,
    ]);
    ?>
    <h2 class="text-lg font-medium uppercase bg-primary text-white p-4 rounded-t-lg">Danh mục sản phẩm</h2>
    <?php
    if (!is_wp_error($terms)) {
      echo '<div class="space-y-3 md:space-y-4 p-3 md:p-4">';
      foreach ($terms as $term) {
        $term_link = get_term_link($term);
        $current_term = get_queried_object();
        $is_current = ($current_term && $current_term->term_id === $term->term_id);
    ?>
        <div class="flex items-center justify-between gap-2">
          <a href="<?php echo esc_url($term_link); ?>" class="flex items-center gap-2">
            <h3 class="text-sm md:text-base font-medium hover:text-primary transition-all duration-300 <?php echo $is_current ? 'text-primary' : 'text-gray-900'; ?>" style="<?php echo $is_current ? 'display: list-item; list-style-type: disclosure-closed; margin-left: 20px;' : ''; ?>"><?php echo esc_html($term->name); ?></h3>
          </a>
          <span class="text-gray-500 text-sm md:text-base font-mono font-normal">(<?php echo $term->count; ?>)</span>
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