<?php


error_reporting(0);
session_start();
include('config/db_mysql.php');
// echo "<pre>";
// print_r($_POST);die;

if($_SESSION['users']){
$email = $_SESSION['users']['email'];
}else{
$email = $_POST['email'];
}
$company_name = $_POST['company_name'];
$area_of_activity = $_POST['area_of_activity'];
$company_address = $_POST['company_address'];
$phone_number_main = "";
$phone_number_comment_main = "";
if(!empty($_POST['phone_number'][0])){
for($i = 0; $i < count($_POST['phone_number']); $i++) {
    $phone_number[] = $_POST['phone_number'][$i];
    $phone_number_comment[]  = $_POST['phone_number_comment'][$i];

    $phone_number_main = implode(",", $_POST['phone_number']);
    $phone_number_comment_main = implode(",", $_POST['phone_number_comment']);
}
}
$website_main = "";
if(!empty($_POST['website'][0])){
for($i = 0; $i < count($_POST['website']); $i++) {
$website[] = $_POST['website'][$i];
$website_main = implode(",", $_POST['website']);
}
}

$hours = $_POST['hours'];
$describe_accuracy = $_POST['describe_accuracy'];

if($_SESSION['users']){
    $user_id = $_SESSION['users']['id'];
}else{
    $user_id = 0;
}
if(!empty($_POST['company_latitude'])){
    $latitude = $_POST['company_latitude'];
}else{
    $latitude  = "";
}
if(!empty($_POST['company_longtitude'])){
    $longtitude = $_POST['company_longtitude'];
}else{
    $longtitude  = "";
}





$today = date("Y-m-d");

$query = "INSERT INTO `company`(`user_id`,`email`, `name`, `area_of_activity`,
                                `address`, `phone_number`, `phone_number_comment`,
                                 `website`, `opening_hours`, `description`,
                                 `latitude`, `longtitude`, `status`,`is_verify`, `created_at`,
                                  `updated_at`)
                     VALUES ('$user_id','$email','$company_name','$area_of_activity',
                     '$company_address','$phone_number_main','$phone_number_comment_main',
                     '$website_main','$hours','$describe_accuracy',
                     '$latitude','$longtitude','0','0','$today','$today')";
$result = mysqli_query($conn, $query);

if($result){
$last_id = $conn->insert_id;
for ($i = 0; $i < count($_FILES['photos']['name']); $i++) {
    $newfilename = "image_". rand();
    $extension   = pathinfo($_FILES['photos']['name'][$i], PATHINFO_EXTENSION);
    $basename    = $newfilename . "." . $extension;
    $file1       = $_FILES['photos']['name'][$i];
    $target_path = ".../uploads/company/" . $basename;
    move_uploaded_file($_FILES['photos']['tmp_name'][$i], $target_path);
    $query2 = "INSERT INTO `company_images`(`company_id`, `image`, `created_at`,
                                             `updated_at`)
                                    VALUES ('$last_id','$basename',
                                            '$today','$today')";
    $result2 = mysqli_query($conn, $query2);
}
echo "success";
}else{
    echo "error";
}
?>
