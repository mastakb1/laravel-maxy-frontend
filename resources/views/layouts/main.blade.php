
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- logo -->
    <link rel="icon" href="/img/maxy.png" type="image/x-icon">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


    <title>Maxy Academy</title>
  </head>
  <body>

    @include('partials.navbar')

    @yield('content')

    @include('partials.footer')
    </div>
  

    <!-- Bootstrap Bundle with Popper -->
    
    <script src="/js/script.js"></script>

  
     <!-- Swiper JS -->
     <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
      $('.partners-carousel').owlCarousel({
        autoplay:true,
        loop:true,
        margin:2,
        dots:false,
        slideTransition: 'linear',
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        autoplaySpeed: 4500,
        responsive:{
          0:{
            items:2
          },
          500:{
            items:3
          },
          600:{
            items:4
          },
          800:{
            items:5
          },
          1200:{
            items:6
          },
        }
      });

      $('.prog-carousel').owlCarousel({
        autoplay:false,
        loop:true,
        items:1,
        dots:false,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        autoplaySpeed: 4500,
        responsive:{
          0:{
            items:1
          },
          768:{
            items:3
          },
          1024:{
            items:4
          },
        }
      });

    $('.testimonials-slider').owlCarousel({
        autoplay:false,
        slideSpeed:3000,
        items:3,
        nav:true,
        margin:30,
        dots:false,
        responsive:{
          320:{
            items:1
          },
          750:{
            items:2
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
    });

    $('.program-slider').owlCarousel({
        autoplay:false,
        slideSpeed:3000,
        items:3,
        nav:true,
        margin:10,
        dots:false,
        responsive:{
          320:{
            items:1
          },
          750:{
            items:2
          },
          600:{
            items:3
          },
          1000:{
            items:3
          }
        }
    });

    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 300,
        modifier: 0.5,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
    });

// Get the canvas element
// var ctx = document.getElementById('myChart').getContext('2d');

// Sample data for the chart
// var data = {
//   labels: ['January', 'February', 'March', 'April', 'May', 'June'],
//   datasets: [{
//     label: 'Dataset 1',
//     data: [10, 20, 30, 25, 15, 35],
//     borderColor: 'blue',
//     fill: false
//   },
//   {
//     label: 'Dataset 2',
//     data: [10, 20, 40, 28, 36, 35],
//     borderColor: 'red ',
//     fill: false
//   }]
// };

// Configuration options for the chart
// var options = {
//   responsive: true,
//   scales: {
//     y: {
//       beginAtZero: true
//     }
//   },
//   legend: {
//     position: 'right',
//     align: 'start',
//     labels: {
//       font: {
//         size: 14
//       }
//     }
//   }
// };

// Create the chart
// var myChart = new Chart(ctx, {
//   type: 'line',
//   data: data,
//   options: options
// });


    </script>

  </body>
</html>