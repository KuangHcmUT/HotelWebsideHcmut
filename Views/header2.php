	<!-- Header -->
<?php
if (isset($_POST['logoutBtn']) && isset($_SESSION['userName'])) {
	session_destroy();
	$currentUser = null;
	unset($_SESSION['userName']);
	unset($_SESSION['role']);
	header('Location: ../login.php');
	exit();
}

?>
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">.The River</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="../index.php">Home</a></li>
						<li ><a id="booking" onclick="booking()" href="employee.php#bookingList">BookingList</a></li>
						<li ><a id="confirm" onclick="confirm()" href="employee.php#confirmBooking">ConfirmBooking</a></li>
					</ul>
				</nav>
				<form action="" method="POST">
					<div class="book_button">
						<button name="logoutBtn" type="submit">LogOut</button>
					</div>
				</form>
				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<style>
		.header{
			background-image: url("../images/index.jpg");
        	background-size: cover;
        	background-repeat: no-repeat;
        	background-position: center;
		}
	</style>