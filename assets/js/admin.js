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
    if (e == 'home') {
        document.getElementById('home').style.display = 'flex';
        document.getElementById('other').style.display = 'none';
    } else {
        document.getElementById('home').style.display = 'none';
        document.getElementById('other').style.display = 'initial';
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            document.getElementById("total-users").innerHTML = this.responseText;
        }
        xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=" + e, true);
        xhttp.send();
    }
    openCloseSideMenu();
}


/// APPROVE FUNCTION
function approve (e) 
{
    // console.log(e.value);
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        alert("Approved");
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=approve&cid=" +  e.value, true);
    xhttp.send();
}

/// DECLINE FUNCTION
function decline (e) 
{
    // console.log(e.closest('tr').innerText.split('\t')[0]);
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
        alert("Declined");
    }
    xhttp.open("GET", "./assets/phps/admin-data-fetch.php?func=decline&cid=" +  e.value, true);
    xhttp.send();
}