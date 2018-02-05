<?php
session_start();
if (isset($_SESSION['id']))
{
printf ('
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intranet e-Evaluation Portal</title>
    <link rel="icon" href="../icon.png">
    <!--<script type="text/javascript" src="jquery-1.8.2.js"></script>-->
    <script type="text/javascript" src="../jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../jquery-ui.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src="../js/bootstrap.js"></script>
    <link rel="stylesheet" href="../ctm.css">
    <link rel="stylesheet" href="1.css">
    
</head>

<body>
<a  href="../index.php">
<img src = "../icon.png" style="width:130px; height: 125px;">
</a> 


<div class="customDiv" style="height: 115px; margin-inside:10px; float: right;  min-width:250px;">
<h2 style="color:dodgerblue; font-family:\'Apple Symbols\'; ">%s</h2>
<form action="logout.php" method="get">
<button class="btn btn-danger" type="submit" name="submit" style="float: left; margin-left: 20px; margin-top:4px;">Log-Out</button>
</form>
<button class ="btn btn-success" onclick="window.location.href= \'profile.php\'">My profile</button>
</div>
<br> 
<h1 id = "logoText" style="width:1000px auto;">Intranet e-Evaluation Portal</h1>
<div class="container">
    
',htmlspecialchars($_SESSION['studentName']));

if ($_SESSION['sem'] == 5)
{
    echo " <div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow:auto; overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem5/501.php'>
       <h2 class='subjectTitle'>Bca-501</h2> 
       <img src='../sub_icon/Sem_5%20/bca501.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Internet Programming <br>using JAVA</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem5/502.php'>
       <h2 class='subjectTitle'>Bca-502</h2> 
       <img src='../sub_icon/Sem_5%20/bca502.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Web Technologies – II</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem5/503.php'>
       <h2 class='subjectTitle'>Bca-503</h2> 
       <img src='../sub_icon/Sem_5%20/bca503.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Emerging Technologies and Tools – I</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem5/504.php'>
       <h2 class='subjectTitle'>Bca-504</h2> 
       <img src='../sub_icon/Sem_5%20/bca504.png' class='sub_ic' style='width:200px;'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Computer Networks-II</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
<div class='col-md-2'></div>
       <div class='col-md-4' style='margin-left: 75px;'>
       
       <div class='subjectdiv' >
        <a href='../subject/bca505.php'>
       <h2 class='subjectTitle'>Others</h2> 
       <img src='../sub_icon/others.png' class='sub_ic'>
             <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Subjects from <br>other semesters</h3>

       </a>
</div>
</div>
</div>
        </div>
        
        </div>
        <div class=\"col-md-1\">
        </div>
        </div> ";
}
elseif ($_SESSION['sem']==3)
{
    echo "<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow: auto;overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem3/301.php'>
       <h2 class='subjectTitle'>Bca-301</h2> 
       <img src='../sub_icon/Sem_3/bca301.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>OS & Data structure</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem3/302.php'>
       <h2 class='subjectTitle'>Bca-302</h2> 
       <img src='../sub_icon/Sem_3/bca302.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -1px;font-family:\'Source Code Pro\''>Database Management System-I II</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem3/303.php'>
       <h2 class='subjectTitle'>Bca-303</h2> 
       <img src='../sub_icon/Sem_3/bca303.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>GUI Programming ON <br>.NET platform</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
      <a href='../subject/sem3/304.php'>
       <h2 class='subjectTitle'>Bca-304</h2> 
       <img src='../sub_icon/Sem_3/bca304.png' class='sub_ic' style='width:200px;'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Processor Architecture <br>& Utility</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem3/305.php'>
       <h2 class='subjectTitle'>Bca-305</h2> 
       <img src='../sub_icon/Sem_3/bca305.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Software Project <br>Management</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/bca505.php'>
       <h2 class='subjectTitle'>Others</h2> 
       <img src='../sub_icon/others.png' class='sub_ic'>
             <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Subjects from <br>other semesters</h3>

       </a>
</div>
</div>
</div> ";
}
elseif ($_SESSION['sem']==1)
{
    echo "<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow: auto;overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem1%20/101.php'>
       <h2 class='subjectTitle'>Bca-101</h2> 
       <img src='../sub_icon/Sem_1/bca101.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>Programming in “C”</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem1%20/102.php'>
       <h2 class='subjectTitle'>Bca-102</h2> 
       <img src='../sub_icon/Sem_1/bca102.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>Office Automation Tools</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem1%20/103.php'>
       <h2 class='subjectTitle'>Bca-103</h2> 
       <img src='../sub_icon/Sem_1/bca103.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>Computer Organization</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem1%20/104.php'>
       <h2 class='subjectTitle'>Bca-104</h2> 
       <img src='../sub_icon/Sem_1/bca104.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -1px;font-family:\'Source Code Pro\''>Fundamental Maths for Computer Science</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem1%20/105.php''>
       <h2 class='subjectTitle'>Bca-105</h2> 
       <img src='../sub_icon/Sem_1/bca105.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Communication Skills-I</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/bca505.php'>
       <h2 class='subjectTitle'>Others</h2> 
       <img src='../sub_icon/others.png' class='sub_ic'>
              <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Subjects from <br>other semesters</h3>

       </a>
</div>
</div>
</div> ";
}
elseif ($_SESSION['sem']==2)
{
    echo "<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow: auto;overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem2/201.php'>
       <h2 class='subjectTitle'>Bca-201</h2> 
       <img src='../sub_icon/Sem_2/bca201.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>Database Management System-I</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem2/202.php'>
       <h2 class='subjectTitle'>Bca-202</h2> 
       <img src='../sub_icon/Sem_2/bca202.png' class='sub_ic' style='margin-top:-7px' >
       <h3 class='subjectTitle' style='color:#212121; margin-top: 1px;font-family:\'Source Code Pro\''>Object Oriented Programming in  C++</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem2/203.php'>
       <h2 class='subjectTitle'>Bca-203</h2> 
       <img src='../sub_icon/Sem_2/bca203.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>System Analysis <br> and Design</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem2/204.php'>
       <h2 class='subjectTitle'>Bca-204</h2> 
       <img src='../sub_icon/Sem_2/bca204.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -15px;font-family:\'Source Code Pro\''>Computer Oriented Numerical & Statistical Methods</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem2/205.php'>
       <h2 class='subjectTitle'>Bca-205</h2> 
       <img src='../sub_icon/Sem_2/bca205.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Communication Skills-II</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/bca505.php'>
       <h2 class='subjectTitle'>Others</h2> 
       <img src='../sub_icon/others.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Subjects from <br>other semesters</h3>
</a>
</div>
</div>
</div> ";
}
elseif ($_SESSION['sem']==4)
{
    echo "<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow: auto;overflow-x:hidden;'>
       <div class='container'>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem4/401.php'>
       <h2 class='subjectTitle'>Bca-401</h2> 
       <img src='../sub_icon/Sem_4/bca401.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>OS internals & <br>
     Programming</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem4/402.php'>
       <h2 class='subjectTitle'>Bca-402</h2> 
       <img src='../sub_icon/Sem_4/bca402.png' class='sub_ic' style='margin-top:-7px' >
       <h3 class='subjectTitle' style='color:#212121; margin-top: 1px;font-family:\'Source Code Pro\''>Web Technologies–I</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem4/403.php'>
       <h2 class='subjectTitle'>Bca-403</h2> 
       <img src='../sub_icon/Sem_4/bca403.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>Multimedia Systems</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem4/404.php'>
       <h2 class='subjectTitle'>Bca-404</h2> 
       <img src='../sub_icon/Sem_4/bca404.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121;margin-top: 1px; font-family:\'Source Code Pro\''>Client Server<br>Applications</h3>
       </a>
</div>
</div>
</div>
<div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
       
        <a href='../subject/sem4/405.php'>
       <h2 class='subjectTitle'>Bca-405</h2> 
       <img src='../sub_icon/Sem_4/bca405.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: -8px;font-family:\'Source Code Pro\''>Computer Networks–I</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/bca505.php'>
       <h2 class='subjectTitle'>Others</h2> 
       <img src='../sub_icon/others.png' class='sub_ic'>
            <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Subjects from <br>other semesters</h3>

       </a>
</div>
</div>
</div> ";
}
elseif ($_SESSION['sem']==6)
{
    echo "<div class=\"row\">
        <div class=\"col-md-1\">
        </div>
        <div class=\"col-md-10\">
        <div class = 'customDiv' style='height:640px; overflow: auto;overflow-x:hidden;'>
       <div class='container'>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <div class='row'>
       
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/sem6/601.php'>
       <h2 class='subjectTitle'>Bca-601</h2> 
       <img src='../sub_icon/Sem_6/bca601.png' class='sub_ic'>
       <h3 class='subjectTitle' style='color:#212121; margin-top: 3px;font-family:\'Source Code Pro\''>Emerging Technologies & tools – II</h3>
       </a>
</div>
</div>
 <div class='col-md-4' style='margin-left: 60px;'>
       <div class='col-md-4' style='margin-left: 60px;'>
       <div class='subjectdiv' >
        <a href='../subject/bca505.php'>
       <h2 class='subjectTitle'>Others</h2> 
       <img src='../sub_icon/others.png' class='sub_ic'>
             <h3 class='subjectTitle' style='color:#212121; margin-top: -3px;font-family:\'Source Code Pro\''>Subjects from <br>other semesters</h3>

       </a>
</div>
</div>
</div>
</div>";
}
}
else
{
    header("Location: ../index.php?StudentHome=AccesssDeined");
    exit();
}

 ?>