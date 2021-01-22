BX.ready( function(){

    $('.mf-phone input').inputmask("+7(999)999-99-99");

    var observer = new MutationObserver( function(mutations){
        mutations.forEach(function(mutation){
            if( mutation.previousSibling.nodeName == "IFRAME" );
            $('.mf-phone input').inputmask("+7(999)999-99-99");
        });
    });

    observer.observe(
        document.body,
        {
            childList: true
        }
    )
});