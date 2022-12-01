<?php
error_reporting(0);
session_start();
include('config/db_mysql.php');
// echo "<pre>";
// print_r($_POST);die;

if (! empty($_POST["keyword"])) {

    $sql = $conn->prepare("SELECT * FROM categories WHERE display_name LIKE  ? ORDER BY display_name");
    $search = "{$_POST['keyword']}%";
    $sql->bind_param("s", $search);
	$sql->execute();
    $result = $sql->get_result();
	
    if (! empty($result)) {
        ?>
<ul id="country-list">
<?php
        foreach ($result as $country) {
            ?>
   <li
        onClick="selectCountry('<?php echo $country["display_name"]; ?>');">
      <?php echo $country["display_name"]; ?>
    </li>
<?php
        } // end for
        ?>
</ul>
<?php
    } // end if not empty
}
?>
