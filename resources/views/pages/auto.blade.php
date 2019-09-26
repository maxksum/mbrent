@extends('layouts.default')
@section('content')
<section class="section" id="single-project">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-10">
                  <div class="row">
                      <div class="col-lg-12">
                        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active" data-interval="false">
                          <div class="project-lg-img">
                              <img src="../img/projects/p-2.jpg" alt="" class="img-fluid">
                          </div>
                        </div>
                        <div class="carousel-item" data-interval="false">
                      <div class="project-lg-img">
                          <img src="../img/projects/p-2.jpg" alt="" class="img-fluid">
                      </div>
                    </div>
                    <div class="carousel-item" data-interval="false">
                  <div class="project-lg-img">
                      <img src="../img/projects/p-2.jpg" alt="" class="img-fluid">
                  </div>
                </div>

                <div class="carousel-item" data-interval="false">
              <div class="project-lg-img">
                  <img src="../img/projects/p-2.jpg" alt="" class="img-fluid">
              </div>
            </div>                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
                          <div class="project-details-info">
                            <h3 class="cartitle">{{$car['model']}}</h3>
                              <div class="info-block-2">
                                  <h5>Объем</h5>
                                  <p>{{$car['engine']}}</p>
                              </div>
                                  <div class="info-block-2">
                                  <h5>Расход (город)</h5>
                                  <p>{{$car['conscity']}}</p>
                              </div>
                              <div class="info-block-2">
                                  <h5>Расход (за городом)</h5>
                                  <p>{{$car['conscountry']}}</p>
                              </div>
                              <div class="info-block-2">
                                  <h5>Коробка</h5>
                                  @if ($car->automat == true)
                                  <p>Автоматическая</p>
                                  @else
                                  <p>Механическая</p>
                                  @endif
                              </div>
                              <div class="info-block-2">
                                  <h5>Топливо</h5>
                                  <p>{{$car['fuel']}}</p>
                              </div>
                          </div>
                      </div>
                  </div>

                  <div class="row justify-content-center">
                      <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><h5>Стоимость</h5>
                                    <p>{{$car['cost']}} руб./сутки</p><br>
                                </li>
                                <li><h5>Страховка</h5>
                                    <p>Автомобиль прошел технический осмор, имеет страховой полис.</p><br>
                                </li>
                            </ul>
                      </div>
                      <div class="col-lg-6">
                          <div class="project-single-info">
                              <p>{{$car['description']}}</p>
                          </div>
                      </div>
                  </div>


                      <div class="col-lg-6">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
@stop
