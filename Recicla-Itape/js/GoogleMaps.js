function initMap() {
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
});
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
  var myLatlng = new google.maps.LatLng(-34.397, 150.644);
  var mapOptions = {
    zoom: 8,
    center: myLatlng,
    mapTypeId: 'roadmap'
  };
    var map = new google.maps.Map(document.getElementById('map'),
    mapOptions);
}
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}


