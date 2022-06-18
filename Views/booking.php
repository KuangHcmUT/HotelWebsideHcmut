<?php
    include_once '../Model/adminmodel.php';
    session_start();
    $num = $_SESSION['PhoneNum'];
    $result = mysqli_query($con, "SELECT * FROM booking WHERE customer_phone = '$num'");
    if (!isset($_SESSION['userName'])) {
        header('Location: login.php');
    }   
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Booking</title>
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
<link rel="icon" type="image/x-icon" href="./images/webicon.png">
<link rel="stylesheet" type="text/css" href="../styles/booking.css=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="../styles/booking_responsive.css=<?php echo time(); ?>">
<link rel="stylesheet" href="./styles/admin.css=<?php echo time(); ?>">


<link rel="stylesheet" type="text/css" href="styles/style.css?v=<?php echo time(); ?>">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

<div class="super_container">
	<?php include 'header2.php';?>


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
                        <input type="text" class="inputgroup" placeholder="Full name" name="Fname" required="required">
                    </div>

                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" id="checkin" onchange="total_price()" class=" booking_input2 booking_input_a booking_in" onfocus="(this.type='date')"
                        onblur="(this.type='text')" placeholder="Check in" name="Checkin" required="required"> 
                    </div>

                    <div id="content">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        <input type="number" onchange="total_price()" id="room1" class="inputgroup" placeholder="Number of Single rooms" name="Singleroom"required="required">
                    </div>

                    <div id="content">
                        <i class="fa fa-bed" aria-hidden="true"></i>
                        <input type="number" onchange="total_price()" id="room2" class="inputgroup" placeholder="Number of Double rooms" name="Doubleroom"required="required">
                    </div>
    
                    <!-- <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="text" id="input-group" placeholder="Phone number" name="Phone"required="required">
                    </div> -->
    
                   
    
                </div>
    
                <div id="second-group">
    
                    <div id="content">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <input type="text" class="inputgroup" placeholder="Your ID Card" name="ID" required="required">
                    </div>
    
                   
    
                    <div id="content">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <input type="text" onchange="total_price()" id="checkout" class=" booking_input2 booking_input_a booking_out" 
                        onfocus="(this.type='date')" onblur="(this.type='text')"placeholder="Check out" name="Checkout"required="required">
                    </div>
    
                    <!-- <div id="content">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <select id="input-group" style="background-color: black;" name="Type" required="required">
                            <option value="">Room Type</option>
                            <option value="">Single Room</option>
                            <option value="">Double Room</option>
                        </select>
                    </div> -->

                    <!-- <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" id="input-group" placeholder="Single room" name="Singleroom"required="required">
                    </div> -->

                    <div id="content">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <input type="number" class="inputgroup" placeholder="Phone number" name="Phone"required="required">
                    </div>
                    <div id="content">
                        <i class="fa fa-dollar" aria-hidden="true"></i>
                        <input type="number" class="inputgroup" id="price" placeholder="Total price" name="price"required="required" readonly>
                    </div>
                
                </div>
                <button class="btn btn-primary" type="submit" name="submit" value="submit" id="submit-btn">Book Now</button>
               
                </div>
            </form>
        </div>

        <div class="container">
            <h2 style="margin-top: 20px; margin-bottom: 20px;">/. My booking ./</h2>
            <table class="table table-hover">
                <thead class="thead-dark">
                <tr style="text-align: center;">
                    <th>ID</th>
                    <th>Customer Name</th>
                    <th>Customer Id</th>
                    <th>Customer Phone</th>
                    <th>Single room</th>
                    <th>Double room</th>
                    <th>Checkin</th>
                    <th>Checkout</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                
                while ($res = mysqli_fetch_array($result)){
            
                ?>
                <tr style="color: #000000; text-align: center;">
                    <td><?php echo $res['booking_id']; ?></td>
                    <td><?php echo $res['customer_name']; ?></td>
                    <td><?php echo $res['customer_idCard']; ?></td>
                    <td><?php echo $res['customer_phone']; ?></td>
                    <td><?php echo $res['numRoom1']; ?></td>
                    <td><?php echo $res['numRoom2']; ?></td>
                    <td><?php echo $res['checkin_date']; ?></td>
                    <td><?php echo $res['checkout_date']; ?></td>
                    <td><?php echo $res['status']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    

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

<script>
    function total_price(){
        var room1 = document.getElementById('room1').value
        var room2 = document.getElementById('room2').value
        var checkin  = document.getElementById('checkin').value
        var checkout = document.getElementById('checkout').value
        var dates = Date.parse(checkout) - Date.parse(checkin)
        dates = dates/86400000
        var total = (room1*70 + room2*120)*dates
        console.log(total)
        document.getElementById('price').value = total
        // document.getElementById('price').innerText = total
        console.log(room1, room2, checkin, checkout, dates)

    }
</script>