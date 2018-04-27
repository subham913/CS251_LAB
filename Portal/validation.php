<!DOCTYPE html>
<html>
<head>
	<title>ABCD</title>
</head>
<body>
<?php 
$db = new SQLite3('mysqlitedb.db');

$email = $_POST['emailid']; 
$name = $_POST['nameid'];
$address = $_POST['addressid'];
$mobno = $_POST['mobid'];
$accno = $_POST['accountid'];
$pass = $_POST['passid'];
$s1 = "SELECT * FROM CUSTOMERS WHERE EMAILID='$email'";
$s2 = "SELECT * FROM BANK WHERE ACCOUNT_NO='$accno' AND PASSWORD != '$pass'"; 
$s3 = "SELECT * FROM BANK WHERE ACCOUNT_NO = '$accno' AND PASSWORD='$pass' AND BALANCE<1000 ";
$s4 = $db->query($s1);
$s5 = $db->query($s2);
$s6 = $db->query($s3);
if($s7 = $s4->fetchArray()){
	echo "Already Registered";
}
elseif($s8 = $s5->fetchArray()){
	echo "invalid acc/pass";
}
elseif($s9 = $s6->fetchArray()){
	echo "Insufficient Balance";
}
else{
$db->exec("UPDATE BANK SET BALANCE=BALANCE-1000 WHERE ACCOUNT_NO='$accno'");
$db->exec("INSERT INTO CUSTOMERS VALUES('$email','$name','$address','$mobno','$accno','$pass' )");
echo "Registration Successful";
}









// while ($row = ($db->query("SELECT * FROM CUSTOMERS where EMAILID='$email';");)->fetchArray()){
// 	if(!$row){
// 		$acc=$db->query("SELECT * FROM BANK where ACCOUNT NO='$accno';");)->fetchArray()
// 		if($acc){
// 			$password=$db->query("SELECT * FROM BANKS where PASSWORD='$pass';");)->fetchArray(){
// 			if($password){
// 				$var=$db->query("SELECT * FROM BANKS where ='$pass';");)->fetchArray(){

// 				}
// 			}	
// 		}
// 	}
// }

	

?>
</body>
</html>