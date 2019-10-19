<!DOCTYPE html>
<html>
<head>
	<title>Customer View</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="{{ url('/') }}">Menu for BOC Demo</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item  ">
            <a class="nav-link" href="{{url('/')}}">Landing Page</a>
          </li>
          <li class="nav-item active" >
            <a class="nav-link" href="{{url('/client')}}">Customer</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/nonprofit')}}">NGO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/merchant')}}">Merchant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/store')}}">Store</a>
          </li>
        </ul>
      </div>
    </nav>

	<div class="container">
		<div class="row mt-3">
			<div class="col-md-5 mt-3 align-items-stretch">
				<div class="card shadow mb-2 bg-white rounded">
				  <img src="{{asset('imgs/full_logo.png')}}" class="card-img-top">
				  <div class="card-body">
				    <h4 class="card-title">Hello {{$user->name}}!</h4>
				    <h2 class="text-muted">"We make a living by what we get, but we make a life by what we give."</h2>
				    <p class="card-text text-muted">Just add your code to your favorite online stores
				    that support FasouliFasouli and you are good to go! Code: <strong> {{$user->code}}</strong></p>
				  </div>
				</div>
			</div>

			<div class="col-md-7 mt-3 align-items-stretch">
				<div class="card shadow mb-2 bg-white rounded">
				  <h5 class="card-header">Set Your Preferences</h5>
				  <div class="card-body">
				  	<form action="/client" method="POST">
				  		{{ csrf_field() }}
				  		<h5>What causes do you want to contribute to?</h5>
				  		<div class="form-group p-3">
				  			<div class="form-check form-check-inline">
				  				@if($user->homeless == 1)
							  		<input checked="checked" class="form-check-input" type="checkbox" id="hmCheck" value="hmCheck" name="hmCheck">
							  	@else
							  		<input class="form-check-input" type="checkbox" id="hmCheck" value="hmCheck" name="hmCheck">
							  	@endif
							  <label class="form-check-label" for="hmCheck">Homeless</label>
							</div>
				  			<div class="form-check form-check-inline">
				  				@if($user->environment == 1)
							  		<input checked="checked" class="form-check-input" type="checkbox" id="envCheck" value="envCheck" name="envCheck">
							  	@else
							  		<input class="form-check-input" type="checkbox" id="envCheck" value="envCheck" name="envCheck">
							  	@endif
							  <label class="form-check-label" for="envCheck">Environment</label>
							</div>
							<div class="form-check form-check-inline">
								@if($user->health == 1)
							  		<input checked="checked" class="form-check-input" type="checkbox" id="healthCheck" value="healthCheck" name="healthCheck">
							  	@else
							  		<input class="form-check-input" type="checkbox" id="healthCheck" value="healthCheck" name="healthCheck">
							  	@endif
							  <label class="form-check-label" for="healthCheck">Health</label>
							</div>
							<div class="form-check form-check-inline">
								@if($user->education == 1)
									<input checked="checked" class="form-check-input" type="checkbox" id="edCheck" value="edCheck" name="edCheck">
								@else
							 	 <input class="form-check-input" type="checkbox" id="edCheck" value="edCheck" name="edCheck">
							 	@endif
							  <label class="form-check-label" for="edCheck">Education</label>
							</div>
							<div class="form-check form-check-inline">
								@if($user->disasters == 1)
									<input checked="checked" class="form-check-input" type="checkbox" id="disCheck" value="disCheck" name="disCheck">
								@else
							  	<input class="form-check-input" type="checkbox" id="disCheck" value="disCheck" name="disCheck">
							  	@endif
							  <label class="form-check-label" for="disCheck">Global Disasters</label>
							</div>
							<div class="form-check form-check-inline">
								@if($user->animals == 1)
									<input checked="checked" class="form-check-input" type="checkbox" id="anCheck" value="anCheck" name="anCheck">
								@else
							  		<input class="form-check-input " type="checkbox" id="anCheck" value="anCheck" name="anCheck">
							  	@endif
							  <label class="form-check-label" for="anCheck">Animals</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input " type="checkbox" id="other" value="other" name="other">
							  <label class="form-check-label" for="other">Other</label>
							</div>
				  		</div>
				  		
				  		<h5>Donation amount per purchase</h5>
				  		<div class="row">
				  			<div class="form-group col-md-12 mt-3">
								<label>For Cause</label>
							    <select class="form-control" id="cause_amount" name="cause_amount">
							    	@if($user->cause_amount == 0.2)
							    		<option selected>0.20</option>
									    <option>0.50</option>
									    <option>0.75</option>
									    <option>1</option>
									@elseif($user->cause_amount == 0.5)
										<option>0.20</option>
									    <option selected>0.50</option>
									    <option>0.75</option>
									    <option>1</option>
									@elseif($user->cause_amount == 0.75)
										<option>0.20</option>
									    <option >0.50</option>
									    <option selected>0.75</option>
									    <option>1</option>
									@elseif($user->cause_amount == 1)
										<option>0.20</option>
									    <option >0.50</option>
									    <option>0.75</option>
									    <option selected>1</option>
									@endif
							    </select>
							</div>

							<div class="form-group col-md-12 mt-3">
								<label>For FasouliFasouli upkeep</label>
							    <select class="form-control" id="fasouli_amount" name="fasouli_amount">
							    	@if($user->fasouli_amount == 0)
								      <option selected>0.00</option>
								      <option>0.20</option>
								      <option>0.50</option>
								      <option>0.75</option>
								      <option>1</option>
								    @elseif($user->fasouli_amount == 0.2)
								    	<option >0.00</option>
								      <option selected>0.20</option>
								      <option>0.50</option>
								      <option>0.75</option>
								      <option>1</option>
								     @elseif($user->fasouli_amount == 0.5)
								    	<option>0.00</option>
								      <option>0.20</option>
								      <option selected>0.50</option>
								      <option>0.75</option>
								      <option>1</option>
								     @elseif($user->fasouli_amount == 0.75)
								    	<option>0.00</option>
								      <option>0.20</option>
								      <option>0.50</option>
								      <option selected>0.75</option>
								      <option>1</option>
								     @elseif($user->fasouli_amount == 1)
								    	<option >0.00</option>
								      <option>0.20</option>
								      <option>0.50</option>
								      <option >0.75</option>
								      <option selected>1</option>
								     @endif
							    </select>
							</div>
				  		</div>
						<button class=" btn btn-outline-primary col-md-12" type="submit">Save</button>
				  	</form>
					
				  </div>
				</div>
			</div>

		</div>

		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card shadow mb-2 bg-white rounded">
					<h5 class="card-header">Causes you have contributed to</h5>
					<div class="card-body">						
						<div class="row mt-3">
							@foreach($causes as $cause)
								<div class="col-md-4">
									<div class="card shadow mb-2 bg-white rounded">
									  <img src="imgs/{{$cause->image}}" class="card-img-top">
									  <div class="card-body">
									    <h5 class="card-title">{{$cause->title}}</h5>
									    <p class="card-text">{{$cause->description}}</p>
									    <a href="#" class="btn btn-outline-primary col-md-12">Learn More</a>
									  </div>
									</div>
								</div>
							@endforeach						
						</div>
					</div>
				</div>
			</div>
		</div>		


		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card shadow mb-2 bg-white rounded">
					<div class="card-body">
						<h4> Some statistics will be added later </h4>
					</div>
				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>