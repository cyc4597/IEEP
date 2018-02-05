<?php
session_start ();
if (isset ($_POST ['submit'])&& $_SERVER["REQUEST_METHOD"] == "POST")
{
    include_once "db.inc.php";
    $id = $_POST ['empId'];
    $password = $_POST ['Ppass'];
    if (empty($id) || empty($password))
    {
        header("Location: index.php?FacultyLogin=EmptyVariable");
        exit();
    }
    else {
        $sql = "SELECT * FROM prof_information WHERE prof_login_id = '$id' ";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check > 0)
        {
            if ($raw = mysqli_fetch_assoc($result))
            {
                if (password_verify ($password,$raw['password']))
                {
                  $prof_name = $raw['honorfics']." ".$raw['fname']." ".$raw['lname'];
                  echo $prof_name;

                }
                else
                {
                  header ("Location: index.php?FacultyLogin=passwordIncorrect");
                  exit();
                }

            }
        }
        else
        {
          header("Location: index.php?FacultyLogin=YOUR_profID_doesnot_exit");
          exit();
        }


    }


}
else {
    header ("Location: index.php?FacultyLogin=AccessDenied");
    exit();
}

?>
