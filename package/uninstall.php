<html>
<head>
<title>Package Manager - Uninstall - PHP Webmin</title>
<meta http-equiv="content-type" content="text/html; charset=GB2312">

</head>
<body bgcolor=#ffffff text=#000000 link=#0000cc vlink=#551a8b alink=#ff0000 onLoad=sf() topmargin=3 marginheight=3>
<br>
<br>
<br>
<center>
Result
<textarea cols="80" rows="20"  readonly>

<?php
if($_POST['command'])
{
	echo "Waiting......\n";
	$exec="sudo -e ".$_POST['command'];
}
if($exec) 
{ 
	if(system($exec))
		echo "\nDone......\n";
	else	echo "Error...Check your package name or operation...";
}
?>

</textarea>
</center>
<p>
</body>
</html>
