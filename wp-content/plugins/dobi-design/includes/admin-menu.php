<?php

/**
 * Quản lý menu admin của plugin
 */

if (!defined('ABSPATH')) exit;

// Parent menu callback function (only declare if not exists)
if (!function_exists('dobi_design_main_page')) {
    function dobi_design_main_page()
    {
?>
        <div class="wrap">
            <h1>Chào mừng đến với Dobi Design!</h1>
            <p>Đây là trang chính của menu cha. Bạn có thể thêm thông tin tổng quan ở đây.</p>
        </div>
<?php
    }
}

// add menu
add_action('admin_menu', 'dobi_design_add_plugin_interface');
function dobi_design_add_plugin_interface()
{
    $parent_slug = 'dobi-design';

    // check if menu exists
    if (empty($GLOBALS['admin_page_hooks'][$parent_slug])) {
        add_menu_page(
            'Dobi Design',
            'Dobi Design',
            'manage_options',
            $parent_slug,
            'dobi_design_main_page',
            'dashicons-heading',
            56
        );
        
        // Rename the first submenu item to "Home"
        add_action('admin_menu', function () {
            global $submenu;
            if (isset($submenu['dobi-design'][0])) {
                $submenu['dobi-design'][0][0] = 'Home';
            }
        }, 999);
    }

    // add submenu
    add_submenu_page(
        $parent_slug,
        'Contact Form',
        'Contact',
        'manage_options',
        'contact-page',
        'dobi_design_contact_page_content'
    );
}
