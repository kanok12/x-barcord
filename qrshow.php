<?php
include_once './dbConnect.php';
include_once './ganQr.php';

$ganQrCode = new GanQr()

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Document</title>
</head>


<body>
  <br><br><br><center><h1>Qr-code สำหรับติดเอกสาร</center></h1>
  <?php
  $data = $ganQrCode->createQrCode();
  while ($row = $data->fetch()) {
    
  ?>
    <div align ="center"> 

  <img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://35.197.136.53/khidaeng_system/submitFax.php/?c_id=<?php echo $row['c_id']; ?>/&choe=UTF-8" title="<?php echo $row['c_name'] ?>" />

<br>
    <?php echo $row['c_qr']; ?>
    </div>
  <?php } ?>
  <?php
  
$url = 
'https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http://35.197.136.53/khidaeng_system/submitFax.php/?c_id='; 
  
$img = 'logo.png'; 
  
// Function to write image into file
file_put_contents($img, file_get_contents($url));
  
echo "File downloaded!"
  
?>

</body>

</html>