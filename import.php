<?php
include "db.php";
$vals=$_POST["dts"];
echo $vals;
print_r($vals);
$wid=001;
$strl="insert into booking values($wid,'$vals[0]','$vals[1]','$vals[2]','$vals[3]','$vals[4]','$vals[5]')";
$tsl=$bdd->query($strl) or die('error on $strl');
echo "complete";

?>