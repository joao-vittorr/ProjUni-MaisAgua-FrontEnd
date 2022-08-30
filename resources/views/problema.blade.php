@extends('layout.template')
@section('content')


    <!--Conteúdo da página-->


    <div class="centralizar">
        <div class="container">
            <h3 class="text-center">CADASTRAR PROBLEMA</h3><hr>
            <form action="#" th:action="@{/problema}" th:object="${ProblemaDto}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo:</label>
                    <select class="form-control" id="exampleFormControlSelect1" th:field="*{tipo_problema}">
                    <option value="0">Clique para selecionar uma opção</option>
                    <option value="1">Vazamento</option>
                    <option value="2">Falta de Água</option>
                    <option value="3">Pressão da Água</option>
                    <option value="4">Manutenção</option>
                    </select>
                </div><br/>

                <div class="form-group">
                    <label for="formFileMultiple" class="form-label">Fotos do problema:</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div><br/>

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
                            var macc = {lat: -6.479984036211917, lng: -35.43179852420206};
                            var map = new google.maps.Map(
                            document.getElementById('map'), {zoom: 15, center: macc});
                            var marker = new google.maps.Marker({position: macc, map: map});
                        }

                        console.log(getCookie("token"))
                    </script>
                <br><br>
                <input type="hidden" id="latitude" name="latitude" value="-6.479984036211917" th:field="*{latitude_problema}">
                <input type="hidden" id="longitude" name="longitude" value="3-35.43179852420206" th:field="*{longitude_problema}">
                <input type="hidden" id="token" name="token" value="token" th:field="*{token_problema}">

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" th:field="*{desc_problema}" rows="3"></textarea>
                    </div><br/>          
                    <button type="submit" class="btn btn-primary" border-radius="10px;">Enviar</button>
                    <button type="reset" class="btn btn-primary" border-radius="10px;">Restaurar</button>
                <br/>
            </form>
        </div>
    </div>   



    @endsection
    
