<!DOCTYPE html>
<?php include('connectdb.php'); ?>
<html>

<head>
    <title>X barcode Tracking</title>
    <link href="bootstrap.css" rel="stylesheet" type="text/css">
</head>

<body>
<br>
        <br><br>

    <fieldset>
        <!-- Form Name -->
        <center>
        
        <legend>สร้างเอกสาร</legend>
        <form class="form-horizontal" method="POST" enctype="">
            <!-- Text input-->
            <div class="form-group">
            <br>
        
                <label class="col-md-4 control-label" for="textinput">ชื่อ-สกุล</label>
                <div class="col-md-4">
                    <input id="textinput" name="name" type="text" placeholder="กรอกชื่อ-สกุล" class="form-control input-md">

                </div>
            </div>
            <br>
        
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="textinput">ชื่อเอกสาร</label>
                <div class="col-md-4">
                    <input id="textinput" name="namefax" type="text" placeholder="กรอกชื่อเอกสาร" class="form-control input-md">

                </div>
            </div>
            <br>
            <!-- Button (Double) -->
            <center><div class="form-group">
                <label class="col-md-4 control-label" for="button1id"></label>
                <div class="col-md-8">
                    <button id="button1id" name="submit" class="btn btn-primary">ยืนยัน</button>
                    
                    <a href="indexUser.php" button id="Cancel" name="Cancel" class="btn btn-danger">ยกเลิก</button></a>
                </div>
            </div>
        </form>
    </fieldset>
    </center>
    <?php
    if (isset($_POST['submit'])) {

        $sql = "INSERT INTO `c_tqr`(`c_id`, `c_name`, `c_qr`, `sid`) VALUES
                                            (NULL,'{$_POST['name']}','{$_POST['namefax']}','1')";
        $result = mysqli_query($conn, $sql);
        
        echo "<script>";
        echo "alert('ได้รับข้อมูลแล้ว!');";
        echo "window.location='qrshow.php';";
        echo "</script>";
    }
    print_r($sql);
    ?>




</body>

</html>