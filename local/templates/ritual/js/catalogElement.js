
document.addEventListener("DOMContentLoaded", function (e) {

    jQuery(document).on('click', '.size_wrapper .size .size_item', function (e) {
        let $this = jQuery(this);
        let $sizeElement = $this.closest('.size');
        $sizeElement.find('.size_item.active').removeClass('active');
        $this.addClass('active');

        let offerId = $this.data('id');
        $sizeElement.attr("data-current-id", offerId);

        let productId = $sizeElement.data('product-id');

        let $qty = $('.qty[data-product-id="'+productId+'"] input[type="number"]');
        $qty.prop('max', $this.data('qty'));
        $qty.val(Math.min($qty.val(), $this.data('qty')));

        $('.product-price[data-product-id="'+productId+'"]').html($this.data('price'));
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

    function getQty(id) {
        return $('.qty[data-product-id="'+id+'"] input[type="number"]').val();
    }

    function getBasketUrl(id, buy = false) {

        if(buy){

            if (PARAMS.BASKET.BUY_URL_TEMPLATE) {

				var basketUrl = PARAMS.BASKET.BUY_URL_TEMPLATE;
            }
            
        } else {

            if (PARAMS.BASKET.ADD_URL_TEMPLATE) {
                
                var basketUrl = PARAMS.BASKET.ADD_URL_TEMPLATE;
            }
        }
        return basketUrl.replace('#ID#', id);
    }

    $('.btn.to-cart').on('click', function(e){
        e.preventDefault();

        let $this = jQuery(this);
        let productId = $this.data('product-id');
        let $sizeElement = $('.size[data-product-id="'+productId+'"]');
        let currentOfferId = $sizeElement.data('current-id');

        if ($sizeElement.length > 0 && !currentOfferId) {

            if (!obPopupWin){

                var obPopupWin = new BX.PopupWindow('CatalogElementBasket', null, {
                    autoHide: true,
                    offsetLeft: 0,
                    offsetTop: 0,
                    overlay: true,
                    closeByEsc: true,
                    titleBar: true,
                    closeIcon: true,
                    contentColor: 'white',
                    className: "popup"
                });
            } 

            var popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>'
                + "Не выбрано торговое предложение "
                + '</p></div>';
            obPopupWin.setContent(popupContent);
            obPopupWin.show();
            return;

        } else {
            let itemId = currentOfferId ? currentOfferId : productId;
            let basketUrl = getBasketUrl(itemId);

            let qty = getQty(productId);
            let basketParams = {
                'ajax_basket': 'Y',
                'quantity': qty
            };

            BX.ajax({
                method: 'POST',
                dataType: 'json',
                url: basketUrl,
                data: basketParams,
                onsuccess: BX.proxy(function (arResult) {
                    if (arResult.STATUS === 'OK') {
                        BX.onCustomEvent('OnBasketChange');

                        if (!obPopupWin){

                            var obPopupWin = BX.PopupWindowManager.create('CatalogElementBasket', null, {
                                autoHide: true,
                                offsetLeft: 0,
                                offsetTop: 0,
                                overlay: true,
                                closeByEsc: true,
                                titleBar: true,
                                closeIcon: true,
                                contentColor: 'white',
                                className: "popup"
                            });
                        } 
            
                        var popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>'
                            + "Товар доюавлен в корзину "
                            + '</p></div>';
                        obPopupWin.setContent(popupContent);
                        obPopupWin.show();
                    }
                }, this)
            });
        }
    });

    $('.btn.buy').on('click', function(e){
        e.preventDefault();

        let $this = jQuery(this);
        let productId = $this.data('product-id');
        let $sizeElement = $('.size[data-product-id="'+productId+'"]');
        let currentOfferId = $sizeElement.data('current-id');

        if ($sizeElement && !currentOfferId) {

            if (!obPopupWin){

                var obPopupWin = BX.PopupWindowManager.create('CatalogElementBasket', null, {
                    autoHide: true,
                    offsetLeft: 0,
                    offsetTop: 0,
                    overlay: true,
                    closeByEsc: true,
                    titleBar: true,
                    closeIcon: true,
                    contentColor: 'white',
                    className: "popup"
                });
            } 

            var popupContent = '<div style="width: 100%; margin: 0; text-align: center;"><p>'
                + "Не выбрано торговое предложение "
                + '</p></div>';
            obPopupWin.setContent(popupContent);
            obPopupWin.show();
            return;

        } else {
            let itemId = currentOfferId ? currentOfferId : productId;
            let basketUrl = getBasketUrl(itemId, true);

            let qty = getQty(productId);
            let basketParams = {
                'ajax_basket': 'Y',
                'quantity': qty
            };

            BX.ajax({
                method: 'POST',
                dataType: 'json',
                url: basketUrl,
                data: basketParams,
                onsuccess: BX.proxy(function (arResult) {
                    if (arResult.STATUS === 'OK') {
                        BX.onCustomEvent('OnBasketChange');
                        if( PARAMS.BASKET.BASKET_URL )
                            location.href = PARAMS.BASKET.BASKET_URL;
                    }
                }, this)
            });
        }
    });
});