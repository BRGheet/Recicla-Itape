  var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -23.588225, lng: -48.040106},
          zoom: 13,
          zoomControl: false,
          scaleControl: false,
          streetViewControl: false,
        });
      }