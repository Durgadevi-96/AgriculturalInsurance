<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	$fid=$_SESSION['uid'];
	$ins=$_REQUEST['fid'];
if(isset($_POST['btn']))
{

	$imgpath=$_FILES['proof']['name'];
	  $errors= array();
      $fname1 = $_FILES['proof']['name'];
// $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['proof']['tmp_name'];
     // $file_type=$_FILES['image']['type'];

  move_uploaded_file($_FILES['proof']['tmp_name'],"files/".$fname1);
  
  
  
  $imgpath1=$_FILES['acount']['name'];
	  $errors1= array();
      $fname2 = $_FILES['acount']['name'];
// $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['acount']['tmp_name'];
     // $file_type=$_FILES['image']['type'];

  move_uploaded_file($_FILES['acount']['tmp_name'],"files/".$fname2);
  
   $imgpath2=$_FILES['land']['name'];
	  $errors2= array();
      $fname3 = $_FILES['land']['name'];
// $file_size =$_FILES['image']['size'];
     $file_tmp =$_FILES['land']['tmp_name'];
     // $file_type=$_FILES['image']['type'];

  move_uploaded_file($_FILES['land']['tmp_name'],"files/".$fname3);

	$max_qry = mysql_query("select max(id) from  applying");
		$max_row = mysql_fetch_array($max_qry); 
		$id=$max_row['max(id)']+1;

$qry=mysql_query("insert into  applying values('$id','$fid','$name','$fname1','$fname2','$fname3','','')");
	if($qry)
	{
	
	echo "<script>alert('Inserted Sucessfully')</script>";
	
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
      <th scope="col"><a href="fhome.php">Farmers Home</a></th>
      <th scope="col"><a href="view.php">View  Insurance</a></th>
      <th scope="col"><a href="index.php">LogOut </a></th>
    </tr>
  </table>
  

  
  
  <p>&nbsp;</p>
  <div id="content">
   <img src="images\1.jpg" width="1420" height="200">

   <form id="f1" name="f1" method="post" action="#"   enctype="multipart/form-data">
  <table width="36%" height="517" border="0" align="center">

    <tr>
	<td colspan="2"  align="center" ><div class="style5"><h3>New Farmer Registation</h></div></td>
    </tr>
   <tr>
      <td width="34%" height="54">Your Name</td>
      <td width="66%"><input name="name" type="text" id="name" required />
      </td>
    </tr>
  
  <tr>
      <td height="34">Proof</td>
      <td>
        <input name="proof" type="file" id="proof"  required/>
      </td>
    </tr>
	 <tr>
      <td height="40">Account Details</td>
      <td><input name="acount" type="file" id="acount" required /></td>
      
    </tr>
	  <tr>
      <td height="37">land Details </span></td>
      <td><input name="land" type="file" id="land"  required/></td>
      
    </tr>
 
 
 		<tr>
      <td>&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
 
 
  
 
 
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