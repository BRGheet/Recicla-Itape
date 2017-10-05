  function initMap() {
        var meio = {lat: -23.588225, lng: -48.040106};
        var map = new google.maps.Map(document.getElementById('map'), {
          center: meio,
          zoom: 13,
          /*Minimo zoom limite*/
          minZoom:13,
          zoomControl: true,
          scaleControl: true,
          streetViewControl: false,
          /*Desabilita ctrl para zoon*/
          gestureHandling: 'greedy'
        });
        var info = new google.maps.InfoWindow({
          content: '<h1>LOL</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet convallis diam, nec aliquet nisl. Pellentesque sem mauris, consequat in aliquet a, auctor at sapien.</p>'
        });
        var marker = new google.maps.Marker({
          position: {lat: -23.568885, lng:-48.030473},
          map: map,
          title: 'Lol'
        });
        marker.addListener('click', function(){
          info.open(map,marker);
        });

        marker.setMap(map);

        var info2 = new google.maps.InfoWindow({
          content: '<h1>Second</h1><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet convallis diam, nec aliquet nisl. Pellentesque sem mauris, consequat in aliquet a, auctor at sapien.</p>'
        });
        var marker2 = new google.maps.Marker({
          position: {lat: -23.573643, lng: -48.028112},
          map: map,
          title: 'Lol2'
        });
        marker2.addListener('click', function(){
          info2.open(map,marker2);
        });

        marker2.setMap(map);

        //Foreach para ser feita a exibição


    }