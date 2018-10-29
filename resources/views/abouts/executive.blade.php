@extends('main')

@extends('main')


@section('title','|HOMEPAGE')




@section('content')




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

    	@endsection
