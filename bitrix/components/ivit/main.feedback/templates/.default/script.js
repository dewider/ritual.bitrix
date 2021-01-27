BX.ready( function(){

    $('.mf-form .mf-phone input').inputmask("+7(999)999-99-99");
    
    BX.addCustomEvent('onAjaxSuccess', function(){
 
        $('.mf-form .mf-phone input').inputmask("+7(999)999-99-99");
    });
});