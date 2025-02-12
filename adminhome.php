<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{



	$max_qry = mysql_query("select max(id) from insurence");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;

$qry=mysql_query("insert into insurence values('$id','$name','$type','$crop','$details','$amnt')");
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
  <table width="39%" height="517" border="0" align="center">

    <tr>
	<td colspan="2"  align="center" ><div class="style5"><h3>Add Insurance Details</h3></div></td>
    </tr>
   <tr>
      <td width="40%" height="54">Insurance Name</td>
      <td width="60%"><input name="name" type="text" id="name"  required/>
      </td>
    </tr>
  
  <tr>
      <td height="34">Insurance Type</td>
      <td>
        <input name="type" type="text" id="type" required />
      </td>
    </tr>
	 <tr>
      <td height="40">Crops</td>
      <td><input name="crop" type="text" id="crop" required /></td>
      
    </tr>
	  <tr>
      <td height="37">Terms And Condition</td>
      <td><textarea name="details" id="details" required></textarea></td>
      
    </tr>
	   <tr>
      <td height="57">Insurance Amount</td>
      <td><input type="text" name="amnt" required></td>
	  
	    
       </tr>
	
		<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>

 <br />
   <br />
  <br />
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
