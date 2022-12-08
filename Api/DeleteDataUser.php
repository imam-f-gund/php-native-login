<?php 
  
class DeleteDataUser{
   
    public function destory($id){
        include '../db/koneksi.php';

        $data = [];
        $delete_user = $mysqli -> query("DELETE FROM user WHERE id='$id'");
        
        if ($delete_user === TRUE) {
            $data = [
                'success' =>'delete success',
            ];
            
        }else{
            $data = [
                'error' => 'delete not success',
            ];
        }
            
        echo(json_encode($data));

    }
}

if (empty($_GET['id'])) {
    $err=[
        'error' => 'id is null',
    ];
  
    echo json_encode($err);
}else{
    $id = $_GET['id'];
    $data = new DeleteDataUser();
    echo($data->destory($id));
}

?>