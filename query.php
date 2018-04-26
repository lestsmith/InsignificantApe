<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Query</title>
</head>
<body>
	<h1>Connection Test</h1>
<?php
require ('../connect.php');
$q = 'show tables';
$r = mysqli_query($dbc, $q);
echo 'Awaiting reply ...';
if($r)
	{echo '<h1>Result set returned ok</h1>';}
else
	{echo '<p>' . mysqli_error($dbc) . '</p>';}
mysqli_close($dbc);
?>
</body>
</html>