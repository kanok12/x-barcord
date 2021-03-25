<?php
	session_start();
	
	//var_dump($_SESSION['uid']); exit;

	
	if(empty($_SESSION["member_level"] == "member")){
		echo "<center><h1>ท่านไม่มีสิทธิ์เข้าสู่ระบบ</h1></center>";
		echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
		exit;
		}
?>
<head>
  <meta charset="utf-8">
  <title>X-barcode Trackinng</title>
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

<br>
<br>
<br>
<br>

<h1><center>สแกนเอกสารเรียบร้อย</center></h1>
	<br><br>
	<center><img src="images/true.png" alt="" width="365" height="101"/></center>
	<br><br>
	<br><br><br>
	 <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            </div>
	
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
				   <th><center>ชื่อเอกสารก</center></th>
                   <th><center>แผนก</center></th>
                   <!-- <th>รหัสผ่าน</th> -->
                   <th><center>ชื่อสมาชิกที่สแกน QR-code</center></th>
                 
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
				  	<td><center><?=$data['c_time'];?></center></td>
                    <td><center><?=$data['c_id'];?></center></td>
                    <td><center><?=$data['c_qr'];?></center></td>
					<td><center><?=$data['c_dev'];?></center></td>
                    <td><center><?=$data['c_name'];?></center></td>
                    <!-- <td><?=$data['apwd'];?></td> -->
                   
                  </tr>
                  
<?php } ?>
                </tbody>
              </table>
            </div>
			
	<center><h3><a href="indexUser.php">กลับสู่หน้าแรก</a></h3></center>
	<br>
			  
  ==================================================================================================================================================================================================================================================================================================================================================================================</marquee>
				<br>
<br>
	 		
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
                  <span>&copy; X-Barcode Tracking</span>
                </p>
                <div class="credits">
                <marquee direction="left">---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</marquee>
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
					
                  Designed by <a href="https://bootstrapmade.com/">Hoolzen12</a>
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
    <!-- end header --
    >
   
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
