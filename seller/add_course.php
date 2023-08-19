<?php include("header/header.php");?>
<!--this is form for add product -->
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>ADD</p>
         <h2>Courses</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <div class="back-img back-img1">
         <div class="container divform">
            <h2>Add Courses</h2>
            <form action="" method="post" name="f1" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="artnm">Name</label>
                  <input type="text" class="form-control" id="artnm" name="a1" placeholder="Enter Name of Courses " required>
               </div>
               <div class="form-group">
                  <label for="artnm">Course Instructor</label>
                  <textarea rows="1" type="text" class="form-control" id="course" name="a2" placeholder="Enter Name of Course Instructor " required></textarea>
               </div>
               <div class="form-group">
                  <label for="sel1">Category of Level</label>
                  <select class="form-control" id="sel1" name="a3" required>
                     <option value="">------Select ------</option>
                     <option value="Beginner">
                        Beginner 
                     </option>
                     <option value="Intermediate">
                        Intermediate
                     </option>
                     <option value="Advanced">
                        Advanced
                     </option>
                  </select>
               </div>
               <div class="form-group">
                  <label for="pr">Venue</label>
                  <input type="text" class="form-control" id="pr" name="a4" placeholder="Enter Venue of Course " required>
               </div>
               <div class="form-group">
                  <label for="dis">Date</label>
                  <input type="date" class="form-control" id="dis" name="a5" placeholder="Enter Starting Date of Courses " required>
               </div>
               <div class="form-group">
                  <label for="dis">Time</label>
                  <input type="time" class="form-control" id="dis" name="a6" placeholder="Enter Time of Courses " required>
               </div>
               <br/>
               <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </form>
         </div>
      </div>
      <?php include( "../footer/footer.php" );?>
      <?php
         if ( isset( $_POST[ 'sub' ] ) ){
         	$a11=$_POST['a1'];
         	$a12=$_POST['a2'];
         	$a13=$_POST['a3'];
         	$a14=$_POST['a4'];
         	$a15=$_POST['a5'];	
             $a16=$_POST['a6'];	
           
         	
         	$sql = "INSERT INTO courses_info (course_name, course_instructor, course_level, venue, starting_date, timing) VALUES ('$a11', '$a12', '$a13', '$a14', '$a15', '$a16',)"; // this is an insert query  for add product
         	if (mysqli_query($con, $sql)) {
             echo "<script>alert('Your Course has been added!');
         	window.location.assign('add_course.php')
         	</script>";
         } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
         }
         mysqli_close($con);
         	?>
   </div>
</section>
