<?php
	session_start();
	
	//var_dump($_SESSION['uid']); exit;

	
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
  <title>X-Barcode Tracking</title>
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
              <li></li>
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
               <!-- <li><a href="#History" data-toggle="modal">ดูประวัติเอกสาร</a></li> -->
			    <li><a href="docDetailUserme.php" data-toggle="modal">ข้อมูลเอกสารของคุณ</a></li>
                <li><a href="logout.php?a" data-toggle="modal">ออกจากระบบ</a></li>
              </ul>
            </div>
			   <div id="History" class="modal styled hide fade" tabindex="-2" role="dialog" aria-labelledby="History" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center><h4 id="mySigninModalLabel">ข้อมูลเอกสาร<strong></strong></h4></center>
              </div>
               <div class="modal-body">
              <table width="535" border="1" cellpadding="0" cellspacing="0"><center>
  <tr>
    <td width="15"><center>รหัสเอกสาร</center></td>
    <td width="50"><center>ชื่อเอกสาร</center></td>
    <td width="50"><center>ชื่อผู้ใช้</center></td>
  </tr>
<?php
	include_once('connectdb.php');
	
	$sql6 = "SELECT * FROM `train` INNER JOIN `tb_member` ON `tb_member`.`member_id`=`train`.`mname`  where `train`.`mname` =
	'".$_SESSION["member_level"] == "member"."'";
	$result6 = mysqli_query($conn,$sql6);
	while($data6 = mysqli_fetch_array($result6)) {
?>
  <tr>
    <td><center><?=$data6['trainid'];?></center></td>
    <td><center><?=$data6['trainname'];?></center></td>
    <td><center><?=$data6['mname'];?></center></td>
  </tr>
<?php } ?>
</table>
            </div>
          </div>
           
          
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <h1></h1>
            <img src="images/kkk.jpg" alt=""/></div>
          </div>
          
    <marquee direction="left">=========================================================================================================================================================================================================================================================</marquee>
     <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h2>X-Barcode Tracking<span class="highlight"><strong><br>

วิธีการใช้งานระบบเบื้องต้น</strong></span> คลิก!</h2>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="detaildetail.php">Search</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
			  
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <a href="test1.php"><div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>สร้าง QR-Code</h6>
                    <p>
                     
                    </p>
                    <!--<a href="north.php">คลิก--></a><p></a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <a href="docForUser.php"><div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>แก้ไขเอกสาร</h6>
                    <p>
                     
                    </p>
                    <!--<a href="Northeastern.php">คลิก--></a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <a href="scanDoc.php"><div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>สแกนเอกสาร</h6>
                    <p>
                     
                    </p>
                    <!--<a href="South.php">คลิก--></a>
                    
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <a href="docDetailUser.php"><div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>เอกสารในองค์กรทั้งหมด</h6>
                    <p>
                      
                    </p>
                    <!--<a href="about.php">คลิก--></a>
                  </div>
					
                </div>
              </div>
            </div>
			<marquee direction="right">
 ==================================================================================================================================================================================================================================================================================================================================================================================</marquee>
					 		
          </div></div></div></div>
		  
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
                  Designed by <a href="https://bootstrapmade.com/"> X-Barcode Tracking </a>
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
        <!-- divider -->
       
        <!-- end divider -->
        <!-- Portfolio Projects -->
      
        <!-- End Portfolio Projects -->
        <!-- divider -->
        
    </section>

    </footer>
			
    
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
