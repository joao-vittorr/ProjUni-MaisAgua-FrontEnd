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

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Localização:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="-0000000">
                    </div><br/>
                    <div class="botaoCentralizado">
                        <button type="button" class="btn btn-primary" border-radius="10px;">Buscar</button>
                        <a href="/"><button type="button" class="btn btn-primary" border-radius="10px;">Voltar</button></a>
                    </div>
                </div>
            </form>
        </div>
    </div>   

    @endsection