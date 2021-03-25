<?php
require_once('connections/mysqli.php');

session_start();

if ($_SESSION != NULL) {
  header("location:index.php");
  exit();
}

$check_submit = "";

if (isset($_POST["submit"])) {
  $strSQL = "SELECT * FROM tb_member WHERE member_username = '".trim($_POST['member_username'])."'";
  $objQuery = mysqli_query($Connection,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

  if ($objResult) {
    $check_submit = "ชื่อผู้ใช้นี้คนอื่นใช้แล้ว กรอกชื่อผู้ใช้ใหม่";
  }else{
    $strSQL = "INSERT INTO tb_member (member_username,member_password,member_name) VALUES ('".$_POST["member_username"]."','".md5($_POST["member_password"])."','".$_POST["member_name"]."')";
    $objQuery = mysqli_query($Connection,$strSQL);

    header("location:login.php?register=success");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>X-barcode Tracking</title>
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
	   <marquee direction="left">=========================================================================================================================================================================================================================================================</marquee>
    <header>
	
	<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<br>
</center>
<center><h1><legend>X-barcode Tracking ระบบติดตามเอกสารผ่านการสแกน Qr-code </legend></h1></center>

<!-- Text input-->
<center><div class="form-group">


   <center>
    <!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="username">username</label>  
  <div class="col-md-6">
  <input id="username" name="username" type="text" placeholder="กรอกชื่อ  username" class="form-control input-md">
    
  </div>
</div>
<br>
<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="passwordinput">password</label>
  <div class="col-md-6">
    <input id="passwordinput" name="passwordinput" type="password" placeholder="กรอก password" class="form-control input-md">
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">ชื่อ นามสกุล</label>  
  <div class="col-md-6">
  <input id="textinput" name="textinput" type="text" placeholder="กรอกชื่อ-นามสกุล" class="form-control input-md">
    <br>
  </div>
</div>
<br>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="A">เลือกแผนก</label>
  <div class="col-md-5">
    <select id="A" name="A" class="form-control">
      <option value="1">การเงิน</option>
      <option value="2">การตลาด</option>
      <option value="3">บัญชี</option>
      <option value="4">บริหาร</option>
    </select>
  </div>
</div>
<br>
<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">สมัคร</button>
    <button id="button2id" name="button2id" class="btn btn-danger">ยกเลิก</button>
  </div>
</div>

</fieldset>
</form>
	  </center>
      <?php echo $check_submit;?>
    </article>
  </section>
  <footer>
  <br>
  <br>
  <br>
    <p>-barcode Tracking ระบบติดตามเอกสารผ่านการสแกน Qr-code| <a href="https://www.khidaeng.com/" style="text-decoration: underline; color: #FFF;">X-barcode Tracking.com</a></p>
  </footer>
  <?php mysqli_close($Connection); ?>
      
</center>
</fieldset>
</form>

      

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
