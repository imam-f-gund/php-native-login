<?php
session_start();
include 'db/koneksi.php';
$date = date("Y-m-d h:i:sa");
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $user =$_POST["username"];
    $pass =$_POST["password"];
    // echo $user.$pass;
    $hasil = $mysqli -> query("select * from user where username='$user' and password='$pass'");
    $baris = $hasil -> fetch_array(MYSQLI_BOTH);

   if (!empty($baris)) {
    $_SESSION["user"] = $baris[2];
    // $_SESSION["rolw"] = $baris[5];
   
    if ($baris[2] == 'admin') {
        echo '<script>'.
        ' window.location.href="admin/dashboard.php";'.
        '</script>';
      }else{
        $sql_user = "INSERT INTO access_history (date_in, date_out, user_id )
        VALUES ('$date','$date','$baris[7]')";
        if ($mysqli->query($sql_user) === TRUE) {
            echo '<script>'.
                    ' window.location.href="dashboard.php";'.
                    '</script>';
        
        } else {
            // echo $mysqli;
            echo "<script>alert('Gagal login!');</script>";
        }
      // echo  $_SESSION["id"];
       
    }
   }else{
    echo 'Gagal Login...';
  }
}


?>