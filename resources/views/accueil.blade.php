@extends('home')

@section("contenu_page")

    <header>
      <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="https://source.unsplash.com/1600x900/?interior"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <a href="#" class="nav-link"
                    ><h5>Produit disponible</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Consectetur quod officiis iusto!
                    </p></a
                  >
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="https://source.unsplash.com/1600x900/?shoes"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <a href="#" class="nav-link"
                    ><h5>Autre produit</h5>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quae delectus accusamus quidem nostrum eum enim nam rem?
                      Neque ea iste commodi quis voluptatem iusto, minus quod
                      quas, ratione esse nihil!
                    </p></a
                  >
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="https://source.unsplash.com/1600x900/?computer"
                  class="d-block w-100"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <a href="#" class="nav-link"
                    ><h5>Encore produit</h5>
                    <p>
                      Nulla vitae elit libero, a pharetra augue mollis interdum.
                    </p></a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>


    <div class="row">
       <h1>Je fais un export d'une layout</h1>
    </div>
@endsection