BX.ready( function(){

    $('.one-click-form .mf-phone input').inputmask("+7(999)999-99-99");
    
    BX.addCustomEvent('onAjaxSuccess', function(){
 
        $('.one-click-form .mf-phone input').inputmask("+7(999)999-99-99");

    });
});