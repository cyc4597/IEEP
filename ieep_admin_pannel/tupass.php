<?php
session_start();
if ($_POST['u'] == "ieep_jadmin@gmail.com" && $_POST['p']== "jadmin" && isset($_POST['submit']))
{
    $_SESSION ['ja_id'] = "001";
    echo '<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Administrator zone</title>
    <link rel=\"icon\" href=\"icon.png\">
    <!--<script type=\"text/javascript\" src=\"jquery-1.8.2.js\"></script>-->
    <script type=\"text/javascript\" src=\"jquery-1.11.3.js\"></script>
    <script type=\"text/javascript\" src=\"jquery-ui.min.js\"></script>
    <link rel="stylesheet" href=\"jquery-ui.css\" type=\"text/css\" media=\"all\">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src= "js/bootstrap.js"></script>
    <link rel="stylesheet" href= "ctm.css">
    <link rel="stylesheet" href="1.css">
</head>
<body>
<a  href="http://www.bpccs.org">
<img src = "icon.png" style="width:125px; height: 125px;">
</a> 


<div class="customDiv" style="height: 115px; margin-inside:10px; float: right;  min-width:250px; background-color: black">
<h2 style="color:lawngreen; font-family:\'Apple Symbols\'; ">System Administrator</h2>
<form action="logout.php" method="get">
<button class="btn btn-danger" type="submit" name="submit" style=" margin-top:4px;">Log-Out</button>
</form>

</div>
<br> 
<h1 id = "logoText" style="width:1000px auto; background-color: black; border: solid lawngreen 3px;">Intranet e-Evaluation Portal <u style = "font-size: large ;font-family: \'Arial Black\';color:lawngreen">(Admin Pannel)</u></h1>
<div class="container">';

    printf ("<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow:auto; overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='add_faculty/profSignup.php'>
       <img src='add_faculty.png'  style='height: 240px;width: 220px;'>
       <h3 class='subjectTitle'>Add a faculty<br>Member</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href=''>
       <img src='assign_subject.png'  style='height: 220px;width: 220px;'>
       <h3 class='subjectTitle'>Assign subject to <br> a faculty<br> member</h3>
       </a>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../action/test.php'>
       <img src='student_performance_analyze-icon.png'  style='height: 215px;width: 215px; margin-top: 5px;'>
       <h3 class='subjectTitle'>Student<br>Performance <br>analysis</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../action/test.php'>
       <img src='faculty_performance_analysis.png'  style='height: 215px;width: 215px; margin-top: 5px;'>
       <h3 class='subjectTitle'>Faculty<br>Performance <br>analysis</h3>
       </a>
</div>
</div>
</div>
</div>
");



    echo "</body>
</html>";


}
else
{
    header("Location: 198791AdminXlogin.html?login=unsuccessful");
    exit ();
}