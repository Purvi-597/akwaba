<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
$osmids = $_REQUEST['osmids'];
$title = $_REQUEST['title'];
$userid = $_REQUEST['session_id'];

		if(count($_FILES['file_photos']['name']) > 0){
				for ($i = 0; $i < count($_FILES['file_photos']['name']); $i++) {
				  $newfilename = "image_". rand();
				  $extension   = pathinfo($_FILES['file_photos']['name'][$i], PATHINFO_EXTENSION);
				  $basename    = $newfilename . "." . $extension;
				  $file1       = $_FILES['file_photos']['name'][$i];
				  $target_path = "./uploads/review/" . $basename;
				  $array_images[] = $basename;
				  move_uploaded_file($_FILES['file_photos']['tmp_name'][$i], $target_path);
				 
				}
			$array_name = implode(",",$array_images);
		} 
$created_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");
$sql = "INSERT INTO contact_photos (user_id, osm_id, title, images, status, created_at, updated_at) VALUES ('".$userid."', '".$osmids."', '".$title."', '".$array_name."', '1', '".$created_at."', '".$updated_at."')";
$result = mysqli_query($conn, $sql);
if($result){ 
if(isset($_SESSION['users']['id'])){
	$photosql = "select * from contact_photos where osm_id = '".$osmids."' and status = '1' and deleted_at IS NULL";
}else{
	$photosql = "select * from contact_photos where osm_id = '".$osmids."' and status = '1' and deleted_at IS NULL";	
}

$photoresult = $conn->query($photosql);
	if($photoresult->num_rows > 0) {
		while($photorows = $photoresult->fetch_assoc()) {
			$prows[] = $photorows;
			//$photos[] = $rowss['photos'];
			$userPhoto[] = explode(",",$photorows['images']);
		}

			$html = '';
			if(!empty($prows)) {
				 for($i=0;$i<count($userPhoto);$i++){ 
						for($j=0;$j<count($userPhoto[$i]);$j++){
				    $html.=' <div class="magnific-img col-md-3">
                      <a class="image-popup-vertical-fit" target="_blank" href="./uploads/review/'.$userPhoto[$i][$j].'" title="'.$userPhoto[$i][$j].'">
                        <img src="./uploads/review/'.$userPhoto[$i][$j].'" alt="'.$userPhoto[$i][$j].'" style="width: 150%;" />
                      </a>
                    </div>';
				 }}}
			$html.='<h3 class="rating-stars">Photos <span>(you can upload up to 5 photos)</span></h3>
					<div class="imageslist">
						<div class="lable-input singleimg">
							<a href="javascript:void(0)" class="uploadBtn" style="display: inline;" data-index="'.$osmids.'" id="'.trim($title,'"').'">
							<label for="">
								<img src="assets/img/left-brand-image.png"> 
							  <div class="overlaycount" >
								<p>Photos</p>
							  </div>
							</label>
							</a>
						</div>
					</div>';	 
		echo $html."|true";die;
	}else{
		echo "Something went wrong|false";die;	
	} 
}else{
	echo "Something went wrong|false";die;	
	
}

?>
