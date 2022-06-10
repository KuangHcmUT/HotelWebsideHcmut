<?php
    // require_once '../Controller/hotelController.php'
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
    <link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.3.4/animate.css">
    <link href="../plugins/jquery-datepicker/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="../plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="../styles/responsive.css">
    <link rel="icon" type="image/x-icon" href="../images/webicon.png">
    <link rel ="stylesheet" href="../Libs/CSS/employee.css">
</head>
<body>
<?php include '../Views/header2.php'; ?>

    <div class="container employee-con" style="margin-top: 100px;">
        <div id="bookingList" >
            <div class="title text-center mb-1">Danh sách đặt phòng</div>
            <div class="row table-title">
                <div class="col-md-2 text-center">Tên Khách Hàng</div>
                <div class="col-md-1 text-center">Số Điện Thoại</div>
                <div class="col-md-1 text-center">Ngày Đặt</div>
                <div class="col-md-1 text-center">Ngày Nhận</div>
                <div class="col-md-1 text-center">Ngày Trả</div>
                <div class="col-md-1 text-center">Đơn/Đôi</div>
                <div class="col-md-1 text-center">Trạng Thái</div>
                <div class="col-md-2 text-center">Ghi chú</div>
                <div class="col-md-2 text-center">Hành Động</div>
            </div>
            <div class="row table-records">
                <div class="col-md-2 text-center">Ngô Bá Khá</div>
                <div class="col-md-1 text-center">0965724322</div>
                <div class="col-md-1 text-center">21/01/2022</div>
                <div class="col-md-1 text-center">24/01/2022</div>
                <div class="col-md-1 text-center">30/01/2022</div>
                <div class="col-md-1 text-center">2/1</div>
                <div class="col-md-1 text-center">Booking</div>
                <div class="col-md-2 text-center">Không</div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-primary accept">Accept</button>
                    <button class="btn btn-danger demis">Demis</button>
                </div>
            </div>
            <div class="row table-records">
                <div class="col-md-2 text-center">Ngô Bá Khá</div>
                <div class="col-md-1 text-center">0965724322</div>
                <div class="col-md-1 text-center">21/01/2022</div>
                <div class="col-md-1 text-center">24/01/2022</div>
                <div class="col-md-1 text-center">30/01/2022</div>
                <div class="col-md-1 text-center">2/1</div>
                <div class="col-md-1 text-center">Booking</div>
                <div class="col-md-2 text-center">Không</div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-primary accept">Accept</button>
                    <button class="btn btn-danger demis">Demis</button>
                </div>
            </div>
            <div class="row table-records">
                <div class="col-md-2 text-center">Ngô Bá Khá</div>
                <div class="col-md-1 text-center">0965724322</div>
                <div class="col-md-1 text-center">21/01/2022</div>
                <div class="col-md-1 text-center">24/01/2022</div>
                <div class="col-md-1 text-center">30/01/2022</div>
                <div class="col-md-1 text-center">2/1</div>
                <div class="col-md-1 text-center">Booking</div>
                <div class="col-md-2 text-center">Không</div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-primary accept">Accept</button>
                    <button class="btn btn-danger demis">Demis</button>
                </div>
            </div>
            <div class="row table-records">
                <div class="col-md-2 text-center">Ngô Bá Khá</div>
                <div class="col-md-1 text-center">0965724322</div>
                <div class="col-md-1 text-center">21/01/2022</div>
                <div class="col-md-1 text-center">24/01/2022</div>
                <div class="col-md-1 text-center">30/01/2022</div>
                <div class="col-md-1 text-center">2/1</div>
                <div class="col-md-1 text-center">Booking</div>
                <div class="col-md-2 text-center">Không</div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-primary accept">Accept</button>
                    <button class="btn btn-danger demis">Demis</button>
                </div>
            </div>
            <div class="row table-records">
                <div class="col-md-2 text-center">Ngô Bá Khá</div>
                <div class="col-md-1 text-center">0965724322</div>
                <div class="col-md-1 text-center">21/01/2022</div>
                <div class="col-md-1 text-center">24/01/2022</div>
                <div class="col-md-1 text-center">30/01/2022</div>
                <div class="col-md-1 text-center">2/1</div>
                <div class="col-md-1 text-center">Booking</div>
                <div class="col-md-2 text-center">Không</div>
                <div class="col-md-2 text-center">
                    <button class="btn btn-primary accept">Accept</button>
                    <button class="btn btn-danger demis">Demis</button>
                </div>
            </div>
            <!-- <table>
                <thead>
                    <tr>
                        <th>Tên Khách Hàng</th>
                        <th>Ngày Đặt</th>
                        <th>Ngày Nhận</th>
                        <th>Ngày Trả</th>
                        <th>Số Điện Thoại</th>
                        <th>Số Phòng đơn</th>
                        <th>Số Phòng đôi</th>
                        <th>Trạng Thái</th>
                        <th>Hành Động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bookingList as $booking) ?>
                    <tr>
                        <td><?php echo $booking['booking_id']; ?></td>
                        <td><?php echo $booking['customer_name']; ?></td>
                        <td><?php echo $booking['booking_date']; ?></td>
                        <td><?php echo $booking['checkin_date']; ?></td>
                        <td><?php echo $booking['checkout_date']; ?></td>
                        <td><?php echo $booking['customer_phone']; ?></td>
                        <td><?php echo $booking['room_number']; ?></td>
                        <td><?php echo $booking['total_price']; ?></td>
                        <td><?php echo $booking['status']; ?></td>
                        <td>
                            <a href="../Controllers/booking.php?action=edit&booking_id=<?php echo $booking['booking_id']; ?>">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </a>
                            <a href="../Controllers/booking.php?action=delete&booking_id=<?php echo $booking['booking_id']; ?>">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
            </table> -->
        </div>
        <div id="confirmBooking" style="display: none;">
            <div class="title text-center mb-1">Danh sách xếp phòng</div>
            <div class="row table-title">
                <div class="col-md-2 text-center">Tên Khách Hàng</div>
                <div class="col-md-1 text-center">CMND / CCDC</div>
                <div class="col-md-1 text-center">Số Điện Thoại</div>
                <div class="col-md-1 text-center">Ngày Nhận</div>
                <div class="col-md-1 text-center">Ngày Trả</div>
                <div class="col-md-1 text-center">Số phòng</div>
                <div class="col-md-1 text-center">Trạng Thái</div>
                <div class="col-md-2 text-center">Ghi chú</div>
                <div class="col-md-2 text-center">Hành Động</div>
            </div>
        </div>
    </div>

<?php include '../Views/footer2.php'; ?>

</body>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../plugins/jquery-datepicker/jquery-ui.js"></script>
<script src="../plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="../js/custom.js"></script>
</html>
