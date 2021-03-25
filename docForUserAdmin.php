<?php
	session_start();
	
	//var_dump($_SESSION['sid']); exit;

	
	if(empty($_SESSION["member_level"] == "member")){
		echo "<center><h1>ท่านไม่มีสิทธิ์เข้าสู่ระบบ</h1></center>";
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
		exit;
		}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> X-Barcode Tracking </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
  <link href="css/jcarousel.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <!-- Theme skin -->
  <link href="skins/default.css" rel="stylesheet" />
  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Flattern
    Theme URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <!-- <li><strong>เว็บไซต์ Super Special Amazing Train พร้อมให้บริการจองตั๋วรถไฟ ที่ดีที่สุดในไทย!!!</strong></li>
              <li>สำนักงานตั้งอยู่ที่ ดวงจันทร์ ซอย12 ข้างดาวหางฮันแน่</li>
              <li>Call us <i class="icon-phone"></i> (123) 456-7890</li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container ">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
              <ul>
              	<li><a href="#" data-toggle="modal"><i class="icon-user"></i><?php echo "ยินดีต้อนรับคุณ ".$_SESSION['member_name'];?></a></li>
                <li><a href="docDetailUser.php">จำนวนเอกสารภายในองค์กร</a></li>
                <!-- <li><a href="user.php">รายชื่อสมาชิกภายในองค์กร</a></li> -->
                 <!--<li><a href="admin.php">รายชื่อแอดมินภายในองค์กร</a></li>-->
                <li><a href="logout.php?a">ออกจากระบบ</a></li>
              </ul>
            </div>
            
            <!-- Signup Modal -->
            
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <h1></h1>
				<a href="indexUser.php"><img src="images/kkk.jpg" alt=""/></a>
            </div>
          </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="indexUser.php"><img src="images/X-Barcord tracking (1).jpg" alt=""/></a>
			  </div>   
            </div>
			<div class="form-group" align="right">
			<label class="col-md-4 control-label" for="textinput">ค้นหาข้อมูลเอกสาร</label>
  				<div class="col-md-4">
  			<input type ="text" name="kw" autofocus>
  </div>
</div>

<!-- Button -->
<div class="form-group" align='right'>
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">ค้นหา</button>
  </div>
	</div>
			<marquee direction="left">========================================================================================================================================================================================================================================================================================================================================</marquee>
          </div>
		  
          
           <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                   <th><center>รหัสเอกสาร</center></th>
                   <th><center>ชื่อเอกสาร</center></th>
                   <th><center>แผนก</center></th>
				   <th><center>จัดการฐานข้อมูล</center></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th><center>รหัสเอกสาร</center></th>
                   <th><center>ชื่อเอกสาร</center></th>
                   <th><center>แผนก</center></th>
                   <th><center>จัดการฐานข้อมูล</center></th>
                  </tr>
                </tfoot>
                </tbody>
<?php
	include_once('connectdb.php');

	$kk = $_POST['k'];
	
	$sql = "SELECT * FROM `c_tqr` ";
	$result = mysqli_query($conn,$sql);
	while($data = mysqli_fetch_array($result)) {
?>
                  <tr>
                    <td><center><?=$data['c_id'];?></center></td>
                    <td><center><?=$data['c_qr'];?></center></td>
					<td><center><?=$data['member_Dev'];?></center></td>
                    <td><center><a href="updateDocUser.php?id=<?=$data['trainid'];?>" class="btn btn-info">แก้ไข</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <!--<a href="deleteDocDetailUser.php?id=<?=$data['trainid'];?>" onClick="return confirm('ยินยันการลบ?');" class="btn btn-danger">ลบ</a>--></center></td>
                  </tr>
<?php } ?>
                </tbody>
              </table>
            </div>
		  <marquee direction="right">========================================================================================================================================================================================================================================================================================================================================</marquee>
          </div>
    </header>
	 
					 		
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; X-Barcode Tracking </span>
                </p>
                <div class="credits">
                <marquee direction="left">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</marquee>
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">X-Barcode Tracking</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
    <!-- end header -->
    <!-- end header -->
   
>    
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/jcarousel/jquery.jcarousel.min.js"></script>
  <script src="js/jquery.fancybox.pack.js"></script>
  <script src="js/jquery.fancybox-media.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/jquery.nivo.slider.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/jquery.ba-cond.min.js"></script>
  <script src="js/jquery.slitslider.js"></script>
  <script src="js/animate.js"></script>

  <!-- Template Custom JavaScript File -->
  <script src="js/custom.js"></script>

</body>
</html>
