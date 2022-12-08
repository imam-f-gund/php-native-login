<?php 
class AddDataUser{

    public function store($username, $password, $role, $email, $name, $address, $gender){
        include '../db/koneksi.php';
        
       

        $sql_user = "INSERT INTO user (name, username, password, email, address, gender, role)
        VALUES ('$name','$username','$password', '$email', '$address', '$gender', '$role')";

        if ($mysqli->query($sql_user) === TRUE) {
            $hasil = $mysqli -> query("select * from user where username='$username'");
        
            while ($baris = $hasil -> fetch_array(MYSQLI_BOTH)) {
                $data = [
                    'success' =>[
                        'id' => $baris[7],
                        'username' => $baris[0],
                        'password' => $baris[1],
                        'role' => $baris[2],
                        'name' => $baris[3],
                        'email' => $baris[4],
                        'address' => $baris[5],
                        'gender' => $baris[6],
                    ],
                    
                ];
            }
            echo(json_encode($data));

        }else{
            $data = [
                'error' => 'Data not added',
            ];
            echo(json_encode($data));
        }
            
    }
}

if (empty($_GET["username"]) && empty($_GET["password"]) && empty($_GET["role"]) && empty($_GET["email"]) && empty($_GET["gender"])&& empty($_GET["address"])&& empty($_GET["gender"])) {
    $err=[
        'error' => 'Input is null',
    ];
    
    echo json_encode($err);
}else{
    $username = $_GET["username"];
    $password = $_GET["password"];
    $role = $_GET["role"];
    $email = $_GET["email"];
    $name = $_GET["gender"];
    $address = $_GET["address"];
    $gender = $_GET["gender"];

    $data = new AddDataUser();
    $data->store($username, $password, $role, $email, $name, $address, $gender);
}

?>