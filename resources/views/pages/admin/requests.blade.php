@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Заявки</li>
        </ol>
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Дата и время</th>
                    <th>Имя</th>
                    <th>Номер телефона</th>
                    <th>Желаемый автомобиль</th>
                    <th>Примечание</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Дата и время</th>
                    <th>Имя</th>
                    <th>Номер телефона</th>
                    <th>Желаемый автомобиль</th>
                    <th>Примечание</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($requests as $request)
                  @if ($request['condition'] == 0)
                  <tr class="table-danger">
                  @else
                  <tr>
                  @endif
                    <td>{{$request['date']}}</td>
                    <td>{{$request['name']}}</td>
                    <td>{{$request['number']}}</td>
                    <td>{{$request['carinfo'][0]['model']}} {{$request['carinfo'][0]['engine']}} (<a href="/admin/car/{{$request['carinfo'][0]['id']}}">Подробнее</a>)</td>
                    <td>{{$request['comment']}}</td>
                    @if ($request['condition'] == 0)
                    <td><a href="/admin/acceptrequest/{{$request['id']}}">Принять</a></td>
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
