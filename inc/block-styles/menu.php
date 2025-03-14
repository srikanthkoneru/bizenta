<?php
/**
 * Register header one light block styles.
 *
 * @link       http://bizenta.com
 * @since      1.0.0
 *
 * @package    bizenta
 */

register_block_style(
	'core/navigation',
	array(
		'name'         => 'bizenta-menu',
		'label'        => __( 'LP', 'bizenta' ),
		'inline_style' => '.is-style-bizenta-menu .wp-block-navigation-item{font-size:var(--wp--preset--font-size--medium);padding:0.7em 1.4em;font-weight:700;color:var(--wp--preset--color--contrast)}.is-style-bizenta-menu .wp-block-navigation-item:hover{background:var(--wp--preset--color--base-5);border-radius:8px}.is-style-bizenta-menu .wp-block-navigation-item:hover a{text-decoration:none}.is-style-bizenta-menu .has-child.wp-block-navigation-item{border-radius:8px 8px 0 0}@media screen and (min-width:781px){.is-style-bizenta-menu .wp-block-navigation-item{color:var(--wp--preset--color--contrast)}.is-style-bizenta-header-four-menu{gap:0 2em}.is-style-bizenta-menu>ul>li>ul{left:0!important;background:var(--wp--preset--color--base-5)!important}.is-style-bizenta-menu .wp-block-navigation__submenu-container{min-width:300px!important}.is-style-bizenta-menu>ul>li>ul>li{border-radius:0!important}.is-style-bizenta-menu>ul>li>ul>li:hover{background:var(--wp--preset--color--base-6)!important}.is-style-bizenta-menu>ul>li>ul>li>ul{top:0!important;background:var(--wp--preset--color--base-6)!important}.is-style-bizenta-menu>ul>li>ul>li>ul>li:hover{background:var(--wp--preset--color--base-6)!important;border-radius:0!important}}@media screen and (max-width:780px){.wp-block-navigation__container{gap:0}.is-style-bizenta-menu>.wp-block-page-list{gap:0}.is-style-bizenta-menu>ul>li:hover{background-color:transparent!important}.is-style-bizenta-menu>ul>li>ul>li>.wp-block-navigation__submenu-container{border:none!important;display:flex!important}.is-style-bizenta-menu>ul>li>ul>li>button{display:none!important}.is-style-bizenta-menu .wp-block-navigation-item{width:100%;display:block}.is-style-bizenta-menu .wp-block-navigation-item button{position:absolute;right:1.4em;top:1.6em;width:1.2em;height:1.2em;z-index:9}.is-style-bizenta-menu .has-child.wp-block-navigation-item{border-radius:8px}.is-style-bizenta-menu .wp-block-navigation__submenu-container{margin-top:1.5em;width:100%!important;visibility:visible!important;opacity:1!important;border:none!important;background-color:var(--wp--preset--color--base-6)!important;border-radius:6px;height:auto!important;position:relative!important;display:none!important}.is-style-bizenta-menu>ul>li{padding:1.4em 0!important;border-bottom:1px solid var(--wp--preset--color--base-4)}}.is-style-bizenta-menu .wp-block-navigation__submenu-container{border:none!important}',
	)
);