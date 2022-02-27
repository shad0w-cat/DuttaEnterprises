///
/// NAV FUNCTIONS
///
menuBtn = document.getElementById('menu-btn');

menuBtn.onclick = openCloseSideMenu;

function openCloseSideMenu() {
    if (menuBtn.classList.contains('closed-nav')) {
        menuBtn.classList.remove('closed-nav');
        menuBtn.classList.add('visible-nav');
        menuBtn.classList.add('fa-xmark');
        menuBtn.classList.remove('fa-bars');
        document.getElementById('sidenav-div').style.display = "initial";
    } else if (menuBtn.classList.contains('visible-nav')) {
        menuBtn.classList.add('closed-nav');
        menuBtn.classList.remove('visible-nav');
        menuBtn.classList.remove('fa-xmark');
        menuBtn.classList.add('fa-bars');
        document.getElementById('sidenav-div').style.display = "none";
    }
}


///
/// DB FUNCTIONS
///

function dataFetch(e) {
    console.log(e);
    // if (e == 'home') {
    //     document.getElementById('home').style.display = 'flex';
    //     document.getElementById('other').style.display = 'none';
    //     xhttp.onload = function () {
    //         id_numbers = JSON.parse(this.responseText);
    //         // document.getElementById("total-requests").innerHTML = ;
    //         // document.getElementById("loan-pending").innerHTML = ;
    //         // document.getElementById("loan-approved").innerHTML = ;
    //         // document.getElementById("loan-declined").innerHTML = ;
    //         // document.getElementById("total-users").innerHTML = ;
    //         // document.getElementById("total-contact-users").innerHTML = ;
    //     }
    // } else {
    document.getElementById('home').style.display = 'none';
    document.getElementById('other').style.display = 'initial';
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        document.getElementById("other").innerHTML = this.responseText;
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=" + e, true);
    xhttp.send();
    // }
    openCloseSideMenu();
}

dataFetch('loans');

/// APPROVE FUNCTION
function approve(e) {
    // console.log(e.value);
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        alert("Approved");
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=approve&cid=" + e.value, true);
    xhttp.send();
}

/// DECLINE FUNCTION
function decline(e) {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        alert("Declined");
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=decline&cid=" + e.value, true);
    xhttp.send();
}

function logout() {
    console.log('hel');
    window.location.href = 'login/';
}

function enquiry(e)
{
    email = e.closest('tr').innerText.split('\t')[2];
    enq = e.closest('tr').innerText.split('\t')[4];
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        alert("Answered");
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=enquiryAns&eid=" + e.value + "&enq=" + enq + "&email=" + email, true);
    xhttp.send();
    console.log(enq);
    prebuiltMailURL = "mailto:"+email+"?subject=Reply%20to%20your%20enquiry&body=--------%20Write%20before%20this%20line--------%0A%0AOriginal%20Enquiry%0A"+enq;
    console.log(prebuiltMailURL); 
    window.open(prebuiltMailURL, '_blank');
}

function ignore(e)
{
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        alert("Ignored");
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=enquiryIgn&eid=" + e.value, true);
    xhttp.send();
}