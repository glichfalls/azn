jQuery(function() {

    jQuery('.hamburger').on('click', function() {
        jQuery(this).toggleClass('is-active');
        jQuery('.menu-header-container').toggleClass('open');
        jQuery('body').toggleClass('no-scroll');
    });

});
