<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets\css\contact.css">
    <link rel="stylesheet" href="assets\css\fontawesome-free-5.15.4-web\css\all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <div class="head">
        <div class="logo">
            <img src="assets/images/logo.png" alt="logo" height="160px" width="160px">
            <h3>DUTTA ENTERPRISES</h3>
        </div>
        <div class="txt">
            <h1>Allow us to get the best loan deals for you !</h1>
        </div>
    </div>
    <div class="form">
        <form class="row g-3" action="#" method="post">
            <div class="col-md-4">
                <label for="name" class="form-label">Full name *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="father" class="form-label">Father's name *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user-tie"></i></span>
                    <input type="text" class="form-control" id="father" name="father" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="mother" class="form-label">Mother's name *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-female"></i></span>
                    <input type="text" class="form-control" id="mother" name="mother" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="dob" class="form-label">Date of Birth *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-calendar-alt"></i></span>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="number" class="form-label">Contact number *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"
                        style="font-weight: bold; font-family: cursive;">+91</span>
                    <input type="number" class="form-control" id="number" name="number" required>
                </div>
            </div>
            <div class="col-md-6" style="width: 100%;">
                <label for="address" class="form-label">Address *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-home"></i></span>
                    <textarea type="text" class="form-control" id="address" name="address" rows="1" required></textarea>
                </div>
            </div>
            <div class="col-md-4">
                <label for="occupation" class="form-label">Occupation *</label>
                <select class="form-select" id="occupation" name="occupation" required>
                    <option selected disabled value="">Select an option</option>
                    <option value="salaried">Salaried</option>
                    <option value="government">Government</option>
                    <option value="self(professional)">Self Employed(Professional)</option>
                    <option value="self(buisness)">Self Employed(Buisness)</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="occupation_name" class="form-label">Occupation name *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user-tie"></i></span>
                    <input type="text" class="form-control" id="occupation_name" name="job"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="income" class="form-label">Gross net income *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-rupee-sign"></i></span>
                    <input type="number" class="form-control" id="income" name="income"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-4">
                <label for="loan" class="form-label">Loan type *</label>
                <select class="form-select" id="loan" name="loan" required>
                    <option selected disabled value="">Select an option</option>
                    <option value="House loan">House loan</option>
                    <option value="Car loan">Car loan</option>
                    <option value="Buisness loan">Buisness loan</option>
                    <option value="Security loan">Security loan</option>
                    <option value="Personal loan">Personal loan</option>
                    <option value="Education loan">Education loan</option>
                    <option value="Property loan">Property loan</option>
                    <option value="Real Estate loan">Real Estate loan</option>
                </select>
            </div>
            <div class="col-md-4">
                <label for="amount" class="form-label">Loan amount required *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-rupee-sign"></i></span>
                    <input type="number" class="form-control" id="amount" name="amount"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-3" id="radio">
                <label for="LOC" class="form-label">Loan taken from other company *</label>
                <br>
                <label class="opt">
                    <input type="radio" id="yes" name="radio" />
                    <span>Yes</span>
                </label>
                <label class="opt">
                    <input type="radio" id="no" name="radio" />
                    <span>No</span>
                </label>
            </div>
            <div class="col-md-4 inactive company">
                <label for="company" class="form-label">Company name *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-building"></i></span>
                    <input type="text" class="form-control val" id="company" name="company"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-4 inactive company">
                <label for="loan_taken" class="form-label">Type of Loan taken *</label>
                <select class="form-select val" id="loan_taken" name="loan_taken" required>
                    <option selected disabled value="">Select an option</option>
                    <option value="House loan">House loan</option>
                    <option value="Car loan">Car loan</option>
                    <option value="Buisness loan">Buisness loan</option>
                    <option value="Security loan">Security loan</option>
                    <option value="Personal loan">Personal loan</option>
                    <option value="Education loan">Education loan</option>
                    <option value="Property loan">Property loan</option>
                    <option value="Real Estate loan">Real Estate loan</option>
                </select>
            </div>
            <div class="col-md-4 inactive company">
                <label for="purchase" class="form-label">Loan amount taken from that company *</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-rupee-sign"></i></span>
                    <input type="number" class="form-control val" id="purchase" name="purchase"
                        aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary" id="button" type="submit">Send for approval</button>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                    <label class="form-check-label" for="invalidCheck2">
                        I authorize the website and its partner providers to call or SMS me in connection with my
                        application & agree to the Privacy Policy and Terms of use
                    </label>
                </div>
            </div>

        </form>
    </div>
    <!-- <?php

    // require 'db_login.php';

    // $conn = mysqli_connect($servername, $username, $password, $database);
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //     $name = $_POST["name"];
    //     $Fname = $_POST["father"];
    //     $Mname = $_POST["mother"];
    //     $contact = $_POST["number"];
    //     $email = $_POST["email"];
    //     $dob = $_POST["dob"];
    //     $address = $_POST["address"];
    //     $occupation = $_POST["occupation"];
    //     $income = $_POST["income"];
    //     $LOC = $_POST["radio"];
    //     $amount = $_POST["amount"];
    //     $job = $_POST["job"];
    //     $loan = $_POST["loan"];
    //     $company = $_POST["company"];
    //     $loanType = $_POST["loan_taken"];
    //     $purchase = $_POST["purchase"];

    //     $sql = "INSERT INTO `contact` ( `name`, `father`, `mother`, `email`, `number` , `dob`, `address`, `occupation`, `occupation_name`, `loan`, `income`, `LOC`, `amount`, `comapny`, `loanType`, `purchase`) VALUES ( '$name', '$Fname', '$Mname', '$email', '$contact' , '$dob', '$address', '$occupation', `$job`, `$loan`, '$income', '$LOC', '$amount', '$company', '$loanType', '$purchase')";
    //     $result = mysqli_query($conn, $sql);
    // }

    ?> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script>
    var yes = document.getElementById("yes");
    var no = document.getElementById("no");
    var button = document.getElementById("button");
    var box = document.getElementsByClassName("company");
    var box2 = document.getElementsByClassName("val");
    yes.addEventListener('click', () => {
        for (let i = 0; i < box.length; i++) {
            box[i].classList.remove("inactive");
        };
    });
    no.addEventListener('click', () => {
        for (let i = 0; i < box.length; i++) {
            box[i].classList.add("inactive");
        };
        for (let i = 0; i < box2.length; i++) {
            box2[i].value = "";
        };
    });
</script>

</html>