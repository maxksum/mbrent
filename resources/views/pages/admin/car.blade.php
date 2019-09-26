@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Автомобиль</li>
        </ol>

        <div class="card">
          <img class="card-img-top" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/bologna-1.jpg" alt="Bologna">
          <div class="card-body">
            <h4 class="card-title">{{$car['model']}} {{$car['engine']}}</h4>
            <p class="card-text">{{$car['description']}}</p> <!--Описание -->
          </div>
        </div>
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Таблица обслуживаний</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Дата</th>
                    <th>Описание</th>
                    <th>Сумма</th>
                    <th>Пробег</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Дата</th>
                    <th>Описание</th>
                    <th>Сумма</th>
                    <th>Пробег</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($services as $service)
                  <tr>
                    <td>{{$service['date']}}</td>
                    <td>{{$service['description']}}</td>
                    <td>{{$service['sum']}}</td>
                    <td>{{$service['mileage']}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Таблица заказов на данный автомобиль</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Дата</th>
                    <th>Клиент</th>
                    <th>Кол-во дней</th>
                    <th>Сумма</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Дата</th>
                    <th>Клиент</th>
                    <th>Кол-во дней</th>
                    <th>Сумма</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($orders as $order)
                  @if ($order['condition'] == 0)
                  <tr>
                  @else
                  <tr class="table-success">
                  @endif
                    <td>{{$order['date']}}</td>
                    <td>
                      {{$order['clientinfo'][0]['name']}} {{$order['clientinfo'][0]['surname']}}<br>
                      {{$order['clientinfo'][0]['number']}}
                    </td>
                    <td>{{$order['amount']}}</td>
                    <td>{{$order['sum']}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
@stop
