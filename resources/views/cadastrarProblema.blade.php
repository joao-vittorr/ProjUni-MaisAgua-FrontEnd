@extends('layout.template')
@section('content')


    <!--Conteúdo da página-->


    <div class="centralizar">
        <div class="container">
            <h3 class="text-center">___________________________ CADASTRAR PROBLEMA _____________________________</h3>
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
                    <label for="formFileMultiple" class="form-label">Anexar fotos:</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Localização:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="-0000000">
                </div>
                </div>
                  
                <!--<div class="container">
                <input type="submit" value="Enviar">-->

                <div class="container1">
                    <button type="submit" class="btn btn-primary">Publicar</button>
                </div>
                </div>
            </form>
        </div>
    </div>   



    @endsection
    
   