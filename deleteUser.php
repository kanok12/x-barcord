<meta charset="utf-8">

<?php
	if(isset($_GET['id'])){
		include_once("connectdb.php");
		
		$sql = "delete from `tb_member` where member_id='".$_GET['id']."'";
		mysqli_query($conn, $sql) or die('ลบข้อมูลไม่ได้');
		
		echo "<script>";
		echo "alert('ลบข้อมูลสำเร็จ');";
		echo "window.location='userForAdmin.php';";
		echo "</script>";
		}

?>