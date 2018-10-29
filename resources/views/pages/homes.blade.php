@extends('main')


@section('title','|HOMEPAGE')




@section('content')

<div class="images" style="background-image:url({{url('/images/noretlogo.jpg')}})">
{{-- <img src=""> --}}
</div>

<div class="row" style="margin-top: 8px;">
	<div class="col-md-12">	
	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-200" src="{{URL::asset('/images/mission_1.jpg')}}"  alt="First slide" style="max-height: 500px;">
      <div class="carousel-caption d-none d-md-block">
    <h5> CHELELEK MISSION</h5>
    <p>Mission to Chelelek in Uasin Gishu County January 2017 </p>
  </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-200 image-rounded" src="{{URL::asset('/images/retreat_1.jpg')}}"  alt="First slide" style="max-height: 500px;">
      <div class="carousel-caption d-none d-md-block">
    <h5>FUN DAY</h5>
    <p>At the JKUAT pitch </p>
  </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-200" src="{{URL::asset('/images/bash1.jpg')}}"  alt="First slide" style="max-height: 500px;">
      <div class="carousel-caption d-none d-md-block">
    <h5> ELDERS 2017</h5>
    <p> The last fellowship if the elders </p>
  </div>
    </div>

    <div class="carousel-item">
      <img class="d-block w-200" src="{{URL::asset('/images/childrenshome1.jpg')}}"  alt="First slide" style="max-height: 500px;">
      <div class="carousel-caption d-none d-md-block">
    <h5>CHILDRENS HOME VISIT</h5>
    <p>At Star of Hope Childrens at K_Road </p>
  </div>
    </div>
</div>

 </div>
</div>
</div>


    <div class="row" style="margin-top: 12px;">
    	<div class="col-md-4">
    		<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{URL::asset('/images/noretlogo.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    	</div>


<div class="col-md-4">
    		<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{URL::asset('/images/noretlogo.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
<div class="col-md-4">
	<div class="card" style="width: 20rem;">
  <img class="card-img-top" src="{{URL::asset('/images/noretlogo.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    	</div>
    	
    	</div>


    	<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Collapsible Group Item #1
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
</div>


    
    
 







@endsection
