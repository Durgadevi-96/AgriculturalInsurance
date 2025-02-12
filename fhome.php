<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
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
				<td align="center" colspan="6"> <h2> Insurance Details </h2></td>
				</tr>
			 
			  <tr>
			  <td colpsan="6">&nbsp;</td>
                  <tr>
                    <td width="11%" height="32"><div align="center" class="style31">Insurance Name</div></td>
                    <td width="4%"><div align="center" class="style31">Type</div></td>
                    <td width="8%"><div align="center" class="style31">Crops</div></td>
                  <td width="11%"><div align="center" class="style31">Terms And Coddtions</div></td>
                    <td width="9%"><div align="center" class="style31">Amount</div></td>
                     <td width="7%"><div align="center" class="style31">Action</div></td>
                   </tr>
                  <?php
   
			   $ert=mysql_query("select * from  insurence");
while($row=mysql_fetch_array($ert))
	 	 {
		 

	 ?>
                  <tr>
                    <td height="33"><div align="center"><?php echo $row['name'];?></div></td>
                    <td><div align="center"><?php echo $row['type'];?></div></td>
                    <td><div align="center"><?php echo $row['crop'];?></div></td>
                    <td><div align="center"><?php echo $row['details'];?></div></td>
                    <td><div align="center"><?php echo $row['amnt'];?></div></td>
                   <td><div align="center"><a href="apply.php?ins=<?php echo $row['id'];?>">Click To Apply</a></div></td>
                    </tr>
                  <?php
	}
	
	?>
                  
                </table>
             
   
   
   
   
 
 
 
 
 
 
 
 
 
  <br>
  <br />
 
  <br>
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
