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
    <!-- Navigation -->
    <nav
      class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top"
    >
      <div class="container">
        <a class="navbar-brand" href="index.html"
          ><span class="logo-e">e</span>Market</a
        >
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
            <!--             <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownPortfolio"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Portfolio
              </a>
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdownPortfolio"
              >
                <a class="dropdown-item" href="portfolio-1-col.html"
                  >1 Column Portfolio</a
                >
                <a class="dropdown-item" href="portfolio-2-col.html"
                  >2 Column Portfolio</a
                >
                <a class="dropdown-item" href="portfolio-3-col.html"
                  >3 Column Portfolio</a
                >
                <a class="dropdown-item" href="portfolio-4-col.html"
                  >4 Column Portfolio</a
                >
                <a class="dropdown-item" href="portfolio-item.html"
                  >Single Portfolio Item</a
                >
              </div>
            </li> -->
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
        @yield("contenu_page")
    </div>
    </nav>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
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
