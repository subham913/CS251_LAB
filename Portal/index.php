<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V12</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body onload="firstfocus();">



	<?php 

		$filename = 'mysqlitedb.db';

		if (!(file_exists($filename))) {
		   $db = new SQLite3('mysqlitedb.db');
		   $var="CREATE TABLE CUSTOMERS(
		      EMAILID VARCHAR (20)     NOT NULL,
		      NAME VARCHAR (20)     NOT NULL,
		      ADDRESS  VARCHAR (110)   NOT NULL,
		      MOBILENO  INT(10)         NOT NULL,
		      ACCOUNT_NO INT(5) NOT NULL,
		      PASSWORD  VARCHAR(20) NOT NULL       
		   )";

		   $db->query($var);
		   $var="CREATE TABLE BANK(
		      ACCOUNT_NO INT(5) NOT NULL,
		      PASSWORD  VARCHAR(20) NOT NULL,
		      BALANCE INT  NOT NULL      
		   )";


		   $db->query($var);
		   $var = "CREATE TABLE ADMIN(
				USERNAME TEXT NOT NULL,
				PASSWORD VARCHAR
		)";
		$db->query($var);
		$q1="INSERT INTO ADMIN VALUES('subhamkr','abcd')";
		   $db->query($q1);

		   $q1="INSERT INTO CUSTOMERS VALUES('subhamkr@xyz.com','Subham','A-109','9005933688','00001','aaaa')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('pragatis@xyz.com','Pragati','A-109','9005433689','00002','bbbb')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('kkhanna@xyz.com','Kubham','A-110','9005933688','00003','cccc')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('csomesh@xyz.com','Pubham','A-112','9405933688','00004','dddd')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('pratap@xyz.com','Tubham','A-111','9005843688','00005','eeee')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('kumarpr@xyz.com','Subham','A-108','9001933688','00006','ffff')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('maheshc@xyz.com','Subham','A-107','9005933684','00007','gggg')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('rohit@xyz.com','Subham','A-106','9005433688','00008','hhhh')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('sudheer@xyz.com','Sudheer','A-101','9005943688','00009','iiii')";
		   $db->query($q1);
		   $q1="INSERT INTO CUSTOMERS VALUES('ankuriit@xyz.com','Ankur Singh','A-101','9004933688','00010','jjjj')";
		   $db->query($q1);

		   $q1="INSERT INTO BANK VALUES('00001','aaaa','1000')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00002','bbbb','1002')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00003','cccc','1003')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00004','dddd','1004')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00005','eeee','1005')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00006','ffff','1006')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00007','gggg','1007')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00008','hhhh','1008')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00009','iiii','1009')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00010','jjjj','1010')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00011','kkkk','1011')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00012','llll','500')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00013','mmmm','7000')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00014','nnnn','1900')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00015','oooo','1800')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00016','pppp','1700')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00017','qqqq','1600')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00018','rrrr','1500')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('00019','ssss','3000')";
		   $db->query($q1);
		   $q1="INSERT INTO BANK VALUES('0020','tttt','2000')";
		   $db->query($q1);


		} else {
		    
		}

	 ?>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/img-01.jpg');">
			<div class="wrap-login100 p-t-190 p-b-30">
        <div class="login100-pic js-tilt" data-tilt>
          <h1> <a href="adminlogin.php"> See All Registrations </a>
        </div>

          <form class="login100-form validate-form" action="validation.php" method="post" onsubmit="return check(this)">
				
					<div class="login100-form-avatar">
						<img src="Image.jpg" alt="AVATAR">
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						Bank Account Registration
					</span>
        
					<div class="wrap-input100 validate-input m-b-10"   >
						<input class="input100" type="text" name="emailid" placeholder="Email"  >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="text" name="nameid" placeholder="Name" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="text" name="addressid" placeholder="Address" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="text" name="accountid" placeholder="Account Number" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="text" name="mobid" placeholder="Mobile Number" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>



					<div class="wrap-input100 validate-input m-b-10" >
						<input class="input100" type="password" name="passid" placeholder="Bank Password" >
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	
	




	<script>
		

  function check(form){

    var eid=form.emailid.value;
    var eid_len = eid.length;
    var regexp = /^[a-zA-Z]+@[a-zA-Z]+\.com$/
		if (eid_len == 0 || !(eid.match(regexp)))
    {
    alert("Email should be of the form abc@xyz.com");
    //window.location.href='/';
    //document.getElementById("emailid").focus();
    return false;
    }
    var uname=form.nameid.value;
    var uname_len=uname.length;
    var letters = /^[A-Za-z]+$/;
    if(!(uname.match(letters)) || uname_len==0 || uname_len>20)
    {
    alert('Name must have atmost 20 characters including spaces');
    return false;
    }


    var uadd = form.addressid.value;
    var uadd_len = uadd.length;
    if(uadd_len==0 || uadd_len>100 )
    {
    
      alert('User address should not be empty / have alphanumeric characters of atmost length 100');
      return false;  
    }



    var accid = form.accountid.value;
    var accid_len = accid.length;
    var temp1 = /^[0-9]+$/;
    if(accid_len!=5 || !(accid.match(temp1))){
      alert("Account number should not be empty (5 digits)");
      return false;
    }


    var mobd = form.mobid.value;
    var mobid_len = mobd.length;
    var temp2 = /^[0-9]+$/;
    if(mobid_len!=10 || !(mobd.match(temp2))){
      alert("Mobile number should not be empty (10 digits)");
      return false;
    }


    var passid = form.passid.value;
    var passid_len = passid.length;
    var temp = /^[0-9a-zA-Z]+$/;
    if (passid_len == 0 ||passid_len > 20|| !(passid.match(temp)))
    {
    alert("Password should not be empty (length than 21)");
    return false;
    }


    return true;


 }




