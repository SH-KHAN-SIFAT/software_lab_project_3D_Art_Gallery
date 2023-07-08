<?php include("header/header.php"); ?>
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>MANAGE</p>
         <h2>All User Details</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <!--this is table for  all customer-->
      <div style="overflow:scroll;">
         <?php
            $sql = "select * from customer_info"; // this  is query for fetching all customer  details. 
            $run = mysqli_query( $con, $sql );
            echo "<table class='divform'>
            <tr>
            <th>user Id</th>
            <th>user password</th>
            <th>user Email</th>
            <th>user FirstName</th>
            <th>user LastName</th>
            <th>user sex</th>
            <th>user Phone</th>
            <th>user state</th>
            <th>user Place</th>
            <th>user Address</th>
            <th>Delete User</th>
            </tr>";
            while ( $result = mysqli_fetch_array( $run ) ) { // this is function for fetchinh the data as an array.
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
            <td><a class='button special-red' href='delete_customer_now.php?id=$result[0]' class='btn btn-danger'>delete</a></td>
            	</tr>";
            }
            echo "</table>";
            mysqli_close( $con );
            ?>
      </div>
   </div>
</section>

<?php include( "../footer/footer.php" );?>