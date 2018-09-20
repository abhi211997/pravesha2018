<?php  include('config.php'); ?>
<!-- Source code for handling registration and login -->
<?php  include('includes/registration_login.php'); ?>

<?php include('includes/head_section.php'); ?>

<title>REGISTER | PRAVESHA18</title>
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
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<style>
  
  h1
  {
    font-size: 5em;
   color : w3-white;
  }
  
  h4
  {
    font-size : 2em;
    color : w3-black;
  }

</style>
<!-- Side Navigation -->
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme">PRAVESHA 18</h1>
  <button class="w3-bar-item w3-button onclick = " w3_close() " >Close <i class="fa fa-remove"></i></button>
 
  <a href="javascript:void(0)" class="w3-bar-item w3-button">SIGN IN</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button">CONTACT</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button">EVENTS</a>
</nav>

<!-- Header -->
<header class="w3-container w3-white w3-padding-32">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme w3-white" ></i> 
  <div class="w3-center">
  <h4 >COME AND BE A PART OF</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom">PRAVESHA18</h1>
    <div class="w3-padding-32">
      <h1 > REGISTER WITH US</h1>
    </div>
  </div>
</header>
<div class="w3-full">
  <div class="w3-card w3-container w3-highway-blue w3-padding-32" style="min-height:460px">
	<!-- Navbar -->
		
	<!-- // Navbar -->

	<div style="width: 40%; margin: 20px auto;">
		<form method="post" action="register.php" >
			<?php include(ROOT_PATH . '/includes/errors.php') ?>
			<input class="w3-input w3-white"  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Name">
			<input class="w3-input w3-white" type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
			<input class="w3-input w3-white" type="text" name="phone" value="<?php echo $phone ?>" placeholder="Phone Number">
			<input  class="w3-input w3-white" type="text" name="college" value="<?php echo $college; ?>"  placeholder="College">
      <input class="w3-input w3-white"  type="text" name="" value="<?php echo $username; ?>"  placeholder="Department">
			<button  class="w3-button w3-border w3-hover-indigo" type="submit" class="btn" name="reg_user">Register</button>
		</form>
	</div>
</div>
<!-- // container -->
<!-- Footer -->