//   function firstfocus()
//   {
//   console.log('test');
//   return true;
//   }
// // This function will validate User id.
//   function emailid_validation()
//   {
//   var eid = document.getElementById("emailid").value;
//   var eid_len = eid.length;
//   console.log(eid);
//   console.log('exp');
//   var regexp = /^[a-zA-Z]+@[a-zA-Z]+\.com$/
//   if (eid_len == 0 || !(eid.match(regexp)))
//   {
//   alert("Email should be of the form abc@xyz.com");
//   window.location.href='/';
//   //document.getElementById("emailid").focus();
//   return false;
//   }
//   document.getElementById("nameid").focus();
//   // Focus goes to next field i.e. Password.
//   return true;
//   }


// // This function will validate Name.
//   function name_validation()
//   { 
//   var uname = document.getElementById("nameid").value;
//   var uname_len = uname.length;
//   var letters = /^[A-Za-z]+$/;
//   if(uname.match(letters) || (uname_len>0 && uname_len<21))
//   {
//   // Focus goes to next field i.e. Address.
//   //document.registration.addressid.focus();
//   document.getElementById("addressid").focus();
//   return true;
//   }
//   else
//   {
//   alert('Name must have atmost 20 characters including spaces');
//   window.location.href='/';
//   //document.getElementById("nameid").focus;

//   return false;
//   }
//   }


//   // This function will validate Address.
//   function address_validation()
//   { 
//   var uadd = document.getElementById("addressid").value;
//   var uadd_len = uadd.length;
//   if(uadd_len==0 || uadd_len>100 )
//   {
  
// 	alert('User address should not be empty / have alphanumeric characters of atmost length 100');
//   	//uadd.focus();
//     //document.getElementById("addressid").focus;
//     window.location.href='/';
//   	return false;  
//   }
//   else
//   {
//   	// Focus goes to next field i.e. Country.
//   	//document.registration.accountid.focus();
//     document.getElementById("accountid").focus;
//   	return true;
  
//   }
//   }



// function account_validation()
//   {
//   var accd = document.getElementById("accountid").value;
//   var accid_len = accd.length;
//   var temp = /^[0-9]+$/;
//   if (accid_len == 5 || accd.match(temp))
//   {

//   	//document.registration.mobid.focus();
//     document.getElementById("mobid").focus();
//   	return true;
  
//   }
//   // Focus goes to next field i.e. Name.
// else{
// 	alert("Account number should not be empty (5 digits)");
//   	//accd.focus();
//     window.location.href='/';
//   	return false;
// }
// }



// function mobile_validation()
//   {
//   var mobd = document.getElementById("mobid").value;
//   var mobid_len = mobd.length;
//   var temp = /^[0-9]+$/;
//   if (mobid_len == 10 || mobd.match(temp))
//   {

//   	document.getElementById("passid").focus();
//   	return true;
  
//   }
//   // Focus goes to next field i.e. Name.
// else{
// 	alert("Mobile number should not be empty (10 digits)");
//   	//mobd.focus();
//     window.location.href='/';
//   	return false;
// }
// }


// // This function will validate Password.
//   function password_validation()
//   {
//   var passid = document.getElementById("passid").value;
//   var passid_len = passid.length;
//   var temp = /^[0-9a-zA-Z]+$/;
//   if (passid_len == 0 ||passid_len > 20|| !(passid.match(temp)))
//   {
//   alert("Password should not be empty (length than 21)");
//   //passid.focus();
//   window.location.href='/';
//   return false;
//   }
//   // Focus goes to next field i.e. Name.
//   //document.registration.desc.focus();
//   return true;
//   }

  
  
 
  




</script>





	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>












