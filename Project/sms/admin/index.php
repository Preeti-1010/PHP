<?php
	@session_start();
	include("inc/db.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0019)http://amazesms.in/ -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">s

<title>Login</title>
<link href="./css/style-default.css" rel="stylesheet" type="text/css">
<script language="javascript" type="text/javascript">
function validate()
{
	if(document.getElementById("txtEmail").value.length==0)
	{
		alert("Enter Username.");
		document.getElementById("txtEmail").focus();
		return false;
	}
	if(document.getElementById("txtPassword").value.length==0)
	{
		alert("Enter Password.");
		document.getElementById("txtPassword").focus();
		return false;
	}
	if(document.getElementById("chkAgree").checked==false)
	{
		alert("Please Agree the Terms & Conditions First.");
		document.getElementById("chkAgree").focus();
		return false;
	}

}
</script>
</head>
<body class="bodylogin" style="background-image: url('img/login-pattern.png');">
<div class="login_box">
	<div class="align_center"></div>
    <div class="login_form_box">
    	<h1>Admin login</h1>
        <form name="frmLogin" id="frmLogin" action="" method="post">
      <div class="input_box">
      	<ul>
            <li><input name="a_name" id="txtEmail" type="text" class="input_fields_login" placeholder="Username"></li>
            <li><input name="a_password" id="txtPassword" type="password" class="input_fields_login" placeholder="Password"></li>
            <li class="checkinput"><label><input name="chkAgree" id="chkAgree" type="checkbox" value=""><a href="" onclick="">I Agree Terms &amp; Conditions</a></label></li>
        </ul>
        	
		<div class="fright fpasword"><a href="index.php?forgot_pass">Forgot password?</a> </div>
		        <div class="fleft"><input name="u_login" id="cmdLogin" type="submit" value="submit" class="input_button" onclick="return validate();"></div>
      </div>
      </form><br><br>
	  <?php
                if(isset($_GET['forgot_pass'])){
                    echo "<div class='form-group' >
                    <div class='col-xs-12'>
                    <form method='POST'>
                    <b align='center'>Enter Your username below, we will send your password to your email.</b>
                    <input type='text' class='form-control input_fields_login' name='f_name' placeholder='Enter registered  email' /><br>
                    <input type='submit' name='f_pass' value='send me password' class='btn btn-success input_button'><br>
                    </form>
					</div>
                    </div>
                    <br><br><br><br><br><br><br>
                    
                    
                    ";
                }
                if(isset($_POST['f_pass'])){
                    $name=$_POST['f_name'];
                    $select_c=$con->prepare("select * from admin where a_name='$name'");
                     $select_c->setFetchMode(PDO::FETCH_ASSOC);
                        $select_c->execute();
                        $row_c=$select_c->fetch();
                        
                        $c_name=$row_c['a_name'];
                        $c_email=$row_c['a_email'];
                        $c_pass=$row_c['a_password'];      
                   
					
                        $row_check=$select_c->rowCount();
                        if($row_check==0){
                            echo "<script>alert('This email does not exist !!!!!')</script>";
                            exit();
                        }
                        else
                        {
                                      
               $subject = "Passowrd Details";
    $message = <<<EOD
       
        <table cellspacing="0" cellpadding="1" border="1">
            <tbody>
           
                <tr>
                    <td colspan="5" style="padding: 5px 10px;" align="center"><h3>Dear <b>$c_name</b></h3>
                            <p>Your requested for your password at All SMS</p>
                            <b>Your Password is: <span style='color:red;'>$c_pass</span></b>
                            <h4>Thanks for using our Website..<a href='' target='_blank'>Login from here</a></h4>
                    </td>
                    
                </tr>
               
            </tbody>
        </table>
       
EOD;
   
        $headers = "From: allsmssent@gmail.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=\"iso-8859-1\"\n";
        $headers .= "X-Priority: 1\r\n";
        $headers .= "X-MSMail-Priority: High\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
       
                if(mail($c_email, $subject, $message, $headers )){
                     echo "<script>alert('Password is sent to your email, Please check your email');</script>";
                }
            }
       }
            
            ?>
      <div class="clear"></div>
      <div class="login_copyright">Copyright allsentsms.in  All rights reserved</div>
    </div>
    <div class="login-point">
		<ul>
			<li>Group Messaging</li>
			<li>Personalised Messaging</li>
			<li>Realtime Stats</li>
			<li>Advance Reporting</li>
		</ul>
	</div>
<div class="clear"></div>
</div>
<script type="text/javascript" language="javascript">
document.getElementById("txtEmail").focus();
</script>


</body></html>


<?php 
        if(isset($_POST['u_login'])){
            $sa_name=$_POST['a_name'];
            $sa_password=$_POST['a_password'];
            
            $select_user=$con->prepare("select * from admin where a_name='$sa_name' AND a_password='$sa_password'");
            $select_user->setFetchMode(PDO::FETCH_ASSOC);
            $select_user->execute();
            $data=$select_user->fetch();
			
			if($data['a_name']!=$sa_name AND $data['a_password']!=$sa_password){
                echo "<script>alert('Invalid Admin Username or Password');</script>";
            }
            elseif($data['a_name']==$sa_name AND $data['a_password']==$sa_password){
                
                $_SESSION["a_name"]=$data['a_name'];
                $_SESSION["a_email"]=$data['a_email'];
                
                $_SESSION["a_password"]=$data['a_password'];
                //$_SESSION["admin_reg_date"]=$data['admin_reg_date'];
                echo "<script>window.open('welcome.php','_self')</script>";
                
            }
            
        }
        

?>