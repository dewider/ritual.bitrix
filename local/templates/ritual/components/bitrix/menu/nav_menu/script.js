/*
 * Menu component JS
 */

document.addEventListener('DOMContentLoaded', function (e) {

    let $body = jQuery('body');

    // MOBILE MENU START
    jQuery('.mobile_menu_btn').on('click', function(e) {
        e.preventDefault();
        $body.toggleClass('mobile-menu-opened');
    });

    jQuery('.mobile_menu_bg').on('click', function() {
        $body.removeClass('mobile-menu-opened');
    });
    // MOBILE MENU END
});