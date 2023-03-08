<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<style>
    table {
  border-collapse: collapse;
}
</style>
<body>
    <h1>{{$mailData['title']}}</h1>
    <p>{{ $mailData['body'] }}</p>
    <h5>Resumen de su pedido</h5>
    <div class="table-responsive">
        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Importe</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $total = 0;
                ?>

                @foreach($mailData['productosPedido'] as $producto)
                    <tr>
                        <td>{{ $producto->producto->nombre }}</td>
                        <td>{{ $producto->cantidad }}</td>
                        <td>{{ $producto->cantidad * $producto->producto->precio }}€</td>
                    </tr>

                @endforeach
                
                <?php
                foreach($mailData['productosPedido'] as $producto){ 
                    $total = $total + ($producto->cantidad * $producto->producto->precio);
                }
                ?>
                <tr>
                    <td  colspan="2"><b>Total</b></td>
                    <td ><b>{{ $total }}€</b></td>
                </tr>
                
                
            </tbody>
        </table>
    </div>
    
    <p>Muchas gracias por confiar en nosotros, le mantendremos informado sobre el estado de su pedido</p>
    
</body>
</html>