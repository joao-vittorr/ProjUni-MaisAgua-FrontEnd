@extends('layout.template')
@section('content')


   <!--Conteúdo da página-->
   <div class="centralizar">
        <div class="container">
            <h3 class="text-center">Consulta</h3><hr>
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
                    </div><br/>

                    <label for="exampleFormControlInput1">Localização:</label>
   
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

 </script>
 <br><br>


                <div style="margin-top: 30px;">  
                    <span class="counter-reset"></span>  
                    <input type="checkbox" class="meucheckbox" id="checkbox1" /><label for="checkbox1" >Mesmo problema</label>  
                    <span class="counter-print"></span>  
                <div>  


                    <div class="botaoCentralizado">
                        <button type="button" class="btn btn-primary" border-radius="10px;">Buscar</button>
                        <a href="/"><button type="button" class="btn btn-primary" border-radius="10px;">Voltar</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>   

    @endsection