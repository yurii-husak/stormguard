<?php
/**
 * Register Menus
 *
 * @link http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

register_nav_menus(
	array(
		'first-top-bar'  => esc_html__( 'First Top Bar', 'foundationpress' ),
		'second-top-bar'  => esc_html__( 'Second Top Bar', 'foundationpress' ),
		'bottom-bar'  => esc_html__( 'Bottom Bar', 'foundationpress' ),
		'first-mobile-nav' => esc_html__( 'First Mobile Nav', 'foundationpress' ),
		'second-mobile-nav' => esc_html__( 'Second Mobile Nav', 'foundationpress' ),
	)
);


/**
 * Desktop navigation - right top bar
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'foundationpress_first_top_bar' ) ) {
	function foundationpress_first_top_bar() {
		wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'first-top-bar',
				'depth'          => 3,
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Top_Bar_Walker(),
			)
		);
	}
}

if ( ! function_exists( 'foundationpress_second_top_bar' ) ) {
    function foundationpress_second_top_bar() {
        wp_nav_menu(
            array(
                'container'      => false,
                'menu_class'     => 'dropdown menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s desktop-menu" data-dropdown-menu>%3$s</ul>',
                'theme_location' => 'second-top-bar',
                'depth'          => 3,
                'fallback_cb'    => false,
                'walker'         => new Foundationpress_Top_Bar_Walker(),
            )
        );
    }
}

if ( ! function_exists( 'foundationpress_bottom_bar' ) ) {
    function foundationpress_bottom_bar() {
        wp_nav_menu(
            array(
                'container'      => false,
                'menu_class'     => 'dropdown menu',
                'items_wrap'     => '<ul id="%1$s" class="%2$s " data-dropdown-menu>%3$s</ul>',
                'theme_location' => 'bottom-bar',
                'depth'          => 3,
                'fallback_cb'    => false,
                'walker'         => new Foundationpress_Top_Bar_Walker(),
            )
        );
    }
}


/**
 * Mobile navigation - topbar (default) or offcanvas
 */
if ( ! function_exists( 'foundationpress_mobile_nav' ) ) {
	function foundationpress_first_mobile_nav() {
		wp_nav_menu(
			array(
				'container'      => false,                         // Remove nav container
				'menu'           => __( 'mobile-nav', 'foundationpress' ),
				'menu_class'     => 'vertical menu',
				'theme_location' => 'first-mobile-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
				'fallback_cb'    => false,
				'walker'         => new Foundationpress_Mobile_Walker(),
			)
		);
	}
}

if ( ! function_exists( 'foundationpress_mobile_nav' ) ) {
    function foundationpress_second_mobile_nav() {
        wp_nav_menu(
            array(
                'container'      => false,                         // Remove nav container
                'menu'           => __( 'mobile-nav', 'foundationpress' ),
                'menu_class'     => 'vertical menu',
                'theme_location' => 'second-mobile-nav',
                'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu data-submenu-toggle="true">%3$s</ul>',
                'fallback_cb'    => false,
                'walker'         => new Foundationpress_Mobile_Walker(),
            )
        );
    }
}


/**
 * Add support for buttons in the top-bar menu:
 * 1) In WordPress admin, go to Apperance -> Menus.
 * 2) Click 'Screen Options' from the top panel and enable 'CSS CLasses' and 'Link Relationship (XFN)'
 * 3) On your menu item, type 'has-form' in the CSS-classes field. Type 'button' in the XFN field
 * 4) Save Menu. Your menu item will now appear as a button in your top-menu
*/
if ( ! function_exists( 'foundationpress_add_menuclass' ) ) {
	function foundationpress_add_menuclass( $ulclass ) {
		$find    = array( '/<a rel="button"/', '/<a title=".*?" rel="button"/' );
		$replace = array( '<a rel="button" class="button"', '<a rel="button" class="button"' );

		return preg_replace( $find, $replace, $ulclass, 1 );
	}
	add_filter( 'wp_nav_menu', 'foundationpress_add_menuclass' );
}
