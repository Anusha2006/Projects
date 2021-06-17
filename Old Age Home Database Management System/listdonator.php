<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from donator";
$res=mysql_query($sql);
?>

<form name="form1" method="post" action="">
<br/>
  <table width="800" border="5" align="center">
    <tr>
      <th width="108" scope="col">Full Name</th>
      <th width="53" scope="col">Date</th>
      <th width="70" scope="col">Amount</th>
      <th width="131" scope="col">Details</th>
      <th width="99" scope="col">Phone Number </th>
      <th width="119" scope="col">Email Id </th>
	  <th width="112" scope="col">Mode Of Payment</th>
      <th width="48" scope="col">Update</th>
    </tr>
		<?php
	while($row=mysql_fetch_array($res))
	{
    		?>
    <tr >
      <td><?php echo $row['d_name']; ?>&nbsp;</td>
      <td><?php echo $row['d_date']; ?>&nbsp;</td>
      <td><?php echo $row['d_amount_item']; ?>&nbsp;</td>
      <td><?php echo $row['d_detail']; ?>&nbsp;</td>
      <td><?php echo $row['d_phno']; ?>&nbsp;</td>
	  <td><?php echo $row['d_email_id']; ?>&nbsp;</td>
      <td><?php echo $row['d_mode_pay']; ?>&nbsp;</td>
      <td><a href="editdonator.php?d_id=<?php echo $row['d_id'];?>"><img src="images/b_edit.png" /></a>&nbsp;</td>
    </tr>
	<?php 
	}
	?>
	</table>
	 <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="newdonator.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Add New Information</p></a>
</form>