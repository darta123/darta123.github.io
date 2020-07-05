<!DOCTYPE html>
<html>
<head>
	<title>Membuat Login Dengan PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="gaya.css">
</head>
<body>
     <header>
		    <br>
      <div>
	     <ul>
	  		<li>
	  	<a href="menu/index.php">BERANDA</a>
	  	    </li>
	  	    <li>
	  	<a href="#">ISI</a>
	  	    </li>
	  	    <li>
	  	<a href="#">KONTAK</a>   	
	  	    </li>
	  	    <li>
	  	<a href="logout.php">LOGOUT</a>
	  	    </li>
	  	</ul>
	         <br>
	         <br>
	         <br>
    <!-- cek apakah sudah login -->
	<?php 
	session_start();
	if($_SESSION['status']!="login"){
	header("location:../index.php?pesan=belum_login");
	}
	?>
     <h2>Selamat datang <br>
     <?php echo $_SESSION['username']; ?>! 
     <br>anda telah login</h2>
     <h3>&#160;&#160;&#160;&#160;&#160;&#160;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      </div>
	 </header>
           <br/>
	       <br/>
   </body>
</html>