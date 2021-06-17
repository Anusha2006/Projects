<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from medical";
$res=mysql_query($sql);
?>
<form id="form1" name="form1" method="post" action="">
  <p>&nbsp;</p>
  <table width="680" border="5" align="center">
    <tr class="lhead">
      <th width="128" height="44" scope="cols">Resident Name </th>
      <th width="104" scope="cols">Health Issues </th>
      <th width="93" scope="cols">Blood Group </th>
      <th width="88" scope="cols">Disabilities</th>
      <th width="160" scope="cols">Medicines Prescribed </th>
      <th width="59" scope="cols">Update</th>
    </tr>
	<?php
	while($row=mysql_fetch_array($res))
	{
    ?>
   
	 <tr>
      <td class="<?php echo $style?>"><?php echo $row['m_resi_name']; ?>&nbsp;</td>
      <td class="<?php echo $style?>"><?php echo $row['m_hea_issue']; ?>&nbsp;</td>
      <td class="<?php echo $style?>"><?php echo $row['m_blood_group']; ?>&nbsp;</td>
      <td class="<?php echo $style?>"><?php echo $row['m_disabilities']; ?>&nbsp;</td>
      <td class="<?php echo $style?>"><?php echo $row['m_medi_pres']; ?>&nbsp;</td>
      <td><a href="EditMedical.php?m_resi_id=<?php echo $row['m_resi_id'];?>"><img src="images/b_edit.png" /></a>&nbsp;</td>
    </tr>
  <?php 
	}
	?>
  </table>
  <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="newresimedical.php"><p class="btn btn-style-1 btn-lg1" style="width:250px">Add New Information</p></a>
  <p>&nbsp;</p>
</form>