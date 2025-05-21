<?php
/**
 * Plugin Name: Dobi Design
 * Description: Plugin Dobi Design với menu con riêng và form liên hệ trong admin.
 * Version: 1.0.0
 * Author: Tên của bạn
 */

// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// Định nghĩa hằng số
define('DOBI_DESIGN_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('DOBI_DESIGN_PLUGIN_URL', plugin_dir_url(__FILE__));

// Tải các file chức năng
require_once DOBI_DESIGN_PLUGIN_DIR . 'includes/admin-menu.php';
require_once DOBI_DESIGN_PLUGIN_DIR . 'includes/contact-form.php';

// Đăng ký hook khi kích hoạt plugin
register_activation_hook(__FILE__, 'dobi_design_activate');

// Hàm chạy khi kích hoạt plugin
function dobi_design_activate() {
    // Thêm code xử lý khi kích hoạt plugin (nếu cần)
}
