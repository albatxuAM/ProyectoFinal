<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
    @vite([ 'resources/js/botonesCarritos.js'])

    <style>
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
        #cont{
            background-color: #9ea5ad;
            color:white;
            background-image: url("{{ asset('images/fondoCard.png') }}");
            background-repeat: no-repeat;
            background-position: right center;
        }
        a{
            background-color: #8b0066!important;
            color: white!important;
            border-color: #8b0066!important;
            text-decoration: none;
        }
    </style>
</head>