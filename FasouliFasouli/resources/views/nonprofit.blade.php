<!DOCTYPE html>
<html>
<head>
	<title>Non-profit View</title>
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
          <li class="nav-item" >
            <a class="nav-link" href="{{url('/client')}}">Customer</a>
          </li>
          <li class="nav-item active">
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
			<div class="col-md-12">
				<div class="card shadow mb-2 bg-white rounded">
				  
				  <div class="row no-gutters">
				    <div class="col-md-4">
				      <img src="{{asset('imgs/charity.jpg')}}" class="card-img">
				      <div class="card-body">
				        <h5 class="card-title">Welcome back <strong>RandomNonProfit</strong></h5>
				        <p class="card-text">Here is your organization status:</p>
				        <ul>
				        	<li>Acive Campaigns: <strong>{{count($active_causes)}}</strong></li>
				        	<li>Past Campaigns: <strong>{{count($past_causes)}}</strong></li>
				        	<li>Total Donations Raised: <strong>$250.000</strong></li>
				        	<li>Donations Pending Transfer: <strong>$5000</strong></li>
				        </ul>
				        <button class="btn btn-outline-primary col-md-12">Request Donation Transfer</button>
				      </div>
				    </div>

				    <div class="col-md-8">
				    	<div class="card shadow m-4 bg-white rounded">
							<h5 class="card-header">Create New Micro-donations Campaign</h5>
							<div class="card-body">						
								<form action="{{ url('/nonprofit')}}" method="POST">
									{{csrf_field()}}
								  <div class="form-group">
								    <label for="title">Title</label>
								    <input type="text" class="form-control" id="title" name="title">
								  </div>
								  <div class="form-group">
								    <label for="thumbnail">Thumbnail Path</label>
								    <input type="text" class="form-control" id="thumbnail" name="thumbnail">
								  </div>
								  <div class="form-group">
								    <label for="description">Description</label>
								    <textarea class="form-control" id="description" name="description"></textarea>
								  </div>
								  <div class="form-group">
										<label>Category</label>
									    <select class="form-control" id="category" name="category">
									      <option>Animals</option>
									      <option>Education</option>
									      <option>Environment</option>
									      <option>Global Disasters</option>
									      <option>Health</option>
									      <option>Homeless</option>
									    </select>
									</div>

									<div class="form-group">
										<label>Amount Needed</label>
										<input class="form-control" type="number" name="amount" min="1" placeholder="$1000">
									</div>
								  <button type="submit" class="btn btn-outline-primary col-md-12">Create</button>
								</form>
							</div>					
						</div>
				    </div>				    
				  </div>
				</div>
			</div>			
		</div>

		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card shadow mb-2 bg-white rounded">
					<h5 class="card-header">Active Campaigns</h5>
					<div class="card-body">						
						<div class="row mt-3">
							
							@foreach($active_causes as $cause)
								<div class="col-md-4">
									<div class="card shadow mb-2 bg-white rounded">
									  <img src="imgs/{{$cause->image}}"  class="card-img-top">
									  <div class="card-body">
									    <h5 class="card-title">{{$cause->title}}</h5>
									    <p class="card-text">{{$cause->description}}</p>
									    <div class="row">
									    	<div class="col-md-8 p-2">
									    		<h5>Successfully Raised:</h5>
									    	</div>
									    	<div class="col-md-4 p-2">
									    		<p class="badge badge-success">${{$cause->amount_raised}}</p>
									    	</div>
									    </div>
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
					<h5 class="card-header">Past Campaigns</h5>
					<div class="card-body">						
						<div class="row mt-3">

							@foreach($past_causes as $cause)
								<div class="col-md-4">
									<div class="card shadow mb-2 bg-white rounded">
									  <img src="imgs/{{$cause->image}}"  class="card-img-top">
									  <div class="card-body">
									    <h5 class="card-title">{{$cause->title}}</h5>
									    <p class="card-text">{{$cause->description}}</p>
									    <div class="row">
									    	<div class="col-md-8 p-2">
									    		<h5>Successfully Raised:</h5>
									    	</div>
									    	<div class="col-md-4 p-2">
									    		<p class="badge badge-success">${{$cause->amount_raised}}</p>
									    	</div>
									    </div>
									  </div>
									</div>
								</div>
							@endforeach

						</div>
					</div>					
				</div>
			</div>
		</div>

	</div>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>