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
      <th scope="col"><a href="adminhome.php">Admin Home</a></th>
      <th scope="col"><a href="viewins.php">View Insuranse</a></th>
      <th scope="col"><a href="viewf.php">View Farmers</a></th>
	 <th scope="col"><a href="index.php">LogOut </a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="400">



 
 
 
 
 
 

 <table width="92%" align="center">
				<tr>
				<td align="center" colspan="6"> <h2> Insurance Details </h2></td>
				</tr>
			 
			  <tr>
			  <td height="36" colpspan="6">&nbsp;</td>
   <tr>
     <td width="14%" height="47"><div align="center" class="style31">Your Name</div></td>
     <td width="12%"><div align="center" class="style31">Proof</div></td>
     <td width="18%"><div align="center" class="style31">Account Details</div></td>
     <td width="24%"><div align="center" class="style31">Land Details</div></td>
     <td colspan="2" align="center"><div align="center" class="style31">Action</div></td>
   </tr>
                  <?php
   
			   $ert=mysql_query("select * from  applying where status=''");
while($row=mysql_fetch_array($ert))
	 	 {
		 

	 ?>
                  <tr>
                    <td height="91"><div align="center"><?php echo $row['fname'];?></div></td>
                         <td><div align="center"><a href="download.php?fname=<?php echo $row['proof'];?>">Proof</a></div></td>
					 <td><div align="center"><a href="download.php?fname=<?php echo $row['account'];?>">Account</a></div></td>
					  <td><div align="center"><a href="download.php?fname=<?php echo $row['land'];?>">Land</a></div></td>
				    <td width="17%"><div align="center"><a href="action.php?id=<?php echo $row['id'];?>">Approve</a></div></td>
				    <td width="15%"><div align="center"><a href="viewins.php?act=add&id=<?php echo $row['id'];?>">Reject</a></div></td>
   </tr>
                  <?php
	}
	
	
	
	
			if($_REQUEST["act"]==('add'))
			{
			
			$id=$_REQUEST['id'];
			
			$qy=mysql_query("update applying set status='Reject' where id='$id'");
			
			
			
			
			echo "Rejected";
			
			
			}
	
	
	
	
	
	
	
	
	?>
                  
</table>
             
   
   
   
   
 
 



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