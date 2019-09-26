<div class="main-navigation menu-2" id="mainmenu-area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary main-nav navbar-togglable">

                <a class="navbar-brand d-lg-none d-block" href="/">
                    <h4>Mercedes-Benz Rent</h4>
                </a>
                <!-- Toggler -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <!-- Links -->
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="/" class="nav-link js-scroll-trigger">
                                Главная
                            </a>
                        </li>
                        <li class="nav-item ">
                          @if (isset($mainpage))
                            <a href="#advantages" class="nav-link js-scroll-trigger">
                                Преимущества
                            </a>
                          @else
                          <a href="./#advantages" class="nav-link js-scroll-trigger">
                              Преимущества
                          </a>
                          @endif
                        </li>
                        <li class="nav-item ">
                          @if (isset($mainpage))
                            <a href="#cars" class="nav-link js-scroll-trigger">
                                Наши автомобили
                            </a>
                            @else
                            <a href="./#cars" class="nav-link js-scroll-trigger">
                                Наши автомобили
                            </a>
                            @endif
                        </li>
                        <li class="nav-item ">
                          @if (isset($mainpage))
                            <a href="#comments" class="nav-link js-scroll-trigger">
                                Отзывы
                            </a>
                            @else
                            <a href="/#comments" class="nav-link js-scroll-trigger">
                                Отзывы
                            </a>
                            @endif
                        </li>

                        <li class="nav-item ">
                            <a href="./conditions" class="nav-link">
                                Условия
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="/about" class="nav-link js-scroll-trigger">
                                О нас
                            </a>
                        </li>
                    </ul>
                </div> <!-- / .navbar-collapse -->
            </nav>
        </div> <!-- / .container -->
    </div>
