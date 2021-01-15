
/*function getProducts(page = 1, filter = {}, sort = 'id') {
    return new Promise((resolve, reject) => {
        jQuery.ajax({
            type: 'get',
            url: '/api/products.php',
            data: {
                filter,
                page,
                sort
            },
            success(data) {
                resolve(data);
            },
            error() {
                reject();
            }
        });
    });
}*/

BX.ready(function(e){
    
    jQuery('ul.prices_navigation_tabs li a').on('click', function(e) {
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
});

jQuery(function() {
    'use strict';

    let $body = jQuery('body');

    jQuery('.select_wrapper .funeral_calculator').each(function() {
        let $this = jQuery(this);

        $this.select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Не выбрано',
            dropdownParent: $this.closest('.select_wrapper'),
            width: '100%'
        });
    });

    // Catalog page
    /*
    (() => {
        let $catalogProducts = jQuery('#catalog-products'),
            $catalogPaginator = jQuery('#catalog-paginator'),
            $filterForm = jQuery('#filter-form'),
            $sortInput = jQuery('select[name="sort"]');

        if ($catalogProducts.length === 0) {
            return;
        }

        let query = Qs.parse(location.search ? location.search.slice(1) : ''),
            page = query.page || 1,
            page_count = 1,
            filter_price_from = query?.filter?.price_from || null,
            filter_price_to = query?.filter?.price_to || null,
            filter_sizes = query?.filter?.sizes || [],
            sort = query.sort || 'id';

        $sortInput.on('change', function(e) {
            $filterForm.trigger('submit');
        });

        function renderCatalogProducts() {
            let filter = {
                price_from: filter_price_from,
                price_to: filter_price_to,
                sizes: filter_sizes
            };

            getProducts(page, filter, sort).then((response) => {
                page_count = response.page_count;

                let productsHtml = response.items.map((product) => {
                        let sizeElements = product.sizes.map((size, index) => {
                            return `<div class="size_item ${index === 0 ? 'active' : ''}">${size}</div>`;
                        });

                        return `<li>
                    <a href="/product.php" class="image-wrapper">
                        <img src="${product.picture}" alt="">
                    </a>
                    <h2>${product.name}</h2>
                    <div class="descr">Lorem ipsum dolor sit amet.</div>
                    <div class="price">
                        ${product.price} <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                    <div class="invisibly">
                    <div class="size_wrapper">
                        <h6>Высота, см.</h6>
                        <div class="size">${sizeElements.join('')}</div>
                    </div>
                    <div class="qty_wrapper">
                        <div class="qty">
                            <input type="number" value="1" step="1" min="1">
                            <button class="up"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                            <button class="down"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        </div>

                        <div class="btn_wrapper">
                            <button class="btn">В корзину</button>
                        </div>
                    </div>
                    </div>
               </li>`;
                    }),
                    paginatorHtml = [];

                for (let i = 1; i <= page_count; ++i) {
                    let queryString = `?page=${i}&${$filterForm.serialize()}`;

                    paginatorHtml.push(`<li class="${i === page ? 'active' : ''}"><a href="${queryString}">${i}</a></li>`);
                }

                $catalogProducts.html(productsHtml.join(''));
                $catalogPaginator.html(paginatorHtml.join(''));
            });
        }

        renderCatalogProducts();
    })();
    */

    // Contacts page
    (() => {
        let $map = document.getElementById('myMapId');

        if ($map === null) {
            return;
        }

        DG.autoload(function() {
            'use strict';

            let myMap = new DG.Map($map);

            myMap.setCenter(new DG.GeoPoint(37.609218, 55.753559), 11);
            myMap.controls.add(new DG.Controls.Zoom());

            let marker = new DG.Markers.Common({geoPoint: new DG.GeoPoint(37.456261, 55.799279)});
            let mark = new DG.Markers.Common({geoPoint: new DG.GeoPoint(37.696725, 55.771362)});

            myMap.markers.add(marker);
            myMap.markers.add(mark);
        });
    })();

    jQuery('.glitch').each(function(){
        let $this = jQuery(this);

        $this.attr('data-text', $this.text());
    })
});






