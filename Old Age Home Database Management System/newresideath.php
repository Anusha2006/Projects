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
      <th scope="col" width="40">Name</th>
      <th scope="col" width="65">Aadhar Number</td>
      <th scope="col" width="34">Age</td>
      <th scope="col" width="92">Permanent Address</td>
	  <th scope="col" width="79">Mode of Cremation</td>
	  <th scope="col" width="45">Death</td>

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
      <td><?php echo $row['r_cremation']; ?>&nbsp;</td> 
	   <td><a href="newdeath.php?r_id=<?php echo $row['r_id'];?>">Add New Detail</a>&nbsp;</td>
     
	   
    </tr>
 
	<?php 
	}
	?>
  </table>
</form>




