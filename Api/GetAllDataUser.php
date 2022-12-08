<?php 
  
class GetAllDataUser{
   
    public function index(){
        include '../db/koneksi.php';

        $hasil = $mysqli -> query("select * from user");
        
        while ($baris = $hasil -> fetch_array(MYSQLI_BOTH)) {
            // echo $baris[1];
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
           echo(json_encode($data));
        }
      

        if (empty($data)) {
            $data = [
                'error' => 'Data not found',
            ];
            return json_encode($data);
        }

    }
}

    $data = new GetAllDataUser();
   $datas = $data->index();
   echo($datas);

?>