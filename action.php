<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
		$id=$_REQUEST['id'];
		
		
		
		if(isset($_POST['btn']))
		{
		
		
	$qry=mysql_query("update applying set amnt='$amnt',status='Accept' where id='$id'");
	
	echo "Updated Sucessfully";
		header("location:viewins.php");
		
		
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
      <th height="73" bgcolor="#4dff4d" scope="col"><h1>Agriculture Insurance</h1>
      </th>
    </tr>
  </table>
  <table width="100%" border="0">
    <tr>
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="viewins.php">View Insuranse</a></th>
      <th scope="col"><a href="viewf.php">View Farmers</a></th>
	 <th scope="col"><a href="index.php">LogOut </a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="400">



 
 
 

<form id="f1" name="f1" method="post" action="#">
  <table width="36%" height="199" border="0" align="center">

    <tr>
	<td height="90" colspan="2"  align="center" ><div class="style5"><h3>Enter Loan Amount</h3></div></td>
    </tr>
   <tr>
      <td width="47%" height="54">Amount</td>
      <td width="53%"><input name="amnt" type="text" id="amnt" />
      </td>
    </tr>



<tr>
      <td height="47">&nbsp;</td>
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
      <th height="73" bgcolor="#4dff4d" scope="col"><p>copyrights@2020 </p>
      </th>
    </tr>
</table>


</body>
</html>