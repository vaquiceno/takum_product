<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Takum-Products - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">

    <script src="js/jquery.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 4000);
    </script>

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Takum-Products</h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="#">Products</a></li>
                  <li><a href="#">Categories</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <h1 class="cover-heading">@yield('title')</h1><hr>
            @yield('content')
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>Víctor Quiceno. 2017</p>
            </div>
          </div>

        </div>

      </div>

    </div>

  </body>
</html>
