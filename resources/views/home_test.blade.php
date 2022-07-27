<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" 
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="{{asset("css/app.css")}}" rel="stylesheet" />
    <title>Teste - +Água</title>
</head>
<body>
    <div class="centralizar">
        <div class="container">
            <h3 class="text-center">CADASTRAR PROBLEMA</h3>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Tipo</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                    <option value="0">Selecione uma opção</option>
                    <option value="1">Vazamento</option>
                    <option value="2">Falta de Água</option>
                    <option value="3">Pressão da Água</option>
                    <option value="4">Manutenção</option>
                    </select>
                </div>
                <div class="form-group">
                <label for="exampleFormControlInput1">Latitude</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="-0000000">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Longitude</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="-0000000">
                </div>
                <div class="form-group">
                <label for="formFileMultiple" class="form-label">Anexar fotos</label>
                <input class="form-control" type="file" id="formFileMultiple" multiple />
                </div>
                <div class="form-group">
                <label for="exampleFormControlTextarea1">Descrição</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="container">
                <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>   
</body>
</html>

