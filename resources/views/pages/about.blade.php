@extends('layouts.default')
@section('content')
<section id="contact-info">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-map-marker"></i>
                        <h4>Адрес</h4>
                        <p class="lead">153 Williamson Plaza, 09514</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-mail"></i>
                        <h4>Эл. почта</h4>
                        <p class="lead">supportdb@dthememascot.com</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 col-md-6">
                    <div class="contact-info-block text-center">
                        <i class="pe-7s-phone"></i>
                        <h4>Номер телефона</h4>
                        <p class="lead">+23-68017684</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="contact">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-8 col-lg-6">
                    <!-- Heading -->
                    <h2 class="section-title mb-2 ">
                        Оставьте ваш отзыв</span>
                    </h2>

                    <!-- Subheading -->
                    <p class="mb-5 ">
                        Напишите ваше мнение о работе нашего сервиса или наших автомобилях. Каждый оставленный отзыв поможет сделать наш сервис еще лучше!
                    </p>

                </div>
            </div> <!-- / .row -->

            <div class="row">
                <div class="col-lg-6">
                   <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" @if (!session('status')) style="display: none" @endif role="alert">
                                Благодарим за ваш отзыв!
                            </div>
                        </div>
                    </div>
                    <!-- end message -->
                    <!-- Contacts Form -->
                    <form class="contact_form" method="POST" action="./addreview">
                      @csrf
                        <div class="row">
                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Ваше имя
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group">
                                        <input class="form-control" name="name" id="name" required="" type="text">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <!-- Input -->
                            <div class="col-sm-6 mb-6">
                                <div class="form-group">
                                    <label class="h6 small d-block text-uppercase">
                                        Ваша Эл. почта
                                        <span class="text-danger">*</span>
                                    </label>

                                    <div class="input-group ">
                                        <input class="form-control" name="email" id="email" required="" type="email">
                                    </div>
                                </div>
                            </div>
                            <!-- End Input -->

                            <div class="w-100"></div>
                            <!-- End Input -->
                        </div>

                        <!-- Input -->
                        <div class="form-group mb-5">
                            <label class="h6 small d-block text-uppercase">
                                Ваш отзыв
                                <span class="text-danger">*</span>
                            </label>

                            <div class="input-group">
                                <textarea class="form-control" rows="4" name="message" id="message" required=""></textarea>
                            </div>
                        </div>
                        <!-- End Input -->

                        <div class="">
                           <button type="submit" class="btn btn-primary btn-circled" >Отправить</button>

                        </div>
                    </form>
                    <!-- End Contacts Form -->
                </div>

                <div class="col-lg-6 col-md-6">
                  <p>Mercedes-Benz Rent - это сервис по аренде автомобилей, который отличается от других своим необычным на первый взгляд автопарком. Мы стараемся передать нашим клиентам дух того времени и показать, что тем автомобилям не страшны года и они всегда остаются в моде. </p>
                </div>
            </div>
        </div>
    </section>
@stop
