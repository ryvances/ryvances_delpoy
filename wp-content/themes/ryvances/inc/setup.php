<?php
// ---------- Custom SCF variables global ----------
if (function_exists('acf_add_options_page')) {
	acf_add_options_page([
		'page_title' => 'Ryvances',
		'menu_title' => 'Ryvances',
		'menu_slug' => 'ryvances',
		'capability' => 'manage_options',
		'icon_url' => 'data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbDpzcGFjZT0icHJlc2VydmUiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIHN0eWxlPSJmaWxsOiNhN2FhYWQiIHJvbGU9ImltZyIgYXJpYS1oaWRkZW49InRydWUiIGZvY3VzYWJsZT0iZmFsc2UiIHZpZXdCb3g9IjAgMCAyMDQgMjIyIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPg0KICA8cGF0aCBkPSJNMTA5LjgyMiAxNS4yMzAxQzEwOS4yNzEgMTcuMDIxOCAxMDguOTAzIDE4LjgxMzYgMTA4LjkwMyAyMC43ODQ1VjQ0Ljc5NDJDODcuOTY3NCA2NS4yMjA0IDU3LjI5ODIgOTUuMTQyOSA1Ny4yOTgyIDk1LjE0MjlDNTEuNzg4OCAxMDAuNTE4IDQ3LjE5NzYgMTA3LjUwNiA1MS4wNTQyIDExNC44NTJDNTIuNzA3IDExNy44OTggNTUuMjc4MSAxMjAuNDA3IDU3LjY2NTUgMTIyLjczNkM1Ny44NDkxIDEyMi45MTUgNTguMDMyOCAxMjMuMDk0IDU4LjIxNjQgMTIzLjI3NEM3MC4zMzcyIDEzNC43NDEgODIuMjc0MyAxNDYuMzg3IDk0LjIxMTUgMTU4LjIxM0M5Ni41OTg5IDE2MC41NDIgOTguODAyNyAxNjIuNjkzIDEwMS4xOSAxNjUuMDIyQzEwMy41NzggMTY3LjM1MSAxMDUuNzgxIDE2OS41MDEgMTA4LjE2OSAxNzEuODMxTDc4LjA1MDQgMjAwLjg1N0wxMS4zODYyIDEzNS42MzdDLTMuNDg5MzIgMTIxLjEyMyAtMy44NTY2MiA5OC4wMDk3IDEwLjEwMDYgODIuOTU4OUMxMS4wMTg5IDgxLjcwNDYgMTIuMTIwOCA4MC40NTA0IDEzLjQwNjMgNzkuMzc1M0w2OC4zMTcxIDI1LjgwMTVDNzkuNzAzMyAxNC44NzE3IDk1LjY4MDcgMTEuMjg4MiAxMDkuODIyIDE1LjIzMDFaIi8+DQogIDxwYXRoIGQ9Ik0xOTcuNDIyIDEzNC45MkMxOTcuNDIyIDEzNS4wOTkgMTk3LjQyMiAxMzUuMDk5IDE5Ny40MjIgMTM0LjkyQzE5Ni41MDMgMTM1Ljk5NSAxOTUuNTg1IDEzNy4wNyAxOTQuNjY3IDEzNy45NjZMMTEwLjM3MyAyMTkuMTMzQzEwOC41MzYgMjIwLjkyNSAxMDYuMTQ5IDIyMS44MjEgMTAzLjc2MSAyMjEuODIxQzEwMS4zNzQgMjIxLjgyMSA5OC44MDI3IDIyMC45MjUgOTYuOTY2MiAyMTkuMTMzTDg0LjI5NDUgMjA2Ljc3TDExNy4zNTEgMTc0Ljg3N0wxMTguNDUzIDE3My44MDJMMTIzLjQxMiAxNjkuMTQzQzEzNS4zNDkgMTU3LjY3NiAxNTYuMTAxIDEzNy42MDggMTY3Ljg1NCAxMjYuMzJDMTY5LjUwNyAxMjQuNzA3IDE3MC45NzYgMTIyLjU1NyAxNzEuNTI3IDEyMC4yMjhDMTcxLjg5NSAxMTguNDM2IDE3MS43MTEgMTE2LjY0NCAxNzEuMTYgMTE0Ljg1MkMxNzAuNjA5IDExMy4wNjEgMTY5LjY5MSAxMTEuNDQ4IDE2OC40MDUgMTEwLjE5NEMxNjcuODU0IDEwOS42NTYgMTY3LjMwMyAxMDkuMTE5IDE2Ni43NTIgMTA4LjQwMkMxNjYuMjAyIDEwNy44NjUgMTY1LjY1MSAxMDcuMzI3IDE2NS4yODMgMTA2Ljk2OUMxNjQuNTQ5IDEwNi4yNTIgMTYzLjk5OCAxMDUuNzE0IDE2My4yNjMgMTA0Ljk5OEMxNjIuNTI5IDEwNC4yODEgMTYxLjYxIDEwMy4zODUgMTYwLjg3NiAxMDIuNjY4QzE1OS45NTggMTAxLjc3MiAxNTkuMDM5IDEwMC44NzcgMTU4LjEyMSA5OS45ODA3QzE1Ny4yMDMgOTkuMDg0OCAxNTYuMTAxIDk4LjAwOTggMTU1LjE4MyA5Ny4xMTM5QzE1NC4wODEgOTYuMDM4OCAxNTIuOTc5IDk0Ljk2MzggMTUyLjA2MSA5My44ODg3QzE1MC45NTkgOTIuODEzNyAxNDkuODU3IDkxLjczODYgMTQ4Ljc1NSA5MC42NjM1QzE0Ny42NTMgODkuNTg4NSAxNDYuNTUxIDg4LjUxMzQgMTQ1LjQ0OSA4Ny4yNTkyQzE0NC4zNDcgODYuMTg0MSAxNDMuMjQ2IDg0LjkyOTkgMTQxLjk2IDgzLjg1NDhDMTQwLjg1OCA4Mi43Nzk4IDEzOS43NTYgODEuNzA0NyAxMzguNjU0IDgwLjQ1MDVDMTM3LjU1MiA3OS4zNzU0IDEzNi40NTEgNzguMzAwMyAxMzUuMzQ5IDc3LjIyNTNDMTM0LjI0NyA3Ni4xNTAyIDEzMy4zMjkgNzUuMjU0MyAxMzIuMjI3IDc0LjE3OTNDMTMxLjMwOCA3My4yODM0IDEzMC4zOSA3Mi4zODc1IDEyOS40NzIgNzEuMzEyNEMxMjguNTU0IDcwLjQxNjYgMTI3LjgxOSA2OS42OTk5IDEyNi45MDEgNjguODA0QzEyNi4xNjYgNjguMDg3MyAxMjUuNDMyIDY3LjM3MDYgMTI0LjY5NyA2Ni42NTM4QzEyNC4xNDYgNjYuMTE2MyAxMjMuNTk1IDY1LjU3ODggMTIzLjA0NCA2NC44NjIxQzEyMi42NzcgNjQuNTAzNyAxMjIuMTI2IDYzLjk2NjIgMTIxLjc1OSA2My42MDc4QzEyMS41NzUgNjMuNDI4NyAxMjEuMjA4IDYzLjA3MDMgMTIxLjAyNCA2Mi44OTExQzEyMS4wMjQgNjIuODkxMSAxMjEuMDI0IDYyLjg5MTEgMTIwLjg0IDYyLjcxMkwxMjEuMzkxIDYyLjE3NDRIMTUxLjUxQzE1My43MTMgNjIuMTc0NCAxNTUuOTE3IDYxLjgxNjEgMTU3LjkzNyA2MS4wOTk0TDE5NS43NjkgOTguNTQ3M0MyMDYuMDUzIDEwOC43NiAyMDYuNjA0IDEyNC41MjggMTk3LjQyMiAxMzQuOTJaIi8+DQogIDxwYXRoIGQ9Ik0xNzMuMzY0IDBWMzcuMjY4OEMxNzMuMzY0IDQ2LjQwNjggMTY1LjY1MSA1My45MzIyIDE1Ni4yODUgNTMuOTMyMkgxMTguMDg2VjE2LjY2MzRDMTE4LjA4NiA3LjUyNTQyIDEyNS43OTkgMCAxMzUuMTY1IDBIMTczLjM2NFoiLz4NCjwvc3ZnPg0K',
		'redirect' => false
	]);
}

