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
    <link rel ="stylesheet" href="../Libs/CSS/employee.css">
</head>
<body>
<?php include '../Views/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="list-group">
                    <button class="list-group-item list-group-item-action active btn btn-primary">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        Nhân viên
                    </button>
                    <button class="list-group-item list-group-item-action btn btn-primary">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Danh Sách Đặt Phòng
                    </button>
                    <button class="list-group-item list-group-item-action btn btn-primary">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Xếp Phòng
                    </button>

                </div>

            </div>
            <div class="col-md-10 col-sm-8" id="bookingList">
                <div class="title text-center mb-1">Danh sách đặt phòng</div>
                <div class="row">
                    <div class="col-md-2 text-center">Tên Khách Hàng</div>
                    <div class="col-md-1 text-center">CMND/CCCD</div>
                    <div class="col-md-1 text-center">Số Điện Thoại</div>
                    <div class="col-md-1 text-center">Ngày Đặt</div>
                    <div class="col-md-1 text-center">Ngày Nhận</div>
                    <div class="col-md-1 text-center">Ngày Trả</div>
                    <div class="col-md-1 text-center">Phòng đơn / đôi</div>
                    <div class="col-md-1 text-center">Trạng Thái</div>
                    <div class="col-md-2 text-center">Hành Động</div>

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
            <div class="col-md-9 col-sm-8" id="confirmBooking" style="display: none;">
                <table>
                    <thead>
                        <tr>
                            <th>Mã Đặt Phòng</th>
                            <th>Tên Khách Hàng</th>
                            <th>Ngày Đặt</th>
                            <th>Ngày Nhận</th>
                            <th>Ngày Trả</th>
                            <th>Số Điện Thoại</th>
                            <th>Số Phòng</th>
                            <th>Tổng Tiền</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <?php foreach ($bookingList as $booking) ?> -->
                        <!-- <tr>
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
                        </tr> -->
                </table>
            </div>
        </div>
    </div>

<?php include '../Views/footer.php'; ?>
</body>
</html>
<style>

</style>