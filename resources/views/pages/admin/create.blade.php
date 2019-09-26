@extends('layouts.admin')
@section('content')
<div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item active">Добавить новый заказ</li>
        </ol>

  <form>
  <div class="form-group">
    <input type="hidden" value="true" name="createorder"/>
    <label for="name">Имя заказчика<span style="color: red"> *</span></label>
    <input type="text" class="form-control" id="clientname" name="name">
  </div>
  <div class="form-group">
    <label for="surname">Фамилия заказчика<span style="color: red"> *</span></label>
    <input type="text" class="form-control" id="clientsurname" name="surname">
  </div>
  <div class="form-group">
    <label for="number">Номер телефона<span style="color: red"> *</span></label>
    <input type="text" class="form-control" id="clientnumber" name="number">
  </div>
  <div class="form-group">
    <label for="email">Эл. Почта</label>
    <input type="text" class="form-control" id="email" name="email">
  </div>
  <div class="form-group">
    <select class="form-control" id="selectedcar" name="selectedcar">
      <option>Выберите автомобиль</option>
      @foreach ($cars as $car)
      <option value="{{$car['id']}}">{{$car['model']}} {{$car['engine']}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="amount">Количество дней<span style="color: red"> *</span></label>
    <input type="text" class="form-control" id="orderamount" name="amount">
  </div>
  <button class="btn btn-primary btn-lg" id="createorder">Добавить заказ</button>
</form>
      </div>
@stop
