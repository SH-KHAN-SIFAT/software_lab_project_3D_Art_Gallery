<?php include("header/header.php");?>

<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>Edit / Delete</p>
         <h2>Exhibition & Events Details</h2>
      </header>
   </div>
</section>

<section id="two" class="wrapper style2">
   <div class="inner">
      <div class="box">
         <div class="content">
            <div class="table-wrapper" style="overflow-x:auto">
               <div id="exhibitionTable"></div>
            </div>
         </div>
      </div>
   </div>
</section>

<?php include("../footer/footer.php");?>

<script>
    fetch("get_exhibitionevents.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById("exhibitionTable").innerHTML = data;
        })
        .catch(error => {
            console.error("Error:", error);
        });
</script>
