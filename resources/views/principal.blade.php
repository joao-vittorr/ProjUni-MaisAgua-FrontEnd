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
  
    <div onload="initMap()">

    <div id="map" style="width:100%; height:100%"></div>

   </div>

@endsection