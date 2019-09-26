@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Главная</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5">{{$reviewscount}} Новых отзывов</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/admin/reviews">
                <span class="float-left">Просмотреть</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5">{{$requestscount}} Новых заявок</div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="/admin/requests">
                <span class="float-left">Просмотреть</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
        </div>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Расходы и доходы</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Автомобиль</th>
                    <th style="width: 10%">{{$first}}</th>
                    <th style="width: 10%">{{$second}}</th>
                    <th style="width: 10%">{{$third}}</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Автомобиль</th>
                    <th style="width: 10%">{{$first}}</th>
                    <th style="width: 10%">{{$second}}</th>
                    <th style="width: 10%">{{$third}}</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach($cars as $car)
                  <tr>
                    <td>{{$car['model']}} {{$car['engine']}} (<a href="/admin/car/{{$car['id']}}">Подробнее</a>)</td>
                    @if($car['first'] > 0)
                    <td class="table-success">{{$car['first']}}</td>
                    @elseif ($car['first'] < 0)
                    <td class="table-danger">{{$car['first']}}</td>
                    @else
                    <td>{{$car['first']}}</td>
                    @endif
                    @if($car['second'] > 0)
                    <td class="table-success">{{$car['second']}}</td>
                    @elseif ($car['second'] < 0)
                    <td class="table-danger">{{$car['second']}}</td>
                    @else
                    <td>{{$car['second']}}</td>
                    @endif
                    @if($car['third'] > 0)
                    <td class="table-success">{{$car['third']}}</td>
                    @elseif ($car['third'] < 0)
                    <td class="table-danger">{{$car['third']}}</td>
                    @else
                    <td>{{$car['third']}}</td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
@stop
