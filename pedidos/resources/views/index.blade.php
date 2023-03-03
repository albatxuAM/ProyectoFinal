@extends('layouts.layout')
@section('content')
<div class="row img-cover test d-flex justify-content-center my-3">
    <div class="col-11">
        <img class="img-fluid w-100 h-100" src="{{ asset('images/imagen2.jpeg') }}" alt="Imagen presentacion">
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-10 card mb-3" id="cardIndex">
        <div class="row g-0 d-flex justify-content-center">

            <div class="col-5 bg-light shadow d-flex align-items-center">
                <div class="card-body">
                    <div class="row">
                        <div class="titulo col-10">
                            ESCUELA DE HOSTELERÍA DE EGIBIDE MENDIZORROTZA
                        </div>
                        <span class="slogan col-10 mt-3 ">La Escuela de Hostelería de EGIBIDE-MENDIZORROTZA ofrece una variada oferta gastronómica, que podrás disfrutar en nuestro restaurante o disponible también para llevar.</span>

                    </div>
                    <div class="d-flex justify-content-end mt-5 pe-5 me-5">
                    <a href="" class="btn btn-outline-secondary">Carta</a>
                </div>
                </div>
                

            </div>



            <div id="carouselExampleControls" class="carousel slide col-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active ">
                        <img src="{{ asset('images/plato1.jpg') }}" class="d-block w-100 img-fluid" alt="Imagen plato 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/plato2.jpg') }}" class="d-block w-100 img-fluid" alt="Imagen plato 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/plato3.jpg') }}" class="d-block w-100 img-fluid" alt="Imagen plato 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
</div>



<div class="row">
    @foreach($productos as $product)
        <div class="col-xs-18 col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="{{ $product->image }}" alt="">
                <div class="caption">
                    <h4>{{ $product->nombre }}</h4>
                    <p><strong>Price: </strong> {{ $product->precio }}$</p>
                    <p class="btn-holder"><a href="{{ route('store.carrito', $product->id) }}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
    </div>



<table id="cart" class="table table-hover table-condensed">
    <thead>
            <th style="width:50%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:8%">Quantity</th>
            <th style="width:22%" class="text-center">Subtotal</th>
            <th style="width:10%"></th>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('carrito'))
            @foreach(session('carrito') as $id => $details)
                @php $total += $details['precio'] * $details['cantidad'] @endphp
                <tr data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-9">
                                <h4 class="nomargin" id="producto{{$id}}">{{ $details['nombre'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price" id="precio{{$id}}">${{ $details['precio'] }}</td>
                    <td data-th="Quantity">
                    <div class="col d-flex">
                            <input type="button" id="-{{$id}}" class=" btn btn-primary me-2 cant" value="-">
                            <input type="text" id="{{$id}}" value="{{ $details['cantidad'] }}" class=" form-control quantity update me-2 disabled" />
                            <input type="button" id="+{{$id}}" class=" btn btn-primary cant" value="+">
                        </div>
                    </td>
                    <td data-th="Subtotal" id="subtotal{{$id}}" class="text-center">${{ $details['precio'] * $details['cantidad'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm remove"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right"><h3><strong id="total">Total {{ $total }}</strong></h3></td>
        </tr>
        <tr>
            <td colspan="5" class="text-right">
                <a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-success">Checkout</button>
            </td>
        </tr>
    </tfoot>
</table>

<script type="text/javascript">
    //make a fetch call taking the id of the product and the quantity without using jquery

            var botones = document.getElementsByClassName('cant');
            for(var j = 0; j < botones.length; j++) {
                botones[j].addEventListener('click', function(e) {
                    var id = e.target.id;
                    console.log(id);
                    if(id == '-'+id.charAt(1)) {
                        id = id.replace('-','');
                        var cantidad = document.getElementById(id).value--;
                        var precio = document.getElementById('precio'+id).textContent;
                        precio = precio.replace('$', '');
                        console.log(precio);
                        var subtotal = precio  * cantidad;
                        document.getElementById('subtotal'+id).textContent = '$' + subtotal;

                    } else {
                        id = id.replace('+','');
                        var cantidad = document.getElementById(id).value++;
                        var precio = document.getElementById('precio'+id).textContent;
                        precio = precio.replace('$', '');
                        console.log(precio);
                        var subtotal = precio  * cantidad;
                        document.getElementById('subtotal'+id).textContent = '$' + subtotal;
                    }

                    var precio = document.getElementById('precio'+id.replace).textContent;
                    console.log(precio);
                    precio = precio.replace('$', '');
                    console.log(precio);
                    var subtotal = precio  * cantidad;
                    document.getElementById('subtotal'+id).textContent = '$' + subtotal;

                    var total = document.getElementById('total').textContent;
                    console.log(total);
                    total = total.replace('Total ', '');
                    console.log(total);
                    total = parseFloat(total) + parseFloat(precio);
                    document.getElementById('total').textContent ='Total ' + total;

                    fetch('/carrito/update', {
                        method: 'put',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            id: id,
                            cantidad: cantidad,
                            precio: precio
                        })
                    })
                    .then(response => {
                        return response.json();
                    })
                    .then(data => {
                        console.log(data);
                    })
                    .catch(err => {
                        console.log(err);
                    });
                });
            }

    var removeCartItemButtons = document.getElementsByClassName('remove');
    for (var i = 0; i < removeCartItemButtons.length; i++) {
        var button = removeCartItemButtons[i];
        button.addEventListener('click', function(event) {
            var buttonClicked = event.target;
            buttonClicked.parentElement.parentElement.remove();
            updateCartTotal();
        });
    }
   

</script>
@endsection