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
@vite(['resources/css/app.css', 'resources/js/app.js'])
@livewireStyles
  </head>
  <body>
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- fine navbar -->
    <!-- header -->
    <x-header></x-header>
    <!-- fine header -->

<div class="min-vh-100">
    {{ $slot }}
</div>

              <!-- footer -->
              <x-footer></x-footer>
              <!-- Fine Footer -->






















            <!-- js bootstrap -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
            <!-- js esterno -->
            <script src={{ asset('js/main.js') }}></script>
            <!-- aos js -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>AOS.init();</script>
            <!-- swiper cdn -->
            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
            <!-- js interno custom -->



            <!-- // SWIPER -->
            <script>
              let difficulty = [
                {name: 'Sara', value: 5, img: './media/OIP-removebg-preview.png', text: '"I found this coding school website exceptional! Thanks to their personalized learning program, I learned how to code in an easy and fun way. I highly recommend this website to anyone who wants to learn how to code."'},
                {name: 'Carlo', value: 5, img: './media/OIP-removebg-preview.png', text: '"This coding school website is fantastic! Their instructors are experts and very helpful. I learned a lot and now feel much more confident in programming. I recommend everyone to try it out!"'},
                {name: 'Jessica', value: 5, img: './media/OIP-removebg-preview.png', text: '"I am very satisfied with this coding school website. Their learning program is well-structured and easy to follow. Thanks to them, I learned to program effectively and now have great job prospects."'},
                {name: 'Fausto', value: 5, img: './media/OIP-removebg-preview.png', text: '"I found this coding school website exceptional! Thanks to their personalized learning program, I learned how to code in an easy and fun way. I highly recommend this website to anyone who wants to learn how to code."'},

              ];

              let swiperWrapper = document.querySelector('.swiper-wrapper');

              let slideImages = [ './media/OIP-removebg-preview.png', './media/OIP-removebg-preview.png', './media/OIP-removebg-preview.png', './media/OIP-removebg-preview.png', './media/OIP-removebg-preview.png', './media/OIP-removebg-preview.png', ];

              difficulty.forEach((difficoltà, index) => {
                // immagini delle card
                let slideDiv = document.createElement('div');
                slideDiv.classList.add('swiper-slide');
                let slideContentDiv = document.createElement('div');
                slideContentDiv.classList.add('slideContent' , 'custom-slideText');

                let img = document.createElement('img');
                img.classList.add('cardCustomImg');
                img.setAttribute('src', slideImages[index]);
                img.setAttribute('alt', difficoltà.name + ' Image');

                //  inserimento testo
                let p = document.createElement('p');
                p.classList.add('cardCustomText');
                p.innerHTML = difficoltà.text;

                // inserimento nome
                let h3 = document.createElement('h3');
                h3.classList.add('cardCustomName');
                h3.innerHTML = difficoltà.name;

                // stelline nelle card
                let starContainerDiv = document.createElement('div');
                starContainerDiv.classList.add('starContainer');
                let starsDiv = document.createElement('div');
                starsDiv.classList.add('stars');
                let stars = createStars(difficoltà.value);
                starsDiv.innerHTML = stars;
                // appese img, p e stelline ai loro container
                slideContentDiv.appendChild(h3);
                slideContentDiv.appendChild(p);
                starContainerDiv.appendChild(starsDiv);
                slideContentDiv.appendChild(img);
                slideContentDiv.appendChild(starContainerDiv);
                slideDiv.appendChild(slideContentDiv);
                swiperWrapper.appendChild(slideDiv);
              });

              function createStars(fullStars) {
                let final = '';
                for (let i = 1; i <= 5; i++) {
                  if (fullStars >= i) {
                    final += `<i class="fas fa-star py-3"></i>`;
                  } else {
                    final += `<i class="far fa-star py-3"></i>`;
                  }
                }
                return final;
              }

              var swiper = new Swiper(".mySwiper", {
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "1",
                coverflowEffect: {
                  rotate: 50,
                  stretch: 0,
                  depth: 100,
                  modifier: 1,
                  slideShadows: true,
                },
                autoplay: {
                  delay: 6000,
                  disableOnInteraction: true,
                },
                loop: true,
                pagination: {
                  el: ".swiper-pagination",
                },
              });

              </script>
            <!-- Fine SWIPER -->
            <!-- fine js -->
            @livewireScripts
          </body>
          </html>
