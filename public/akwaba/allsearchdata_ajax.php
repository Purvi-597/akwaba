<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
// echo "<pre>";
// print_r($_POST);die;

if (! empty($_POST["keyword"])) {

    $sql = "SELECT * FROM categories WHERE  status = '1' and deleted_at IS NULL ORDER BY display_name";
    $result = $conn->query($sql);
	  while($row = $result->fetch_assoc()) {
		  $data[] = $row;
	  }
	 if (! empty($result)) {
        ?>
	<ul id="country-list">
	<?php
			foreach ($data as $res) {
				?>
	   <li
			onClick="selectCountry('<?php echo $res["display_name"]; ?>','<?php echo $res["id"]; ?>');">
		  <?php echo $res["display_name"]; ?>
		</li>
	<?php
			} // end for
			?>
	</ul>
	<?php
		} // end if not empty
}
?>