<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Intranet e-Evaluation Portal</title>
    <link rel="icon" type="image/png" href="web_icon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom stylesheet link -->
    <link rel="stylesheet" type="text/css" href="1.css">
    <!-- Custom javascript(jquery) Link --> 
  </head>
  <body>
  <a href="index.php">
<div class = "logo"  >
  <img src="icon.png" height="105px" style="margin-top:8px;" >
  <h2 id = "logoText">Intranet e-Evaluation Portal</h2>
  </div>
  </a>


  <div class="container">
      <div class="row">
          <div class="col-md-4">
              <div class="customDiv" style="height: 250px;">
                  <form>
                      <h1 class="formHeading">Log-in Student</h1>
                      <br>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
                          <input class="form-control" type="text" name = "stId" placeholder="Roll-Number (eg:-2015_123)">
                      </div>
                      <br>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                          <input class="form-control" type="password" placeholder="Password" name="Spass">
                      </div>
                      <br>
                      <br>
                      <input type="submit" class="btn btn-warning" id = "logInSubmit">
                  </form>
              </div>
              <br>
              <div class="customDiv" style="height: 250px;">
                  <form>
                  <h1 class="formHeading">Log-in Professor </h1>
                  <br>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i> </span>
                      <input class="form-control" type="text" name = "empId" placeholder="Employee-Id">
                  </div>
                  <br>
                  <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i> </span>
                      <input class="form-control" type="password" placeholder="Password" name="Tpass">
                  </div>
                  <br>
                  <br>
                  <input type="submit" class="btn btn-warning" id = "logInSubmit">
                  </form>
              </div>

          </div>

          <div class="col-mg-7">
              <div class = "customDiv">
                  <form>
                      <h1 class="formHeading">Log-in Professor </h1>
                      <div class="input-group">
                          <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i>
                          </span>
                          <input class="form-control" type="text" name="stName" placeholder="FULL NAME (As written in marksheet)">
                      </div>

                  </form>
              </div>
          </div>
      </div>
  </div>
  
  </body>
</html>