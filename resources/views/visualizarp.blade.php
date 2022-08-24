@extends('layout.template')
@section('content')


<!--Conteúdo da página-->
<div class="centralizar">
    <div class="container">
        <h3 class="text-center">VISUALIZAR PROBLEMA</h3>
        <hr>
        <form action="" method="POST">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo:</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option value="0">Selecione uma opção</option>
                    <option value="1">Vazamento</option>
                    <option value="2">Falta de Água</option>
                    <option value="3">Pressão da Água</option>
                    <option value="4">Manutenção</option>
                </select>
            </div>

            <div class="form-group">
                <label for="formFileMultiple" class="form-label">Fotos do problema:</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
            </div>

            <div class="form-group">

                <label for="exampleFormControlInput1">Localização:</label>
            </div>

            <style>
                #map {

                    width: 100%;
                    height: 100px;
                    background-color: grey;

                }
            </style>
            <div id="map"></div>
            <script>
                function initMap() {
                    var macc = {
                        lat: 42.1382114,
                        lng: -71.5212585
                    };
                    var map = new google.maps.Map(
                        document.getElementById('map'), {
                            zoom: 15,
                            center: macc
                        });
                    var marker = new google.maps.Marker({
                        position: macc,
                        map: map
                    });
                }
            </script>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentar:</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>


            <div class="form-group">
                <span class="counter-reset"></span>
                <input type="checkbox" class="meucheckbox" id="checkbox1" /><label for="checkbox1">Mesmo problema</label>
                <span class="counter-print"></span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" border-radius="10px;">Enviar</button>
                <button type="reset" class="btn btn-primary" border-radius="10px;">Restaurar</button>
            </div>
        </form>

    </div>


    @endsection