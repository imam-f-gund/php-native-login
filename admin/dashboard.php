<?php 
session_start();
include 'header.php';
?>
<body>
 <br>
<div class="card bg-light" >
  <div class="card-header text-center">Information</div>
  <div class="card-body">
    <h5 class="card-title text-center">Welcome <?php echo $_SESSION['user']; ?></h5>
    <p class="card-text text-center">Content.....</p>
  </div>
</div>

</body>
<?php
include 'footer.php';
?>