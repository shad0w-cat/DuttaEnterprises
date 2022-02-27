<?php

    require '../assets/phps/db_login.php';

    $conn = mysqli_connect($servername, $username, $password, $database);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $number = $_POST["number"];
        $enquiry = $_POST["enquiry"];
        $enquiryDate = date('m-d-Y',strtotime("now"));
        $sql = "INSERT INTO `visitorEnquiries` ( `visitorName`, `email`, `phoneNo` , `enquiry` , `enquiryDate`, `enquiryAnswered`) VALUES ( '$name', '$email', '$number' , '$enquiry' , str_to_date('$enquiryDate', '%m-%d-%Y'), 0)";
        $result = mysqli_query($conn, $sql);
        if (!$result)
        {
            die($conn->error);
        }
        $conn->close();
        echo '<script type="text/javascript">';
        echo 'parent.closeVisitor()';
        echo '</script>';
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquiry - Dutta Enterprise</title>
    <link rel="stylesheet" href="../assets/css/visitor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

</head>

<body style="background-color: var(--primary-color);">
   
    <div id="context">
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