<!-- <?php
session_start();
if(isset($_SESSION['email'])) {
    echo '<script>window.location.replace("./index.html");</script>';
} else {
?> -->
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />    
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="stylesheet" href="input.css">
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->
<body> 
<!-- <?php
		session_start();
			if(isset($_SESSION['email'])) {
		    	echo '<script>window.location.replace("./index.html");</script>';
			} else {
				$nama = "admin";
				$password = "123456";
			if(isset($_POST['nama']) && isset($_POST['password'])) {
		    if($_POST['nama'] == $nama && $_POST['password'] == $password) {
		        session_start();
		        $_SESSION['nama'] = $_POST['nama'];
		        $_SESSION['password'] = $_POST['password'];
		        echo '<meta http-equiv="refresh" content="2; url=./index.php"/>';
		    } elseif($_POST['nama'] != $nama && $_POST['password'] == $password) {
		        echo "<center><h1>Gagal!, Email Salah</h1></center>";
		    } elseif($_POST['nama'] == $nama && $_POST['password'] != $password) {
		        echo "<center><h1>Gagal!, Password Salah</h1></center>";
		    } elseif($_POST['nama'] != $email && $_POST['password'] != $password) {
		        echo "<center><h1>Gagal!, nama & Password Salah</h1></center>";
		    } 
		} else {
		    echo "<center><h1>Gagal!, jangan biarkan nama & password kosong</h1></center>";
		}
		}
?> -->

	<div class="container">
	<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" /> 
							<div class="tm-site-text-box">
								<h1 class="tm-site-title">Geprek Mantull!!</h1>
								<h6 class="tm-site-description">new restaurant </h6>	
							</div>
						</div>	
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.html" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="login.html" class="tm-nav-link">Login</a></li>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">LOGIN</h2>
			</header>
				<div id="card">
						<div id="card-content">
						      <form method="post" class="form">
								        <label for="user-name" style="padding-top:13px">&nbsp;Nama </label>
								        <input id="user-name" class="form-content" type="name" name="name" autocomplete="on" required />
							        <div class="form-border"></div>
								        <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
								        <input id="user-password" class="form-content" type="password" name="password" required />
								    <div class="form-border"></div>
								     	<input id="submit-btn" type="submit" name="submit" value="LOGIN" /><a href="laporan.html"></a>
						      </form>
						</div>
				 </div>
		</main>

		<footer class="tm-footer text-center">
			<p>Restaurant Geprek Mantull!!</p>
		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
			// Handle click on paging links
			$('.tm-paging-link').click(function(e){
				e.preventDefault();
				
				var page = $(this).text().toLowerCase();
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
</body>
</html>