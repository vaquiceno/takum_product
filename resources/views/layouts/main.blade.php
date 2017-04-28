<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{trans('messages.title_site')}} - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <script src="/js/jquery.min.js"></script>    
    <script src="/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      window.setTimeout(function() {
          $(".alert").fadeTo(500, 0).slideUp(500, function(){
              $(this).remove(); 
          });
      }, 4000);
    </script>

  </head>

  <body>

  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/')}}">{{trans('messages.title_site')}}</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li @yield('actP') ><a href="{{ url('products')}}">{{trans('messages.products')}}</a></li>
          <li @yield('actC') ><a href="{{ url('categories')}}">{{trans('messages.categories')}}</a></li>          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{trans('messages.language')}}: {{App::getLocale()}}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <form action="{{ url('language')}}" method="POST">
                {{ csrf_field() }}
                <li><button style="border: none; background: transparent;" type="submit" name="submit" onclick=";return true;" value="en">English</button></li>
                <li><button style="border: none; background: transparent;" type="submit" name="submit" onclick=";return true;" value="fr">Français</button></li>
              </form>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="container">
    <h1 class="text-center">@yield('title')</h1><hr>
    @yield('content')
  </div>

  </body>
</html>
