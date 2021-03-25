<?php
	include_once('connectdb.php');
	
	$sql2 = "SELECT * FROM `tb_member` WHERE mid ='".$_GET['id']."'";
	$result2 = mysqli_query($conn,$sql2);
	$data2 = mysqli_fetch_array($result2);
		
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>X-Barcode Tracking</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<br>
<br>
<br>
<br>

<form class="form-horizontal" form method="post" action="" enctype="multipart/form-data">
<fieldset>
<center><legend>แก้ไขข้อมูลสมาชิก</legend></center>
<center><div class="form-group">
<br><br>


<label class="col-md-4 control-label" for="a">ลำดับสมาชิก</label>
  <div class="col-md-4">
  <input id="a" name="a" type="text" placeholder="" class="form-control input-md" required value="<?=$data2['mid'];?>" readonly>
    
  </div>
</div>
<br>

<!-- Text input-->
<div align="center" class="form-group">
  <label class="col-md-4 control-label" for="b">ชื่อสมาชิก</label>
  <div class="col-md-4">
  <input id="b" name="b" type="text" placeholder="" class="form-control input-md" required value="<?=$data2['mname'];?>">
    <br>

  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="A">เลือกแผนก</label>
  <div class="col-md-4">
    <select id="A" name="A" class="form-control">
      <option value="1">การเงิน</option>
      <option value="2">การตลาด</option>
      <option value="3">บัญชี</option>
      <option value="4">บริหาร</option>
    </select>
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="b">รหัสสมาชิก</label>  
  <div class="col-md-4">
  <input id="c" name="c" type="text" placeholder="" class="form-control input-md" required value="<?=$data2['muser'];?>">
    <br>

  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="b">รหัสผ่าน</label>  
  <div class="col-md-4">
  <input id="d" name="d" type="text" placeholder="" class="form-control input-md" required value="<?=$data2['mpwd'];?>">
    <br>

  </div>
</div>
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
  
    <button id="Submit" name="Submit" class="btn btn-info">บันทึก</button> &nbsp;&nbsp;&nbsp;
    <a href="userForAdmin.php" button id="Cancel" name="Cancel" class="btn btn-danger">ยกเลิก</button></a>
  </div>
</div>
</center>
</fieldset>
</form>
<?php
	if(isset($_POST['Submit'])){
		include_once('connectdb.php');
		
		$sql = "UPDATE `member` SET `mname` = '".$_POST['b']."', `muser` = '".$_POST['c']."', `mpwd` = '".$_POST['d']."' WHERE `member`.`mid` = '".$_POST['a']."';";
		mysqli_query($conn, $sql) or die('แก้ไขข้อมูลไม่ได้');
		
		
		
		echo "<script>";
		echo "alert('แก้ไขข้อมูลสำเร็จ');";
		echo "window.location='userForAdmin.php';";
		echo "</script>";
		}

?>
</body>
</html>