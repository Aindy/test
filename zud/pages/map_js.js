/*

Файл который генирирует карту

*/
// Принимаем  данные JSON
var myPoints;
if ( id > 0) {
    $.getJSON('pages/map_json.php?id=' + id, function( data ) {
        myPoints = data;
    });
}
else {
     $.getJSON('pages/map_json.php?ind=' + ind, function( data ) {
        myPoints = data;
    });
}

// Генирируем карту

function init() {
    var myMap = new ymaps.Map('map', {
        center: [43.317776, 45.694909],
        zoom: 12,
        controls: ['zoomControl']
    }),
    // Создаем коллекцию меток.
    myCollection = new ymaps.GeoObjectCollection();
    // Заполняем коллекцию данными.
    for (var i = 0, l = myPoints.length; i < l; i++) {
        var point = myPoints[i];
        myCollection.add(new ymaps.Placemark(
            point.coords, {
                balloonContentBody: point.text 
            },
            {
                preset:'islands#darkGreenIcon'
            }
        ));
    }
    // Добавляем коллекцию меток на карту.
    myMap.geoObjects.add(myCollection);
}
ymaps.ready(init);

