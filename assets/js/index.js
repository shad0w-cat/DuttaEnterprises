// let navitems = document.querySelector(".nav-bar-list");
// let nav = document.querySelector(".nav-bar-div");
let ham = document.querySelector("#hamburger");
ham.addEventListener("click", () => {
    ham.classList.toggle("active");
    console.log("yes");
    // nav.classList.toggle("open");
});

closeVisitorBtn = document.getElementById('close-visitor');
closeVisitorBtn.addEventListener("click", closeVisitor)
function closeVisitor () {
    // console.log("hell");
    document.getElementById('visitor-div').style.display='none';
}

function showVisitor () {
    // console.log("hell");
    document.getElementById('visitor-div').style.display='initial';
}

// let dropdown = document.getElementById("li-loans");
// let loan_dropdown = document.getElementById("loan-dropdown");

// function show() {
//     loan_dropdown.classList.add('show');
// }

// function donotShow() {
//     loan_dropdown.classList.remove('show');

// }
// dropdown.addEventListener("mouseover", () => {
//     show();
// })
// loan_dropdown.addEventListener("mouseover", () => {
//     show();
// });
// loan_dropdown.addEventListener("mouseout", () => {
//     donotShow();

// });
// dropdown.addEventListener("mouseout", () => {
//     donotShow();
// });


const parentContainer = document.querySelector(".read-more-container");
parentContainer.addEventListener("click", event => {
    const current = event.target;
    const isReadMoreBtn = current.className.includes('read-more-btn');
    if (!isReadMoreBtn) return;
    const currentText = event.target.parentNode.querySelector(".read-more-text");
    currentText.classList.toggle('read-more-text--show');
    current.textContent = current.textContent.includes('Read More') ? "Read Less..." : "Read More...";
})

const selectedRange = document.getElementById("selectedRange");
const selectedRange2 = document.getElementById("selectedRange2");
const selectedRange3 = document.getElementById("selectedRange3");

var principal = 100000.0;
var interest = 11.0;
var time = 3.0;
var amount = 3273.87;
document.getElementById("amt-borrow").innerText = principal;
document.getElementById("amt-pay").innerText = Math.round((amount * time * 12) - principal);
document.getElementById("amt-monthly").innerText = Math.round(amount);
document.getElementById("amt-tpay").innerText = Math.round(amount * time * 12);

function result() {
    let tenure = time * 12;
    let rate = interest / 100 / 12;
    amount = principal * rate * Math.pow((rate + 1), tenure) / (Math.pow((rate + 1), tenure) - 1);
    //console.log(amount);
    document.getElementById("amt-borrow").innerText = principal;
    document.getElementById("amt-pay").innerText = Math.round(amount * tenure - principal,2);
    document.getElementById("amt-monthly").innerText = Math.round(amount,2);
    document.getElementById("amt-tpay").innerText = Math.round(amount * tenure,2);
    drawChart();
}

function rangeSlider1(value) {
    selectedRange.textContent = value;
    principal = parseFloat(value);
    // console.log(principal)
    result()
}

function rangeSlider2(value) {
    selectedRange2.textContent = value;
    time = parseFloat(value);
    // console.log(time)

    result()
}

function rangeSlider3(value) {
    selectedRange3.textContent = value;
    interest = parseFloat(value);
    // console.log(interest)

    result()
}


//
// GOOGLE PIE CHARTS
//

google.charts.load("current", {
    packages: ["corechart"]
});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Type', 'Amount'],
        ['Interest', Math.round(amount * time * 12 - principal)],
        ['Amount Borrowed', principal]
    ]);
    var options = {
        title: 'Principal-Interest',
        pieHole: 0.5,
        // backgroundColor: '#373b44',
        // pieStartAngle: 90,
        pieSliceText: 'value',
        borderRadius: 10,
        fontSize: 17,
        /* titleTextStyle: {
            color: 'white',
            fontName: < string > ,
            fontSize: < number > ,
            bold: < boolean > ,
            italic: < boolean >
        },*/
        pieSliceTextStyle: {
            fontSize: 17,
            bold: true,
            padding: 1000,
            color: 'gold'
        },
        tooltip: {
            text: 'value',
            color: 'white'
        },
        chartArea: {
            left: 10,
            top: 50,
            width: "100%"
        },
        legend: {
            'alignment': 'center',
            'position': 'bottom',
            'labeledValueText': 'none',
            textStyle: {
                fontSize: 17,
                // color: 'white'
            }
        },
        slices: {
            1: {
                color: '#45a29e',
                offset: 0.05
            },
            0: {
                color: '#116466'
            }
        }
    };
    var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
    chart.draw(data, options);
}