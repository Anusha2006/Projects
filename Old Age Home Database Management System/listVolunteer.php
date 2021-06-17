<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from volunteer";
$res=mysql_query($sql);
//$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="">
<br/>
  <table width="1048" border="5" align="center">
    <tr>
      <th width="109" height="42" scope="col">Name</th>
      <th width="117" scope="col">Father/Husband name</th>
      <th width="93" scope="col">Date of birth</th>
      <th width="100" scope="col">Profession</th>
      <th width="123" scope="col">Permanent Address</td>
      <th width="129" scope="col">Phone Number</td>
      <th width="110" scope="col">Date of Joining</td>
      <th width="106" scope="col">Date of Leaving</td>
	  <th width="41" scope="col">View</td>
      <th width="48" scope="col">Update</td>    
    </tr>
    <?php
	while($row=mysql_fetch_array($res))
	{
			?>
	<tr>
      <td><?php echo $row['v_name']; ?>&nbsp;</td>
      <td><?php echo $row['v_fh_name']; ?>&nbsp;</td>
      <td><?php echo $row['v_dob']; ?>&nbsp;</td>
      <td><?php echo $row['v_profession']; ?>&nbsp;</td>
      <td><?php echo $row['v_permt_add']; ?>&nbsp;</td>
      <td><?php echo $row['v_phno']; ?>&nbsp;</td>
      <td><?php echo $row['v_date_join']; ?>&nbsp;</td>
      <td><?php echo $row['v_date_leave']; ?>&nbsp;</td>
      <td><a href="viewvolunteer.php?v_id=<?php echo $row['v_id'];?>">Details</a></td>
      <td><a href="editVolunteer.php?v_id=<?php echo $row['v_id'];?>"><img src="images/b_edit.png" /></a>&nbsp;</td>
    </tr>
	<?php
	}
	?>
  </table>
	<br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="newVolunteer.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Add New Information</p></a>
</form>

