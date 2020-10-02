<!DOCTYPE HTML>
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.user_id.value=="")
  {
    alert("Plese Enter Login Id");
	document.form1.user_id.focus();
	return false;

  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  return true;
  }
  
</script>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<center>
<h1>REGISTER PAGE</h1>  

<div class="floating-box">
<form name="form1" method="post" action="signupuser.php" onSubmit="return check();" >


   <label for=""pwd"> User Id</label>
   <input type="text" id="name" name="user_id"><br><br>
   <label for=""pwd">Password</label>
   <input type="password" id="pass" name="pass"><br><br>
     
   <label for=""pwd"> Confirm   </label>
   <input type="password" id="cpass" name="cpass"><br><br>
   <label for="uname">Name</label>
   <input type="text" id="name" name="name"><br><br>
       
   
   <label for="uname">Email id</label>
   <input type="text" id="email" name="email"><br><br>
    
   <input type="submit" name="submit" value="Signup">
	<p><a href="login.php"Login here></a></p>
                              

</form>
</div>
</center>
 
 
</body>
</html>