<?php
if (isset($_POST['submit']))
{
  $clientName = $_POST['userName'];
  $myEmail = "cyber.ms.mamabolo@gmail.com";
  $from =$_POST['userEmail'];
  $subject = $_POST['subject'];
  $subject2 = "Your Message Submitted Successfully";//this is for client
  $message = "Client Name: " .$clientName."Wrote the following Message"."\n\n".$_POST['message'];
  $message2 = "Dear ".$clientName. "\n\n"."Thank you for contacting us! we'll get back to you shortly";//this is for sender
  $header ="From: ". $from;//user entered email address
  $header2 ="From: ".$myEmail; //this will receive to client
  $result = mail($myEmail,$subject,$message,$header);//send email to website owner
  $result2 = mail($from,$subject2,$message2,$header2);//send email to user as well
  if ($result)
   {//if email is submitted successfully
    echo '<script type="text/javascript">alert("Message was sent successfully, we will contact you shortly")</script>';
  }else
   {
    echo '<script type="text/javascript">alert("submission failed! try again later")</script>';
  }

  /*include "../classes/dbConnection.php";
  include "../classes/control.php";
  include "../classes/clientMsg.php";
  $client = new msg($_POST['userName'],$_POST['userEmail'],$_POST['subject'],$_POST['message']);
  $client->Clientmsg();*/
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Taola</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../style/contact.css">
  </head>
  <body>
    <header>
      <section class="section-logo">
           <img   src="../images/logo2.jpg" style="width:120px;height:100px;margin-top:-38px;" alt="Taola-Consulting">
          <div class="Logoname">
            <a href="../index.php"><p>TAOLA CONSULTING(PTY)LTD</p></a>
          </div>
      </section>
      <section class = "section-nav">
           <nav>
             <ul>
              <li><a href = "../index.php">Home</a></li>
              <li><a href = "about.php">About Us</a></li>
              <li><a href = "#">Services</a>
                <ul>
                   <li><a href = "accounting.php">Accounting Division</a></li>
                   <li><a href = "tax.php">Taxation Division</a></li>
                   <li><a href = "audit.php">Internal Audit Division</a></li>
                 </ul>
              </li>
              <li><a href = "contact.php">Contact</a></li>
             </ul>
           </nav>
      </section>
    </header>

    <h1 style="text-align:center;color:white;font-size:30px;padding-top:10px;">Contact Us</h1>
  <h1 style="color:white; padding-left:123px;padding-top:25px;">GET IN TOUCH WITH US</h1><br>
   <form class="form-msg" action="" method="post">
       <input style="width:300px;height:30px;" type="text" name="userName" value="" placeholder="NAME">
       <input  style="width:300px;height:30px;" type="text" name="userEmail" value="" placeholder="EMAIL"> <br><br>
       <input  style="width:612px;height:30px;" type="text" name="subject" value="" placeholder="SUBJECT"><br><br>
       <textarea name="message" rows="8" cols="80"style=" width:614px;height:100px;" placeholder="WRITE MESSAGE"></textarea><br><br>
       <button  class="send" type="submit" name="submit">Click to send message</button><br>


       <?php

          if (isset($_GET['insert']))
          {
            if ($_GET['insert']=="success")
             {
               ?>
              <p style="color:red;padding-top:10px;">you successfully sent message to us,  keep checking your email for our feedback, Thank you.</p>
        <?php    }
            elseif ($_GET['insert']=="fail")
            {
              ?>
             <p style="color:red;padding-top:10px;">sorry message not send , our engineer they still updating the system</p>
            <?php  }
          }
        ?>
   </form>
   <article class="contactdetails">
     <div class="img-1">
     <img style="width:40px;height:40px; border-radius:60px;margin-left:0px;" src="../images/adress.jpg" alt="Taola-address">  <br><br><br><br><br>
   </div>
     <div class="detail-1">
       44 Bendor Ridge<br>
       outspan, drive<br>
       Polokwane,0700
     </div><br><br><BR><br><br><BR><br>
   <div class="img-2">
    <img style="width:40px;height:40px; border-radius:60px;" src="../images/phone3.jpg" alt="taola-phone">   <br><br><br><br><br>
  </div>
  <div class="detail-2">
    +27780285042 <br>
    +27761388498
  </div></div><br><br><BR><br><br><BR><br>
  <div class="img-3">
      <img style="width:40px;height:40px; border-radius:60px;" src="../images/email.png" alt="taola-email">
   </div>
   <div class="detail-3">
     motswane.j@gmail.com <br>
   </div>
   </article>
  <footer class="footer-bottom">
          <section class="section-footer">
            <article class="articleFindus">
              <h1>FIND US</h1> <br>
              <p> South Africa <br>
                  Limpopo <br>
                  Polokwane <br>
                  44 Bendor Ridge<br>
                  outspan, drive<br>
                  Polokwane,0700 <br>
              </p>
               <p></p>
            </article>
            <article class="mediaAccess">
              <h1>FOLLOW US ON</h1><br>
              <a href="#"> <img style="width:40px;height:40px; border-radius:60px;margin-left:0px;" src="../images/twitterCircle.png" alt="TwitterProfile"></a>
              <a href="#"> <img style="width:40px;height:40px; border-radius:60px;" src="../images/in.png" alt="linkedInProfile"></a>
              <a href="#"> <img style="width:40px;height:40px; border-radius:60px;" src="../images/facebooklogo2.jpg" alt="facebookProfile"></a>
            </article>
          </section>
  </footer>
  </body>
</html>
