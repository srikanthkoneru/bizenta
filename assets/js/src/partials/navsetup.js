function replaceColorInSvgUrl(el, type = '') {
    console.log('replaceColorInSvgUrl');
    console.log(el);
    if ( ! jQuery(el).length ) {
        return;
    }
    let appliedColor = '--wp--preset--color--base';
    if ( 'dark' === type ) {
        appliedColor = '--wp--preset--color--contrast';
    }
    console.log(appliedColor);
    const colorValue = getComputedStyle(document.documentElement).getPropertyValue(appliedColor).trim().replace('#', '%23');
    console.log(colorValue);
    const svgUrl = jQuery(el).css('background');
    const regex = /%23insertcolorhere/g;
    const newBg = svgUrl.replace(regex, colorValue);
    jQuery(el).css({'background': newBg, 'opacity': 1});
}

export function navSetup() {
    console.log('navSetup');
    var viewportWidth = jQuery(window).outerWidth(true);

    jQuery('.bizenta-header-one-light-nav').removeAttr('style');

    let container;
    let nav;

    if ( jQuery('.is-style-bizenta-header-one-light').length ) {
        container = '.is-style-bizenta-header-one-light';
        nav = '.bizenta-header-one-light-meta';
    }

    if (viewportWidth > 780) {
        var navHeight = jQuery(nav).outerHeight(true);
        jQuery(container).css({'padding-top':navHeight,'opacity':1});
        jQuery(nav).removeAttr('style');
        jQuery(nav).css({'position':'absolute', 'top':0, 'left':0, 'width':'100%', 'padding-right':'var(--wp--style--root--padding-right)', 'padding-left':'var(--wp--style--root--padding-left)'});

    } else {
        jQuery(nav).removeAttr('style');
        jQuery(container).removeAttr('style');
        replaceColorInSvgUrl('.bizenta-header-one-light-icon', 'dark');
    }

}