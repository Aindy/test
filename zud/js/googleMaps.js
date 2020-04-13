var map;
function initialize() {

    var mapOptions = {
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DEFAULT,
            position: google.maps.ControlPosition.DEFAULT
        },
        zoom: 16,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.DEFAULT,
            position: google.maps.ControlPosition.DEFAULT
        },
        streetViewControl: true,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.DEFAULT
        },
        scaleControl: true,
        center: new google.maps.LatLng(43.31513862488736, 45.69791819839477)
    };

    map = new google.maps.Map(document.getElementById('map-canvas'),
        mapOptions);

    var icon = {
        path: 'M16.5,51s-16.5-25.119-16.5-34.327c0-9.2082,7.3873-16.673,16.5-16.673,9.113,0,16.5,7.4648,16.5,16.673,0,9.208-16.5,34.327-16.5,34.327zm0-27.462c3.7523,0,6.7941-3.0737,6.7941-6.8654,0-3.7916-3.0418-6.8654-6.7941-6.8654s-6.7941,3.0737-6.7941,6.8654c0,3.7916,3.0418,6.8654,6.7941,6.8654z',
        anchor: new google.maps.Point(16.5, 51),
        fillColor: '#088C19',
        fillOpacity: 0.6,
        strokeWeight: 0,
        scale: 1
    };

    var marker = new google.maps.Marker({
        position: new google.maps.LatLng(43.31520107453574, 45.697660706329316),
        map: map,
        icon: icon,
        title: 'marker'
    });
}

google.maps.event.addDomListener(window, 'load', initialize);

function checkResize(){

    var center = map.getCenter();
    google.maps.event.trigger(map, 'resize');
    map.setCenter(center);
}

window.onresize = checkResize;