// ---------- Register Nav Menu ----------
register_nav_menus(
	[
		'primary' => __('Primary Menu', 'tailpress'),
		'top-nav' => __('Top Nav Menu', 'tailpress'),
		'footer' => __('Footer Menu', 'tailpress'),
	]
);

// ---------- Add Menu ----------
function add_menu()
{
	add_theme_support('menus');
	register_nav_menu('themeLocationOne', 'Theme Footer One');
	register_nav_menu('themeLocationTwo', 'Theme Footer Two');
}
add_action('after_setup_theme', 'add_menu');

// Enable WooCommerce
function enable_woocommerce()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'enable_woocommerce');

class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
	// Start Level: replaces <ul class="sub-menu">
	function start_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "\n$indent<div class=\"sub-menu\">\n";
	}

	// End Level: closes the submenu <div>
	function end_lvl( &$output, $depth = 0, $args = array() ) {
			$indent = str_repeat("\t", $depth);
			$output .= "$indent</div>\n";
	}

	// Start Element: replaces <li>
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
			$indent = ($depth) ? str_repeat("\t", $depth) : '';
			$classes = empty($item->classes) ? array() : (array) $item->classes;
			$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
			$class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

			$output .= $indent . '<div' . $class_names . '>';

			$atts = array();
			$atts['title']  = ! empty($item->attr_title) ? $item->attr_title : '';
			$atts['target'] = ! empty($item->target)     ? $item->target     : '';
			$atts['rel']    = ! empty($item->xfn)        ? $item->xfn        : '';
			$atts['href']   = ! empty($item->url)        ? $item->url        : '';

			$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

			$attributes = '';
			foreach ($atts as $attr => $value) {
					if (!empty($value)) {
							$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
							$attributes .= ' ' . $attr . '="' . $value . '"';
					}
			}

			$title = apply_filters('the_title', $item->title, $item->ID);
			$title = apply_filters('nav_menu_item_title', $title, $item, $args, $depth);

			$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
			$item_output .= $args->link_before . $title . $args->link_after;
			$item_output .= '</a>';
			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

	// End Element: closes the submenu item <div>
	function end_el( &$output, $item, $depth = 0, $args = array() ) {
			$output .= "</div>\n";
	}
}

?>