$('#UbicacionPersonal').click(function () {
    latitudReal = posicion.coords.latitude;
    longitudReal = posicion.coords.longitude;
    // var markerPosicionReal = new google.maps.Marker({
    //     position: {
    //       lat: latitudReal,
    //       lng: longitudReal
    //     },
    //     title: "Mi actual ubicación"
    // });
    // markerPosicionReal.setMap(map);
    // // Si quieres centrar el mapa en el nuevo marker:
    // map.setCenter(markerPosicionReal.getPosition());

    var markerPosicionReal = new google.maps.Marker({
        position: {
          lat: latitudReal,
          lng: longitudReal
        },
        title: "Mi actual ubicación"
      });
      markerMiPosicion.setMap(map);
      markerPosicionReal.setMap(map);
});