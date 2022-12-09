<?php 
include 'header.php';
include '../db/koneksi.php'; 
?>

<!-- <body> -->
<div class="container d-flex align-items-center h-100">
 <div class="container">
<div class="card bg-light justify-content-center mt-5">
  <div class="card-header text-center">Information</div>
  <div class="card-body">
    <h5 class="card-title text-center" >History user 1 week</h5>
   <table id="example" class="table table-striped table-bordered mt-2" style="width:100%" >
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Date</th>
       
    </tr>
    <?php 
    $hasil = $mysqli -> query("select * from access_history INNER JOIN user where access_history.user_id = user.id LIMIT 7");
    $no = 1;
    while ($baris = $hasil -> fetch_array(MYSQLI_BOTH)) {
       
        echo '<tr>';
        echo '<td >'.$no++.'</td>';
        echo '<td>'.$baris[4].'</td>';
        echo '<td>'.$baris[1].'</td>';
        echo '</tr>';
    }
    ?>
   </table>
  </div>
</div>
 </div>
</div>
<!-- </body> -->
<script>
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
<?php 
include 'footer.php';
?>