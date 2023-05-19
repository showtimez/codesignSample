<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoDeSigN > </title>
    <!-- swiper cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css esterno -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- favicon -->
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'%3E%3Cpath d='M303.23 303.23L0 511.99V511h.99L512 0h-1zM0 0v.99l303.23 303.24h1L0 512v-1zm473.16 473.16l-303.24-303.23h-1L512 0v1l-303.23 303.23h1z' fill='%23202020'/%3E%3C/svg%3E">
</head>
<body>


<!-- navbar -->
<nav class="navbar navbar-expand-lg navCustom custom-infoBg sticky-top ">
    <div class="container-fluid navWrapper">
      <a class="navbar-brand" href="/"><i class="fa-solid fa-terminal logo fa-icone "></i></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse custom-infoBg " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item ">
            <a class="nav-link linkCustom " aria-current="page" href="/">Home.</a>
          </li>
          <li class="nav-item">
              <a class="nav-link linkCustom" href="#about">Contacts.</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle linkCustom " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tutorials.
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#corsi">Html.</a></li>
                    <li><a class="dropdown-item" href="#corsi">CSS.</a></li>
                    <li><a class="dropdown-item" href="#corsi">JavaScript.</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Pricing.</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link linkCustom" href="/about-us">About Us.</a>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="search..." aria-label="Search">
            <button type="button" class="btn btn-sm colorBtn">Search.</button>

        </form>
    </div>
</div>
</nav>
<!-- fine navbar -->
<!-- header -->
<header class="container-fluid vh-100 custom-header">
    <div class="row ">
        <div class="col-12 ">
            <!-- Titolo -->
            <span is="type-async" id="type-text"></span><span class="blinking-cursor text-danger fa-icone"><p class="fa-solid fa-terminal fa-sm fa-icone">  </p></span>
        </div>
    </div>
    <!-- Sottotitolo -->
    <h3 id="numbers">"Code your future with us."</h3>
</header>
<!-- fine header -->

<!-- inizio annunci -->
 <!-- INIZIO ANNUNCI -->

 <section class="container-fluid mt-2 custom-infoBg ">
    <div class="row text-center">
        <div class="quote">
        <h2 class="pt-5 learn textShop px-5">"The good programmers know what to write. The great ones know what to rewrite."</h2>
            <p class="quoteShop">Eric Steven Raymond.</p>
        </div>
        <div class="col-12 col-md-3 ">

            <div class="accordion accordion-flush " id="accordionFlushExample">

                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                     <p class="learn ">Categories</p>
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <!-- filtro per categoria -->
                    <div id="categoryWrapper" class="accordion-body">

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="All" checked>
                            <label class="form-check-label" for="All">
                              <p class="learn">All categories</p>
                            </label>
                          </div>

                    </div>

                  </div>
                </div>


                <div class="accordion-item ">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      <p class="learn">Price</p>
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <!-- filtro per prezzo -->
                    <div class="accordion-body ">

                        <div>
                            <span class="inputNumber" id="incrementNumber1">
                               0 €
                            </span>

                         <input id="inputPrice" type="range" class="w-100" value="">





                            <span id="incrementNumber" class="inputNumber">

                                0

                            </span>

                            <span class="inputNumber"> €</span>

                        </div>

                    </div>

                  </div>
                </div>


                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      <p class="learn">Word Search</p>
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                    <!-- filtro per parola -->
                    <div class="accordion-body">

                        <input type="text" placeholder="Search product" id="wordInput">

                    </div>

                  </div>
                </div>


              </div>

        </div>

        <div class="col-12 col-md-9">

            <div id="cardsWrapper" class="row">


            </div>

        </div>

    </div>
</section>

<!-- FINE ANNUNCI -->




<!-- footer -->
<footer class="container-fluid mt-2 pt-3 custom-infoBg">

    <div class="container">

      <div class="row min-h">

        <div class="col-12 col-md-4 text-center my-2">

          <div class="card">
            <div class="card-body">
              <h2 id="about" class="testoFooter">Contacts.</h2>
              <p class="footer-link">P.IVA: 1234567</p>
              <p class="footer-link">Address: Pvt. Drive 4</p>
              <p class="footer-link">Phone: +00 021022</p>
              <p class="footer-link">E-mail: codesign@info.com</p>


            </div>
          </div>

        </div>

        <div class="col-12 col-md-4 text-center my-2">

          <div class="card">
            <div class="card-body">
              <h2 class="testoFooter">Navigate.</h2>
              <a href="./index.html#numbers" class="footer-link"><p>Metrics</p></a>
              <a href="./index.html#reviews" class="footer-link"><p>Reviews</p></a>
              <a href="./index.html#corsi" class="footer-link"><p>Courses</p></a>
            </div>
          </div>

        </div>


        <div class="col-12 col-md-4 text-center my-2">

          <div class="card">
            <div class="card-body">
              <h2 class="testoFooter">Partners.</h2>
              <p class="footer-link">Aulab</p>
              <p class="footer-link">Bartolini</p>
              <p class="footer-link">Amazon</p>
              <p class="footer-link">Disney</p>
            </div>
          </div>

        </div>
        <div class="d-flex justify-content-center py-3">
          <i class="fa-brands fa-facebook fa-1x logo fa-icone resizeLogo1"></i>
          <i class="fa-brands fa-instagram mx-3 fa-1x logo fa-icone resizeLogo1"></i>
          <i class="fa-brands fa-linkedin fa-1x logo fa-icone resizeLogo1"></i>
        </div>
      </div>

    </div>
  </footer>





<!-- js bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- aos js -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>AOS.init();</script>
<!-- swiper cdn -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <!-- js esterno -->
  <script src= {{ asset('js/annunci.js') }}></script>
  <!-- <script src="./main.js"></script> -->
</body>
</html>
