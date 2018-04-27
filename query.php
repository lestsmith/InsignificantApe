<!DOCTYPE HTML>
<html lang="en">
<head><meta charset="UTF-8">
<title>PHP Query</title>
</head>
<body>
	<h1>Connection Test</h1>
<?php
require ('../connect.php');
$q = 'select message from insighcy_site_db.forum';
$r = $mysqli->query($q);
echo 'Awaiting reply ...';
if($r)
	{echo '<h1>Result set returned ok</h1><br>' . $r->fetch_assoc() ;}
else
	{echo '<p>' . $mysqli->connect_error . '</p>';}
?>
</body>
</html>