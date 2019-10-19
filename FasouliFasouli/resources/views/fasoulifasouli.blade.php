<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fasouli Fasouli</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="{{ url('/') }}">Menu for BOC Demo</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item  ">
                <a class="nav-link active" href="{{url('/')}}">Landing Page</a>
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
              <li class="nav-item">
                <a class="nav-link" href="{{url('/store')}}">Store</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container-fluid">

          <div class="row mt-3 bg-white p-5">
              <div class="col-md-12 text-center">
                  <img width="25%" src="{{asset('imgs/full_logo.png')}}">
                  <h4 class="pt-3">Crowdfunding for social causes through micro-donations.</h4>
              </div>
          </div>


          <div class="row mt-3">
            <div class="col-md-4 text-center">
                <h3>For People</h3>
                <img id="forpeople" class="svg" src="{{asset('imgs/heart-solid.svg')}}" width="25%">
                <h5 class="p-3">Donating a few cents through your online purchases has the power to help millions of people in need </h5>
                <button class="btn btn-outline-primary"><strong>DOWNLOAD OUR APP</strong></button>
            </div>
            <div class="col-md-4 text-center">
                <h3>For Non-Profits</h3>
                <img class="svg special" src="{{asset('imgs/hand-holding-heart-solid.svg')}}" width="25%">
                <h5 class="p-3">Raise funds for your campaigns faster and easier by publishing them on our network</h5>
                <button class="btn btn-outline-primary"><strong>REGISTER ON OUR PLATFORM</strong></button>
            </div>
            <div class="col-md-4 text-center">
                <h3>For Merchants</h3>
                <img class="svg" src="{{asset('imgs/donate-solid.svg')}}" width="25%">
                <h5 class="p-3">Offer micro-donation capabilities to your customers by integrating our API in your systems </h5>
                <button class="btn btn-outline-primary"><strong>INTEGRATE OUR API</strong></button>
            </div>
          </div>
          
        </div>

        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>

        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

        <script type="text/javascript">
            /*
             * Replace all SVG images with inline SVG
             */
            $('img.svg').each(function(){
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                jQuery.get(imgURL, function(data) {
                    // Get the SVG tag, ignore the rest
                    var $svg = jQuery(data).find('svg');

                    // Add replaced image's ID to the new SVG
                    if(typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }
                    // Add replaced image's classes to the new SVG
                    if(typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass+' replaced-svg');
                    }

                    // Remove any invalid XML tags as per http://validator.w3.org
                    $svg = $svg.removeAttr('xmlns:a');

                    // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
                    if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
                        $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
                    }

                    // Replace image with new SVG
                    $img.replaceWith($svg);

                }, 'xml');

            });
        </script>
    </body>
</html>
