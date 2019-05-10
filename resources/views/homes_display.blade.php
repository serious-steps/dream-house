@extends('layouts.guest')
@section('content')

<div class=" container-field position-relative">
<hr class=" m-1 p-0">
</div>
<div class="d-none d-lg-block">

<nav class="navbar navbar-expand-lg navbar-light ">
 	 <form class="form-inline m-0">
      <input class="form-control " type="search" placeholder="Search by location" aria-label="Search">
      <button class="btn btn-secondary" type="button">
       		 <i class="fa fa-search"></i>
     	</button>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="homes_navbar">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Listing type
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                 <ul>
            <li>
            <input type="checkbox" name="tall" id="tall">
            <label for="tall">FOR SALE</label>

            <ul class="ml-2">
              <li>
                <input type="checkbox" name="tall-1" id="tall-1">
                <label for="tall-1">By Agent</label>
              </li>
              <li>
                <input type="checkbox" name="tall-2" id="tall-2">
                <label for="tall-2">By Owner</label>
              </li>
              <li>
                <input type="checkbox" name="tall-2" id="tall-2">
                <label for="tall-2">New Construction</label>
              </li>
            </ul>
          </li>
          <li>
            <input type="checkbox" name="short" id="short">
            <label for="short">FOR RENT</label>

            <ul class="ml-2">
              <li>
                <input type="checkbox" name="short-1" id="short-1">
                <label for="short-1">By Agency</label>
              </li>
              <li>
                <input type="checkbox" name="short-2" id="short-2">
                <label for="short-2">By Owner</label>
              </li>
            </ul>
          </li>
        </ul>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Any price
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">
            <div class="form-group mt-0 mb-0">
            <label for="afford">How much can i afford</label>
            <input type="text" class="form-control" id="afforf" >
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">€0+</a>
          <a class="dropdown-item" href="#">€20,000+</a>
          <a class="dropdown-item" href="#">€40,000+</a>
          <a class="dropdown-item" href="#">€60,000+</a>
          <a class="dropdown-item" href="#">€100,000+</a>
          <a class="dropdown-item" href="#">€250,000+</a>
          <a class="dropdown-item" href="#">€500,000+</a>

        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          0+ Beds
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">0+</a>
          <a class="dropdown-item" href="#">1+</a>
          <a class="dropdown-item" href="#">2+</a>
          <a class="dropdown-item" href="#">3+</a>
          <a class="dropdown-item" href="#">4+</a>
          <a class="dropdown-item" href="#">5+</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Home Type()
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" >
            <div class="form-check">
             <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
              <label class="form-check-label" for="defaultCheck1">
                Homes
               </label>
            </div>
          </a>
          <a class="dropdown-item" >
            <div class="form-check">
             <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
              <label class="form-check-label" for="defaultCheck2">
                Apartments
               </label>
            </div>
          </a>
          <a class="dropdown-item" >
            <div class="form-check">
             <input class="form-check-input" type="checkbox" value="" id="defaultCheck3">
              <label class="form-check-label" for="defaultCheck3">
                Condos
               </label>
            </div></a>
          <a class="dropdown-item" href="#">
            <div class="form-check">
             <input class="form-check-input" type="checkbox" value="" id="defaultCheck4">
              <label class="form-check-label" for="defaultCheck4">
                Townhomes
               </label>
            </div>
         </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
</div>
<div class="d-block d-lg-none">
<nav class=" navbar navbar-expand-lg navbar-light ">
	<div class="container-field" style="width: 100%;">
		<div class="row" style="width: 100%;">
	<ul class="navbar-nav mr-auto " style="width: 100%;">
		<div class="row">
		<div class="col-5 mr-0 pr-0">
		<li class="nav-item d-inline">
	<form class="form-inline m-0">
        <input class="form-control d-inline" type="search" placeholder="Search by location" aria-label="Search">
    </div>
    <div class="col-2 ml-0 pl-0">
      	<button class="btn btn-secondary d-inline" type="button">
       		 <i class="fa fa-search"></i>
     	</button>
    </form>
	</li>
</div>
<div class="col-4 ">
			<li class="nav-item dropdown d-inline position-absolute">
       		 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        	  More
       		 </a>
        <div class="dropdown-menu position-relative" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
     		 </li></div>
     		</div>
 			 </ul>
 			</div>
		</div>
	</nav>
</div>


