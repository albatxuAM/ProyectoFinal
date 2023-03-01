@extends('layouts.layout')
@section('content')


<div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
          <h2 class="col text-center mb-4">Cesta</h2>
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll rounded" data-mdb-perfect-scrollbar="true" >
                    <table class="table table-dark mb-0">
                    <thead class="sticky-top" style="background-color: #393939; ">
                      <tr class="text-uppercase text-success ">
                        <th  class="text-center">Producto</th>
                        <th  class="text-center">Precio</th>
                        <th  class="text-center">Cant</th>
                        <th  class="text-center">Subtot</th>
                        <th  class="text-center">Eliminar</th>
                      </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td  class="text-center">Producto</td>
                        <td  class="text-center">Precio</td>
                        <td  class="text-center">Cant</td>
                        <td  class="text-center">Subtot</td>
                        <td  class="text-center">
                            <a href="#">
                            <button  class="btn btn-outline-warning"><i class="bi bi-trash"></i></button>
                            </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                  </table>
                </div>
              </div>


          </div>
        </div>
      </div>
    </div>
  </div>
@endsection