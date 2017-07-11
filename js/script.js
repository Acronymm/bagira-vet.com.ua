/**
 * Created by User3 on 28.01.2017.
 */
function initialize() {
    var myLatlng = new google.maps.LatLng(50.1449959, 30.7490963);
    var mapOptions = {
        zoom: 15,
        zoomControl: false,
        scaleControl: false,
        scrollwheel: false,
        disableDoubleClickZoom: true,
        center: myLatlng
    };
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'ул. Юности, 2'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);