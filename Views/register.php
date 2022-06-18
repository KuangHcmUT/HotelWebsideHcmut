<?php
    require '../Controller/signupController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
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
</head>
<body>
	<?php include 'header2.php';?>
    
<section class="vh-100 login" style="margin-top: 240px;">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="#" method="POST">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">User name</label>
            <input name="userName" type="text" id="form1Example13" class="form-control form-control-lg" placeholder="User name" required="required"/>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>
            <input name="password" type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Password" required="required"/>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Confirm Password</label>
            <input name="confirmpassword" type="password" id="form1Example23" class="form-control form-control-lg" placeholder="Confirm password" required="required"/>
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your Full Name</label>
            <input name="fullName" type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Full name" required="required"/>
          </div>
          
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Your Phone Number</label>
            <input name="phoneNum" type="text" id="form1Example13" class="form-control form-control-lg" placeholder="Phone number" required="required"/>
          </div>

          <!-- Submit button -->
          <button name="signUpBtn" type="submit" class="btn btn-primary btn-lg btn-block">Sign Up</button>
        </form>
        <br>
        <?php if(!$checks): ?>
          <div class="alert alert-danger text-center">
            <strong>Đăng ký thất bại!</strong> Tên tài khoản đã được sử dụng!
          </div>
        <?php endif; ?>
        
        <?php if(!$confirmPass): ?>
          <div class="alert alert-danger text-center">
            <strong>Đăng ký thất bại!</strong> Vui lòng xác nhận đúng mật khẩu!
          </div>
        <?php endif; ?>
          <br>
        <?php if(!$phone): ?>
          <div class="alert alert-danger text-center">
            <strong>Đăng ký thất bại!</strong> Số điện thoại đã được sử dụng!
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>
</section>

<?php include 'footer.php';?>

</body>

<style>
    body{
        background-image: url("images/index.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    input{
        margin-bottom: 10px;
    }
    label{
        margin-left: 10px;
    }
</style>

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
</html>