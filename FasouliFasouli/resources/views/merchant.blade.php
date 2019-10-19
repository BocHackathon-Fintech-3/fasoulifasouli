<!DOCTYPE html>
<html>
<head>
	<title>Merchant View</title>
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
          <li class="nav-item active">
            <a class="nav-link" href="{{url('/merchant')}}">Merchant</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{url('/store')}}">Store</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">

      <div class="row mt-3">
        <div class="col-md-12">
            <div class="card shadow mb-2 bg-white rounded">           
            <div class="card-body row">
              <div class="col-md-8">
                <img src="{{asset('imgs/amazon.jpg')}}" class="card-img-top">
              </div>
              <div class="col-md-4">
                  <blockquote class="blockquote text-center">
                    <p class="mb-0">Creating a strong business and building a better world are not conflicting goals - they are both essential ingredients for long-term success.</p>
                    <footer class="blockquote-footer">William Clay Ford<cite title="Source Title">Executive Chairman, Ford Motor Company</cite></footer>
                  </blockquote>
              </div>            
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-3">

        <div class="col-md-12">
            <div class="card shadow mb-2 bg-white rounded">           
                <div class="card-body">
                    <h3 class="card-title">Donations Made Through Amazon - 2019</h3>
                    
                    <div class="row mt-3">
                         <div class="col-md-4">                             
                             <h2 class="text-center"><strong>${{$merchant->homeless}}</strong></h2>
                             <p class="lead text-center">Homeless</p>
                          </div>

                          <div class="col-md-4">
                            <h2 class="text-center"><strong>${{$merchant->environment}}</strong></h2>
                             <p class="lead text-center">Environment</p>
                          </div>

                          <div class="col-md-4">
                            <h2 class="text-center"><strong>${{$merchant->education}}</strong></h2>
                             <p class="lead text-center">Education</p>
                          </div>
                    </div>

                    <div class="row mt-3">
                         <div class="col-md-4">
                            <h2 class="text-center"><strong>${{$merchant->health}}</strong></h2>
                             <p class="lead text-center">Health</p>
                          </div>

                          <div class="col-md-4">
                             <h2 class="text-center"><strong>${{$merchant->disasters}}</strong></h2>
                             <p class="lead text-center">Disasters</p>
                          </div>

                          <div class="col-md-4">
                             <h2 class="text-center"><strong>${{$merchant->animals}}</strong></h2>
                             <p class="lead text-center">Animals</p>
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
                    <h3 class="card-title">Donations Matched By Amazon - 2019</h3>
                    
                    <div class="row mt-3">
                         <div class="col-md-4">                             
                             <h2 class="text-center"><strong>${{$merchant->homeless_matched}}</strong></h2>
                             <p class="lead text-center">Homeless</p>
                          </div>

                          <div class="col-md-4">
                            <h2 class="text-center"><strong>${{$merchant->environment_matched}}</strong></h2>
                             <p class="lead text-center">Environment</p>
                          </div>

                          <div class="col-md-4">
                            <h2 class="text-center"><strong>${{$merchant->education_matched}}</strong></h2>
                             <p class="lead text-center">Education</p>
                          </div>
                    </div>

                    <div class="row mt-3">
                         <div class="col-md-4">
                            <h2 class="text-center"><strong>${{$merchant->health_matched}}</strong></h2>
                             <p class="lead text-center">Health</p>
                          </div>

                          <div class="col-md-4">
                             <h2 class="text-center"><strong>${{$merchant->disasters_matched}}</strong></h2>
                             <p class="lead text-center">Disasters</p>
                          </div>

                          <div class="col-md-4">
                             <h2 class="text-center"><strong>${{$merchant->animals_matched}}</strong></h2>
                             <p class="lead text-center">Animals</p>
                          </div>
                    </div>

                </div>
              </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-12">
              <div class="card shadow mb-2 bg-white rounded">
                <div class="card-header">Active Causes Participating in</div>
                <div class="card-body row">
                    @foreach($active_causes as $cause)
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

        <div class="row mt-3">
            <div class="col-md-12">
              <div class="card shadow mb-2 bg-white rounded">
                <div class="card-header">Past Causes</div>
                <div class="card-body row">
                    @foreach($past_causes as $cause)
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

    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</body>
</html>