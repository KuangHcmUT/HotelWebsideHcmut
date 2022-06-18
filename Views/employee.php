<?php
    require '../Controller/bookingController.php';
    if (!isset($_SESSION['userName'])) {
        header('Location: login.php');
    }  

    // $user = findUser($_SESSION['userName']);
    if($_SESSION['role'] != 'employee'){
        header('Location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân viên</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="./styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="./plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="./plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="./plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="./plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/booking.css">
    <link rel="stylesheet" type="text/css" href="styles/booking_responsive.css">
    <link rel="icon" type="image/x-icon" href="./images/webicon.png">
    <link rel ="stylesheet" href="Libs/CSS/employee.css">
</head>
<body>
<?php include 'header2.php'; ?>

    <div class="home">
		<div class="background_image" style="background-image:url(./images/booking.jpg)"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Employee Manager</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



    <div class="container employee-con" style="margin-top: 100px;">
        <div id="bookingList" >
            <div class="title text-center mb-1">Danh sách đặt phòng</div>
            <div class="form-inline">
                <i class="fa fa-search icon"> </i>
                <input type="text" class="form-control mb-2 mr-sm-2" name="search-phone" id="search-phone" onkeyup="show_search_result()" placeholder="Search for phone">   
            </div>
            <table class="table table-hover" id="main-table">
            <thead class="thead-dark">
            <tr>
                <th>Customer Name</th>
                <th>PhoneNum</th>
                <th>Bookingdate</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>Room Types</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($bookingList as $booking) { ?>
                <tr>
                    <td><?php echo $booking['customer_name']; ?></td>
                    <td><?php echo $booking['customer_phone']; ?></td>
                    <td><?php echo $booking['booking_date']; ?></td>
                    <td><?php echo $booking['checkin_date']; ?></td>
                    <td><?php echo $booking['checkout_date']; ?></td>
                    <td><?php echo $booking['roomtype']; ?></td>
                    <td><?php echo $booking['total_price']; ?></td>
                    <td><?php echo $booking['status']; ?></td>
                    <td>
                        <form action="#" method="POST">
                            <input type="hidden" name="booking_id" value="<?php echo $booking['booking_id']; ?>">
                            <input type="hidden" name="customer_name" value="<?php echo $booking['customer_name']; ?>">
                            <input type="hidden" name="customer_idCard" value="<?php echo $booking['customer_idCard']; ?>">
                            <input type="hidden" name="customer_phone" value="<?php echo $booking['customer_phone']; ?>">
                            <input type="hidden" name="checkin_date" value="<?php echo $booking['checkin_date']; ?>">
                            <input type="hidden" name="checkout_date" value="<?php echo $booking['checkout_date']; ?>">

                            <!-- <button name="accept" type="submit" class="btn btn-primary accept" data-id="<?php echo $booking['booking_id']; ?>">Accept</button> -->
                            <button name="demis"  type="submit" class="btn btn-danger demis" data-id="<?php echo $booking['booking_id']; ?>">Reject </button>
                            <br>
                            <!-- <input type="text" name="roomNum" placeholder="Input Room number"> -->
                            <label for="cars">Choose a room:</label>
                            <select name="room-id" id="room-id">
                                <?php
                                // $emptyRoomList = getAllEmptyRoom($booking['roomtype']);
                                $failed_room = [];

                                foreach ($allRoomList as $room) { 
                                    if($booking['roomtype'] == $room['room_type']) { 
                                        foreach($confirmList as $list) {
                                            if ($list['room_number'] == $room['room_id']) {
                                                if($booking['checkin_date'] >= $list['checkin_date'] && $booking['checkin_date'] <= $list['checkout_date']){
                                                    array_push($failed_room, $room['room_id']);
                                                }
                                                else if($booking['checkout_date'] >= $list['checkin_date'] && $booking['checkout_date'] <= $list['checkout_date']){
                                                    array_push($failed_room, $room['room_id']);
                                                }
                                            }
                                            // else{
                                            //     echo '<option value="'.$room['room_id'].'">'.$room['room_id'].'</option>';
                                            // }
                                        }
                                    }
                                }

                                foreach ($allRoomList as $room) { 
                                    if($booking['roomtype'] == $room['room_type']) { 
                                        if(!in_array($room['room_id'], $failed_room)) {
                                            echo '<option value="'.$room['room_id'].'">'.$room['room_id'].'</option>';
                                        }
                                    }
                                }
                                        
                                
                                ?>

                            </select>


                            <button name="addConfirm"  type="submit" class="btn btn-success addConfirm" data-id="<?php echo $booking['booking_id']; ?>">Confirm</button>
                        </form>
                        
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>

        </div>
        <div id="confirmBooking" style="display: none;">
            <div class="title text-center mb-1">Danh sách xếp phòng</div>

            <div class="form-inline">
                <i class="fa fa-search icon"> </i>
                <input type="text" class="form-control mb-2 mr-sm-2" name="search-phone" id="search-phone" onkeyup="show_search_result()" placeholder="Search for phone">   
            </div>
            <table class="table table-hover" id="main-table">
            <thead class="thead-dark">
            <tr>
                <th>Customer Name</th>
                <th>PhoneNum</th>
                <th>Cus_idCard</th>
                <th>Checkin</th>
                <th>Checkout</th>
                <th>RoomNum</th>
                <th>Status</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($confirmList as $confirm) {
                if($confirm['status'] != 'Checked Out') {
            ?>
                <tr>
                    <td><?php echo $confirm['customer_name']; ?></td>
                    <td><?php echo $confirm['customer_phone']; ?></td>
                    <td><?php echo $confirm['customer_idCard']; ?></td>
                    <td><?php echo $confirm['checkin_date']; ?></td>
                    <td><?php echo $confirm['checkout_date']; ?></td>
                    <td><?php echo $confirm['room_number']; ?></td>
                    <td><?php echo $confirm['status']; ?></td>
                    <td>
                        <form action="#" method="POST">
                            <input type="hidden" name="confirm_id" value="<?php echo $confirm['id']; ?>">
                            <input type="hidden" name="confirm_room" value="<?php echo $confirm['room_number']; ?>">
                            
                            <button name="checkin"  type="submit" class="btn btn-primary checkin" data-id="<?php echo $confirm['id']; ?>">CheckIn</button>
                            <button name="checkout" type="submit" class="btn btn-danger checkout" data-id="<?php echo $confirm['id']; ?>">CheckOut</button>
                        </form>
                        
                    </td>
                </tr>
            <?php } } ?>
            </tbody>
            </table>
        </div>
        <div class="addPopUp" style="display: none;">
            <div class="title text-center mb-1">Thêm mới</div>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="customer_name">Customer Name</label>
                    <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Customer Name">
                </div>
                <div class="form-group">
                    <label for="customer_phone">PhoneNum</label>
                    <input type="text" class="form-control" name="customer_phone" id="customer_phone" placeholder="PhoneNum">
                </div>
                <div class="form-group">
                    <label for="customer_idCard">Cus_idCard</label>
                    <input type="text" class="form-control" name="customer_idCard" id="customer_idCard" placeholder="Cus_idCard">
        </div>
    </div>

<?php include 'footer2.php'; ?>

</body>
<script>
    function confirm(){
        $('#confirmBooking').show();
        $('#bookingList').hide();
    }
    function booking(){
        $('#confirmBooking').hide();
        $('#bookingList').show();
    }
    function show_search_result() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search-phone");
    filter = input.value;
    table = document.getElementById("main-table");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>

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
<script src="./plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="./js/custom.js"></script>
</html>
