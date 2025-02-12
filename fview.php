<?php
include("dbconnect.php");
session_start();
extract($_POST);
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
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="viewins.php">View Insuranse</a></th>
      <th scope="col"><a href="viewf.php">View Farmers</a></th>
	 <th scope="col"><a href="index.php">LogOut </a></th>
    </tr>
  </table>
  
  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="200">





 <table width="100%" align="center">
				<tr>
				<td align="center" colspan="10"> <strong>  Farmers Details </strong></td>
				</tr>
			 
			  <tr>
			  <td colpsan="10">&nbsp;</td>
                  <tr>
                    <td width="11%" height="32"><div align="center" class="style31">Name</div></td>
                    <td width="4%"><div align="center" class="style31">Age</div></td>
                    <td width="8%"><div align="center" class="style31">Gender</div></td>
                    <td width="16%"><div align="center" class="style31">MobileNumber</div></td>
                    <td width="11%"><div align="center" class="style31">EmailId</div></td>
                    <td width="9%"><div align="center" class="style31">Address</div></td>
                    <td width="9%"><div align="center" class="style31">Zip</div></td>
                    <td width="7%"><div align="center" class="style31">Land</div></td>
                   </tr>
                  <?php
   
			   $ert=mysql_query("select * from fregister");
while($row=mysql_fetch_array($ert))
	 	 {
		 

	 ?>
                  <tr>
                    <td height="33"><div align="center"><?php echo $row['name'];?></div></td>
                    <td><div align="center"><?php echo $row['age'];?></div></td>
                    <td><div align="center"><?php echo $row['gender'];?></div></td>
                    <td><div align="center"><?php echo $row['phone'];?></div></td>
                    <td><div align="center"><?php echo $row['email'];?></div></td>
                    <td><div align="center"><?php echo $row['address'];?></div></td>
                    <td><div align="center"><?php echo $row['zip'];?></div></td>
                    <td><div align="center"><?php echo $row['land'];?></div></td>
                    </tr>
                  <?php
	}
	
	?>
                  
                </table>
             
   
   
   
   
   
   
   
     <br />
  <br />
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
