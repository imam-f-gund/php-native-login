<?php 
include 'header.php';
include '../db/koneksi.php'; 
?>

<!-- <body> -->
 <br>
<div class="card bg-light justify-content-center" >
  <div class="card-header text-center">Information</div>
  <div class="card-body">
    <h5 class="card-title text-center" >History user</h5>
   <table class="table" >
    <tr>
        <th>User</th>
        <th>In</th>
        <th>Out</th>
       
    </tr>
    <?php 
    $hasil = $mysqli -> query("select * from access_history INNER JOIN user where access_history.user_id = user.id");
   
    while ($baris = $hasil -> fetch_array(MYSQLI_BOTH)) {
       
        echo '<tr>';
        echo '<td>'.$baris[4].'</td>';
        echo '<td>'.$baris[1].'</td>';
        echo '<td>'.$baris[2].'</td>';
        echo '</tr>';
    }
    ?>
   </table>
  </div>
</div>
<br>
<!-- </body> -->
<?php 
include 'footer.php';
?>