$(document).ready(function () {

  function localizacion(posicion) {

    console.log(posicion.coords);


    var latitud;
    var longitud;

    //Generamos el mapa que muestre y cual será el punto central
    var map = new google.maps.Map(document.getElementById('Mapa'), {
      center: {
        lat: latitud,
        lng: longitud
      },
      zoom: 14
    });

    //Generamos el marcadores para señalar una posición
    var markerMiPosicion = new google.maps.Marker({
      position: {
        lat: latitud,
        lng: longitud
      },
      title: "Ubicación Vendedor"
    });


    $('#UbicacionPersonal').ready(function () {

      latitudReal = posicion.coords.latitude;
      longitudReal = posicion.coords.longitude;
      var markerPosicionReal = new google.maps.Marker({
        position: {
          lat: latitudReal,
          lng: longitudReal
        },
        title: "Mi actual ubicación"
      });
      markerPosicionReal.setMap(map);
      map.setCenter(markerPosicionReal.getPosition());


    });



    // Mostramos los marcadores en el mapa.
    markerMiPosicion.setMap(map);



  }

  // En caso de no poder geolocalizar hay que tener un mensaje de error (o acción)
  function error() {
    alert('No se puede obtener tu ubicación actual')
    // un error a valorar es que el usuario no permite la geoloc, code:1
  }


  // Ahora empleamos todo lo declarado anteriormente.
  // Comprobamos si el navegador soporta la geolocalización
  if (navigator.geolocation) {
    //Caso SI soporta geolocalización. Ejecuto la API y llamo a mis funciones.
    navigator.geolocation.getCurrentPosition(localizacion, error);
  } else {
    //Caso NO soporta geolocalización
    alert('Navegador NO soporta geolocalización');
  }
});
