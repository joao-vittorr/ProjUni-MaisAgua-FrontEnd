@extends('layout.template')
@section('content')

    <!--Conteúdo da página-->

<style>

 #map {

    width: 100%;
    height: 400px;
    background-color: grey;

}

</style>
  


    <div id="map" style="width:100%; height:90%"></div>


   <script>

        function initMap() {

            var macc = {lat: -6.479984036211917, lng: -35.43179852420206};
            var map = new google.maps.Map(
                document.getElementById('map'), {zoom: 15, center: macc});

            $.ajax("http://127.0.0.1:8000/qq").done(resp => {
                $(resp).each(function(i, probl){
                    var marker = new google.maps.Marker({position: probl, map: map, label:probl.tipo});
                })
            })
            


        


        }

        initMap()

</script>
   

@endsection