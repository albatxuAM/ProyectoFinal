<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="calendar-14/fonts/icomoon/style.css">

    <link rel="stylesheet" href="calendar-14/css/rome.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="calendar-14/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="calendar-14/css/style.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    @vite(['resources/js/app.js'])
    @vite(['resources/sass/app.scss'])

    <style>
        .plato .card-footer {
            background-color: white;
        }

        .filtro {
            width: 7em;
        }

        #marco {
            box-shadow: 5px 6px 16px -7px rgba(0, 0, 0, 0.75);
            background-color: #8b0066;
            color: white;
        }

        #cont {
            background-color: #3c4c5c;
            color: white;
            background-image: url("{{ asset('images/fondoCard.png') }}");
            background-repeat: no-repeat;
            background-position: right center;
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

        #volver {
            color: #8b0066;
            text-decoration: none;
        }

        a {
            color: #8b0066;
            text-decoration: none;
        }
    </style>
</head>