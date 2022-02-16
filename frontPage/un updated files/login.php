<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>

<body style="background-color: var(--primary-color);">
    <div id="back">
        <img src="img/back.png" width="100%" height="100%" alt="">
    </div>
    <div id="head">
        <div id="heading">
            <img src="img/logo.png" width="160px" height="160px" alt="">
            <h1>Dutta Enterprises</h1>
            <i class="fas fa-moon" id="moon" title="theme"></i>
        </div>
        <p>Stop worrying about bad credits</p>
        <p>Take a loan today and start chasing your dreams</p>
    </div>
    <div id="context">
        <div id="weltxt">
            <div id="text">
                <h1>Wondering what we offer?</h1>
            </div>
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="img/card1.png" height="100%" />
                    </div>
                    <div class="swiper-slide">
                        <img src="img/card2.jpg" height="100%" />                     
                    </div>
                    <div class="swiper-slide">
                        <img src="img/card3.png" height="100%" />
                    </div>
                    <div class="swiper-slide">
                        <img src="img/card4.jpg" height="100%" />
                    </div>
                    <div class="swiper-slide">
                        <img src="img/card5.jpg" height="100%" />
                    </div>
                    <div class="swiper-slide">
                        <img src="img/card6.jpg" height="100%" />
                    </div>
                </div>
            </div>
            <button type="submit" id="apply">Apply now for more</button>
            <p>Fill out the form and start your journey today with us...</p>
            <i class="fas fa-long-arrow-alt-right"></i>
        </div>
        <form method="post" action="#">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="number" class="form-label">Phone number</label>
                <input type="number" class="form-control" id="number" name="number" required>
            </div>
            <div class="mb-3">
                <label for="enquire" class="form-label">Enquiry</label>
                <textarea type="text" class="form-control" id="enquire" name="enquiry" rows="3" cols="5"
                    required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Proceed to website</button>
        </form>
    </div>
    <?php

    $servername = "159.223.156.104";
    $username = "loanadmin";
    $password = "loanPass1@";
    $database = "loanweb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $enquiry = $_POST["enquiry"];

        $sql = "INSERT INTO `loan` ( `name`, `email`, `number` , `enquiry`) VALUES ( '$name', '$email', '$number' , '$enquiry')";
        $result = mysqli_query($conn, $sql);
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
     var icon = document.getElementById("moon");
    icon.addEventListener('click' , () =>{
        document.body.classList.toggle('dark-theme');
        if(document.body.classList.contains('dark-theme')){
            icon.classList.add('fa-sun');
            icon.classList.remove('fa-moon');
        }
        else{
            icon.classList.remove('fa-sun');
            icon.classList.add('fa-moon');
        }
    });
    var swiper = new Swiper(".mySwiper", {
        effect: "cube",
        grabCursor: true,
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        loop: true,
        autoplay: {
            delay: 4500,
            disableOnInteraction: false,
        },
    });
   var button = document.getElementById("apply");
   button.addEventListener('click' , () => {
       alert("Please fill the form to proceed to the website");
   })
</script>

</html>