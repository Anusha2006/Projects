<?php include('header1.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from office";
$res=mysql_query($sql);
?>
<form name="form1" method="post" action="">
<br/>
  <table width="476" border="5" align="center">
    <tr>
      <th width="71" scope="col">Office Id </th>
      <th width="148" scope="col">Username</th>
	  <th width="117" scope="col">Password</th>
      <th width="48" scope="col">Update</th>
	  <th width="50" scope="col">Delete</th>
    </tr>
	<?php
	while($row=mysql_fetch_array($res))
	{
    		?>
    <tr>
      <td><?php echo $row['o_id'];?>&nbsp;</td>
      <td><?php echo $row['o_name'];?>&nbsp;</td>
	  <td><?php echo $row['o_pass'];?>&nbsp;</td>
      <td><a href="editoffice.php?o_id=<?php echo $row['o_id'];?>"><img src="images/b_edit.png" /></a>&nbsp;</td>
	  <td><a href="deleteoffice.php?o_id=<?php echo $row['o_id'];?>"><img src="images/b_drop.png" /></a>&nbsp;</td>
    </tr>
	<?php 
	}
	?>
  </table>
  <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="newoffice.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Add New Information</p></a>
</form>
