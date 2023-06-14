<?php
$conn = mysqli_connect('localhost','root','','contact_db');
if(isset($_POST['send'])){/*btn eka lesa yodana input eke "name"eka*/
    $name = $_POST['name']; /*input name */
    $email = $_POST['email']; 
    $number = $_POST['number']; 
    $plan = $_POST['plan']; 
    $address = $_POST['address']; 
    $message = $_POST['message']; 

 $insert = "INSERT INTO `contact_form`(`name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$message')";/*badabase eke sql=>insert */
 
mysqli_query($conn, $insert);

header('location:contact.php');

}

?> 




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
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

        <section class="contact">
            <h1 class="heading">contact us</h1>
            <form action="" method="post">
                <div class="flex">
                    <div class="inputbox">
                        <span>your name</span>
                        <input type="text" placeholder="enter your name" name="name" required>

                    </div>

                    <div class="inputbox">
                        <span>your emali</span>
                        <input type="email" placeholder="enter your email" name="email" required>

                    </div>

                    <div class="inputbox">
                        <span>your number</span>
                        <input type="number" placeholder="enter your number" name="number" required>

                    </div>
                    <div class="inputbox">
                    <span>choose plan</span>
                        <select name="plan">
                            <option value="basic">basic plan</option>
                            <option value="basic">premium plan</option>
                            <option value="ultimate">ultimate plan</option>
                        </select>

                    </div>

                    <div class="inputbox">
                        <span>your address</span>
                        <textarea name="address" placeholder="enter your address" required cols="30" rows="10"></textarea>

                    </div>

                    <div class="inputbox">
                        <span>your message</span>
                        <textarea name="message" placeholder="enter your message" required cols="30" rows="10"></textarea>

                    </div>
                </div>
                <input type="submit" value="send message" name="send" class="btn">
            </form>

        </section>
        <?php @include 'footer.php'; ?>

    </div>









    <!-- swiper js link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.js" integrity="sha512-+z66PuMP/eeemN2MgRhPvI3G15FOBbsp5NcCJBojg6dZBEFL0Zoi0PEGkhjubEcQF7N1EpTX15LZvfuw+Ej95Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- custom js file link-->
    <script src="js\script.js"></script>

</body>

</html>