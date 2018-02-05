<?php
session_start();
/**
 * Created by PhpStorm.
 * User: chiragchatwani
 * Date: 21/10/17
 * Time: 8:45 PM
 */
if (isset($_SESSION['ja_id']))
{
    function random_password( $length = 13)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
        $password = substr( str_shuffle( $chars ), 0, $length );
        return $password;
    }
    include_once "db.inc.php";
    $login_id = uniqid("BCA_Prof:");
    $_login_id= mysqli_real_escape_string($conn,$login_id);
    $firstName = $_POST['firstName'];
    $_firstName =  mysqli_real_escape_string($conn,$firstName);
    $lastName = $_POST['lastName'];

    $_lastName =  mysqli_real_escape_string($conn,$lastName);
    $middleName = $_POST['middleName'];
    $_middleName=  mysqli_real_escape_string($conn,$middleName);
    $honf = $_POST['honf'];
    $_honf=  mysqli_real_escape_string($conn,$honf);
    $email = $_POST['email'];
    $_email=  mysqli_real_escape_string($conn,$email);
    $phone = $_POST['phone'];
    $_phone=  mysqli_real_escape_string($conn,$phone);
    $password = random_password(13);
    $hpassword = password_hash($password,PASSWORD_BCRYPT,array('cost' => 14));
    $_password=  mysqli_real_escape_string($conn,$hpassword);
    $arr = get_defined_vars();
    if (empty($firstName)||empty($lastName)||empty($middleName)||empty($honf) ||empty($email)||empty($phone)||empty($password))
    {
        header("Location: profSignup.php?signup=empty-Field");
        exit ();
    }
    else
    {
        $vsql = "SELECT * FROM prof_information WHERE email = '$_email' ";
        $result = mysqli_query($conn, $vsql);
        $result_check = mysqli_num_rows($result);

        $vsql_p = "SELECT * FROM prof_information WHERE phone = '$phone' ";
        $result_p = mysqli_query($conn, $vsql_p);
        $result_check_p = mysqli_num_rows($result_p);

        if ($result_check > 0 or $result_check_p > 0)
        {
            header("Location: profSignup.php?signup=email_or_Phone_taken");
            exit ();

        }
        else {

            $vsql_p = "SELECT * FROM prof_information WHERE phone = '$phone' ";
            $result_p = mysqli_query($conn, $vsql);
            $result_check_p = mysqli_num_rows($result);

            if ($result_check > 0)
            {
                header("Location: profSignup.php?signup=phoneNumbertaken");
                exit ();

            }
            else
            {
                $sql = "INSERT INTO `prof_information` VALUES (NULL, '$_login_id','$_firstName', '$_lastName', '$_middleName', '$_honf', '$_email', '$_phone', '$_password')";
                if ($conn->query($sql) === TRUE) {
                    require_once ('../phpMailer/PHPMailerAutoload.php');
                    $mail = new PHPMailer();
                    $mail->isSMTP();
                    $mail->SMTPAuth = true;
                    $mail->SMTPSecure = "ssl";
                    $mail->Host = "smtp.gmail.com";
                    $mail->Port = '465';
                    $mail->isHTML();
                    $mail->Username = "ieep.bpccs@gmail.com";
                    $mail->Password='ieep_jadmin';
                    $mail->setFrom('admin_ieep@bpccs.org','System-Administrator');
                    $mail->Subject = "Details of your registration in  Intranet e-Evaluation portal of BPCCS as the faculty member";
                    $mail->Body = "Sir/Madam,<br><br>
    This is an auto-generated mail to inform you that you have been registered as a faculty Member in the <u><b>Intranet e-Evaluation portal of Bohlabhai patel college of computer studies.</b></u><br>The below Mentioned Credentials are Extremely Sensitive and we request you to delete this mail and change your password as soon you login successfully into the system.<br><br><br>

    Professor-Id: ".$login_id."
    <br>password: ".$password."

   <br><br><b style='color: red '> We request you to not to share this mail with <u> any student under any circumstances</u> as that will threat your account's security and also the whole system's security will be under the threat.</b><br><br><br>


    Thanking you,<br>
    With regards,<br>
    System Administrator <br>
       (Ieep-Bpccs)
    ";

                    $mail->addAddress($email);
                    $mail->send();
                    header("Location: profSignup.php?signup=sucessfull");
                    exit ();
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
    }

}
else
{
    header("Location: 198791AdminXlogin.html");
    exit();
}
