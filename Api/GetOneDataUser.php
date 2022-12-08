<?php 
  
class GetOneDataUser{
   
    public function index($username){
        include '../db/koneksi.php';

        $data = [];
        $hasil = $mysqli -> query("select * from user where username='$username'");
        
        while ($baris = $hasil -> fetch_array(MYSQLI_BOTH)) {
            $data = [
                'success' =>[
                    'id' => $baris[7],
                    'username' => $baris[0],
                    'password' => $baris[1],
                    'role' => $baris[2],
                    'email' => $baris[3],
                    'name' => $baris[4],
                    'address' => $baris[5],
                    'gender' => $baris[6],
                ],
                
            ];
            
        }

        if (empty($data)) {
            $data = [
                'error' => 'Data not found',
            ];
        }
            
        
        
        return json_encode($data);

    }
}

if (empty($_GET['query'])) {
    $err=[
        'error' => 'Query is null',
    ];
  
    echo json_encode($err);
}else{
    $query = $_GET['query'];
    $data = new GetOneDataUser();
    echo($data->index($query));
}

?>