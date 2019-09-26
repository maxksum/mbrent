@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Клиенты</li>
        </ol>

        <!-- DataTables Example -->

        <div class="card mb-3">

          <div class="card-body">
            <form>
              <div class="input-group mb-3">
                @if(!isset($searchquery))
                <input type="text" class="form-control" name="search" placeholder="Поиск...">
                @else
                <input type="text" class="form-control" name="search" value="{{$searchquery}}">
                @endif
                <div class="input-group-append">
                  <button class="btn btn-success" type="submit">Поиск</button>
                </div>
              </div>
            </form>
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Эл. почта</th>
                    <th>Номер телефона</th>
                    <th style="width: 40%">Примечание</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>Имя</th>
                    <th>Фамилия</th>
                    <th>Эл. почта</th>
                    <th>Номер телефона</th>
                    <th>Примечание</th>
                  </tr>
                </tfoot>
                <tbody>
                  @foreach ($clients as $client)
                  <tr>
                    <td>{{$client['name']}}</td>
                    <td>{{$client['surname']}}</td>
                    <td>{{$client['mail']}}</td>
                    <td>{{$client['number']}}</td>
                    @if ($edit == $client['id'])
                    <td><textarea class="form-control" id="exampleFormControlTextarea12" name="commentarea" rows="3">{{$client['comment']}}</textarea><input type="hidden" name="id" id="clientid" value="{{$client['id']}}"/></td>
                    @if (isset($searchquery))
                    <td><a id="savecom" href="/admin/clients?search={{$searchquery}}">Сохранить</a></td>
                    @else
                    <td><a id="savecom" href="/admin/clients">Сохранить</a></td>
                    @endif
                    @else
                    <td>{{$client['comment']}}</td>
                    @if (isset($searchquery))
                      <td><a href="/admin/clients?search={{$searchquery}}&edit={{$client['id']}}">Редактировать</a></td>
                    @else
                      <td><a href="/admin/clients?edit={{$client['id']}}">Редактировать</a></td>
                    @endif
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
