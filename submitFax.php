<?php
include_once './dbConnect.php';
include_once './ganQr.php';

$ganQrCode = new GanQr();

$cid = $_GET['c_id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<style>
  .card {
    display: flex;
    justify-content: center;

  }

  h1 {
    text-align: center;
  }

  .check-in {
    background: #3d3d3d3d;
    margin: 5px;
    padding: 10px 40px 10px 40px;
    border-radius: 10px;
  }

  .check-in:hover {
    background: #1616163d;
  }

  .check-out {
    background: #3d3d3d3d;
    margin: 5px;
    padding: 10px 40px 10px 40px;
    border-radius: 10px;
    ;
  }

  .check-out:hover {
    background: #1616163d;
  }

  .teacher {
    text-align: center;
    background: #1616163d;
    width: 400px;
    padding: 10px;
    margin: auto;
    margin-bottom: 10px;
    border-radius: 30px 0;
  }
</style>

<body>


  <h1>สแกน QR-code</h1>

  <div class='teacher'>
    <?php
    $data = $ganQrCode->cid($cid);
    $row = $data->fetch();
    $status = $row['sid'];
    ?>
    <h3>รหัสเอกสาร <?php echo $row['c_id'] ?></h3>
    <h3>ชื่อ: <?php echo $row['c_name'] ?></h3>
    <h3>ชื่อเอกสาร: <?php echo $row['c_qr'] ?></h3>


  </div>

  <form action="" method="post" class="mb-3">
    <div class="card">
      <button class="check-in" type="submit" name="checkin">
       สแกน
      </button>

    </div>
  </form>
</body>

</html>

<?php
if (isset($_POST['checkin'])) {
  $data = $ganQrCode->checkIn($cid);
  
 
  echo "<script>window.location.href='submitFax.php?c_id=$cid';
  alert('ได้รับข้อมูลแล้ว!');
  </script>";
 
}

?>