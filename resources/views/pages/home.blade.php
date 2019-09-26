@extends('layouts.default')
@section('content')
<section class="banner-area py-5" id="banner">
       <div class="overlay"></div>
        <!-- Content -->
        <div class="container">
            <div class="row  align-items-center justify-content-center">
                <div class="col-md-12 col-lg-8">
                   <div class="banner-content text-center text-lg-left">
                        <!-- Heading -->
                        <h1 class="display-4 mb-4 ">
                            Аренда <br> автомобилей <br>Mercedes-Benz в Минске от 40 руб./сутки!
                        </h1>

                        <!-- Subheading -->
                        <p class="lead mb-5">
                            Оставьте заявку об аренде интересующего Вас автомобиля и мы свяжемся с вами в ближайшее время для уточнения деталей аренды.
                        </p>

                        <!-- Button -->
                        <p class="mb-0">
                            <a href="/conditions" target="_blank" class="btn btn-primary btn-circled">
                                Узнать об условиях
                            </a>
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <div class="banner-contact-form bg-white">
                      @if (session('status'))
                        Ваша заявка отправлена и будет рассмотрена в ближайшее время!<br><br>
                      @endif
                        <form action="/sendrequest" method="POST">
                          @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="userreqname" class="form-control" placeholder="Ваше Имя *">
                            </div>
                            <div class="form-group">
                                <input type="text" name="number" id="userreqnumber" class="form-control" placeholder="Ваш Номер телефона *">
                            </div>
                            <div class="form-group" class="form-control">
                              <select class="form-control" name="car" id="userreqcar">
                                <option>Выберите автомобиль...</option>
                                @foreach ($cars as $car)
                                <option value="{{$car['id']}}">{{$car['model']}} {{$car['engine']}}</option>
                                @endforeach
                              </select>
                            </div>
                            <div class="form-group">
                                <textarea name="message" id="userreqmessage" cols="30" rows="4" class="form-control" placeholder="Примечание"></textarea>
                            </div>
                            <button type="submit" id="createrequest" class="btn btn-dark btn-block btn-circled">Оставить заявку</button>
                        </form>
                    </div>
                </div>
            </div> <!-- / .row -->
        </div> <!-- / .container -->
    </section>

    <!-- SECTIONS
    ================================================== -->

    <!-- About
    ================================================== -->

    <section id="advantages" class="section">
          <div class="container">
              <div class="row justify-content-center">
                  <div class="col-lg-4 col-md-6">
                      <div class="img-block">
                          <img src="img/blog-lg.png" alt="" class="img-fluid">
                      </div>
                  </div>
                  <div class="col-lg-8 pt-6 col-md-12">
                      <div class="row justy-content-center">


                          <div class="col-lg-6 col-sm-6 col-md-6 mb-5">
                              <div class="text-center about-block">
                                  <div class="img-icon mb-4">
                                     <i class="ti-car"></i>
                                  </div>
                                  <h4 class="mb-2">Наши автомобили</h4>
                                  <p>Прокатитесь на одних из лучших автомобилях известного немецкого автопрома.</p>
                              </div>
                          </div>

                          <div class="col-lg-6 col-sm-6 col-md-6">
                              <div class="text-center about-block">
                                  <div class="img-icon mb-4">
                                      <i class="ti-receipt"></i>
                                  </div>
                                  <h4 class="mb-2">Гарантия и страховка</h4>
                                  <p>Все наши автомобили прошли технический осмотр и застрахованы.</p>
                              </div>
                          </div>

                          <div class="col-lg-6 col-sm-6 col-md-6">
                              <div class="text-center about-block">
                                  <div class="img-icon mb-4">
                                      <i class="ti-wallet"></i>
                                  </div>
                                  <h4 class="mb-2">Цена за аренду</h4>
                                  <p>Цены за аренду не превышают рыночных, а постоянным клиентам мы всегда рады сделать скидку.</p>
                              </div>
                          </div>
                          <div class="col-lg-6 col-sm-6 col-md-6 mb-5">
                              <div class="text-center about-block">
                                  <div class="img-icon mb-4">
                                       <i class="ti-thumb-up"></i>
                                  </div>
                                  <h4 class="mb-2">Правильный выбор</h4>
                                  <p>Наш сервис превратит заказ и использование автомобиля в удовольствие!</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>


    <!-- Pricing
    ================================================== -->
    <section class="section cars" id="cars">
        <!-- Content -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 text-center">
                    <div class="section-heading">
                        <!-- Heading -->
                        <h2 class="section-title mb-2">
                            Наши автомобили
                        </h2>

                        <!-- Subheading -->
                        <p class="mb-5">
                            В наш автопарк мы выбираем автомобили только лучшего качества для удобства и комфорта нашим клиентам!
                        </p>
                    </div>
                </div>
            </div> <!-- / .row -->
            <div class="container-fluid">
                <div id="myCarousel" class="carousel" data-ride="carousel">
                  <div class="carousel-inner row w-100 mx-auto maincarousel">
                    @foreach ($cars as $car)
                    <div class="carousel-item col-md-4 active carouselthree maincarousel">
                      <div class="card">
                        <div class="pricing-box">
                            <img src="img/work/10.jpg" alt="work-img" class="img-fluid">
                            <h4 class="forcarcards">{{$car['model']}}</h4>
                            <ul class="price-features list-unstyled">
                                <li><i class="ti-dashboard colorgreen"></i> <strong>Объем:</strong>&nbsp&nbsp{{$car['engine']}}</li>
                                <li><i class="ti-paint-bucket colorgreen"></i> <strong>Расход:</strong>&nbsp&nbsp{{$car['conscity']}} / {{$car['conscountry']}}</li>
                                @if ($car['automat'] == true)
                                <li><i class="ti-pin colorgreen"></i> <strong>Коробка:</strong>&nbsp&nbspавтоматическая </li>
                                @else
                                <li><i class="ti-pin colorgreen"></i> <strong>Коробка:</strong>&nbsp&nbspмеханическая</li>
                                @endif
                                <li><i class="ti-filter colorgreen"></i><strong> Топливо:</strong>&nbsp&nbsp{{$car['fuel']}}</li>
                                <li style="flex: right;"><i class="ti-server colorgreen"></i><strong> Стоимость:</strong>&nbsp&nbsp<span class="forprice">{{$car['cost']}} руб./сутки</span></li>
                            </ul>

                            <a href="/auto/{{$car['id']}}" class="btn btn-outline-dark btn-circled">Подробнее</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="container threemorecars">
                    <div class="row">
                      <div class="col-12 text-center mt-4">
                        <a class="btn btn-outline-secondary mx-1 prev maincarousel" href="javascript:void(0)" title="Previous">
                          <i class="fa fa-lg fa-chevron-left"></i>
                        </a>
                        <a class="btn btn-outline-secondary mx-1 next maincarousel" href="javascript:void(0)" title="Next">
                          <i class="fa fa-lg fa-chevron-right"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </section>

    <!-- Projects
    ================================================== -->

    <section id="work-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h1>Мы предлагаем возможность вам окунуться в классику немецких автомобилей 90х годов.</h1>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="lead">C 1990 годов такие автомобили, как Mercedes W210, пользуются большой популярностью среди автолюбителей. Немецкие автоделы создавали машины, которые и по сей день остаются залогом качества и комфорта. Почему бы не попробовать самому?</p>
                    </div>
                </div>
            </div>
        </section>

   <!-- TESTIMONIAL
    ================================================== -->
    <section class="section" id="comments">
        <div class="container">
           <div class="row align-items-center">
                <div class="col-lg-4 col-sm-12 col-md-12">
                    <div class="section-heading testimonial-heading">
                        <h1>Что говорят о нас</h1>
                        <p>Каждый клиент может оставить свой отзыв о работе нашего сервиса или о наших автомобилях во вкладке "О нас".</p>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12 col-md-12">
                  @foreach ($reviews as $review)
                  @if ($loop->iteration == 1 || $loop->iteration == 3)
                    <div class="row">
                  @endif
                        <div class="col-lg-6 col-md-6">
                            <div class="test-inner ">
                               <div class="test-author-thumb d-flex">
                                   <div class="test-author-info">
                                       <h4>{{$review['name']}}</h4>
                                   </div>
                               </div>

                                {{$review['text']}}

                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                        @if ($loop->iteration == 2 || $loop->iteration == 4)
                      </div>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@stop
