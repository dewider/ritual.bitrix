BX.ready(function(){
    
    $filterForm = jQuery('#sort-form'),
    $sortInput = jQuery('select[name="sort"]');

    $sortInput.on('change', function(e) {
        $filterForm.trigger('submit');
    });
});