<?php
include("header/header.php");

$sql = "SELECT * FROM exhibition_events";
$run = mysqli_query($con, $sql);

echo "<table class='alt'>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>About</th>
      <th>Category</th>
      <th>Venue</th>
      <th>Date</th>
      <th>Time</th>
      <th>Photo</th>
      <th>Delete</th>
      <th>Edit</th>
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
      <td><img src='$result[7]' class='img-responsive dp'></td>
      <td><a class='button special-red' href='del_exhibitionevents.php?id=$result[0]' class='btn btn-danger' value='del' name='del'>delete</a></td>
      <td><a class='button special' href='update_exhibitionevents.php?id=$result[0]' class='btn btn-danger'>Edit</a></td>
      </tr>";
}

echo "</table>";
mysqli_close($con);
?>
