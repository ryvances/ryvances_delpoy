<?php
/**
 * Quản lý form liên hệ admin của plugin
 */

if (!defined('ABSPATH')) exit;

// Thêm CSS cho form (tùy chọn)
add_action('admin_enqueue_scripts', 'dobi_design_enqueue_admin_styles');
function dobi_design_enqueue_admin_styles($hook) {
    if ($hook !== 'dobi-design_page_contact-page') return;
    
    wp_enqueue_style(
        'dobi-design-admin-style',
        DOBI_DESIGN_PLUGIN_URL . 'assets/css/admin.css',
        array(),
        '1.0.0'
    );
}

// Hàm xử lý và hiển thị form liên hệ trong trang admin
function dobi_design_contact_page_content() {
    // Xử lý gửi mail khi submit
    if (isset($_POST['dobi_design_submitted'])) {
        $name    = sanitize_text_field($_POST["dobi_design_name"]);
        $email   = sanitize_email($_POST["dobi_design_email"]);
        $subject = sanitize_text_field($_POST["dobi_design_subject"]);
        $message = esc_textarea($_POST["dobi_design_message"]);
        $to      = get_option('admin_email');
        $headers = "From: $name <$email>" . "\r\n";

        if (wp_mail($to, $subject, $message, $headers)) {
            echo '<div class="notice notice-success is-dismissible"><p>Gửi liên hệ thành công!</p></div>';
        } else {
            echo '<div class="notice notice-error is-dismissible"><p>Gửi liên hệ thất bại. Vui lòng thử lại.</p></div>';
        }
    }
    
    // Hiển thị form
    dobi_design_display_contact_form();
}

// Tách riêng phần hiển thị form để code gọn hơn
function dobi_design_display_contact_form() {
    ?>
    <div class="wrap">
        <h1>Form liên hệ trong trang quản trị</h1>
        <form method="post" action="">
            <table class="form-table">
                <tr>
                    <th><label for="dobi_design_name">Họ tên</label></th>
                    <td><input type="text" name="dobi_design_name" id="dobi_design_name" required class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="dobi_design_email">Email</label></th>
                    <td><input type="email" name="dobi_design_email" id="dobi_design_email" required class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="dobi_design_subject">Tiêu đề</label></th>
                    <td><input type="text" name="dobi_design_subject" id="dobi_design_subject" class="regular-text" /></td>
                </tr>
                <tr>
                    <th><label for="dobi_design_message">Nội dung</label></th>
                    <td><textarea name="dobi_design_message" id="dobi_design_message" rows="5" cols="50" required></textarea></td>
                </tr>
            </table>
            <p><input type="submit" name="dobi_design_submitted" class="button button-primary" value="Gửi liên hệ"></p>
        </form>
    </div>
    <?php
}
