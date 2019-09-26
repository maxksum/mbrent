@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Отзывы</li>
        </ol>

        <!-- Icon Cards-->

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Имя</th>
                    <th>Эл. Почта</th>
                    <th>Текст</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Имя</th>
                    <th>Эл. Почта</th>
                    <th>Текст</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($reviews as $review)
                  @if ($review['condition'] == 0)
                  <tr>
                  @else
                  <tr class="table-success">
                  @endif
                    <td>{{$review['name']}}</td>
                    <td>{{$review['mail']}}</td>
                    <td>{{$review['text']}}</td>
                    @if ($review['condition'] == 0)
                    <td><a href="/admin/confirmreview/{{$review['id']}}">Подтвердить</a></td>
                    @endif
                    <td><a href="/admin/deletereview/{{$review['id']}}">Удалить</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
@stop
