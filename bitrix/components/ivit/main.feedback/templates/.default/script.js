BX.ready( function(){

    $('.mf-phone input').inputmask("+7(999)999-99-99");
    
    BX.addCustomEvent('onAjaxSuccess', function(){
 
        $('.mf-phone input').inputmask("+7(999)999-99-99");
    });
});