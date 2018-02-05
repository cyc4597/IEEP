<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>
    <link rel="icon" href="icon.png">
    <!--<script type="text/javascript" src="jquery-1.8.2.js"></script>-->
    <script type="text/javascript" src="jquery-1.11.3.js"></script>
    <script type="text/javascript" src="jquery-ui.min.js"></script>
    <link rel="stylesheet" href="jquery-ui.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="sty.css">
    <script src="coustom.js"></script>
</head>
<body>
<div class = "logo">
    <a href="index.php">
        <img src="icon.png" height="145px" style="margin-top:8px;" >
    </a>
</div>
<div class="container">
    <h1 id = "logoText">Intranet e-Evaluation Portal</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="customDiv" style="height: 270px; margin-top: 30px;">
<form name="studentLogin" method = "post" action = "lgin.php" onsubmit = "return validate ()">
                    <h1 class="formHeading">Student</h1>

                    <div class="input-group" style = "padding:4px;" id="std_LoginId">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control" type="email" name = "studentId" placeholder="Email-Id" id ="stdLoginId">
                    </div>
                    <br>
                    <div class="input-group" style = "padding:4px;" id="std_LoginPass">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                        <input class="form-control" type="password" placeholder="Password" name="pass" id="stdLoginPass">
                    </div>
                    <br>

                    <button type="submit" class="btn btn-warning" id = "logInSubmit" name = "submit">Let me in >> </button>
                </form>

            </div>
            <br>
            <br>
            <div class="customDiv" style="height: 270px;">
                <form action="pLogin.php" method="post" >

                    <!--

                    Log-in form for professor

                    empId
                    Ppass


                    submit to :-  xx
                    -->
                    <h1 class="formHeading">Professor</h1>

                    <div class="input-group" style = "padding:4px;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control" type="text" name = "empId" placeholder="Employee Id">
                    </div>
                    <br>
                    <div class="input-group" style = "padding:4px;">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                        <input class="form-control" type="password" placeholder="Password" name="Ppass">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-warning" id = "logInSubmit" name = "submit">Let me in >> </button>

                </form>
            </div>
        </div>







        <div class="col-md-1">
            <br>
            <br>
        </div>
        <br>
        <div class="col-md-7" >
            <br>
            <div class="customDiv" style="height:580px; overflow: auto;   margin-left:00px">
                <form class="form-horizontal"  method="post" action="supStd.php" name="signupForm" onsubmit="return validate_signup()">
                    <h1 class="formHeading">Student Sign-up</h1>

                    <div class="input-group" style = "padding:4px;" id = "studentName">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
                        <input class="form-control " type="text" name = "studentName" placeholder="Full Name (As mentioned in MarkSheet)" >
                    </div>
                    <br>
                    <div class="input-group" style = "padding:4px;" id ="_dateOfBirth">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i> </span>
                        <input class="form-control" type="text" name = "dateOfBirth" id = "dateOfBirth" placeholder="Date of birth"pattern="^([a-zA-Z0-9)$"  maxlength="20">
                    </div>
                    <script>
                        $(document).ready(function () {
                            $('#dateOfBirth') .datepicker({
                                changeMonth: true,
                                changeYear: true,
                                dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                                showButtonPanel: true,
                                yearRange: "-40:-12",
                                firstDay: 1,
                                constrainInput: true,
                                dateFormat: 'yy/mm/dd'

                            });
                        });
                    </script>
                    <br>

                    <div class="input-group" style = "padding:4px;" id = "rollNumber">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i> </span>
                        <input class="form-control" type="text" name = "rollNumber" placeholder="Roll Number "  onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;">
                    </div>
                    <br>
                    <div class="input-group" style = "padding:4px;" id = "class">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-book"></i> </span>
                        <Select class="form-control"  name = "class" >
                            <option>Your current Class..........</option>
                            <option>Sem1-A</option>
                            <option>Sem1-B</option>
                            <option>Sem1-C</option>
                            <option>Sem1-D</option>
                            <option>Sem1-E</option>
                            <option>Sem2-A</option>
                            <option>Sem2-B</option>
                            <option>Sem2-C</option>
                            <option>Sem2-D</option>
                            <option>Sem2-E</option>
                            <option>Sem3-A</option>
                            <option>Sem3-B</option>
                            <option>Sem3-C</option>
                            <option>Sem3-D</option>
                            <option>Sem3-E</option>
                            <option>Sem4-A</option>
                            <option>Sem4-B</option>
                            <option>Sem4-C</option>
                            <option>Sem4-D</option>
                            <option>Sem4-E</option>
                            <option>Sem5-A</option>
                            <option>Sem5-B</option>
                            <option>Sem5-C</option>
                            <option>Sem5-D</option>
                            <option>Sem5-E</option>
                            <option>Sem6-A</option>
                            <option>Sem6-B</option>
                            <option>Sem6-C</option>
                            <option>Sem6-D</option>
                            <option>Sem6-E</option>
                            <option>You have Not selected your class.Please Select your class to proceed.</option>

                        </Select>
                    </div>
                   
                    <br>
                    <div class="input-group" style = "padding:4px;" id = "emailId">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i> </span>
                        <input class="form-control" type="email" name = "emailId" placeholder="E-mail Id (personal)" >
                    </div>
                    <br>
                    <div class="input-group" style = "padding:4px;" id="phoneNumber">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i> </span>
                        <input class="form-control" type="tel" name = "phoneNumber" placeholder="Mobile-Number (personal)"  onkeypress="return IsNumeric(event);" onpaste="return false;" ondrop = "return false;" >
                    </div>
                    <br>


                    <div class="input-group" style = "padding:4px;" id = "pass">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                        <input class="form-control" type="password" placeholder="Password" name="pass" id="password_field">
                    </div>
                    <br>
                    <div class="input-group" style = "padding:4px;" id="Cpass">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                        <input class="form-control" type="password" placeholder="Confirm Password" name="Cpass" id="confirm_password_field" >
                    </div>
                    <br>
                    <input type="submit" class="btn btn-warning" id = "logInSubmit" name="submit">
                    <br>
                </form>
</body>
</html>