<html>
<head>
<title>Shutdown or Reboot - PHP Webmin</title>
<meta http-equiv="content-type" content="text/html; charset=GB2312">

</head>
<body bgcolor=#ffffff text=#000000 link=#0000cc vlink=#551a8b alink=#ff0000 onLoad=sf() topmargin=3 marginheight=3>
<br>
<br>
&nbsp;&nbsp;Result<br>
<center>
<textarea cols="80" rows="20"  readonly>

<?php
switch($_POST['init'])
{
    case Shutdown:
	echo "Shutdown immediately......\n";
	$exec="sudo init 0";
	break;
    case Reboot:
	echo "Reboot immediately......\n";
	$exec="sudo init 6";
}
if($_POST['command'])
{
	echo "Waiting......\n";
	$exec="sudo ".$_POST['command'];
}
if($exec) 
{ 
	system($exec);
	echo "\nDone...";
}
else	echo "\nError...Check you operation or contact with web admin...\n";
?>

</textarea>
</center>
<p>
&nbsp;&nbsp;<a href="./">Return</a>
</body>
</html>
