@extends('layout.template')
@section('content')


   <!--Conteúdo da página-->


   <div class="centralizar">
        <div class="container">
            <h3 class="text-center">Consulta</h3>
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
                <label for="exampleFormControlInput1">Localização:</label>


                <div class="card">

            <div class="card-body" style="border:100">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.2716145501336!2d-35.42694978528191!3d-6.48724839530716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ad8fcf393cde8d%3A0x70898cede98f3a52!2sR.%20Jos%C3%A9%20Alexandre%20da%20Silva%2C%20Nova%20Cruz%20-%20RN%2C%2059215-000!5e0!3m2!1spt-BR!2sbr!4v1659049905675!5m2!1spt-BR!2sbr" 
                    width="1190" 
                    height="90"
                    style="border:10;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
            </div>
            </iframe>
            </div>
                
                
                </div>

               
                
            </form>
        </div>
    </div>   

    @endsection