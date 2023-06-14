<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <!-- lightgallery css link  https://cdnjs.com/====>https://cdnjs.com/libraries/lightgallery-js-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css" integrity="sha512-kwJUhJJaTDzGp6VTPBbMQWBFUof6+pv0SM3s8fo+E6XnPmVmtfwENK0vHYup3tsYnqHgRDoBDTJWoq7rnQw2+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font-awesom cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- custom css file link-->
    <link rel="stylesheet" href="css/style.css">
    <!-- swiper css link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css" integrity="sha512-Y1c7KsgMNtf7pIhrj/Ul2LhutImFYr+TsCmjB8mGAk+cgG1Vm8U1g7tvfmRr6yD5nds03Qgc6Mcb86MBKu1Llg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>


    <div class="container">
        <?php @include 'header.php'; ?>

        <section class="portfolio">
            <div class="heading">our portfolio</div>
            <div class="portfolio-container">
                <a href="images\port-img-1.jpg" class="box">
                    <div class="image">
                        <img src="images\port-img-1.jpg" alt="">
                    </div>
                    <h3>wedding ceremony</h3>
                </a>

                <a href="images\port-img-2.jpg" class="box">
                    <div class="image">
                        <img src="images\port-img-2.jpg" alt="">
                    </div>
                    <h3>wedding ceremony</h3>
                </a>


                <a href="images\port-img-3.jpg" class="box">
                    <div class="image">
                        <img src="images\port-img-3.jpg" alt="">
                    </div>
                    <h3>wedding ceremony</h3>
                </a>

                <a href="images\port-img-4.jpg" class="box">
                    <div class="image">
                        <img src="images\port-img-4.jpg" alt="">
                    </div>
                    <h3>wedding ceremony</h3>
                </a>

                <a href="images\port-img-5.jpg" class="box">
                    <div class="image">
                        <img src="images\port-img-5.jpg" alt="">
                    </div>
                    <h3>wedding ceremony</h3>
                </a>

                <a href="images\port-img-6.jpg" class="box">
                    <div class="image">
                        <img src="images\port-img-6.jpg" alt="">
                    </div>
                    <h3>wedding ceremony</h3>
                </a>


            </div>

        </section>

        <?php @include 'footer.php'; ?>

    </div>







    <!-- lightgallery js link    https://cdnjs.com/====>https://cdnjs.com/libraries/lightgallery-js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>
    <!-- swiper js link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js" integrity="sha512-+z66PuMP/eeemN2MgRhPvI3G15FOBbsp5NcCJBojg6dZBEFL0Zoi0PEGkhjubEcQF7N1EpTX15LZvfuw+Ej95Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js file link-->
    <script src="js\script.js"></script>

    <script>
        lightGallery(document.querySelector('.portfolio .portfolio-container'));
    </script>

</body>

</html>