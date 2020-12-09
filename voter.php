<html>
<body style="margin-top:100px">

<?php
 include "header.php";
if(!isset($_SESSION)) {
session_start();
}
include "auth.php";
include "header_voter.php";
?>
<h4 style="text-align:center"> Welcome <?php echo $_SESSION['SESS_NAME']; ?> </h4>
<h3 style="text-align:center">Make a Vote </h3>
<form action="submit_vote.php" name="vote" method="post" id="myform" >
<center><BR>
<label><input type="radio" name="lan" value="BJP">  BJP<br></label><br>
<label><input type="radio" name="lan" value="CONGRESS">CONGRESS<BR></label><br>
<label><input type="radio" name="lan" value="AAP">   SS<BR></label><br>
<label><input type="radio" name="lan" value="NOTA">  AAP<BR></label><br>
<label><input type="radio" name="lan" value="NIRDLIY">  NCP<BR></label><br>

</font></center><br>
<?php global $msg; echo $msg; ?>
<?php global $error; echo $error; ?>
<center><input style="background-color:green;color:#fff" type="submit" value="Submit Vote" name="submit" style="height:30px; width:100px" /></center>
</form>

</body>
</html>
<?php include "footer.php" ;?>
