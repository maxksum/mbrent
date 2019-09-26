@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Заказы</li>
        </ol>

        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Дата</th>
                    <th>Клиент</th>
                    <th>Номер телефона</th>
                    <th>Автомобиль</th>
                    <th>Количество дней</th>
                    <th>Сумма</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Дата</th>
                    <th>Клиент</th>
                    <th>Номер телефона</th>
                    <th>Автомобиль</th>
                    <th>Количество дней</th>
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
                    <td>{{$order['clientinfo'][0]['name']}} {{$order['clientinfo'][0]['surname']}}</td>
                    <td>{{$order['clientinfo'][0]['number']}}</td>
                    <td>{{$order['carinfo'][0]['model']}} {{$order['carinfo'][0]['engine']}} (<a href="/admin/car/{{$order['carinfo'][0]['id']}}">Подробнее</a>)</td>
                    <td>{{$order['amount']}}</td>
                    <td>{{$order['sum']}}</td>
                    @if ($order['condition'] == 0)
                    <td><a href="/admin/endorder/{{$order['id']}}">Завершен</a></td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <form>


      </div>
@stop
