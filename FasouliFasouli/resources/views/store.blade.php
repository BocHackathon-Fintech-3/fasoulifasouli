<!DOCTYPE html>
<html>
<head>
	<title>Store</title>
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
          <li class="nav-item">
            <a class="nav-link" href="{{url('/nonprofit')}}">NGO</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/merchant')}}">Merchant</a>
          </li>
          <li class="nav-item active">
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
				      <img src="{{asset('imgs/amazon.jpg')}}" class="card-img">
				    </div>
				    <div class="col-md-8">
				      <div class="card-body">
				      	<h2 class="card-title">Welcome to our very convincing Amazon Store</h2>
				      </div>
				    </div>
				  </div>
				</div>
			</div>			
		</div>

		<div class="row mt-3">
			<div class="col-md-12">
				<div class="card shadow mb-2 bg-white rounded">
					<div class="card-body">
						<h4>Select from our variety of products!</h4>
						<div class="row mt-3">
							<div class="col-md-6">
								<div class="card shadow mb-2 bg-white rounded">
								  <div class="row no-gutters">
								    <div class="col-md-5">
								      <img src="{{asset('imgs/book.jpg')}}" class="card-img">
								    </div>
								    <div class="col-md-7">
								      <div class="card-body">
								        <h5 class="card-title">Shoe Dog: A Memoir by the Creator of NIKE</h5>
								        <p class="card-text">In 1962, fresh out of business school, Phil Knight borrowed $50 from his father and created a company with a simple mission: import high-quality, low-cost athletic shoes from Japan. Selling the shoes from the boot of his Plymouth, Knight grossed $8000 in his first year.</p>
								        <p><strong>Price:</strong> $10</p>
								        <button class="col-md-12  btn btn-outline-primary" id="btn_cart">Add to Cart</button>
								      </div>
								    </div>
								  </div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="card shadow mb-2 bg-white rounded" id="checkout" style="visibility:hidden;">
									<div class="card-body">
										<h3 class="card-title">Check out</h3>
										<h5 class="mt-3">Payment Method: <strong>DEFAULT</strong></h5>
										<h5 class="mt-3">GOOD NEWS! Amazon is <strong>FasouliFasouli Certified!</strong></h5>
										<form action="{{url('/store')}}" method="POST">
											{{ csrf_field() }}
											<div class="row mt-5">
												<div class="col-md-3">
													<img src="{{asset('imgs/standalone_logo.png')}}" class="card-img">
												</div>
												<div class="col-md-9">
													<div class="form-group">
													    <label for="ffcode">Enter you FF-code <strong>once</strong> to connect with your FasouliFasouli account with Amazon</label>
													    <input type="text" class="form-control" id="ffcode">
													 </div>
												</div>
											</div>
											<button class="col-md-12 btn btn-outline-primary" id="btn_checkout" type="submit">Buy</button>
										</form>										
									</div>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
	<script type="text/javascript">
		
		$('#btn_cart').on("click",function(){
			$("#checkout").css("visibility","visible");
		});

		$('#btn_checkout').on("click",function(){
			alert("CONGRATULATIONS YOU HAVE BOUGHT SOMETHING!!!");
		});
	</script>
</body>
</html>