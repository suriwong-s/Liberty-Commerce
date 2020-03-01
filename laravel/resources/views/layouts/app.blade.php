<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cotonbleu</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/cookie.js') }}" defer></script>
    <script src="{{ asset('js/panier.js') }}" defer></script>
    <script src="{{ asset('js/toggle.js') }}" defer></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/reset.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <div id=page>
      <header id="header">
        <div id="header-inner"> 
          <div id="logo">
            <h1><a href="index.html">Coton<span>Bleu</span></a></h1>
          </div>
          <div id="nav">    
            <ul>
                @guest
                         <li><a href="{{ route('login') }}">Login</a></li>
                    @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @endif
                @else
                        <li><a href="{{ route('catalogue') }}">Catalog</a></li>
                        <li><a class="totalcount fa fa-shopping-cart" href="{{ route('panier') }}"><span>0</span></a></li>
                        <li><a>{{ Auth::user()->name }}</a></li>
                        <li><a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                        </li>
                @endguest
            </ul>
          </div>
          <div class="clear"></div>
        </div>
      </header>
      <main class="py-4">
            @yield('content')
      </main>      
    <div id="popup-overlay">
      <div id="popup">
        <p>This website is using cookies. Click "Submit" for cookie 5 minutes</p>
        <a href="javascript:;" value="submit" id="submit" class="submit" onClick="submitcookie()">Submit</a>
        <a href="javascript:;" onClick="document.getElementById('popup-overlay').style.display = 'none'">Close</a>
      </div>
  </div>

      <footer id="footer">
                <div id="footer-inner">
                    <div id="social_media">
                        <a href="https://facebook.com" class="fa fa-facebook"></a>
                        <a href="https://twitter.com" class="fa fa-twitter"></a>
                    </div>
                    <div id="copyright">
                    <p>© 2019 Copyright</p>
                    </div>
                </div>
        </footer>
        <div class="clear"></div>
    </div>
  @yield('scripts')  
</body>
</html>
