<!DOCTYPE html>
<html>
<head>
	<title>ABCD</title>
</head>
<body>
<?php 
$db = new SQLite3('mysqlitedb.db');

$name = $_POST['username'];
$pass = $_POST['adminpassword'];
$s1 = "SELECT * FROM ADMIN WHERE USERNAME='$name' AND PASSWORD='$pass'";
$s2 = $db->query($s1);
if($s3 = $s2->fetchArray()){
	$sql = "select * from CUSTOMERS";
	$result = $db->query($sql);
	echo "<table><tbody>";
	while ($row = $result->fetchArray()) {
	echo "<tr> <td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
	}
	echo "</tbody></table>";
}
else {
	echo "Yes";
}


?>
</body>
</html>