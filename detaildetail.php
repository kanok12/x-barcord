
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
              <a href="index.php"><img src="images/kkk.jpg" alt=""/></a>
          </div>
          
    <marquee direction="left">=========================================================================================================================================================================================================================================================</marquee>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                
 ==================================================================================================================================================================================================================================================================================================================================================================================</marquee>
        </div>
		

</body>
ขั้นตอนที่ 1 
เข้าสู่ระบบเพื่อใช้งาน โดยการกรอก Username และ Password<br>
ขั้นตอนที่ 2
เลือกใช้งานฟังค์ชั่น สร้างQR-code โดยใช้ฟังค์ชั่น "สร้างเอกสาร" เพื่อใช้ในการติดตามเอกสารโดย QR-code<br>
ขั้นตอนที่ 3
ใช้โทรศัพท์เพื่อสแกน QR-code เพื่อเก็บข้อมูลสำหรับการแสดงการติดตามเอกสาร<br>
ขั้นตอนที่ 4
จัดการข้อมูลเอกสารทั้งหมดในกรณีที่มีปัญหาที่ฟังค์ชั่น "แก้ไงเอกสาร"
</body>
</html>
