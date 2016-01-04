@extends('app')

@section('content')
    <h2>Contactanos</h2>
    <div class="col-lg-5">
        <h2>Dirección
            <small>
                <br>
                Calle Belisario Salinas Nº 573, entre Presbítero Medina y Andrés Muños, Zona de Sopocachi
            </small>
        </h2>
        <h2>Telefonos
            <small>
                <br>
                (591) 2-2128275 <br> (591) 2-2128208
            </small>
        </h2>
    </div>

    <script>
        function initialize() {
            var mapCanvas = document.getElementById('map');
            var mapOptions = {
                center: new google.maps.LatLng(-16.5116164, -68.1300534),
                zoom: 15,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(mapCanvas, mapOptions)
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(-16.511620, -68.128507),
                map: map,
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <div>
        <div id="map" style="width:500px;height: 400px"></div>
    </div>

@endsection