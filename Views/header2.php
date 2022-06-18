	<!-- Header -->
<?php
if (isset($_POST['logoutBtn']) && isset($_SESSION['userName'])) {
	session_destroy();
	$currentUser = null;
	unset($_SESSION['userName']);
	unset($_SESSION['role']);
	unset($_SESSION['phoneNum']);
	header('Location: login.php');
	exit();
}

?>
	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">.The River</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="room.php">Rooms</a></li>
						<li><a href="booking.php">Booking</a></li>
						<li><a href="index.php#review">Review</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>
				</nav>
				<?php if (isset($_SESSION['userName'])) { ?>
					<div class="dropdown">
						<button class="book_button dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo $_SESSION['userName'] ;?>
						</button>
						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

							<?php if ($_SESSION['role'] == 'admin') echo 
							'<a class="dropdown-item" id="admin-manager" href="../Views/admin.php">Admin Manager</a>'
							?>

							<?php if ($_SESSION['role'] == 'employee') echo 
							'<a class="dropdown-item" id="booking" onclick="booking()" href="../Views/employee.php#bookingList">Booking List</a>
							<a class="dropdown-item" id="confirm" onclick="confirm()" href="../Views/employee.php#confirmBooking">Confirm Booking</a>'
							?>

							<?php if ($_SESSION['role'] == 'customer') echo 
							'<a class="dropdown-item" id="my-booking" href="../Views/booking.php">My Booking</a>'
							?>
							
						</div>
					</div>

					<form action="" method="POST" >
							<button name="logoutBtn" class="book_button" type="submit">Log Out</button>
					</form>
				<?php } else { ?>
					<div class="book_button"><a href="login.php">Login</a></div>
					<div class="book_button"><a href="register.php">Register</a></div>
				<?php } ?>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>

	<style>
		/* .header{
			background-image: url("../images/index.jpg");
        	background-size: cover;
        	background-repeat: no-repeat;
        	background-position: center;
		} */
	</style>