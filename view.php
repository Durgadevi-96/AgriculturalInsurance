<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	echo $fid=$_SESSION['uid'];
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
      <th scope="col"><a href="fhome.php">Farmers Home</a></th>
      <th scope="col"><a href="view.php">View  Insurance</a></th>
      <th scope="col"><a href="index.php">LogOut </a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="200">

   
 
 
 
 
 
 
 
 
 

 <table width="100%" align="center">
				<tr>
				<td align="center" colspan="3"> <h2> Insurance Details </h2></td>
				</tr>
			 
			  <tr>
			  <td height="36" colpsan="3">&nbsp;</td>
   <tr>
                    <td width="11%" height="47"><div align="center" class="style31"><strong>Your Name</strong></div></td>
                    <td width="4%"><div align="center" class="style31"><strong>Amount</strong></div></td>
                    <td width="8%"><div align="center" class="style31"><strong>Status</strong></div></div></td>
   </tr>
                  <?php
   
			   $ert=mysql_query("select * from applying where fid='$fid'");
while($row=mysql_fetch_array($ert))
	 	 {
		 

	 ?>
                  <tr>
                    <td height="91"><div align="center"><?php echo $row['fname'];?></div></td>
                    <td><div align="center"><?php echo $row['amnt'];?></div></td>
                    <td><div align="center"><?php echo $row['status'];?></div></td>
                   
   </tr>
                  <?php
	}
	
	?>
                  
                </table>
             
   
   
   
   
 
 
 
 
 
 
 
 
 
 
 
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
