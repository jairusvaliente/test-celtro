<?php
require_once __DIR__ . '/vendor/autoload.php';

$fmane=$_POST['fname'];
$lmane=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

$mpdf =new \Mpdf\Mpdf();
$data='';
$data .='<h1>Your Details</h1>';
$data .='<strong>First Name</strong>' .$fmane. '<br />';
$data .='<strong>Lirst Name</strong>' .$lmane. '<br />';
$data .='<strong>E-mail</strong>' .$email. '<br />';
$data .='<strong>Phone</strong>' .$phone. '<br />';

if($message){

    $data .='<br /><strong>Message</strong>' .$message. '<br />';
}

$mpdf ->WriteHTML($data);

$mpdf -> Output('mypdf.pdf','D');