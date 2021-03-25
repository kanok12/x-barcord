<?php
require_once('connections/mysqli.php');

session_start();

if ($_SESSION != NULL) {
  session_destroy();
  header("location:index.php");
  exit();
}

$check_submit = "";

if (isset($_POST["submit"])) {
  $strSQL = "SELECT * FROM tb_member WHERE member_username = '".mysqli_real_escape_string($Connection,$_POST['member_username'])."' and member_password = '".mysqli_real_escape_string($Connection,md5($_POST['member_password']))."'";
  $objQuery = mysqli_query($Connection,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

  if (!$objResult) {
	echo "<script>";
	echo "alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง กรุณาตรวจสอบใหม่อีกครั้ง');";
	echo "window.location='index.php';";
	echo "</script>";
  }else{
    $_SESSION["member_username"] = $objResult["member_username"];
    $_SESSION["member_level"] = $objResult["member_level"];
	$_SESSION["member_name"] = $objResult["member_name"];

    if ($objResult["member_level"] == "admin") {
      header("location:indexAdmin.php");
      exit();
    }else{
      header("location:indexUser.php");
      exit();
    }
  }
}

if (isset($_GET["register"])) {
  $register = $_GET["register"];

  if ($register == "success") {
  ?>
  <script type="text/javascript">
    alert("สมัครสมาชิกสำเร็จแล้ว");
  </script>
  <?php
  }
}
?>


      
      <?php echo $check_submit;?>
    </article>
  </section>
  <
  <?php mysqli_close($Connection); ?>

<?php		
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>X-Barcode Tracking</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
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
 
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

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
			  <hr>
                 <!--<li><a href="#mySignup" data-toggle="modal"><i class="icon-user"></i> ลงทะเบียน</a></li>--> 
                <li><a href="#mySignin" data-toggle="modal"><i class="icon-user"></i>เข้าสู่ระบบ</a></li>
				
            <!-- Sign in Modal -->
            <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <center><h4 id="mySigninModalLabel">เข้าสู่ระบบ<strong></strong></h4></center>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" form method="post">
                  <div class="control-group">
                    <label class="control-label" for="inputText">Username</label>
                    <div class="controls">
                      <input type="text" name="member_username" placeholder="Username" autofocus required>
                    </div>
                  </div>
					<div class="control-group">
                    <label class="control-label" for="inputSigninPassword">Password</label>
                    <div class="controls">
                      <input type="password" name="member_password" placeholder="Password" required>
                    </div>
                  </div>
				   <div class="control-group">
					<div class="controls">
                      <input type="Submit" name="submit" class="btn" value="เข้าสู่ระบบ">
					</div>
                    <p class="aligncenter margintop20">
                     ลืม Password? <a href="#myReset" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Reset</a>
                    </p>
                  </div>
                </form>
			   </div>
              </div>



            <!-- end signin modal -->
            
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <h1></h1>
              
				<img src="images/kkk.jpg" alt=""/></a>
            </div>
          </div>
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
	<section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center"><br>
                        <h2 class="text-white mt-0"><font  color="#FF3300">Welcome To X-Barcode Tracking!!</font></h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4">ยินดีต้อนรับสู่เว็บไซต์ติดตามเอกสารผ่านการสแกน QR-Code สำหรับผู้ใช้,องค์กร จะใช้บริการของ X-Barcode Tracking ได้ที่นี่</p><br>
                        
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
                  <a href="qrcode/index.php"><div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>สร้าง QR-Code</h6>
                    <p>
                     
                    </p>
                   <!-- <a href="north.php">คลิก--></a><p></a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                 <a href="docDetailUser.php"><div class="aligncenter icon">
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
                  <a href="docForUser.php"><div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>ตรวจสอบเอกสาร</h6>
                    <p>
                      
                    </p>
                   <!-- <a href="about.php">คลิก--></a>
				   
                  </div>
                </div>
              </div>
            </div>
          </div>
		<marquee direction="right">
 ==================================================================================================================================================================================================================================================================================================================================================================================</marquee>
        </div>
			
        <!-- divider -->
			  </div></div></div></div>
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
		</div>
      </header>
              </p>
            </div>
          </div>
        </div>
      </div>
      
    </footer>
  </div>
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

</body>
</html>
