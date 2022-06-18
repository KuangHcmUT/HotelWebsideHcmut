<?php
	session_start();
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "hotel";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT userName, content, rating, imageSrc FROM feedback";
	$result = $conn->query($sql);



	// insert
	if(isset($_POST['submit']))
	{    
		$fb_userName = $_POST['fb-userName'];
		$fb_gender = $_POST['fb-gender'];
		$fb_rating = $_POST['rating'];
		$fb_content = $_POST['fb-content'];

		$fb_imageSrc = "";

		if($fb_gender == 'male') {
			$fb_imageSrc = 'male' . rand(1, 3) . '.png';
		}
		else $fb_imageSrc = 'female' . rand(1, 3) . '.png';


		$sql = "INSERT INTO feedback (userName, content, rating, imageSrc) VALUES ('$fb_userName','$fb_content','$fb_rating', '$fb_imageSrc')";

		if (mysqli_query($conn, $sql)) {
			$message = "Thank you for your feedback!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header("refresh: 0");

		} else {
			echo "Error: " . $sql . ":-" . mysqli_error($conn);
		}

	}

	$conn->close();
?>














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
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="icon" type="image/x-icon" href="/images/webicon.png">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />
</head>
<body>

<div class="super_container">
	<?php include 'header2.php';?>

	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index_1.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Luxury Stay</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/special.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Better World</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/about.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">You Are Invited</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
						<li class="home_slider_custom_dot active">01.</li>
						<li class="home_slider_custom_dot">02.</li>
						<li class="home_slider_custom_dot">03.</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Fabulous Resort</h2></div>
						<div class="icon_box_text">
							<p>No need to invest too expensive for a second house on the beach, you still have the opportunity to enjoy a quiet living space, harmony with nature, and experience the new resort style of the era: "Seafront living" - enjoy life in the style of the discerning and class.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Infinity Pool</h2></div>
						<div class="icon_box_text">
							<p>The best way to enjoy all this beautiful, warm weather is to go to the pool. There’s nothing quite like diving into an ice-cold pool on a hot summer day to cool off.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box d-flex flex-column align-items-center justify-content-start text-center">
						<div class="icon_box_icon"><img src="images/icon_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
						<div class="icon_box_title"><h2>Luxury Rooms</h2></div>
						<div class="icon_box_text">
							<p>Beautiful room with large marble bathroom, air conditioning, an additional work area with free internet access and a walk-in closet.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Gallery -->

	<div class="gallery">
		<div class="gallery_slider_container">
			<div class="owl-carousel owl-theme gallery_slider">
				
				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_1.jpg)"></div>
					<a class="colorbox" href="images/gallery_1.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_2.jpg)"></div>
					<a class="colorbox" href="images/gallery_2.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_3.jpg)"></div>
					<a class="colorbox" href="images/gallery_3.jpg"></a>
				</div>

				<!-- Slide -->
				<div class="gallery_item">
					<div class="background_image" style="background-image:url(images/gallery_4.jpg)"></div>
					<a class="colorbox" href="images/gallery_4.jpg"></a>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				
				<!-- About Content -->
				<div class="col-lg-6">
					<div class="about_content">
						<div class="about_title"><h2>The River / 5 years of excellence</h2></div>
						<div class="about_text">
							<p>The River Hotel is located in the center of Ho Chi Minh City, is a hotel with a system of more than 30 bedrooms with beautiful and luxurious interior design with full amenities and modern. The hotel has a restaurant serving buffet breakfast, luxurious and sophisticated space, and the friendly, attentive and professional service style of the staff will satisfy customers.
								The River Hotel always wants to be a reliable address when you come to rest or work in Ho Chi Minh City.
								We are pleased to welcome and serve you.</p>
						</div>
					</div>
				</div>

				<!-- About Images -->
				<div class="col-lg-6">
					<div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
						<img src="images/about_1.png" alt="">
						<img src="images/about_2.png" alt="">
						<img src="images/about_3.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Booking -->

	<div class="booking">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="booking_title text-center"><h2>/. Book a room ./</h2></div>
					<div class="booking_text text-center">
						<p>Choose a room bellow that suits your needs.</p>
					</div>

					<!-- Booking Slider -->
					<div class="booking_slider_container">
						<div class="owl-carousel owl-theme booking_slider">
							
							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_3.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$70/Night</div>
								<div class="booking_link"><a href="#">Single Room</a></div>
							</div>

							<!-- Slide -->
							<!-- <div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_2.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$120/Night</div>
								<div class="booking_link"><a href="#">Deluxe Room</a></div>
							</div> -->

							<!-- Slide -->
							<div class="booking_item">
								<div class="background_image" style="background-image:url(images/booking_1.jpg)"></div>
								<div class="booking_overlay trans_200"></div>
								<div class="booking_price">$120/Night</div>
								<div class="booking_link"><a href="#">Double Room</a></div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div id="review" style="text-align: center; padding-bottom: 10px;"><h2>/. Feedback ./</h2></div>
	<div class="testimonials">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
		<div class="testimonials_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="testimonials_slider_container">

						<!-- Testimonials Slider -->
						<div class="owl-carousel owl-theme test_slider">
							<?php
								if ($result->num_rows > 0) {
									// output data of each row
									while($row = $result->fetch_assoc()) {
										echo '<div  class="test_slider_item text-center">
											<div class="rating rating_'. $row["rating"] .' d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="testimonial_title"><a href="#">'. $row["content"] .'</a></div>
											<div class="testimonial_image"><img src="images/'. $row["imageSrc"] .'" alt=""></div>
											<div class="testimonial_author"><a href="#">'. $row["userName"] .'</a></div>
										</div>';
									}
								} else { // no result
									echo '<!-- <div  class="test_slider_item text-center">
											<div class="rating rating_5 d-flex flex-row align-items-start justify-content-center"><i></i><i></i><i></i><i></i><i></i></div>
											<div class="testimonial_title"><a href="#">No result</a></div>
											<div class="testimonial_image"><img src="images/male1.png" alt=""></div>
											<div class="testimonial_author"><a href="#">No one</a></div>
										</div> -->';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Give feedback -->
	<form action="" method="post" class="container give-feedback">
		<div class="row">
			<div class="col-md-3">
				<div class="give-feedback-info">
					<img src="https://cdn-icons-png.flaticon.com/512/1087/1087804.png" alt="image"/>
					<h2>Rate Us</h2>
					<h4>We would love to hear from you !</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="give-feedback-form">
					<div class="form-group">
					<label class="control-label col-sm-2" for="fb-userName">Your name:</label>
					<div class="col-sm-10">          
						<input type="text" class="form-control" id="fb-userName" placeholder="Enter Your Name" name="fb-userName" required>
					</div>
					</div>
					<div class="form-group">
					<label class="control-label col-sm-2" for="fb-gender">Gender:</label>
						<select name="fb-gender" id="fb-gender">
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>

					<div class="form-group">
					<label class="control-label col-sm-2" for="star-rating">Rate us:</label>
						<div class="star-rating">
							<div class="star-input">
								<input type="radio" name="rating" id="rating-5" value="5">
								<label for="rating-5" class="fas fa-star"></label>
								<input type="radio" name="rating" id="rating-4" value="4">
								<label for="rating-4" class="fas fa-star"></label>
								<input type="radio" name="rating" id="rating-3" value="3" checked>
								<label for="rating-3" class="fas fa-star"></label>
								<input type="radio" name="rating" id="rating-2" value="2">
								<label for="rating-2" class="fas fa-star"></label>
								<input type="radio" name="rating" id="rating-1" value="1">
								<label for="rating-1" class="fas fa-star"></label>
							</div>
						</div>
					</div>

					<div class="form-group">
					<label class="control-label col-sm-2" for="comment">Feedback:</label>
					<div class="col-sm-10">
						<textarea style="resize: none" class="form-control" rows="5" id="comment" name="fb-content" required></textarea>
					</div>
					</div>
					<div class="form-group">        
					<div class="col-sm-offset-2 col-sm-10" style="text-align:center">
						<button type="submit" class="btn btn-default" name="submit">Submit</button>
					</div>
					</div>
				</div>
			</div>
		</div>
	</form>

	<style>
		.give-feedback {
			padding: 4%;
			height: 400px;
			margin-bottom: 100px;
		}
		.col-md-3{
			background: #ff9b00;
			padding: 4%;
			border-top-left-radius: 0.5rem;
			border-bottom-left-radius: 0.5rem;
		}
		.give-feedback-info{
			margin-top:10%;
		}
		.give-feedback-info img{
			margin-bottom: 15%;
		}
		.give-feedback-info h2{
			margin-bottom: 10%;
		}
		.col-md-9{
			background: #fff;
			padding: 3%;
			border-top-right-radius: 0.5rem;
			border-bottom-right-radius: 0.5rem;
		}
		.give-feedback-form label{
			font-weight:600;
		}
		.give-feedback-form button{
			background: #25274d;
			color: #fff;
			font-weight: 600;
			width: 25%;
		}
		.give-feedback-form button:focus{
			box-shadow:none;
		}

			

		.star-rating input {
			display: none;
		}
		.star-rating {
			margin: 2px auto;
			display: table;
			width: 350px;
		}
		.star-rating label {
			padding: 10px;
			float: right;
			font-size: 44px;
			color: #eee;
		}
		.star-rating input:not(:checked) ~ label:hover,
		.star-rating input:not(:checked) ~ label:hover ~ label {
			color: #ffc107;
		}
		.star-rating input:checked ~ label {
			color: #ffc107;
		}
		.star-rating form .rating-reaction:before {
			width: 100%;
			float: left;
			color: #ffc107;
		}
	</style>



	<?php include 'footer.php'; ?>

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