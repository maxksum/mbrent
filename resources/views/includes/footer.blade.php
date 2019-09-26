<footer class="section " id="footer">
            <div class="overlay footer-overlay"></div>
            <!--Content -->
            <div class="container">
                <div class="row justify-content-start">
                    <div class="col-lg-4 col-sm-12">
                        <div class="footer-widget">
                            <!-- Brand -->
                            <a href="#" class="footer-brand text-white">
                                Mersedes-Benz Rent
                            </a>
                            <p>Each theme featured at the Bootstrap marketplace has been reviewed by Bootstrap's creators.Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 ml-lg-auto col-sm-12">
                        <div class="footer-widget">
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                          <a href="/"><h3>Оставить заявку</h3></a>
                          @if (isset($mainpage))
                          <a href="#cars"><h3>Наши автомобили</h3></a>
                          @else
                          <a href="./#cars"><h3>Наши автомобили</h3></a>
                          @endif
                          @if (isset($mainpage))
                          <a href="#comments"><h3>Отзывы</h3></a>
                          @else
                          <a href="./#comments"><h3>Отзывы</h3></a>
                          @endif
                          <a href="/conditions"><h3>Условия</h3></a>
                          <a href="/about"><h3>О нас</h3></a>
                            <!-- Links -->

                        </div>
                    </div>

                </div> <!-- / .row -->
                <div class="row text-left pt-5">
               <div class="col-lg-12">
                   <!-- Copyright -->
                   <p class="footer-copy ">
                       2019 Mercedes-Benz Rent
                   </p>
               </div>
           </div> <!-- / .row -->
              </div>
            </footer>



    <!--  Page Scroll to Top  -->
    <a class="scroll-to-top js-scroll-trigger" href=".top-header">
        <i class="fa fa-angle-up"></i>
    </a>
