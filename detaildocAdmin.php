<?php
	include_once('connectdb.php');
	
	$sql2 = "SELECT * FROM `train` WHERE trainid='".$_GET['id']."'";
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
<br><br>

  <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                   <th><center>วันเวลา</center></th>
                   <th><center>รหัสเอกสาร</center></th>
				   <th><center>ชื่อเอกสาร</center></th>
                   <th><center>แผนก</center></th>
                   <!-- <th>รหัสผ่าน</th> -->
                   <th><center>ชื่อสมาชิกที่สแกน QR-code</center></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th><center>วันเวลา</center></th>
                   <th><center>รหัสเอกสาร</center></th>
				   <th><center>ชื่อเอกสาร</center></th>
                   <th><center>แผนก</center></th>
                   <!-- <th>รหัสผ่าน</th> -->
                   <th><center>ชื่อสมาชิกที่สแกน QR-code</center></th>
                 
                  </tr>
                </tfoot>
                </tbody>
<?php
	include_once('connectdb.php');

	$kk = $_POST['k'];
	
	$sql = "SELECT * FROM `doc_scan` ";
	$result = mysqli_query($conn,$sql);
	while($data = mysqli_fetch_array($result)) {
?>
                  <tr>
				  	<td><center><?=$data['doc_date_time'];?></center></td>
                    <td><center><?=$data['doc_id'];?></center></td>
                    <td><center><?=$data['doc_name'];?></center></td>
					<td><center><?=$data['dpm_name'];?></center></td>
                    <td><center><?=$data['doc_c_name'];?></center></td>
                    <!-- <td><?=$data['apwd'];?></td> -->
                   
                  </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
<!-- Text input-->
<center>
<a class="btn btn-primary" href="updateDocUserforAd.php" role="button">แก้ไขข้อมูลเอกสาร</a>
<a href="docDetailAdmin.php" button id="Cancel" name="Cancel" class="btn btn-danger">ยกเลิก</button></a>
</center>
</body>
</html>