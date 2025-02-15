<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Le site de vente en ligne N 1" />
    <meta name="author" content="" />

    <title>eMarket - Accueil</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{asset('css/all.css')}}" rel="stylesheet" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/"><span class="logo-e">e</span>Market</a>
            <button
            class="navbar-toggler navbar-toggler-right"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.html">Habillement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Electromenager</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Vehicules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Immobilier</a>
                    </li>
                    @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @can('admin')
                                        <a class="dropdown-item" href="/admin/"><i class="fas fa-shield-alt"></i> Back Office</a>
                                    @endcan
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                </ul>
            </div>
            </div>
        </nav>
      <div class="contenu">
          @if(session('success'))
              <div class="alert alert-success">{{session('success')}}</div>
          @endif
          @if($errors->any())
              @foreach($errors->all() as $error)
                  <div class="alert alert-danger">{{$error}}</div>
              @endforeach
          @endif
        @yield("content")
      </div>
    <!-- Footer -->
    <footer class="py-1 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">
          Copyright &copy; Your Website 2019
        </p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>
  </body>
    <!-- Bootstrap core JavaScript -->
  </body>
</html>
