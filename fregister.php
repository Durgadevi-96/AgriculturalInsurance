
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{



	$max_qry = mysql_query("select max(id) from fregister");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;

$qry=mysql_query("insert into fregister values('$id','$name','$gender','$age','$email','$phone','$address','$zip','$land','$uname','$psw')");
	if($qry)
	{
	
	echo "<script>alert('inserted sucessfully')</script>";
	
	}
	else
	{
	
	
		echo "failed";
	}
	
}

?>



<html>
<head>
  <title>farming asisstance</title>
  <meta name="description" content="website description" />
  <style type="text/css">
<!--
.style1 {color: #FF0000}
-->
  </style>
</head>
<body>
  <table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4dff4d" scope="col"><h1>AGRICULTURE PORTAL</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
 <tr>
      <th scope="col"><a href="index.php">Home</a></th>
      <th scope="col"><a href="admin.php">Admin Login</a></th>
        <th scope="col"><a href="farmer.php">Farmer Login</a></th>
        </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="300">
 <br />
  <br>
  <br />
<form id="f1" name="f1" method="post" action="#">
  <table width="38%" height="517" border="0" align="center">

    <tr>
	<td colspan="2"  align="center" ><div class="style5"><h3>New Farmer Registation</h></div></td>
    </tr>
   <tr>
      <td width="39%" height="54">Name</td>
      <td width="61%"><input name="name" type="text" id="name" required />
      </td>
    </tr>
    <tr>
      <td height="46">Gender</td>
      <td><input name="gender" type="radio" value="male"  required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
    </tr>
  <tr>
      <td height="34">Age</td>
      <td>
        <input name="age" type="text" id="age"  required />
      </td>
    </tr>
	 <tr>
      <td height="40">Email Id</td>
      <td><input name="email" type="email" id="email"  required /></td>
      
    </tr>
	  <tr>
      <td height="37">Phone Number </span></td>
      <td><input name="phone" type="text" id="phone"  required /></td>
      
    </tr>
	   <tr>
      <td height="57">Address</td>
      <td><textarea name="address" id="address"  required></textarea></td>
       </tr>
	<tr>
    
      <td height="38">Zipcode</td>
      <td><input type="text" name="zip" id="zip"   required></td>
     
    </tr>
	
	
	
	<tr>
    
      <td height="42">Land Details</td>
      <td><input type="text" name="land" id="land"></td>
     
    </tr>
	
	
	 <tr>
      <td height="42">User Name</td>
      <td><input name="uname" type="text" id="uname" /></td>
    </tr>

    <tr>
     <td>Passwrod</td>
      <td><input name="psw" type="password" id="psw" /></td>
    </tr>
	<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>

 <br />
  <br>
  <br />
  
  
<table width="100%" border="0">
    <tr>
      <th height="73" bgcolor="#4dff4d" scope="col"><p>copyrights@2019 </p>
      </th>
    </tr>
</table>


</body>
</html>
