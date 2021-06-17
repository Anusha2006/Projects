<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from resident";
$res=mysql_query($sql);
?>

<form name="form1" method="post" action="">
<br/>
  <table width="950" border="5" align="center">
    <tr>
      <th scope="col" width="64">Name</th>
      <th scope="col" width="102">Aadhar Number</td>
      <th scope="col" width="55">Age</td>
      <th scope="col" width="143">Permanent Address</td>
	  <th scope="col" width="99">Mode of Stay</td>
      <th scope="col" width="74">Bill</th>

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
      <td><?php echo $row['r_staying']; ?>&nbsp;</td>
      <td><a href="newbill.php?r_id=<?php echo $row['r_id'];?>">Add New Detail</a>&nbsp;</td>
	
	   
    </tr>
 
	<?php 
	}
	?>
  </table>
</form>




