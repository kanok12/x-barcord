<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มข้อมูล</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>

<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<center><legend>เพิ่มสมาชิก</legend><center>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="a">ชื่อสมาชิก</label>  
  <div class="col-md-4">
  <input id="a" name="a" type="username" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="b">รหัสผ่าน</label>  
  <div class="col-md-4">
  <input id="b" name="b" type="password" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="b">แผนก</label>  
  <div class="col-md-4">
  <input id="b" name="c" type="dev" placeholder="" class="form-control input-md" required>
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-info">บันทึก</button>
    <a href="userForAdmin.php" button id="Cancel" name="Cancel" class="btn btn-danger">ยกเลิก</button></a>
  </div>
</div>

</fieldset>
</form>

<?php
	if(isset($_POST['Submit'])){
		include_once('connectdb.php');
		
		$sql = "insert into `tb_member` values('".$_POST['username']."', '".$_POST['password']."', '".$_POST['dev']."')";
		//var_dump($sql); exit;
		mysqli_query($conn, $sql) or die('เพิ่มข้อมูลไม่ได้');
		
		echo "<script>";
		echo "alert('เพิ่มข้อมูลสำเร็จ');";
		echo "window.location='userForAdmin.php';";
		echo "</script>";
	}

?>

</body>
</html>