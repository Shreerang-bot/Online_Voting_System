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
<center><h3> Voting So Far  </h3></center>
<?php
include "connection.php";
$member = mysqli_query($con, 'SELECT * FROM candidates' );
if (mysqli_num_rows($member)== 0 ) {
	echo '<font color="red">No results found</font>';
}
else {
	echo '<center><table><tr bgcolor="#FF6600">
<td width="30px">ID</td>
<td width="100px">CANDIDATE</td>
<td width="30px">VOTE</td>
</tr>';
while($mb=mysqli_fetch_object($member))
		{
			$id=$mb->can_id;
			$name=$mb->fullname;
			$vote=$mb->votecount;
			echo '<tr bgcolor="#BBBEFF">';
	echo '<td>'.$id.'</td>';
	echo '<td>'.$name.'</td>';
	echo '<td>'.$vote.'</td>';
	echo "</tr>";
		}
		echo'</table></center>';
	}
?>
</body>
<p style="margin-top:20px"></p>
</html>
<?php include "footer.php";?>