</div>
<hr class="m-0 p-0">
<div class="row mt-2">
	<div class="col-6 d-none d-lg-block border border-warning">


	</div>
	<div class="col ">
		<div class="row">
			<div class="col-6">
				<h4>Serbia-Belgrade</h4>
			</div>
			<div class="col-6">
				<h5>78 results</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h4 class="font-weight-normal">Newest </h4>
			</div>
			<div class="col-3">
				<h4 class="font-weight-normal">Cheapest </h4>
			</div>
			<div class="col-3">
				<h4 class="font-weight-normal">Nesto</h4>
			</div>
			<div class="col-3">
			</div>
		</div>
		<div class="row mr-1">
			<div class="col-6 m-0 p-1">
				<div class="container-img">
				  <img src="{{asset('imgsite/house-2.jfif')}}" alt="Snow" style="width:100%; max-height: 200px; min-height: 200px;">
				  <div class="bottom-left-img">Bottom Left</div>
				  <div class="top-left-img">Top Left</div>
				  <div class="top-right-img">Top Right</div>
				  <div class="bottom-right-img">Bottom Right</div>
				  <div class="centered-img">Centered</div>
				</div>
			</div>
			<div class="col-6 m-0 p-1">
				<div class="container-img">
				  <img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 200px; min-height: 200px;">
				  <div class="bottom-left-img">Bottom Left</div>
				  <div class="top-left-img">Top Left</div>
				  <div class="top-right-img">Top Right</div>
				  <div class="bottom-right-img">Bottom Right</div>
				  <div class="centered-img">Centered</div>
				</div>
			</div>
			<div class="col-6 m-0 p-1">
				<div class="container-img">
				  <img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 200px; min-height: 200px;">
				  <div class="bottom-left-img">Bottom Left</div>
				  <div class="top-left-img">Top Left</div>
				  <div class="top-right-img">Top Right</div>
				  <div class="bottom-right-img">Bottom Right</div>
				  <div class="centered-img">Centered</div>
				</div>
			</div>
			<div class="col-6 m-0 p-1">
				<div class="container-img" data-toggle="modal" data-target=".bd-example-modal-lg">
				  <img src="{{asset('imgsite/house-3.jfif')}}" alt="Snow" style="width:100%; max-height: 200px; min-height: 200px;">
				  <div class="bottom-left-img">Bottom Left</div>
				  <div class="top-left-img">Top Left</div>
				  <div class="top-right-img">Top Right</div>
				  <div class="bottom-right-img">Bottom Right</div>
				  <div class="centered-img"> dwdwd</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" style="max-width: 90%;">
    <div class="modal-content">
      <div class="modal-header p-2 pt-3">
      	<div class="row" style="width: 100%;">
      		<div class="col d-none d-md-block">
        		<h5 class="modal-title" id="exampleModalLongTitle">Serbia-Belgrade-House</h5>
    		</div>
    		<div class="col text-center m-0 p-0 d-none d-lg-block  ">
    			<img src="{{ asset('imgsite/logo.png')}}" style="max-height: 40px; margin: 0px; padding: 0px;" alt="">
    		</div>
    		<div class="col text-center">
    			<ul class="m-0 p-0">
    				<li class="d-inline">
    						<span class="m-0 mr-2">
    							<button class="btn bg-white m-0 p-0" type="button">
       							 <h3 class="d-inline p-0 m-0"><i class="far fa-heart" size="30"></i></h3><h4 class="d-inline">Save</h4>
     							</button>
    						</span>
    				</li>
    				<li class="d-inline">
    					<span class="m-0 mr-2">
    							<button class="btn bg-white m-0 p-0" type="button">
       							 <h3 class="d-inline p-0 m-0"><i class="far fa-share-square" size="30"></i></h3><h4 class="d-inline">Share</h4>
     							</button>
    						</span>
    				</li >
    				<li class="d-inline">
    					<span class="m-0 mr-2">
    							<button class="btn bg-white m-0 p-0" type="button">
       							 <h3 class="d-inline p-0 m-0"><i class="fas fa-ellipsis-h" size="30"></i></h3><h4 class="d-inline">More</h4>
     							</button>
    						</span>
    				</li>
    			</ul>
    		</div>
    		<div class="col-1">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
    </div>
      </div>
  </div>
      <div class="modal-body">
        <div class="row">
        	<div class="col-7">
        		<div class="row mb-1 ">
        			<div class="col">
        				<img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 500px; min-height: 100px;">
        			</div>
        		</div>
        		<div class="row">
        			<div class="col-6 p-1">
        				<img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 500px; min-height: 100px;">
        			</div>
        			<div class="col-6 p-1">
        				<img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 500px; min-height: 100px;">
        			</div>
        			<div class="col-6 p-1">
        				<img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 500px; min-height: 100px;">
        			</div>
        			<div class="col-6 p-1">
        				<img src="{{asset('imgsite/house-1.jfif')}}" alt="Snow" style="width:100%; max-height: 500px; min-height: 100px;">
        			</div>

        		</div>
        	</div>
        	<div class="col-5">
            <div class="row">
              <div class="col-5 pb-0  mb-0 mr-0 pr-0"><span >
              <h2 class="text-dark">$460,000</h2> </span>
               </div>
               <div class="col-5 pb-0 mb-0 ml-0 pl-0  "><span >
              <h4 class=" mt-2 text-center text-dark">5 bd | 4 ba | 450 m2</h4> </span>
               </div>
            </div>
            <div class="row">
              <div class="col">
                <h4 class="text-dark">11159 Winchester Park Dr, New Orleans, LA 70128</h4>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <h5 class="text-warning ">For sale</h5><h5 class="text-primary">For rent</h5>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <a href=""><button type="button" class="btn btn-primary" style="width: 90%;">Contact Agent</button></a>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col">
                <h3 class="text-dark"> Overview</h3>
                <hr>
              </div>
            </div>
            <h4>
            <div class="row text-dark">
              <div class="col text-center">
                <span class="text-center"> Time on Market:</span> <br/>
                <span class="text-center "> 154 days</span>
              </div>
              <div class="col text-center">
                <span class="text-center"> Views:</span><br/>
                <span class="text-center "> 3234 </span>
              </div>
              <div class="col text-center">
                <span class="text-center"> Saves:</span><br/>
                <span class="text-center "> 4 </span>
              </div>
            </div></h4>
            <hr>
            <div class="row text-dark">
              <div class="col"><h4>
              <div class="row mb-2">
              <div class="col-2 text-right">
                <i class="far fa-building"></i>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-bold"> Type: </span>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-normal"> Single Family</span>
              </div>
              </div>
              <div class="row mb-2">
              <div class="col-2 text-right">
                <i class="far fa-calendar"></i>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-bold"> Year built: </span>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-normal"> 2013</span>
              </div></div>
              <div class="row mb-2">
              <div class="col-2 text-right">
                <i class="fas fa-thermometer-quarter"></i>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-bold"> Heating: </span>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-normal"> Central</span>
              </div></div>
              <div class="row mb-2">
              <div class="col-2 text-right">
                <i class="fas fa-snowflake"></i>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-bold"> Cooling: </span>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-normal"> Forced air</span>
              </div></div>
              <div class="row mb-2">
              <div class="col-2 text-right">
                <i class="fas fa-parking"></i>
              </div>
              
              <div class="col-3">
                <span class="text-center font-weight-bold"> Parking: </span>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-normal"> 3 spaces</span>
              </div></div>
              <div class="row mb-2">
                <div class="col-2 text-right">
                  <i class="fas fa-prescription-bottle"></i>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-bold"> Lot: </span>
              </div>
              <div class="col-3">
                <span class="text-center font-weight-normal"> 0.28 acres</span>
              </div></div>
            </div></h4></div>
            <hr>
            <div class="row mt-4 mb-2">
              <div class="col">
                <h3 class="text-dark"> Price history</h3>
              </div>
            </div>
            <div class="row text-center text-dark ">
              <div class="col">
                <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">DATE</th>
                    <th scope="col">EVENT</th>
                    <th scope="col">PRICE</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>13.08.2013</td>
                    <td>Back on market</td>
                    <td>$360,000</td>
                  </tr>
                  <tr>
                    <td>14.09.2014</td>
                    <td>Panding sale</td>
                    <td>$360,000</td>
                  </tr>
                  <tr>
                    <td>15.08.2016</td>
                    <td>Price change</td>
                    <td>$330,000</td>
                  </tr>
                </tbody>
              </table>
            </div>

        	</div>
          <hr>
            <div class="row mt-4 mb-2">
              <div class="col">
                <h3 class="text-dark"> Monthly cost</h3>
              </div>
            </div>
            <div class="row text-center text-dark ">
              <div class="col">
                <table class="table table-striped">
                <tbody><h5>
                  <tr>
                    <td>Property taxes</td>
                    <td>$218/mo</td>
                  </tr>
                  <tr>
                    <td>HOA fees</td>
                    <td>$48/mo</td>
                  </tr>
                  <tr>
                    <td>Utilities</td>
                    <td>Not include</td>
                  </tr>
                </tbody></h5>
              </table>
            </div>

          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->

<SCRIPT language="javascript">
$('input[type="checkbox"]').change(function(e) {

  var checked = $(this).prop("checked"),
      container = $(this).parent(),
      siblings = container.siblings();

  container.find('input[type="checkbox"]').prop({
    indeterminate: false,
    checked: checked
  });

  function checkSiblings(el) {

    var parent = el.parent().parent(),
        all = true;

    el.siblings().each(function() {
      return all = ($(this).children('input[type="checkbox"]').prop("checked") === checked);
    });

    if (all && checked) {

      parent.children('input[type="checkbox"]').prop({
        indeterminate: false,
        checked: checked
      });

      checkSiblings(parent);

    } else if (all && !checked) {

      parent.children('input[type="checkbox"]').prop("checked", checked);
      parent.children('input[type="checkbox"]').prop("indeterminate", (parent.find('input[type="checkbox"]:checked').length > 0));
      checkSiblings(parent);

    } else {

      el.parents("li").children('input[type="checkbox"]').prop({
        indeterminate: true,
        checked: false
      });

    }

  }

  checkSiblings(container);
});
</SCRIPT>


    @endsection