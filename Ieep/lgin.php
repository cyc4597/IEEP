<?PHP
session_start();
if (isset ($_POST['submit'])&& $_SERVER["REQUEST_METHOD"] == "POST")
{
    include_once "db.inc.php";
    $studentID = $_POST ['studentId'];
    $password = $_POST ['pass'];

    if (empty($studentID) || empty($password))
    {
        header("Location: index.php?StudentLogin=EmptyVariable");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM student_information WHERE emailID = '$studentID' ";
        $result = mysqli_query($conn,$sql);
        $result_check = mysqli_num_rows($result);

        if ($result_check > 0) {
            if ($raw = mysqli_fetch_assoc($result))
            {
                if ($password == $raw ['password'])
                {
                    print_r ($raw);
                    $_SESSION['id'] = $raw ['id'];
                    $_SESSION['studentName'] = $raw ['studentName'];
                    $_SESSION['dateOfBirth'] = $raw ['dateOfBirth'];
                    $_SESSION['enrollmentNumber'] = $raw ['enrollmentNumber'];
                    $_SESSION['rollNumber'] = $raw ['rollNumber'];
                    $_SESSION['sem'] = $raw ['sem'];
                    $_SESSION['divison'] = $raw ['divison'];
                    $_SESSION['emailId'] = $raw ['emailId'];
                    $_SESSION['emailId_parent'] = $raw ['emailId_parent'];
                    $_SESSION['phoneNumber'] = $raw ['phoneNumber'];
                    $_SESSION['phoneNumber_parent'] = $raw ['phoneNumber_parent'];
                    $_SESSION ['sub'] = "";

                    header("Location: student/home.php?");
                    exit();
                }
                else {
                    header("Location: index.php?StudentLogin=passwordIncorrect");
                }

            }
            else
            {
                header("Location: index.php?Login=UnknownError");
            }

        }
        else {
            header("Location: index.php?StudentLogin=EmailDoesnotExit");
            exit ();
        }
    }
}
else
{
    header("Location: index.php?StudentLogin=AccessDenied");
    exit ();
}

?>