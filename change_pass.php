<html>
<?php include"header.php"; ?>

<body style="margin-top:100px">
<?php
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<br>
<br>
<center><h3>Change Password</h3></center>
<h4 style="color:#e60808;"><?php global $nam; echo $nam;?> </h4>
<?php global $error; echo $error;?>

<center><form action="change_pass_action.php" method="post" id="myform">
<input type="password" name="cpassword" placeholder="Current Password" >
<br>
<br>
<input type="password" name="npassword" placeholder="New Password" >
<br>
<br>
<input type="password" name="cnpassword" placeholder="Confirm New Password" >
<br>
<br>
<input style="background-color:green;color:#fff" type="submit" name="cpass" value="UPDATE" >
</form></center>
<script type="text/javascript">
var frmvalidator = new Validator("myform");
frmvalidator.addValidation("cpassword","req","Please enter Current Password");
frmvalidator.addValidation("cpassword","maxlen=50");
frmvalidator.addValidation("npassword","req","Please enter New Password");
frmvalidator.addValidation("npassword","maxlen=50");
frmvalidator.addValidation("cnpassword","req","Please enter Confirm New Password");
frmvalidator.addValidation("cnpassword","maxlen=50");
</script>
<br>
<br>
</body>
</html>
<?php include "footer.php";?>
