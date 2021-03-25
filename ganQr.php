<?php

class GanQr extends ConnectDatabase
{

  public function createQrCode()
  {
    try {

      $stmt = $this->connect()->query("SELECT * FROM c_tqr");
      return $stmt;
    } catch (Exception $e) {
      echo 'Message: ' . $e->getMessage();
    }
  }

  public function cid($cid)
  {
    try {

      $stmt = $this->connect()->query("SELECT * FROM c_tqr WHERE c_id = '$cid' ");
      return $stmt;
    } catch (Exception $e) {
      echo 'Message: ' . $e->getMessage();
    }
  }

  public function checkIn($cid)
  {
    try {
      $stmt = $this->connect()->prepare("UPDATE c_tqr SET sid=? WHERE c_id=?");
      $stmt->execute(['2', $cid,]);
    } catch (Exception $e) {
      echo 'Message: ' . $e->getMessage();
    }
  }
  
}
