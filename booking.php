<!DOCTYPE html>
<html lang="en">
<head>
<title>The River</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.3.4/animate.css">
<link href="plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="icon" type="image/x-icon" href="/images/webicon.png">
<link rel="stylesheet" type="text/css" href="../styles/booking.css=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../styles/booking_responsive.css=<?php echo time(); ?>">
<link rel="stylesheet" href="../styles/admin.css=<?php echo time(); ?>">


<link rel="stylesheet" type="text/css" href="styles/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="super_container">
	<?php include 'Views/header.php';?>


    <div class="home4">
		<div class="background_image" style="background-image:url(images/booking.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title2">Welcome to The River!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

    
        <div class="home3">
            <div class="background_image" style="background-image:url(images/resort.jpg)"></div>
            <div class = "space"></div>
            <form action= "connect_booking.php"  method="POST">
                <div id="form" required="required">
                <h1 class="text-white text-center">Booking Now</h1>
    
                <div id="first-group">
    
                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Full name" name="Fname" required="required">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" class=" booking_input2 booking_input_a booking_in" placeholder="Check in" name="Checkin" required="required">
                    </div>
    
                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Phone number" name="Phone"required="required">
                    </div>
    
                   
    
                </div>
    
                <div id="second-group">
    
                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Your ID" name="ID" required="required">
                    </div>
    
                   
    
                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="date" class=" booking_input2 booking_input_a booking_out" placeholder="Check out" name="Checkout"required="required">
                    </div>
    
                    <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;" name="Type" required="required">
                            <option value="">Room Type</option>
                            <option value="">Single Room</option>
                            <option value="">Double Room</option>
                        </select>
                    </div>
                
                </div>
                <button type="submit" name="submit" value="submit" id="submit-btn">Book Now</button>
               
                </div>
            </form>
        </div>
    

	<?php include 'Views/footer.php'; ?>

</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>