<?php
include("header/header.php");

$r = $_GET['id'];
$sql = "SELECT * FROM booking_info WHERE cust_id = $r";
$run = mysqli_query($con, $sql);

echo "<table class='table table-bordered'>
<tr>
<th>Booking Art Id</th>
<th>User Id</th>
<th>Art Id</th>
<th>Name</th>
<th>Booking Art Name</th>
<th>Booking Order Status</th>
<th>Delivery Address</th>
<th>Booking Art Quantity</th>
<th>Booking Art Date</th>
<th>Booking Art Price</th>
<th>Cancel Booking</th>
</tr>";

while ($result = mysqli_fetch_array($run)) {
    echo "<tr>
    <td>$result[0]</td>
    <td>$result[1]</td>
    <td>$result[2]</td>
    <td>$result[3]</td>
    <td>$result[4]</td>
    <td>$result[5]</td>
    <td>$result[6]</td>
    <td>$result[7]</td>
    <td>$result[8]</td>
    <td>$result[9]</td>
    <td><button class='btn btn-danger' onclick='cancelBooking($result[0])'>Cancel</button></td>
    </tr>";
}

echo "</table>";
mysqli_close($con);
?>
