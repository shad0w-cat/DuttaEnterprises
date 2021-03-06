<?php
session_start();
if (!$_SESSION['success'])
header("location: login");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <script src="https://kit.fontawesome.com/798bbe8d31.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Admin</title>
</head>

<body>

    <header>
        <div id="sidenav-btn-div">
            <i class="fa-solid fa-bars closed-nav" id="menu-btn"></i>
        </div>
        <h1>Dutta Enterprises</h1>
        <button type="button" id="logout-btn" onclick="logout()">
            Logout
        </button>
    </header>
    <div id="sidenav-div">
        <nav id="sidenav">
            <ul>
                <!-- <li onclick="dataFetch('home')">Home</li> -->
                <li onclick="dataFetch('enquiries')">View User Enquiries</li>
                <li onclick="dataFetch('loans')">View Approved / Unapproved loans</li>
                <!-- <li></li>
                <li></li>
                <li></li> -->
            </ul>
        </nav>
    </div>
    <main>
        <div id="home">
            <h2>Total Loan Requests (Completed/Pending): <span id="total-requests">10</span></h2>
            <h2>Loan Approval Pending: <span id="loan-pending">10</span></h2>
            <h2>Total Loans Approved: <span id="loan-approved">10</span></h2>
            <h2>Total Loans Declined: <span id="loan-declined">10</span></h2>
            <!-- <h2>Total Users: <span id="total-users">10</span></h2> -->
            <!-- <h2>Customers wothout any loan: <span id="total-contact-users">10</span></h2> -->
        </div>
        <div id="other">
           
        </div>
    </main>

    <footer>

    </footer>


    <script src="../assets/js/admin.js"></script>
</body>

</html>