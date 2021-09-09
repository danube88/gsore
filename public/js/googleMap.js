    /****************************
    * Google Map - Location
    *****************************/

   function init(jQuery) {
       var mapOptions = {
           zoom: 11,
           scrollwheel: false,
           center: new google.maps.LatLng(40.709896, -73.995481),
       };
       var mapElement = document.getElementById('map');
       var map = new google.maps.Map(mapElement, mapOptions);
       var marker = new google.maps.Marker({
           position: new google.maps.LatLng(40.709896, -73.995481),
           map: map,
           icon: 'http://gsore.loc/img/icon/map-point.png',
           animation: google.maps.Animation.BOUNCE,
           title: 'Snazzy!'
       });
   };


    $( document ).ready( init );
    // or:
    $( window ).on( "load", init );
