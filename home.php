<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>
   <!-- font-awesom cdn link -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   <!-- custom css file link-->
   <link rel="stylesheet" href="css\style.css">
   <!-- swiper css link-->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- Link Swiper's CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />


</head>

<body>


   <div class="container">
      <?php @include 'header.php'; ?>

      <section class="home">

         <div class="swiper home-slider"> <!--https://swiperjs.com/demos     https://codesandbox.io/p/sandbox/v43ce0?file=%2Findex.html%3A1%2C1 -->

            <div class="swiper-wrapper">

               <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                  <div class="content">
                     <h3>plan your wedding!</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
                     <a href="about.php" class="btn">discover more</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                  <div class="content">
                     <h3>plan your wedding!</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
                     <a href="about.php" class="btn">discover more</a>
                  </div>
               </div>

               <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                  <div class="content">
                     <h3>plan your wedding!</h3>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit, obcaecati quos. Minima eius qui id quas atque corporis, quia nulla.</p>
                     <a href="about.php" class="btn">discover more</a>
                  </div>
               </div>

            </div>

            <div class="swiper-pagination"></div>

         </div>

      </section>

      <section class="services">

<h1 class="heading">our services</h1>

<div class="swiper service-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/service-1.jpg" alt="">
         <div class="content">
            <h3>photography</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
            <a href="about.php" class="btn">about us</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/service-2.jpg" alt="">
         <div class="content">
            <h3>wedding registory</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
            <a href="about.php" class="btn">about us</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/service-3.jpg" alt="">
         <div class="content">
            <h3>guest list</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
            <a href="about.php" class="btn">about us</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/service-4.jpg" alt="">
         <div class="content">
            <h3>wedding cake</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
            <a href="about.php" class="btn">about us</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/service-5.jpg" alt="">
         <div class="content">
            <h3>wedding ceremony</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
            <a href="about.php" class="btn">about us</a>
         </div>
      </div>

      <div class="swiper-slide slide">
         <img src="images/service-6.jpg" alt="">
         <div class="content">
            <h3>fine dining</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, pariatur!</p>
            <a href="about.php" class="btn">about us</a>
         </div>
      </div>

   </div>

   <div class="swiper-pagination"></div>

</div>

</section>
      <?php @include 'footer.php'; ?>

   </div>










   <!-- swiper js link  -->
   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>