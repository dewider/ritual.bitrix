document.addEventListener("DOMContentLoaded", function (e) {

    jQuery('ul.prices_navigation_tabs li a').on('click', function (e) {
        e.preventDefault();

        let $this = jQuery(this),
            $tab = jQuery($this.attr('href'));

        if ($this.is('.active')) {
            return;
        }

        jQuery('ul.prices_navigation_tabs li a.active').removeClass('active');
        $this.addClass('active');
        $tab.show();
        jQuery('.prices_content_tabs .tab').not($tab).hide();
    });

    jQuery('.product_carousel').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>'
    });

    jQuery('.product_page_content .content_list .content_item .product_carousel .carousel_item img').on('click', function (e) {
        let $this = jQuery(this);
        jQuery('.product_page_content .content_list .content_item .img_wrapper img').removeClass('active');
        jQuery(`.product_page_content .content_list .content_item .img_wrapper img[src="${$this.attr('src')}"]`).addClass('active');
    });

});