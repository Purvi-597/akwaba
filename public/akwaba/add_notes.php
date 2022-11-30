<?php
//error_reporting(0);
session_start();
include('config/db_mysql.php');
if($_POST['check'] == 'add'){

$notes = $_POST['note'];
if(isset($_SESSION['users'])){
    // echo "<pre>";
    // print_r($_POST);die;
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
if($_POST['check'] == 'edit'){

    if(isset($_SESSION['users'])){


            $osm_id = $_POST['osm_id'];
            $notes = $_POST['note'];
            $user_id = $_SESSION['users']['id'];
            $updated_at = date("Y-m-d H:i:s");
            $query = "UPDATE `notes` SET `notes`='$notes',`updated_at`='$updated_at' WHERE osm_id ='$osm_id' AND user_id = '$user_id'";
            $result =  mysqli_query($conn, $query);
            if($result){
                echo "success";die;
            }else{
                echo "failed";die;
            }
    }else{

        $osm_id = $_POST['osm_id'];
        $notes = $_POST['note'];
        $data = array();
        if(isset($_COOKIE['set_notes'])) {
            $data = json_decode($_COOKIE['set_notes'], true);
        }
        $osm_ids = array();

        foreach($data as $row){
            $osm_ids[] = $row['osm_id'];
        }
        if(in_array($osm_id,$osm_ids)){

            foreach($data as $key => $value)
            {
                if($value['osm_id'] == $osm_id){
                $data[$key]['notes'] = $notes;
                }
            }
            setcookie('set_notes', json_encode($data), time()+3600);
            echo 'success';die;
        }
        echo "failed";die;
    }
}


if($_POST['check'] == 'delete'){

    if(isset($_SESSION['users'])){
    $osm_id = $_POST['osm_id'];
    $user_id = $_SESSION['users']['id'];
    $query = "DELETE FROM `notes` WHERE osm_id ='$osm_id' and user_id ='$user_id'";
    $result =  mysqli_query($conn, $query);
    if($result){
        echo "success";die;
    }else{
        echo "failed";die;
    }
    }else{

        $osm_id = $_POST['osm_id'];
        $data = array();
        if(isset($_COOKIE['set_notes'])) {
            $data = json_decode($_COOKIE['set_notes'], true);
        }

        $osm_ids = array();

        foreach($data as $key => $row){

         if($row['osm_id'] == $osm_id){

            unset($data[$key]);
         }

        }
        $data = array_values($data);
        setcookie('set_notes', json_encode($data), time()+3600);
          echo 'success';die;




    }
    }
?>
