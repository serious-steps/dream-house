@extends('layouts.guest')
@section('content')


<div class="mt-5">
    
<section class="home_banner_area">
    <div class="banner_inner d-flex align-items-center">
       <div class=" bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""
style="background: url('{{asset('for_theme/img/banner/home-banner.jpg')}}') no-repeat scroll center center; 
      height: 125%;
      position: absolute;
      left: 0px;
      top: 0px;
      width: 100%;
      z-index: -1; "
       ></div>
       <div class="container">
           <div class="banner_content text-center">
            <span>Need a change</span>
            <h1>Find your dream home</h1>
             <br/>
 </div><!--
             <a class="main_btn" href="#">get a quote</a> -->
             <div class="row justify-content-center  ">
                        <div class="col-12 col-md-10 col-lg-8 p-0">
                            <form class="card card-sm">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-search h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter an address">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button class="btn btn-lg btn-danger" type="submit">Search</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
         
     </div>
 </div>
</section>
</div>
<div class="row mt-5 mb-5">
  <div class="col text-center text-dark ">
    <h3>We have the most listings and constant updates.</h3>
    <h3>So you’ll never miss out.</h3>
  </div>
</div>
<div class="row mt-5 mb-5">
  <hr class="text-dark">
  </div>
<div class="row mt-5 pt-3 bg-light">
  <div class="col text-center text-dark mr-0 pr-0 ">
          <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col text-center text-dark  ml-0 mr-0 pl-0 pr-0">
            <div class="card  " style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col text-center text-dark ">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
  <div class="row mt-5 bg-light">
  <div class="col text-center text-dark mr-0 pr-0 ">
          <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col text-center text-dark  ml-0 mr-0 pl-0 pr-0">
            <div class="card ml-0 mr-0 pl-0 pr-0" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col text-center text-dark ">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>

                            @endsection