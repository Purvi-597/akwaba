<?php
//error_reporting(0);
session_start();
include('config/db_mysql.php');
if($_POST['check'] == 'add'){

$notes = $_POST['note'];
if(isset($_SESSION['users'])){
   $user_id = $_SESSION['users']['id'];
   $osm_id = $_POST['osm_id'];
   $created_at = date("Y-m-d H:i:s");
   $updated_at = date("Y-m-d H:i:s");
   $query = "INSERT INTO `notes`(`osm_id`, `user_id`, `notes`, `created_at`, `updated_at`)
                     VALUES ('$osm_id','$user_id','$notes','$created_at','$updated_at')";

    $result =  mysqli_query($conn, $query);

    if($result){
       echo "success";die;
    }else{
        echo "failed";die;

    }
}else{


    $osm_id = $_POST['osm_id'];
    $newdata[] = array(
        'notes' => $notes,
        'osm_id' => $osm_id
    );

    $data = array();
    if(isset($_COOKIE['set_notes'])) {
        $data = json_decode($_COOKIE['set_notes'], true);
    }
    $osm_ids = array();
    foreach($data as $row){
        $osm_ids[] = $row['osm_id'];
    }
    ///echo $osm_id;die;
    if(in_array($osm_id,$osm_ids)){

        foreach($data as $key => $value)
        {
            if($value['osm_id'] == $osm_id){
            $data[$key]['notes'] = $notes;
            }
        }
        setcookie('set_notes', json_encode($data), time()+3600);
        echo 'success_edit_name';
    }else{

        $new_merge = array_merge($data, $newdata);

        setcookie('set_notes', json_encode($new_merge), time()+3600);
        echo 'success';
    }




}
}
// if($_POST['check'] == 'edit'){

//     if(isset($_SESSION['users'])){
//             $id = $_POST['id'];
//             $notes = $_POST['note'];
//             $updated_at = date("Y-m-d H:i:s");
//             $query = "UPDATE `notes` SET `notes`='$notes',`updated_at`='$updated_at' WHERE id ='$id'";
//             $result =  mysqli_query($conn, $query);
//             if($result){
//                 echo "success";die;
//             }else{
//                 echo "failed";die;
//             }
//     }else{
//         $data = json_decode($_COOKIE['set_notes']);
//         echo "jai";
//         echo "<pre>";print_r($data);die;


//     }
// }


if($_POST['check'] == 'delete'){
    $id = $_POST['id'];
    $query = "DELETE FROM `notes` WHERE id ='$id'";
    $result =  mysqli_query($conn, $query);
    if($result){
        echo "success";die;
    }else{
        echo "failed";die;
    }
    }
?>
