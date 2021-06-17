<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from resident";
$res=mysql_query($sql);
?>

<form name="form1" method="post" action="">
<br/>
  <table width="1073" border="5" align="center">
    <tr>
      <th scope="col" width="150">Name</th>
      <th scope="col" width="139">Aadhar Number</td>
      <th scope="col" width="56">Age</td>
      <th scope="col" width="149">Permanent Address</td>
	  <th scope="col" width="120">Guardian Name and Address</td>
	  <th scope="col" width="90">Guardian Phone No.</td>
	  <th scope="col" width="87">Mode of Stay</td>
	  <th scope="col" width="70">Mode of Cremation</td>
      <th scope="col" width="53">Photo</td>
      <th scope="col" width="33">View</td>
      <th scope="col" width="48">Update</td>    
    </tr>
	<?php
	while($row=mysql_fetch_array($res))
	{
    		?>
    <tr>
      <td><?php echo $row['r_name']; ?>&nbsp;</td>
      <td><?php echo $row['r_aadhar_no']; ?>&nbsp;</td>
      <td><?php echo $row['r_age']; ?>&nbsp;</td>
      <td><?php echo $row['r_permt_add']; ?>&nbsp;</td>
      <td><?php echo $row['r_gn_add']; ?>&nbsp;</td>
      <td><?php echo $row['r_gn_phno']; ?>&nbsp;</td>
      <td><?php echo $row['r_staying']; ?>&nbsp;</td>
      <td><?php echo $row['r_cremation']; ?>&nbsp;</td>
	  <td><a href="Image.php?r_id=<?php echo $row['r_id'];?>">Upload</a>&nbsp;</td>
      <td><a href="viewresident.php?r_id=<?php echo $row['r_id'];?>">View</a>&nbsp;</td>
	  <td><a href="EditResident.php?r_id=<?php echo $row['r_id'];?>"><img src="images/b_edit.png" /></a>&nbsp;</td>
	   
    </tr>
 
	<?php 
	}
	?>
  </table>
  <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="NewResident.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Add New Information</p></a>
</form>




