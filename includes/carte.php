
<div id="googleMap" class="w3-grayscale" style="width:100%;height:100px;"></div>

<input id="pacinput" class="controls" type="text" placeholder="Rechercher">

    <div id="type-selector" class="controls">
      <input type="radio" name="type" id="changetype-Tout" checked="checked">
      <label for="changetype-Tout">Tout</label>

      <input type="radio" name="type" id="changetype-establishment">
      <label for="changetype-etablisseement">Etablissement</label>

      <input type="radio" name="type" id="changetype-address">
      <label for="changetype-adresse">Adresses</label>

      <input type="radio" name="type" id="changetype-geocode">
      <label for="changetype-geocode">Geocodes</label>
    </div>





<!-- // include 'database.php';
// global $db;
// extract($_POST);
//
// if (!empty("pacinput")){
//   $q = $db->prepare("INSERT INTO historique (logUsers,lieu) values (:logUsers,:lieu)");
//   $q->execute([
//       'logUsers' => $_SESSION['llogin'],
//       'lieu' => $commentaires
// ]);
// } -->


<!--
    // include 'database.php';
    // global $db;
    // extract($_POST);
    //
    //     if(!empty("pacinput")){
    //
    //             $b = $db->prepare("SELECT * from lieux where lieu = :lieu ");
    //             $b -> execute(['lieu' => $pacinput]);
    //             $id = $b->fetch();
    //        } -->


<!-- Add Google Maps -->

    <div id="map"></div>
<script>

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 48.7116166, lng: 2.1705336999999645},
          zoom: 15
        });
        var input = /** @type {!HTMLInputElement} */(
            document.getElementById('pacinput'));

        var types = document.getElementById('type-selector');
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

        var autocomplete = new google.maps.places.Autocomplete(input);
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker.setIcon(/** @type {google.maps.Icon} */({
            url: place.icon,
            size: new google.maps.Size(71, 71),
            origin: new google.maps.Point(0, 0),
            anchor: new google.maps.Point(17, 34),
            scaledSize: new google.maps.Size(35, 35)
          }));
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }


          infowindow.setContent('<div><strong>' + place.name + '</strong><br>'+'La tour Eiffel est une tour de fer puddlé de 324 mètres de'+ '</strong><br>' +'  hauteur située à Paris, à l’extrémité nord-ouest du parc du  '+ '</strong><br>' +' Champ-de-Mars en bordure de la Seine dans le 7ᵉ  '+ '</strong><br>' +' arrondissement. Son adresse officielle est 5, avenue '+ '</strong><br>' +' Anatole-France' + '</strong><br>' +' '+ '</strong><br>' +' lieu très accessible, avec rampe, ascenseur et file prioritaire' );
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function(){autocomplete.setTypes(types);}  );
        }

        setupClickListener('changetype-Tout', []);
        setupClickListener('changetype-adresse', ['address']);
        setupClickListener('changetype-Etablissement', ['Etablissement']);
        setupClickListener('changetype-geocode', ['geocode']);
      }


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDb7Cc4WL0-8eOnbhJ_LI32AN5DxNr58ZE&libraries=places&callback=initMap"
        async defer></script>

  <style>
            .speech {border: 1px solid #DDD; width: 300px; padding: 0; margin: 0px}
            .speech input {border: 0; width: 240px; display: inline-block; height: 30px;}
            .speech img {float: right; width: 40px }
          </style>



</script>
