<?php
session_start();
if (isset($_SESSION['ja_id']))
{
    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Faculty Sign-Up</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator zone</title>
    <!--<script type=\"text/javascript\" src=\"jquery-1.8.2.js\"></script>-->
    <script type="text/javascript" src="../jquery-1.11.3.js"></script>
    <script type="text/javascript" src="../jquery-ui.min.js"></script>
    <link rel="stylesheet" href="../jquery-ui.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <script src= "../js/bootstrap.js"></script>
    <link rel="stylesheet" href= "../ctm.css">
    <link rel="stylesheet" href="../1.css">
</head>
<body>
<a  href="http://www.bpccs.org">
    <img src = "../icon.png" style="width:125px; height: 125px;">
</a>


<div class="customDiv" style="height: 115px; margin-inside:10px; float: right;  min-width:250px; background-color: black">
    <h2 style="color:lawngreen; font-family:\'Apple Symbols\'; ">System Administrator</h2>
    <form action="../logout.php" method="get">
        <button class="btn btn-danger" type="submit" name="submit" style=" margin-top:4px;">Log-Out</button>
    </form>

</div>
<br>
<h1 id = "logoText" style="width:1000px auto; background-color: black; border: solid lawngreen 3px;">Intranet e-Evaluation Portal <u style = "font-size: large ;font-family: \'Arial Black\';color:lawngreen">(Admin Pannel)</u></h1>
<div class="container">
    <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
            <div class = \'customDiv\' style=\' margin-top:70px;height:580px; overflow:auto; overflow-x:hidden;\'>
              <form action="profSignup&mail.php" class="form-horizontal" method="post" name="signupForm" id="signupForm" onsubmit="return validate()">
              <br>
                    <h1 class="formHeading" style="color: white; font-size: 52px;">Add-up a faculty Member</h1>
                    <br>
                    <br>
                    <div class="input-group" id="firstName">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control" type="text" name = "firstName" placeholder="First Name" >
                    </div>
                    <br>
                    <div class="input-group" id="lastName">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i> </span>
                        <input class="form-control" type="text" name = "lastName" placeholder="Last Name" >
                    </div>
                    <br>
                    <div class="input-group" id="middleName">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tag"></i> </span>
                        <input class="form-control" type="text" name = "middleName" placeholder="Middle Name">
                    </div>
                    <br>
                    <div class="input-group" id="honf">
                        <span class="input-group-addon"><i class=" glyphicon glyphicon-star"></i> </span>
                       <select class="form-control" name = "honf" >
                           <option>Faculty member\'s prefered honorfic</option>
                           <option>Mr</option>
                           <option>Mrs.</option>
                           <option>Miss</option>
                           <option>Prof.</option>
                           <option>Ast.Prof.</option>
                           <option>Sir</option>
                           <option>Dr.</option>
                           <option>Colonel</option>
                           <option>You have Not selected any honorfics.Please Select your class to honorfic.</option>
                       </select>
                    </div>
                    <br>
                    <div class="input-group"id="email">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                        <input class="form-control" type="email" name = "email" placeholder="E-Mail Id" >
                    </div>
                    
                    <br><div class="input-group"id="phone">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i> </span>
                    <input   class="form-control" type="text" name = "phone" placeholder="Contact Number (mobile only)"  onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;">
                </div>
                    <br>
                    <br>
                    
                    <input  type="submit" class="btn btn-block" style="font-size: x-large; background-color: lawngreen">
                    <script type="text/javascript">
                    var specialKeys = new Array();
                    specialKeys.push(8); //Backspace
                    function IsNumeric(e) {
                        var keyCode = e.which ? e.which : e.keyCode
                        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                        return ret;
                    }
                </script>
                <script>
                 function validate ()
                    {
                        var firstName = document.forms[\'signupForm\'][\'firstName\'].value;
                        if (firstName  === "")
                        {
                            document.getElementById(\'firstName\').classList.add("has-error","has-feedback");
                            document.getElementsByName(\'firstName\')[0].placeholder= "First name is compulsory";
                            document.getElementsByName("firstName")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("firstName").classList.remove("has-error","has-feedback");
                            document.getElementById("firstName").classList.add("has-success","has-feedback");
                        }
                        var lastName = document.forms[\'signupForm\'][\'lastName\'].value;
                        if (lastName  === "")
                        {
                            document.getElementById(\'lastName\').classList.add("has-error","has-feedback");
                            document.getElementsByName(\'lastName\')[0].placeholder= "Last name is compulsory";
                            document.getElementsByName("lastName")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("lastName").classList.remove("has-error","has-feedback");
                            document.getElementById("lastName").classList.add("has-success","has-feedback");
                        }
                        var middleName = document.forms[\'signupForm\'][\'middleName\'].value;
                        if (middleName  === "")
                        {
                            document.getElementById(\'middleName\').classList.add("has-error","has-feedback");
                            document.getElementsByName(\'middleName\')[0].placeholder= "First name is compulsory";
                            document.getElementsByName("middleName")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("middleName").classList.remove("has-error","has-feedback");
                            document.getElementById("middleName").classList.add("has-success","has-feedback");
                        }
                        
                        var email = document.forms[\'signupForm\'][\'email\'].value;
                        if (email  === "")
                        {
                            document.getElementById(\'email\').classList.add("has-error","has-feedback");
                            document.getElementsByName(\'email\')[0].placeholder= "email is compulsory";
                            document.getElementsByName("email")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("email").classList.remove("has-error","has-feedback");
                            document.getElementById("email").classList.add("has-success","has-feedback");
                        }
                        var phone = document.forms[\'signupForm\'][\'phone\'].value;
                        if (phone  === "")
                        {
                            document.getElementById(\'phone\').classList.add("has-error","has-feedback");
                            document.getElementsByName(\'phone\')[0].placeholder= "phone number is compulsory";
                            document.getElementsByName("phone")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("phone").classList.remove("has-error","has-feedback");
                            document.getElementById("phone").classList.add("has-success","has-feedback");
                        }}
                       
</script>
</form>
            </div>
        </div>s
    </div>
</div>

</body>
</html>';
}
else
{
    header("Location: ../198791AdminXlogin.html");
    exit();
}


?>