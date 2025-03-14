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
	'core/group',
	array(
		'name'         => 'bizenta-header-one-light',
		'label'        => __( 'Zyp H1L', 'bizenta' ),
		'inline_style' => ".is-style-bizenta-header-one-light{}
.bizenta-header-one-light-top{margin-block-start:0;margin:0!important;padding-top:7px;padding-bottom:7px;color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--base-5);}
.bizenta-header-one-light-top-phone{max-width:var(--wp--style--global--wide-size)!important;margin-block-start:0;margin:0!important;color:var(--wp--preset--color--contrast);}
.bizenta-header-one-light-logo{}
.bizenta-header-one-light-main{margin-block-start:0!important;}
@media screen and (max-width:780px){.bizenta-header-one-light-main{padding-right:0!important;padding-left:0!important;padding-top:0;padding-bottom:0;}.bizenta-header-one-light-main .wp-block-columns{gap:0;}.bizenta-header-one-light-logo{position:relative;background-color:var(--wp--preset--color--base-4);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--style--root--padding-right);padding-left:var(--wp--style--root--padding-left);}.bizenta-header-one-light-nav{display:none;margin-block-start:0!important;background-color:var(--wp--preset--color--base-3);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-right:var(--wp--style--root--padding-right);padding-left:var(--wp--style--root--padding-left);}.bizenta-header-one-light-cta{display:none;margin-block-start:0!important;}.bizenta-header-one-light-icon{width:3rem;height:3rem;margin:0;margin-block-start: 0.2em !important;position:absolute;top:var(--wp--preset--spacing--30);right:var(--wp--style--root--padding-right);background:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='3rem' height='3rem' viewBox='0 0 24 24'%3E%3Cg fill='%23insertcolorhere'%3E%3Cpath d='M8 6.983a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2zM7 12a1 1 0 0 1 1-1h8a1 1 0 1 1 0 2H8a1 1 0 0 1-1-1m1 3.017a1 1 0 1 0 0 2h8a1 1 0 1 0 0-2z'/%3E%3Cpath fill-rule='evenodd' d='M22 12c0 5.523-4.477 10-10 10S2 17.523 2 12S6.477 2 12 2s10 4.477 10 10m-2 0a8 8 0 1 1-16 0a8 8 0 0 1 16 0' clip-rule='evenodd'/%3E%3C/g%3E%3C/svg%3E\");z-index:99;cursor:pointer;opacity:0;}}
@media screen and (min-width:781px){.bizenta-header-one-light-top{display:none;}.block-editor-iframe__html .bizenta-header-one-light-top{display:block;}.is-style-bizenta-header-one-light{opacity:0;}.block-editor-iframe__html .is-style-bizenta-header-one-light{opacity: 1;}.bizenta-header-one-light-main{background-color:var(--wp--preset--color--base-4);padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);}.bizenta-header-one-light-logo{padding-top: 0.4em;}.bizenta-header-one-light-icon{display:none;}}",
	)
);

