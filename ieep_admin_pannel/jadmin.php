<?php
session_start();
if ($_SESSION['adminid']=='jadmin')
{

}
else
{
    header("Location: 198791AdminXlogin.html?AdminLogin=AccessDenied");
    exit();
}
?>

