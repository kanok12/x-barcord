<meta charset="utf-8">

<?php
	if(isset($_GET['id'])){
		include_once("connectdb.php");
		
		$sql = "delete from `train` where trainid='".$_GET['id']."'";
		mysqli_query($conn, $sql) or die('ลบข้อมูลไม่ได้');
		
		echo "<script>";
		echo "alert('ลบข้อมูลสำเร็จ');";
		echo "window.location='docDetailAdmin.php';";
		echo "</script>";
		}

?>