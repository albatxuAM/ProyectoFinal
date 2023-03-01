@extends('layouts.layout')
@section('content')

<div class="row my-4 justify-content-center">
    <div class="col-10 ">
        <div class="table-responsive">
            <table class="table align-middle mb-0 caption-top table-hover">
                <caption>Pedidos Pendientes:</caption>
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Platos</th>
                        <th colspan="2" scope="col">Estados</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  A list item
                                  <span class="badge bg-primary rounded-pill">7</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  A second list item
                                  <span class="badge bg-primary rounded-pill">2</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                  A third list item
                                  <span class="badge bg-primary rounded-pill">1</span>
                                </li>
                            </ul>
                        </td>
                        <td>
                            <span class="badge bg-secondary rounded-pill d-inline">Recibido</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">dfgfd</button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Recibido</a>
                                    <a class="dropdown-item" href="#">Proceso</a>
                                    <a class="dropdown-item" href="#">Preparado</a>
                                    <a class="dropdown-item" href="#">Cancelado</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Mark</td>
                        <td>
                            <span class="badge bg-warning rounded-pill d-inline">Proceso</span>
                        </td>
                        <td>
                            <select class="form-select" aria-label="Disabled select example" disabled>
                                <option selected value="1" class="badge bg-warning rounded-pill d-inline">Proceso
                                </option>
                                <option value="2" class="badge bg-warning rounded-pill d-inline">Proceso</option>
                                <option value="3" class="badge bg-warning rounded-pill d-inline">Proceso</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Mark</td>
                        <td><span class="badge bg-success rounded-pill d-inline">Preparado</span></td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Mark</td>
                        <td><span class="badge bg-danger rounded-pill d-inline">Cancelado</span></td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
          </nav>
    </div>
</div>

@endsection