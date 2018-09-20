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
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-signal.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2018.css">

<style>



.hove:hover {
  border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
   position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 80%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0} 
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
/*.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}*/

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
* {
    box-sizing: border-box;
}

body {
    margin: 0;
    font-family: Arial;
}

/* The grid: Four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: 10px;
}

/* Style the images inside the grid */
.column img {
    opacity: 0.8; 
    cursor: pointer; 
}

.column img:hover {
    opacity: 1;
}

/* Clear floats after the columns */
.row:after 
{    content: "";
    display: table;
    clear: both;
}

/* The expanding image container */
.container {
    position: relative;
    display: none;
}

/* Expanding image text */
#imgtext {
    position: absolute;
    bottom: 15px;
    left: 15px;
    color: white;
    font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
    position: absolute;
    top: 10px;
    right: 15px;
    color: white;
    font-size: 35px;
    cursor: pointer;
}
  h1
  {
    font-size: 5em;
    color: red;
  }
  h4
  {
    font-size : 2em;
    color : w3-teal;
  }

</style>
<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">PRAVESHA 18</h1>
  <button class="w3-bar-item w3-button onclick ="w3_close()">Close <i class="fa fa-remove"></i></button>
  <a href="javascript:void(0)" class="w3-bar-item w3-button">SIGN IN</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button">CONTACT</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button">EVENTS</a>
</nav>

<!-- Header -->
<header class="w3-container w3-white w3-padding-32">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme w3-red" ></i> 
  <div class="w3-center">
  <h4 color:red>COME AND BE A PART OF</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
    <!--<div class="w3-padding-32">
      <button class="w3-button w3-xlarge w3-theme-light" onclick="document.getElementById('id01').style.display='block'" style="font-weight:900;">REGISTER</button>
    </div>
  </div>
</header> -->
<body>
<div class="row">
      <div class="column">
        <img id="myImg" class="hover" src="treasure.jpg"  onclick="modi(this)" alt="TREASURE" style="max-width:200px">
          <div id="myModal" class="modal">
            <div class="modal-content">
              <div class="modal-header w3-blue">
                <h2>WE ALL WELCOME YOU TO PRAVESHA18</h2>
              <div class="modal-body w3-blue">
                <p> we at vels university invite you to the PRAVESHA18 </p>
                  <span class="close">&times;</span>
                <img id="img01" style="width:100%;max-width:200px" >
                <p> hello how are you </p>
                  <div id="caption"></div>
               <div class="modal-footer w3-blue">
                <h3>PRAVESHA18</h3>
                 <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
        <div class="w3-padding-32">
          <a href="register.php" class="w3-button w3-xlarge w3-theme-dark"  style="font-weight:900;">REGISTER</a>
                </div>
          </div>
        </div>
      </div>
    </div>
    </div>
 </div>
 


    <div class="column">
        <img id="myImg1" class="hover" src="ipla.jpg" alt="pravesha18" onclick="modi(this)" style="max-width:200px">
          <div id="myModal" class="modal">
          <div class="modal-content">
              <div class="modal-header w3-blue">
                <h2>WE ALL WELCOME YOU TO PRAVESHA18</h2>
              <div class="modal-body w3-blue">
                <p> we at vels university invite you to the PRAVESHA18 </p>
                  <span class="close">&times;</span>
                <img id="img01" style="width:100%;max-width:200px">
                <p> hello how are you </p>
                  <div id="caption"></div>
               <div class="modal-footer w3-blue">
                <h3>PRAVESHA18</h3>
                 <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
        <div class="w3-padding-32">
          <a href="register.php" class="w3-button w3-xlarge w3-theme-dark"  style="font-weight:900;">REGISTER</a>
        </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>

    <div class="column">
       <img id="myImg2" class="hover" src="code.jpg" alt="PRAVESHA18" onclick="modi(this)" style="max-width:200px">

    <!-- The Modal -->
          <div id="myModal" class="modal">
          <div class="modal-content">
              <div class="modal-header w3-blue">
                <h2>WE ALL WELCOME YOU TO PRAVESHA18</h2>
              <div class="modal-body w3-blue">
                <p> we at vels university invite you to the PRAVESHA18 </p>
                  <span class="close">&times;</span>
                <img id="img01" style="width:100%;max-width:200px">
                <p> hello how are you </p>
                  <div id="caption"></div>
               <div class="modal-footer w3-blue">
                <h3>PRAVESHA18</h3>
                 <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
        <div class="w3-padding-32">
          <a href="register.php" class="w3-button w3-xlarge w3-theme-dark"  style="font-weight:900;">REGISTER</a>
        </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
      
    
    <div class="column">
          <img id="myImg3" class="hover" src="coderator2.jpg" alt="PRAVESHA18" onclick="modi(this)" style="max-width:200px">

      <!-- The Modal -->
            <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header w3-blue">
                  <h2>WE ALL WELCOME YOU TO PRAVESHA18</h2>
                <div class="modal-body w3-blue">
                  <p> we at vels university invite you to the PRAVESHA18 </p>
                    <span class="close">&times;</span>
                  <img id="img01" style="width:100%;max-width:200px">
                  <p> hello how are you </p>
                    <div id="caption"></div>
                 <div class="modal-footer w3-blue">
                  <h3>PRAVESHA18</h3>
                   <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
          <div class="w3-padding-32">
            <a href="register.php" class="w3-button w3-xlarge w3-theme-dark"  style="font-weight:900;">REGISTER</a>
          </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    </div>

<div class="row">
    <div class="column">
          <img id="myImg4" class="hover" src="pubg.jpg" alt="PRAVESHA18" onclick="modi(this)" style="max-width:200px">

      <!-- The Modal -->
          <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header w3-blue">
                  <h2>WE ALL WELCOME YOU TO PRAVESHA18</h2>
                <div class="modal-body w3-blue">
                  <p> we at vels university invite you to the PRAVESHA18 </p>
                    <span class="close">&times;</span>
                  <img id="img01" style="width:100%;max-width:200px">
                  <p> hello how are you </p>
                    <div id="caption"></div>
                 <div class="modal-footer w3-blue">
                  <h3>PRAVESHA18</h3>
                   <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
                      <div class="w3-padding-32">
                        <a href="register.php" class="w3-button w3-xlarge w3-theme-dark"  style="font-weight:900;">REGISTER</a>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
          </div>
              </div>   

<div class="column">
          <img id="myImg4" class="hover" src="pubg.jpg" alt="PRAVESHA18" onclick="modi(this)" style="max-width:200px">

      <!-- The Modal -->
          <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header w3-blue">
                  <h2>WE ALL WELCOME YOU TO PRAVESHA18</h2>
                <div class="modal-body w3-blue">
                  <p> we at vels university invite you to the PRAVESHA18 </p>
                    <span class="close">&times;</span>
                  <img id="img01" style="width:100%;max-width:200px">
                  <p> hello how are you </p>
                    <div id="caption"></div>
                 <div class="modal-footer w3-blue">
                  <h3>PRAVESHA18</h3>
                   <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
                      <div class="w3-padding-32">
                        <a href="register.php" class="w3-button w3-xlarge w3-theme-dark"  style="font-weight:900;">REGISTER</a>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
          </div>
              </div>   
</div>
<script>
      // Get the modal
      var modal = document.getElementById('myModal');

      // Get the image and insert it inside the modal - use its "alt" text as a caption
      
      function modi(pop){

        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
          modal.style.display = "block";
          modalImg.src = pop.src;
          captionText.innerHTML = pop.alt;
      }

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() { 
          modal.style.display = "none";
      }
      </script>




</body>
</html>