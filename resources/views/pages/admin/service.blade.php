@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Добавить новое обслуживание</li>
        </ol>

        <form>
  <div class="form-group">
    <label for="name">Описание<span style="color: red"> *</span></label>
    <input type="text" class="form-control" id="servicedesc" name="desc">
    <input type="hidden" value="true" name="createservice"/>
  </div>
  <div class="form-group">
    <label for="surname">Сумма<span style="color: red"> *</span></label>
    <input type="text" class="form-control" id="servicesum" name="sum">
  </div>
  <div class="form-group">
    <label for="email">Пробег</label>
    <input type="text" class="form-control" id="servicemileage" name="mileage">
  </div>
  <div class="form-group">
    <select class="form-control" id="servicecar" name="selectedcar">
      <option>Выберите автомобиль</option>
      @foreach ($cars as $car)
      <option value="{{$car['id']}}">{{$car['model']}} {{$car['engine']}}</option>
      @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary btn-lg" id="createservice">Добавить обслуживание</button>
</form>
      </div>
@stop
