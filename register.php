<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="asset/css/register.css">

<body>
<section class="vh-100 bg-image" 
  style="">
 
  <div class="mask d-flex align-items-center h-80 gradient-custom-3">
    <div class="container h-100">
    <div class="alerts-register"></div>
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form action='#' method="post">

                <div class="form-outline mb-4" >
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="name"/>
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" name="email" />
                </div>
                
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Address</label>
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" name="address" />
                </div> 
                
                <div class="form-outline mb-4">
                 <select name="gender" class="form-control form-control-lg" >
                    <option value="">Your Gender </option>
                    <option value="male">Male </option>
                    <option value="female">Female </option>
                 </select>
                  <!-- <input type="text" id="form3Example3cg" placeholder="male/female"  class="form-control form-control-lg" name="gender"/>
                  <label class="form-label" for="form3Example3cg">Your Gender</label> -->
                </div>

                <div class="form-outline mb-4" hidden>
                  <input type="text" id="form3Example3cg" class="form-control form-control-lg" value="user" name="role" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" name="password" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <button type="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="index.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script src="asset/js/alert.js"></script>
  <script>
    Alertregister();
  </script>
</body>
 
</html>

<?php
include 'db/koneksi.php';
if (isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["address"]) && isset($_POST["gender"]) && isset($_POST["role"])) {
        
    $name =$_POST["name"];
    $user =$_POST["name"];
    $pass =$_POST["password"];
    $email =$_POST["email"];
    $address =$_POST["address"];
    $gender =$_POST["gender"];
    $role =$_POST["role"];

    $sql_user = "INSERT INTO user (name, username, password, email, address, gender, role)
    VALUES ('$name','$user','$pass', '$email', '$address', '$gender', '$role')";
  
       if ($mysqli->query($sql_user) === TRUE) {
           echo "<script>".
           'window.location.href="register.php";'.
           "localStorage.setItem('status-register', 'true');".
           "</script>";
       
       } else {
           echo "<script>".
           "localStorage.setItem('status-register', 'false');".
           "</script>";
           
       }

          
       }

?>