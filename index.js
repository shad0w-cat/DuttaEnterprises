const parentContainer = document.querySelector(".read-more-container");
parentContainer.addEventListener("click",event=>{
    const current = event.target;
    const isReadMoreBtn = current.className.includes('read-more-btn');
    if(!isReadMoreBtn) return;
    const currentText = event.target.parentNode.querySelector(".read-more-text");
    currentText.classList.toggle('read-more-text--show');
    current.textContent= current.textContent.includes('Read More') ? "Read Less..." : "Read More...";
})

const selectedRange =document.getElementById("selectedRange");
const selectedRange2 =document.getElementById("selectedRange2");

function result()
{
    let interest = 20;
    let amt = selectedRange.textContent;
    
}

function rangeSlider1(value)
{
    selectedRange.textContent = value;
    
}
function rangeSlider2(value)
{
    selectedRange2.textContent = value;
}