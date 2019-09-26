@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Автомобили</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Автомобиль</th>
                    <th>Объем</th>
                    <th>$</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Автомобиль</th>
                    <th>Объем</th>
                    <th>$</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($cars as $car)
                  <tr>
                    <td>{{$car['model']}}</td>
                    <td>{{$car['engine']}}</td>
                    <td>{{$car['cost']}}</td>
                    <td><a href="/admin/car/{{$car['id']}}">Подробнее</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
@stop
