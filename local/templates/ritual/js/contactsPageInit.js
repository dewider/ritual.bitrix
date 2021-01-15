// Contacts page
BX.ready( () => {
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
});