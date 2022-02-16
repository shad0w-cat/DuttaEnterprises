@import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap');
html , * , body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --primary-color : white;
    --secondary-color : black;
}
.dark-theme{
    --primary-color : black;
    --secondary-color : white;
}
div#back{
    position: fixed;
    width: 80%;
    height: 80%;
    z-index: 1;
    opacity: 0.5;
    margin-top: 50px;
    margin-left: 150px;
}
div#context{
    /* max-width: 1000px; */
    width: 100vw;
    /* margin: 0 auto; */
    position: absolute;
    z-index: 1;
    display: flex;
    flex-direction: row;
    /* justify-content: center; */
    justify-content: space-evenly;
    align-items: center;
    /* height: 450px; */
    /* margin-left: 50px; */
}

/* weltxt */
div#weltxt{
    /* padding: 20px; */
    display: flex;
    flex-direction: column;
  
    
    /* width: 550px; */
    /* margin-top: -20px; */
    /* margin-left: 80px; */
}
div#text h1{
    font-size: 30px;
    margin-top: 20px;
    font-family: 'Architects Daughter', cursive;
    font-family: 'Lobster', cursive;
    color: var(--secondary-color);
    letter-spacing: 2px;
    text-align: center;
    margin-left: 30px;
}
div#text{
    display: flex;
    flex-direction: row;
}
div#heading{
    /* margin-left: 300px; */
}
#moon{
    padding-left: 300px;
    font-size: 20px;
    z-index: 100;
    color: var(--secondary-color);
}
#moon:hover{
    cursor: pointer;
}
div#text i{
    font-size: 30px;
    margin-left: 20px;
    margin-top: 5px;
    color: var(--secondary-color);
    animation: arrowMove .5s infinite alternate;
    transition: 1s ease;
}
@keyframes arrowMove {
    form{
        transform: translateY(3%);
    }
    to{
        transform: translateY(20%);
    }
}

div#weltxt p{
    font-size: 18px;
    /* font-family: 'Shadows Into Light', cursive; */
    font-family: 'Lobster', cursive;
    letter-spacing: 1px;
    font-weight: 100;
    margin-left: 20px;
    color: var(--secondary-color);
    margin-top: 20px;
}
div#weltxt .fa-long-arrow-alt-right{
    font-size: 30px;
    margin-top: -20px;
    color: purple;
    animation: sideArrow 2s infinite alternate;
    transition: 2s ease;
}
@keyframes sideArrow {
    from{
        transform: translateX(3%);
    }
    to{
        transform: translateX(80%);
    }
}
div#weltxt button#apply{
    margin-top: 70px;
    width: 390px;
    margin-left: 38px;
    background-color: #003399;
    color: white;
    font-family: cursive;
    box-shadow: 3px 3px 4px var(--secondary-color);
}
div#weltxt button#apply:hover{
    /* border-radius: 50%; */
    font-size: 17px;
    box-shadow: #003399;
}

/* head */
div#head{
    width: 100vw;
    /* height: 0vh; */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* line-height: 0px; */
    /* margin-top: 20px; */
}
div#heading{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-evenly;
    /* line-height: 1px; */
    /* height: 100px; */
}
div#heading p:nth-child(1){
    /* margin-top: 40px; */
    margin-top: 5px;
}
div#heading h1{
    /* margin-top: -40px; */
    font-family: 'Lobster', cursive;
    font-size: 50px;
    color: var(--secondary-color);
}
div#heading p{
    font-size: 13px;
    margin-top: 0px;
    line-height: 2px;
    /* margin-left: 10px; */
    font-family: cursive;
    color: var(--secondary-color);
}

/* form */
form{
    /* max-width: 400px; */
    /* height: 400px; */
    color: var(--primary-color);
    font-family: cursive;
    background-color: #808080d2;
    /* opacity: 0.7; */
    padding: 30px;
    /* margin-left: 120px; */
    /* margin-top: 10px; */
    box-shadow: 3px 3px 4px var(--secondary-color);
    transform: scale(1);
    transition: 2s ease;
    cursor: pointer;
}
form:hover{
    transform: scale(1.05);
}
form input{
    width: 100px;
    height: 20px;
}
form .btn{
    background-color: #003399;
    opacity: 10;
    color: var(--primary-color);
    width: 340px;

    height: 40px;
    font-weight: bold;
}
button.btn:hover{
    background-color: red;
    color: var(--secondary-color);
}

/* Cards */
div.swiper {
    width: 360px;
    height: 200px;
    margin-left: 50px;
    animation: boxRotate 3s infinite;
    transition: 2s ease;
}

div.swiper-slide {
    box-shadow: 6px 6px 4px black;
    background-position: center;
    background-size: cover;
}

div.swiper-slide img {
    display: block;
    width: 100%;
}



@media only screen and (max-width: 900px){
    div#head
    {
        max-width: 90vw;
        margin: 0 auto;
    }
    #head #heading h1{
        font-size: 1.9rem;
    }
    #context #weltxt{
        display: none;
    }
    div#heading p{
        font-size: 10px;
    }
    div#heading p:nth-child(2)
    {
        margin-top: -10px;
        line-height: 10px;
        
    }
    #moon
    {
       
            padding-left: 200px;
        margin-top: -30px;
    }
}

@media(max-width: 640px){
    div#head
    {
        max-width: 95vw;
    }
    #moon
    {
       
        padding-left: 100px;
        margin-top: -30px;
    }
    div#heading p{
        /* font-size: 20px; */
    }
}

@keyframes boxRotate {
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(40px);
    }
    100%{
        transform: translateY(0);
    }
}
alert{
    background-color: white;
    color: black;
}