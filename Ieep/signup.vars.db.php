<?php
/**
 * Created by PhpStorm.
 * User: chiragchatwani
 * Date: 12/09/17
 * Time: 10:44 AM
 */
$studentName = $_POST['studentName'];
$_studentName = mysqli_real_escape_string($conn,$studentName);

$dateOfBirth = $_POST ['dateOfBirth'];
$_dateOfBirth = mysqli_real_escape_string($conn,$dateOfBirth);


$enrollmentNumber = $_POST ['enrollmentNumber'];
$_enrollmentNumber = mysqli_real_escape_string($conn,$enrollmentNumber);

$rollNumber = $_POST ['rollNumber'];
$_rollNumber = mysqli_real_escape_string ($conn,$rollNumber);

$sem =  substr($_POST['class'],3,1);
$_sem = mysqli_real_escape_string($conn,$sem);

$divison = substr($_POST['class'],-1,1);
$_divison = mysqli_real_escape_string($conn,$divison);

$adLine1 = $_POST['adLine1'];
$_adLine1= mysqli_real_escape_string($conn,$adLine1);

$adLine2 = $_POST['adLine2'];
$_adLine2= mysqli_real_escape_string($conn,$adLine2);

$adLine3 = $_POST['adLine3'];
$_adLine3= mysqli_real_escape_string($conn,$adLine3);

$country = $_POST['country'];
$_country = mysqli_real_escape_string($conn,$country);

$state = $_POST['state'];
$_state= mysqli_real_escape_string($conn,$state);

$city = $_POST['city'];
$_city= mysqli_real_escape_string($conn,$city);

$pincode = $_POST['pinCode'];
$_pinCode= mysqli_real_escape_string($conn,$pincode);

$emailId = $_POST['emailId'];
$_emailId= mysqli_real_escape_string($conn,$emailId);

$emailId_parent = $_POST['emailId_parent'];
$_emailId_parent= mysqli_real_escape_string($conn,$emailId_parent);

$phoneNumber = $_POST['phoneNumber'];
$_phoneNumber= mysqli_real_escape_string($conn,$phoneNumber);

$phoneNumber_parent = $_POST['phoneNumber_parent'];
$_phoneNumber_parent= mysqli_real_escape_string($conn,$phoneNumber_parent);
