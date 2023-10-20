<?php
 class msg extends control
 {
   private $name;
   private $email;
   private $subject;
   private $msg;

   public function __construct($name,$email,$subject,$msg)
   {
     $this->name =$name;
     $this->email=$email;
     $this->subject=$subject;
     $this->msg=$msg;
   }
   public function Clientmsg()
   {
     $this-> writemsg($this->name,$this->email,$this->subject,$this->msg);
   }
 }
