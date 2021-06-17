<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from bill";
$res=mysql_query($sql);
?>
<form name="form1" method="post" action="">
<br/>
  <table width="500" border="5" align="center">
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Type</th>
      <th scope="col">Date</th>
      <th scope="col">Amount</th>
      <th scope="col">Paid On </th>
      <th scope="col">Pay Status </th>
      <th scope="col">Update</th>
    </tr>
		<?php
	while($row=mysql_fetch_array($res))
	{
    		?>
    <tr>
      <td><?php echo $row['b_resi_name']; ?>&nbsp;</td>
      <td><?php echo $row['b_type']; ?>&nbsp;</td>
      <td><?php echo $row['b_date']; ?>&nbsp;</td>
      <td><?php echo $row['b_amount']; ?>&nbsp;</td>
      <td><?php echo $row['b_paid_date']; ?>&nbsp;</td>
      <td><?php echo $row['b_paid']; ?>&nbsp;</td>
      <td> <a href="editbill.php?b_resi_id=<?php echo $row['b_resi_id'];?>&b_date=<?php echo $row['b_date'];?>">
	  <img src="images/b_edit.png" /></a>
	  </td>
    </tr>
	<?php 
	}
	?>
  </table>
   <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="newresibill.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Add New Information</p></a>
 <a href="loginbill.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Click Here For Total Bill</p></a>
</form>