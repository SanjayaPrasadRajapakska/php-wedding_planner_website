<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
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

        <section class="about">
            <img src="images\about-img.png" alt="">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, inventore iusto?
                Quisquam possimus quaerat, odio nobis ab et? adipisicing elit. Alias, inventore iusto?
                Quisquam possimus quaerat, odio nobis ab et?</p>
            <a href="contact.php" class="btn">contact us</a>

        </section>

        <section class="team">
            <h3 class="heading">our team</h3>
            <div class="box-container">
                <div class="box">
                    <img src="images\team-1.jpg" alt="">
                    <h3>jone deo</h3>
                    <p>wedding planner</p>
                    <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>

                    </div>


                </div>

                <div class="box">
                    <img src="images\team-2.jpg" alt="">
                    <h3>jone deo</h3>
                    <p>wedding planner</p>
                    <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>

                    </div>


                </div>


                <div class="box">
                    <img src="images\team-3.jpg" alt="">
                    <h3>jone deo</h3>
                    <p>wedding planner</p>
                    <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>

                    </div>


                </div>


                <div class="box">
                    <img src="images\team-4.jpg" alt="">
                    <h3>jone deo</h3>
                    <p>wedding planner</p>
                    <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                    <a href="#" class="fab fa-instagram"></a>

                    </div>


                </div>


            </div>

        </section>

        <?php @include 'footer.php'; ?>

    </div>









    <!-- swiper js link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js" integrity="sha512-+z66PuMP/eeemN2MgRhPvI3G15FOBbsp5NcCJBojg6dZBEFL0Zoi0PEGkhjubEcQF7N1EpTX15LZvfuw+Ej95Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js file link-->
    <script src="js\script.js"></script>

</body>

</html>