register_block_style(
	'core/group',
	array(
		'name'         => 'bizenta-header-one-light-phone',
		'label'        => __( 'Zyp H1LP', 'bizenta' ),
		'inline_style' => ".is-style-bizenta-header-one-light-phone{display:flex;justify-content:right;}
@media screen and (max-width:780px){.is-style-bizenta-header-one-light-phone{display:none;}}
@media screen and (min-width:781px){.bizenta-header-one-light-phone{justify-content:right;}}
.bizenta-header-one-light-phone-inner{padding-top:7px;padding-bottom:7px;padding-left:58px!important;padding-right:0!important;position:relative;background:url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='52px' height='52px' viewBox='0 0 56 56'%3E%3Cpath fill='%23000' d='M28 51.906c13.055 0 23.906-10.851 23.906-23.906c0-13.078-10.875-23.906-23.93-23.906C14.899 4.094 4.095 14.922 4.095 28c0 13.055 10.828 23.906 23.906 23.906m-6.117-18.07c-5.813-5.79-9.516-13.172-5.133-17.555c.258-.258.539-.515.797-.773c1.336-1.266 2.625-1.195 3.773.422l3.047 4.336c1.031 1.5.773 2.343-.328 3.515l-.961 1.055c-.351.328-.21.773-.047 1.055c.446.843 1.711 2.343 3.07 3.703c1.407 1.406 2.836 2.601 3.727 3.093c.328.188.797.235 1.102-.046l1.007-.961c1.125-1.102 2.04-1.383 3.493-.352a319 319 0 0 0 4.43 3.094c1.476 1.078 1.827 2.414.327 3.773c-.257.258-.492.54-.75.797c-4.382 4.36-11.742.656-17.554-5.156'/%3E%3C/svg%3E\") left center no-repeat;}
.bizenta-header-one-light-phone-inner>p{margin:0 0 7px 0;line-height:1;}
.bizenta-header-one-light-phone-inner>p:nth-child(1){font-size:var(--wp--preset--font-size--small);}
.bizenta-header-one-light-phone-inner>p:nth-child(2){margin:0;margin-block-start:0;font-size:var(--wp--preset--font-size--medium-2);font-weight:700;}
.bizenta-header-one-light-phone-alt{margin-block-start:0;margin:0!important;padding-right:var(--wp--style--root--padding-right);padding-left:var(--wp--style--root--padding-left);padding-top:7px;padding-bottom:7px;color:var(--wp--preset--color--contrast);background-color:var(--wp--preset--color--base-5);}
@media screen and (min-width:781px){.bizenta-header-one-light-phone-alt{display:none;}.block-editor-iframe__html .bizenta-header-one-light-phone-alt{display:block;}}",
	)
);

register_block_style(
	'core/group',
	array(
		'name'         => 'bizenta-header-one-light-meta',
		'label'        => __( 'Zyp H1LT', 'bizenta' ),
		'inline_style' => '.wp-block-group.bizenta-header-one-light-meta{margin-block-start:0;font-size:var(--wp--preset--font-size--normal);background-color:var(--wp--preset--color--accent-3)!important;padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);}.bizenta-header-one-light-contact>p{color:var(--wp--preset--color--contrast);margin-block-start:0;padding:0 1em 0 0;margin:0 1em 0 0;}.bizenta-header-one-light-contact>p:last-child{padding:0;margin:0;border-right:0;}.bizenta-header-one-light-contact>p>strong{padding:0 0.5em 0 0;}.bizenta-header-one-light-social{gap:1.2rem !important;}@media screen and (max-width:780px){.wp-block-group.bizenta-header-one-light-meta{display:none;background-color:var(--wp--preset--color--base-3)!important;padding-top:var(--wp--style--root--padding-left);padding-bottom:var(--wp--style--root--padding-left);}.bizenta-header-one-light-contact>p{flex-basis:100%;margin:0.5em 0;}.bizenta-header-one-light-social li{font-size:var(--wp--preset--font-size--medium)!important;display:inline-block;padding:0!important;border-radius:4px;background:var(--wp--preset--color--base-4);color:var(--wp--preset--color--contrast);}}@media screen and (min-width:781px){.bizenta-header-one-light-contact{display:flex;flex-wrap:nowrap;flex-flow:row;color:var(--wp--preset--color--base);}.bizenta-header-one-light-contact{display:flex;flex-wrap:nowrap;flex-flow:row;}.bizenta-header-one-light-contact>p{border-right:1px solid var(--wp--preset--color--base);color:var(--wp--preset--color--base);}.bizenta-header-one-light-social li{font-size:var(--wp--preset--font-size--medium)!important;display:inline-block;padding:0!important;border-radius:4px;background:var(--wp--preset--color--accent-4);color:var(--wp--preset--color--base);}}',
	)
);

