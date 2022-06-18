<?php
    include_once '../Model/adminmodel.php';
    include_once '../Controller/admincontroller.php';
    $ID = $username = $fullname = $Phonenum = $role = '';
    if (!isset($_POST['btnEditconfirm'])) {
        $ID = $_POST['Idcur'];
        $username = $_POST['usernamecur'];
        $fullname = $_POST['fullnamecur'];
        $Phonenum = $_POST['phonecur'];
        $role = $_POST['rolecur'];
    }
    else {
        $ID = $_POST['Id2'];
        $new_username = $_POST['username2'];
        $new_fullname = $_POST['fullname2'];
        $new_phone = $_POST['phone2'];
        $new_role = $_POST['role2'];
        edit_account($new_username, $new_fullname, $new_phone, $new_role, $ID);
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
	<?php include 'header.php' ?>

	<!-- Home -->

	<div class="home">
		<div class="background_image" style="background-image:url(../images/booking.jpg)"></div>
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
    
    <div class="container edit-contain">
            <header><h2>Edit account information</h2></header>
            <form method="POST">
                <div class="form-group">
                    <label for="Id2">ID</label>
                    <input type="text" class="form-control" name="Id2" id="Id2" value="<?php echo $ID; ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="username2">User name</label>
                    <input type="text" class="form-control" name="username2" id="username2" value="<?php echo $username; ?>">
                </div>
                <div class="form-group">
                    <label for="fullname2">Full name</label>
                    <input type="text" class="form-control" name="fullname2" id="fullname2" value="<?php echo $fullname; ?>">
                </div>
                <div class="form-group">
                    <label for="phone2">Phone number</label>
                    <input type="text" class="form-control" name="phone2" id="phone2" value="<?php echo $Phonenum; ?>">
                </div>
                <div class="form-group">
                    <label for="role2">Role</label>
                    <select class="form-control" name="role2" id="role2" value="<?php echo $role; ?>">
                        <option>admin</option>
                        <option>employee</option>
                        <option>customer</option>
                    </select>
                </div>
                <button name="btnEditconfirm" class="add_button">Update</button>
            </form>
        </div>
    </div>

	<?php include 'footer.php'; ?>
    
    
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
    
    
    
    
    
    
    
    
    
    
    
    
