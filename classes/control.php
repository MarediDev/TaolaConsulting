<?php
class control extends Link
{
  protected function writemsg($name,$email,$subject,$msg)
  {
    $sql = "INSERT INTO client(name,email,subject,message) VALUES(?,?,?,?);";
    $stmt = $this->connect()->prepare($sql);
    if(!$stmt->execute(array($name,$email,$subject,$msg)))
    {
      header("Location: ../frontpages/contact.php?insert=fail");
    }else
    {
      header("Location: ../frontpages/contact.php?insert=success");
    }
  }
}
