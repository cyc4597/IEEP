function student_login_validate()
{
    var studentId = document.forms['studentLogin']['studentId'].value;
    var pass = document.forms['studentLogin']['pass'].value;
    if (studentId === "" || pass === "")
    {
        document.getElementById("std_LoginId").classList.add("has-error", "has-feedback");
        document.getElementById("std_LoginPass").classList.add("has-error", "has-feedback");
        document.getElementById("stdLoginId").value = "";
        document.getElementById("stdLoginPass").value = "";
        document.getElementById("stdLoginId").placeholder = "Email and Password's Are mandotory";
        document.getElementById("stdLoginId").focus();
        document.getElementById("stdLoginPass").placeholder = "Email and Password's Are mandotory";
        return false
    }
}
function val ()
{
	return false;
}
function validate_signup()
                    {
                        var current_link = window.location.href;
                        var error_state = current_link.split('?')[1];
                        var studentName = document.forms['signupForm']['studentName'].value;
                        if (studentName  === "")
                        {
                            document.getElementById("studentName").classList.add("has-error","has-feedback");
                            document.getElementsByName('studentName')[0].placeholder= "You must fill your name according to the marksheet";
                            document.getElementsByName("studentName")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("studentName").classList.remove("has-error","has-feedback");
                            document.getElementById("studentName").classList.add("has-success","has-feedback");
                        }
                        var dateOfBirth = document.forms['signupForm']['dateOfBirth'].value;
                        if (dateOfBirth  === "")
                        {
                            document.getElementById("_dateOfBirth").classList.add("has-error","has-feedback");
                            document.getElementsByName('dateOfBirth')[0].placeholder='Your must mention your date of birth';
                            document.getElementsByName("dateOfBirth")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("_dateOfBirth").classList.remove("has-error","has-feedback");
                            document.getElementById("_dateOfBirth").classList.add("has-success","has-feedback");
                        }
                        var rollNumber  = document.forms['signupForm']['rollNumber'].value;
                        if (rollNumber  === "")
                        {
                            document.getElementById("rollNumber").classList.add("has-error","has-feedback");
                            document.getElementsByName('rollNumber')[0].placeholder='Your Roll-number must be mentioned';
                            document.getElementsByName("rollNumber")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("rollNumber").classList.remove("has-error","has-feedback");
                            document.getElementById("rollNumber").classList.add("has-success","has-feedback");
                        }
                        var Class  = document.forms['signupForm']['class'].value;
                        if (Class === "Your current Class.........." || Class === "You have Not selected your class.Please Select your class to proceed.")
                        {
                            document.getElementsByName("class")[0].value="You have Not selected your class.Please Select your class to proceed.";
                            document.getElementById("class").classList.add("has-error","has-feedback");
                            return false;
                        }
                        else
                        {
                            document.getElementById("class").classList.remove("has-error","has-feedback");
                            document.getElementById("class").classList.add("has-success","has-feedback");

                        }
                        var emailId  = document.forms['signupForm']['emailId'].value;
                        if (emailId  === "")
                        {
                            document.getElementById("emailId").classList.add("has-error","has-feedback");
                            document.getElementsByName('emailId')[0].placeholder='Enter your emailId its mandatory';
                            document.getElementsByName("emailId")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("emailId").classList.remove("has-error","has-feedback");
                            document.getElementById("emailId").classList.add("has-success","has-feedback");
                        }

                        var phoneNumber = document.forms['signupForm']['phoneNumber'].value;
                        if (phoneNumber  === "")
                        {
                            document.getElementById("phoneNumber").classList.add("has-error","has-feedback");
                            document.getElementsByName('phoneNumber')[0].placeholder='Enter your phoneNumber its mandatory';
                            document.getElementsByName("phoneNumber")[0].focus();
                            return false;
                        }
                        else
                        {
                            document.getElementById("phoneNumber").classList.remove("has-error","has-feedback");
                            document.getElementById("phoneNumber").classList.add("has-success","has-feedback");
                        }
                        
                        var pass = document.forms['signupForm']['pass'].value;
                        var Cpass = document.forms['signupForm']['Cpass'].value;
                        var check_pass_length = pass.concat(Cpass);
                        if (((pass === "" || Cpass === "")||(pass !== Cpass)) || check_pass_length.length < 12 ) {
                            document.getElementById("pass").classList.add("has-error", "has-feedback");
                            document.getElementById("Cpass").classList.add("has-error", "has-feedback");
                            document.getElementById("password_field").value = "";
                            document.getElementById("confirm_password_field").value = "";
                            document.getElementById("password_field").placeholder = "Passwords must be 0f atleast 6 char and be matched and filled";
                            document.getElementById("password_field").focus();
                            document.getElementById("confirm_password_field").placeholder = "Passwords must be 0f atleast 6 char and be matched and filled";
                            return false;
                        }
                    }
                    var specialKeys = new Array();
                    specialKeys.push(8); //Backspace
                    function IsNumeric(e) {
                        var keyCode = e.which ? e.which : e.keyCode
                        var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                        return ret;
                    }
