<?php 
session_start();
include 'header.php';
?>
<body>
<div class="container d-flex align-items-center h-100">
 <div class="container">
  <div class="notiflogin mt-3"></div>
  <div class="card bg-light" >
    <div class="card-header text-center">Information</div>
    <div class="card-body">
      <h5 class="card-title text-center">Welcome <?php echo $_SESSION['user']; ?></h5>
      <p class="card-text text-center">Content...</p>
    </div>
  </div>
 </div>
</div>

<script src="../asset/js/alert.js"></script>
<script>
  Alertlogin();
</script>
</body>
<?php
include 'footer.php';
?>