<?PHP
if (isset ($_GET['submit']))
{
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    exit();
}
else
{
    header("Location: ../index.php?Student_logout=AccessDenied");
    exit();

}
