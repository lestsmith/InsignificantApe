<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Query</title>
</head>
<body>
<?php
require ('../connect1.php');
$q = 'select message from forum';
$r = mysqli_query($dbc, $q);
if($r)
	{echo '<h1>Result set returned ok v1';}
else
	{echo '<p>' . mysqli_error($dbc) . '</p>';}
	
if (mysqli_num_rows($r) > 0)
{
	// echo '<table><tr><th>Posted By</th><th>Subject</th><th id="msg">Message</th><tr>';
	while($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
	{
		echo '<h3>' . $row['message'] . '</h3>';
	}
}
else
{
	echo '<p>There are currently no messages</p>';
}	
	
mysqli_close($dbc);
?>
</body>
</html>