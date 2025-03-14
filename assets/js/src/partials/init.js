import { navSetup } from './navsetup';

(function( $ ) {
	
	'use strict';
	
	$(function () {

        console.log('test 123');

        var bizentaBackgrounds = {
            '.is-style-bizenta-hero-bg-back' : 'url(' + bizentaVariables.bg.hero + ') center no-repeat',
            '.is-style-bizenta-hero-bg' : 'linear-gradient(90deg,rgb(228,228,228) 0%,rgb(228,228,228) 43%,rgba(227,227,227,0.99) 53%,rgba(181,189,188,0) 100%)',
        }

        $.each(bizentaBackgrounds, function(key, value){

            if ( $(window).width() > 780 ) {
                $(key).css({'background':value});
            }


        });

        $('.bizenta-header-one-light-icon').on('click', function(){
            console.log('clicked');
            $('.bizenta-header-one-light-nav').slideToggle();
            $('.bizenta-header-one-light-meta').slideToggle();
        });

        $('.is-style-bizenta-menu .wp-block-navigation__submenu-icon').on('click', function(){
            const submenu = $(this).siblings('.wp-block-navigation__submenu-container');
            submenu.each(function() {
                if (this.style.getPropertyValue('display') === 'block') {
                    this.style.setProperty('display', 'none', 'important');
                } else {
                    this.style.setProperty('display', 'block', 'important');
                }
            });
        });

        navSetup();

        // Add resize event listener
        $(window).on('resize', function() {
            navSetup();
        });        

    });

})( jQuery );


