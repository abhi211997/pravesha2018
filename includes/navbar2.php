<!DOCTYPE html>
<html>
<title>PRAVESHA18</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-signal.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">

<body>
<style>
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: auto;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center " style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme w3-padding-32 font-family: calibri">PRAVESHA 18</h1>
    <!-- <div class = "w3-button">
      <span class="close">&times;</span> -->


</div>
  <button onclick="w3_close()" class="w3-btn w3-blue w3-border w3-border-blue w3-round-large w3-horver-blue w3-padding"> &times;</button>     
<a href="register.php" class="w3-btn w3-blue w3-border w3-border-blue w3-round-large w3-horver-blue">REGISTER</a>
<a href="javascript:void(0)" class=" w3-btn w3-blue w3-border w3-border-blue w3-round-large w3-horver-blue">CONTACT</a>
<a href="events.php" class="w3-btn w3-blue w3-border w3-border-blue w3-round-large w3-horver-blue">EVENTS</a>
</nav>

<!-- Header -->
<header class="w3-container w3-highway-white w3-padding-32">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme w3-blue" ></i> 
  <div class="w3-center">
  <h4 class="w3-white">COME AND BE A PART OF</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
    <div class="w3-padding-32">
      <a href="register.php" class="w3-btn w3-blue w3-border w3-border-blue w3-round-large w3-horver-blue"  style="font-weight:900;">REGISTER</a>
    </div>
  </div>
</header>

<!-- Modal -->

<div class="w3-row-padding w3-center w3-margin-top">
<div class="w3-third">
  <div class="w3-card w3-container w3-blue " style="min-height:460px">
<h3>CODING</h3><br>
  <i class="material-icons" style="font-size:56px">computer</i>
<i class="material-icons" style="font-size:85px">computer</i>
<i class="material-icons" style="font-size:105px;color:red">computer</i>
  <p>TRY TO COMPETE AMONG YOUR FRIENDS</p>
  <p>WITH OUR CODING DEDICATED EVENTS</p>
  <p></p>
  <p>GRAB YOUR TEAM AND COME BE A PART OF ALL THE FUN AT PRAVESHA18</p>
  </div>
</div>

<div class="slideshow-container">
  <div class="mySlides fade">
  <div class="numbertext">1 / 10</div>
  <img src="code.jpg" style="width:auto">
  <div class="text">CODING</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 10</div>
  <img src="geektalks.jpg" style="width:auto">
  <div class="text">GEEKTALKS</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 10</div>
  <img src="pubg.jpg" style="width:auto">
  <div class="text">PUBG</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 10</div>
  <img src="quiz.jpg" style="width:auto">
  <div class="text">QUIZ</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">5 / 10</div>
  <img src="treasure.jpg" style="width:auto">
  <div class="text">TREASURE HUNT</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">6 / 10</div>
  <img src="banner.jpg" style="width:auto">
  <div class="text">MIND</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">7 / 10</div>
  <img src="ipla.jpg" style="width:auto">
  <div class="text">IPL AUCTION</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">8 / 10</div>
  <img src="presentation.jpg" style="width:auto">
  <div class="text">PRESENTATION</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 


<!-- Footer -->

<!-- Script for Sidebar, Tabs, Accordions, Progress bars and slideshows -->
<script>


// for slide show
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}

// Side navigation

function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "100%";
    x.style.fontSize = "40px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";

}

// Tabs
function openCity(evt, cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  var activebtn = document.getElementsByClassName("testbtn");
  for (i = 0; i < x.length; i++) {
      activebtn[i].className = activebtn[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-dark-grey";
}

var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();

// Accordions
function myAccFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// Slideshows
var slideIndex = 1;

function plusDivs(n) {
slideIndex = slideIndex + n;
showDivs(slideIndex);
}

function showDivs(n) {
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

showDivs(1);

// Progress Bars
function move() {
  var elem = document.getElementById("myBar");   
  var width = 5;
  var id = setInterval(frame, 10);
  function frame() {
    if (width == 100) {
      clearInterval(id);
    } else {
      width++; 
      elem.style.width = width + '%'; 
      elem.innerHTML = width * 1  + '%';
    }
  }
}
</script>

</body>
</html>
