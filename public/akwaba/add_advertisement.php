<?php 

error_reporting(0);
session_start();
include('config/db_mysql.php');
$place_title = $_POST['place_title'];
$place_type = $_POST['place_type'];

$basename = "";
$newfilename = "image_". rand();
$extension   = pathinfo($_FILES['place_image']['name'], PATHINFO_EXTENSION);
$basename    = $newfilename . "." . $extension;
$file1       = $_FILES['place_image']['name'];
$target_path = "./uploads/place_advertisement/" . $basename;
$created_at` = date("Y-m-d H:i:s");
$updated_at` = date("Y-m-d H:i:s");
move_uploaded_file($_FILES['place_image']['tmp_name'], $target_path);

if($place_type == "POI"){
    $place_name = $_POST['place_name'];
    $query = "INSERT INTO `place_advertisement`(`place_name`,`image`, `type`,`osm_id`,`status`,`is_verify`,`created_at`,
                                  `updated_at`)
                     VALUES ('$place_title','$basename','$place_type','$place_name',
                     '0','0','$created_at','$updated_at')";

}

if($place_type == "External"){
    $place_link = $_POST['place_link'];
    $query = "INSERT INTO `place_advertisement`(`place_name`,`image`, `type`,`external_link`,`status`,`is_verify`, `created_at`,
                                  `updated_at`)
                     VALUES ('$place_title','$basename','$place_type','$place_link',
                     '0','0','$created_at','$updated_at')";
                    
}
$result = mysqli_query($conn, $query);

if($result){

    $last_id = $conn->insert_id;

    for ($i = 0; $i < count($_FILES['multiple_photos']['name']); $i++) {
    $newfilename = "image_". rand();
    $extension   = pathinfo($_FILES['multiple_photos']['name'][$i], PATHINFO_EXTENSION);
    $basename    = $newfilename . "." . $extension;
    $file1       = $_FILES['multiple_photos']['name'][$i];
    $target_path = "./uploads/place_advertisement_multiple_images/" . $basename;
    move_uploaded_file($_FILES['multiple_photos']['tmp_name'][$i], $target_path);
    
    $query2 = "INSERT INTO `place_advertisement_images`(`place_advertisement_id`, `image`, `created_at`,`updated_at`)
                VALUES ('$last_id','$basename','$created_at','$updated_at')";
    $result2 = mysqli_query($conn, $query2);

}
echo "success";
}else{
    echo "failed";die;
}
?>