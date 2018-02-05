<?php
session_start();
$_SESSION ['sub'] = "403";
?>

<?php
if (isset($_SESSION['id']))
{
    printf ("
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intranet e-Evaluation Portal</title>
    <link rel=\"icon\" href=\"../icon.png\">
    <!--<script type=\"text/javascript\" src=\"jquery-1.8.2.js\"></script>-->
    <script type=\"text/javascript\" src=\"../../jquery-1.11.3.js\"></script>
    <script type=\"text/javascript\" src=\"../../jquery-ui.min.js\"></script>
    <link rel=\"stylesheet\" href=\"../../jquery-ui.css\" type=\"text/css\" media=\"all\">
    <link rel=\"stylesheet\" href=\"../../css/bootstrap.css\">
    <script src=\"../../js/bootstrap.js\"></script>
    <link rel=\"stylesheet\" href=\"../../ctm.css\">
    <link rel=\"stylesheet\" href=\"../../student/1.css\">
</head>
<body>
<a  href=\"../../index.php\">
<img src = \"../../icon.png\" style=\"width:130px; height: 125px;\">
</a> 
<div class=\"customDiv\" style=\"height: 115px; margin-inside:10px; float: right; min-width:250px;\">
<h2 style=\"color:dodgerblue; font-family:\'Apple Symbols\'; \">%s</h2>
<form action=\"../../student/logout.php\" method=\"get\">
<button class=\"btn btn-danger\" type=\"submit\" name=\"submit\" style=\"float: left; margin-left: 20px; margin-top:4px;\">Log-Out</button>
</form>
<button class =\"btn btn-success\" onclick=\"window.location.href= \'profile.php\'\">My profile</button>
</div>
<br> 
<h1 id = \"logoText\" style=\"width:1000px auto;\">Multimedia Systems</h1>
<div class=\"container\">


    
",htmlspecialchars($_SESSION['studentName']));
    echo "<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow:auto; overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../action/study.php'>
       <img src='../study.png'  style='height: 240px;width: 240px;'>
       <h2 class='subjectTitle'>Study</h2>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../action/syllabus.php'>
       <img src='../syllabus.gif'  style='height: 232px;width: 240px;'>
       <h2 class='subjectTitle'>View Syllabus</h2>
       </a>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../action/test.php'>
       <img src='../test.png'  style='height: 220px;width: 220px; margin-top: 15px; margin-left: 19px'>
       <h2 class='subjectTitle'>Take a test</h2>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../action/doubt.php'>
       <img src='../faculty.png'  style='height: 240px;width: 240px;'>
       <h2 class='subjectTitle'>Post a doubt</h2>
       </a>
</div>
</div>
</div>";
}
else
{
    header ("Location: ../index.php?s505=AccessDeinied");
    exit();
}
?>
