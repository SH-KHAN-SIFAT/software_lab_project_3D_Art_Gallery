<div class="back-img back-img1">
   <?php include("header/header.php"); ?>
   <div class="container-fluid" style="margin-top: 31px;">
      <h2 style="color: white;">Table of Bookings</h2>
      <b>
   </div>
   <section>
      <div class="container-fluid" style="background-color: white;">
         <div class="row" style="margin-left:10px;">
            <div id="bookingTable"></div>
         </div>
      </div>
   </section>
</div>

<?php include("../footer/footer.php"); ?>

<script>
    fetch("get_bookinginfo.php?id=" + <?php echo $_GET['id2']; ?>)
        .then(response => response.text())
        .then(data => {
            document.getElementById("bookingTable").innerHTML = data;
        })
        .catch(error => {
            console.error("Error:", error);
        });

    function cancelBooking(bookingId) {
        fetch("cancel_booking.php?id1=" + bookingId)
            .then(response => response.text())
            .then(data => {
                alert(data);
                // If needed, you can refresh the table after cancellation
                fetch("get_bookinginfo.php?id=" + <?php echo $_GET['id2']; ?>)
                    .then(response => response.text())
                    .then(data => {
                        document.getElementById("bookingTable").innerHTML = data;
                    })
                    .catch(error => {
                        console.error("Error:", error);
                    });
            })
            .catch(error => {
                console.error("Error:", error);
            });
    }
</script>

