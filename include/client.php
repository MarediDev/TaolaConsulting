<?php
if (!isset($_POST['submit']))
{
  header("location: ../frontpages/contact.php");
}else
{
  include "../classes/dbConnection.php";
  include "../classes/control.php";
  include "../classes/clientMsg.php";
  $client = new msg($_POST['userName'],$_POST['userEmail'],$_POST['subject'],$_POST['message']);
  $client->Clientmsg();
}
