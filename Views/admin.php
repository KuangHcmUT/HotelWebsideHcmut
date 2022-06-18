<?php
    include_once '../Model/adminmodel.php';
    include_once '../Controller/admincontroller.php';
    $user = findUser($_SESSION['userName']);
    $user = $user->fetch_assoc();
    $res1 = mysqli_query($con, "SELECT * FROM confirmbooking");
    $res2 = mysqli_query($con, "SELECT * FROM users");
    if (isset($_POST['btnadd'])) {
        $new_username = $_POST['new_username'];
        $new_name = $_POST['new_name'];
        $new_password = $_POST['new_password'];
        $new_phone = $_POST['new_phone'];
        $new_role = $_POST['new_role'];
        addaccount($new_username, $new_name, $new_password, $new_phone, $new_role);
        header('Location: admin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin page</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="./styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="./plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/animate.css">
<link href="./plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="./styles/booking.css">
<link rel="stylesheet" type="text/css" href="./styles/booking_responsive.css">
<link rel="stylesheet" href="./styles/admin.css">
<link rel="icon" type="image/x-icon" href="./images/webicon.png">
</head>
<body>

<div class="super_container">
	
    <?php include 'header2.php';?>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(./images/booking.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Welcome to The River!</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <div class="container">

        <h2>/. Booking list ./</h2>
            <div class="form-inline">
                <i class="fa fa-search icon"> </i>
                <input type="text" class="form-control mb-2 mr-sm-2" name="search-phone" id="search-phone" onkeyup="show_search_result()" placeholder="Search for phone">   
            </div>
        
        <table class="table table-hover" id="main-table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Customer Name</th>
                <th>Customer Id</th>
                <th>Customer Phone</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Room number</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            while ($res = mysqli_fetch_array($res1)){
            $i = $i + 1;
            ?>
            <tr>
                <td><?php echo $res['id']; ?></td>
                <td><?php echo $res['customer_name']; ?></td>
                <td><?php echo $res['customer_idCard']; ?></td>
                <td><?php echo $res['customer_phone']; ?></td>
                <td><?php echo $res['checkin_date']; ?></td>
                <td><?php echo $res['checkout_date']; ?></td>
                <td><?php echo $res['room_number']; ?></td>
                <td><?php echo $res['status']; ?></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>

        <h2>/. User account ./</h2>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Role</th>
                <th></th>
            </tr>  
            </thead>
            <tbody>
            <?php
            while ($res = mysqli_fetch_array($res2)){?>
            <tr>
                <td><?php echo $res['ID']; ?></td>
                <td><?php echo $res['userName']; ?></td>
                <td><?php echo $res['fullName']; ?></td>
                <td><?php echo $res['PhoneNum']; ?></td>
                <td><?php echo $res['role']; ?></td>
                <td>
                    <form action="edit_account_info.php" method="POST">
                        <input type="text" value="<?php echo $res['ID']; ?>" name ="Idcur" hidden>
                        <input type="text" value="<?php echo $res['userName']; ?>" name ="usernamecur" hidden>
                        <input type="text" value="<?php echo $res['fullName']; ?>" name ="fullnamecur" hidden>
                        <input type="text" value="<?php echo $res['PhoneNum']; ?>" name ="phonecur" hidden>
                        <input type="text" value="<?php echo $res['role']; ?>" name ="rolecur" hidden>
                        <button name="btnEdit" type="submit" class="btn btn-outline-info btn-sm">Edit</button>
                    </form>
                </td>
            </tr>
            <?php } ?>
            </tbody> 
        </table>

        <button class="add_button btn-open">Add a new account</button>
    
    </div>

	<?php include 'footer.php'; ?>
    
    <div class="add-model">
        <div class="container js-container">
            <div class="addmodel-close"><i class="fa fa-close"></i></div>
            <header>
                <h2>Add new account</h2>
            </header>
            <form method="POST">
                <div class="form-group">
                    <label for="username">User name</label>
                    <input type="text" class="form-control" name="new_username" id="username" placeholder="Enter user name">
                </div>
                <div class="form-group">
                    <label for="fullname">Full name</label>
                    <input type="text" class="form-control" name="new_name" id="fullname" placeholder="Enter full name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="new_password" id="password" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="phone">Phone number</label>
                    <input type="text" class="form-control" name="new_phone" id="phone" placeholder="Enter phone number">
                </div>
                <div class="form-group">
                    <label for="role">Role</label>
                    <select class="form-control" name="new_role" id="role">
                        <option>admin</option>
                        <option>employee</option>
                        <option>customer</option>
                    </select>
                </div>
                <button name="btnadd" class="add_button">Add a new account</button>
            </form>
        </div>
    </div>
</div>

<script src="./js/admin.js"></script>
<script src="./js/jquery-3.3.1.min.js"></script>
<script src="./styles/bootstrap-4.1.2/popper.js"></script>
<script src="./styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="./plugins/greensock/TweenMax.min.js"></script>
<script src="./plugins/greensock/TimelineMax.min.js"></script>
<script src="./plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="./plugins/greensock/animation.gsap.min.js"></script>
<script src="./plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="./plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="./plugins/easing/easing.js"></script>
<script src="./plugins/progressbar/progressbar.min.js"></script>
<script src="./plugins/parallax-js-master/parallax.min.js"></script>
<script src="./plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="./js/booking.js"></script>
</body>
</html>