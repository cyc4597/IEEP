<html>
<body>
<br>
<br>
<br>
<?php
/**
 * Created by chirag chatwani
 * Date: 21/08/17
 * Time: 9:31 PM
 */
if (isset ($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST")
{
    include_once "db.inc.php";
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

$emailId = $_POST['emailId'];
$_emailId= mysqli_real_escape_string($conn,$emailId);

$emailId_parent = $_POST['emailId_parent'];
$_emailId_parent= mysqli_real_escape_string($conn,$emailId_parent);

$phoneNumber = $_POST['phoneNumber'];
$_phoneNumber= mysqli_real_escape_string($conn,$phoneNumber);

$phoneNumber_parent = $_POST['phoneNumber_parent'];
$_phoneNumber_parent= mysqli_real_escape_string($conn,$phoneNumber_parent);

$pass = $_POST['pass'];




    // include_once "signup.vars.db.php";

    if (empty($studentName)||empty($dateOfBirth)||empty($enrollmentNumber)||empty($rollNumber)||empty($sem)||empty($divison)||empty($emailId)||empty($emailId_parent)||empty($phoneNumber)||empty($phoneNumber_parent) || empty($pass) )
    {
      header("Location: index.php?signup=empty-Field");
      exit ();
    }

    else 
    {

      $vsql = "SELECT * FROM student_information WHERE emailId = '$_emailId' ";
$result = mysqli_query($conn, $vsql);
$result_check = mysqli_num_rows($result);
if ($result_check > 0)
{
  header("Location: index.php?signup=emailtaken");
  exit ();

}
else {

$vsql = "SELECT * FROM student_information WHERE phoneNumber = '$_phoneNumber' ";
$result = mysqli_query($conn, $vsql);
$result_check = mysqli_num_rows($result);
if ($result_check > 0)
{
  header("Location: index.php?signup=phoneNumbertaken");
  exit ();

}
else 
{
  $sql = "INSERT INTO student_information(`professor_id`, `fname`, `lname`, `mname`, `honorfics`, `email`, `phone`, `password`) VALUES (NULL, '$_studentName', '$_dateOfBirth', '$_enrollmentNumber', '$_rollNumber', '$_sem', '$_divison', '$_emailId', '$_emailId_parent', '$_phoneNumber', '$_phoneNumber_parent', '$pass') ";
  if ($conn->query($sql) === TRUE) {
    header("Location: index.php?signup=sucessfull");
    exit ();
} else {
      $RR = mysqli_errno($conn);
      echo $RR;
}
}
}
    }
}
else
{
 header("Location: index.php?signup=Acessforbidden");
 exit ();
}
 ?>
</body>
</html>

