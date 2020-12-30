class CatalogElement {

    constructor(arParams) {
        if (arParams) {
            this.params = arParams;
        } else return;

        this.product = {};
        this.product.id = parseInt(this.params.PRODUCT.ID, 10);

        this.qtyElement = document.querySelector('.qty_wrapper input[type="number"]');
        this.toCartButtonElement = document.querySelector('.btn_wrapper .to-cart');
        this.buyButtonElement = document.querySelector('.btn_wrapper .buy');

        this.hasOffers = false;
        if (this.params.OFFERS) {
            this.offers = this.params.OFFERS;
            this.hasOffers = true;
        }
        this.currentOfferId = undefined;

        this.initToCartButton();
        this.initBuyButton();
    }

    /**
     * from .default
     */
    initBasketUrl(buy = false) {

        if(buy){

            if (this.params.BASKET.BUY_URL_TEMPLATE) {

				this.basketUrl = this.params.BASKET.BUY_URL_TEMPLATE;
            }
            
        } else {

            if (this.params.BASKET.ADD_URL_TEMPLATE) {
                
                this.basketUrl = this.params.BASKET.ADD_URL_TEMPLATE;
            }
        }

        let productId = this.hasOffers ? this.currentOfferId : this.product.id.toString();
        let qty = this.getQty();
        this.basketUrl = this.basketUrl.replace('#ID#', productId);

        this.basketParams = {
            'ajax_basket': 'Y',
            'quantity': qty
        };
    }

    /**
     * from .default
     */
    initPopupWindow() {
        if (this.obPopupWin)
            return;

        this.obPopupWin = BX.PopupWindowManager.create('CatalogElementBasket_' + this.params.VISUAL.ID, null, {
            autoHide: false,
            offsetLeft: 0,
            offsetTop: 0,
            overlay: true,
            closeByEsc: true,
            titleBar: true,
            closeIcon: true,
            contentColor: 'white',
            className: "qwe"
        });
    }

    getQty() {
        return this.qtyElement.value;
    }

    setOffer(id) {
        if (id) this.currentOfferId = id;
        return this.getOffer(this.currentOfferId);
    }

    getOffer(id) {
        return id && this.offers[id] ? this.offers[id] : false;
    }

    initToCartButton() {
        this.toCartButtonElement.addEventListener('click', (e) => {
            e.preventDefault();

            if (this.hasOffers && !this.currentOfferId) {

                this.initPopupWindow();

                var popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>'
                    + "Не выбрано торговое предложение "
                    + '</p></div>';
                this.obPopupWin.setContent(popupContent);
                this.obPopupWin.show();
                return;

            } else {
                this.toCart();
            }

        });
    }

    toCart() {
        this.initBasketUrl();

        BX.ajax({
            method: 'POST',
            dataType: 'json',
            url: this.basketUrl,
            data: this.basketParams,
            onsuccess: BX.proxy(this.toCartResultHandler, this)
        });
    }

    toCartResultHandler(arResult) {
        if (arResult.STATUS === 'OK') {
            BX.onCustomEvent('OnBasketChange');
        }
    }

    initBuyButton() {
        this.buyButtonElement.addEventListener('click', (e) => {
            if (this.hasOffers && !this.currentOfferId) {

                this.initPopupWindow();

                var popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>'
                    + "Не выбрано торговое предложение "
                    + '</p></div>';
                this.obPopupWin.setContent(popupContent);
                this.obPopupWin.show();
                return;

            } else {
                this.buy();
            }
        });
    }

    buy() {
        this.initBasketUrl(true);

        BX.ajax({
            method: 'POST',
            dataType: 'json',
            url: this.basketUrl,
            data: this.basketParams,
            onsuccess: BX.proxy(this.buyResultHandler, this)
        });
    }

    buyResultHandler(arResult){
        if (arResult.STATUS === 'OK') {
            BX.onCustomEvent('OnBasketChange');
            this.redirectToCart();
        }
    }

    redirectToCart(){
        if( this.params.BASKET.BASKET_URL )
        location.href = this.params.BASKET.BASKET_URL;
    }

    logParams() {
        console.log(this.params);
    }
}

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

    jQuery(document).on('click', '.size_wrapper .size .size_item', function (e) {
        let $this = jQuery(this);
        jQuery('.size_wrapper .size .size_item.active').removeClass('active');
        $this.addClass('active');

        let id = $this.data('id');
        let offer = catalogElement.setOffer(id);

        $('.content_item .product-price').html(offer.PRINT_PRICE);
        $qty = $('.qty input[type="number"]');
        $qty.prop('max', offer.QUANTITY);
        $qty.val(Math.min($qty.val(), offer.QUANTITY));
    });

    jQuery(document).on('click', '.qty .up', function (e) {
        let $up = jQuery(this),
            $qty = $up.closest('.qty'),
            $input = $qty.find('input[type="number"]'),
            max = $input.prop('max') ? $input.prop('max') : 9999;
        res = $input.val();

        res++;
        $input.val(Math.min(res, max));
    });

    jQuery(document).on('click', '.qty .down', function (e) {
        let $up = jQuery(this),
            $qty = $up.closest('.qty'),
            $input = $qty.find('input[type="number"]'),
            res = $input.val();

        res--;
        $input.val(Math.max(res, 1));
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