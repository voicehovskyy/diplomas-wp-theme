 $(document).ready(function() {
     $('.multiple-items').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         nextArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right-square slick-next" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm4.5 5.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/></svg>',
         prevArrow: '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-square slick-prev" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/></svg>',
         responsive: [{
                 breakpoint: 992,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2,
                     infinite: true,
                     dots: false
                 }
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 2,
                     slidesToScroll: 2
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1,
                     dots: false,
                     arrows: false,
                     centerMode: true,
                     centerPadding: '40px',
                 }
             }
         ]
     });
 });


 (function($) {
     function initMap($el) {

         // Find marker elements within map.
         let $markers = $el.find('.marker');

         // Create gerenic map.
         let mapArgs = {
             zoom: $el.data('zoom') || 16,
             mapTypeId: google.maps.MapTypeId.ROADMAP
         };
         let map = new google.maps.Map($el[0], mapArgs);

         // Add markers.
         map.markers = [];
         $markers.each(function() {
             initMarker($(this), map);
         });

         // Center map based on markers.
         centerMap(map);

         // Return map instance.
         return map;
     }

     function initMarker($marker, map) {

         // Get position from marker.
         let lat = $marker.data('lat');
         let lng = $marker.data('lng');
         let latLng = {
             lat: parseFloat(lat),
             lng: parseFloat(lng)
         };

         // Create marker instance.
         var marker = new google.maps.Marker({
             position: latLng,
             map: map
         });

         // Append to reference for later use.
         map.markers.push(marker);

         // If marker contains HTML, add it to an infoWindow.
         if ($marker.html()) {

             // Create info window.
             let infowindow = new google.maps.InfoWindow({
                 content: $marker.html()
             });

             // Show info window when marker is clicked.
             google.maps.event.addListener(marker, 'click', function() {
                 infowindow.open(map, marker);
             });
         }
     }

     function centerMap(map) {

         // Create map boundaries from all map markers.
         var bounds = new google.maps.LatLngBounds();
         map.markers.forEach(function(marker) {
             bounds.extend({
                 lat: marker.position.lat(),
                 lng: marker.position.lng()
             });
         });

         // Case: Single marker.
         if (map.markers.length == 1) {
             map.setCenter(bounds.getCenter());

             // Case: Multiple markers.
         } else {
             map.fitBounds(bounds);
         }
     }

     // Render maps on page load.
     $(document).ready(function() {
         $('.acf-map').each(function() {
             var map = initMap($(this));
         });
     });

 })(jQuery);