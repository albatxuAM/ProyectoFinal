<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- Bootstrap core JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite(['resources/js/app.js'])
    @vite(['resources/sass/app.scss'])

    <style>
        .plato{
            height: 23em;
        }
        .plato .card-block{
            height: 7em;
        }
        .plato img{
            height: 10em;
        }
        .plato .card{
            border:none;
        }
        .plato .card-footer{
            background-color: white;
        }
        .avisos .card-body{
            height: 16em;
        }
        .filtro{
            width: 7em;
        }
        
        .titulo {
            font-size: 3rem;
            font-family: 'Dancing Script', cursive;
            font-weight: bold;
            color: #8b0066;
        }

        nav {
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, .2);
        }

        #cardIndex {
            border: none;
        }
    </style>
</head>