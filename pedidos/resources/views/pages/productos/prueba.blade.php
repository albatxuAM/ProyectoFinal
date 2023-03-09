<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h5>FORMULARIO DE PRUEBAS</h5>
<form action="" method="post" enctype='multipart/form-data'>
    @csrf
    <input type="file" name="file" id="" required>
    <input type="text" name="name" id="" value="archivo1">
    <input type="submit" value="Guardar">
</form>



<h5>FORMULARIO DE PRUEBAS</h5>

@foreach($files as $file)
    <img src="{{ $file['picture'] }}" alt=""></p>
@endforeach
</body>
</html>