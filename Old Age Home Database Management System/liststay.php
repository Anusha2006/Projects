<?php include('header.php'); ?>
<?php include('dbconnect.php'); ?>
<?php
$sql="select * from stay";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="">
  <table width="200" border="5" align="center">
    <tr>
      <th scope="row">INDEPENDENT</th>
      <th scope="row">SEMI-DEPENDENT</th>
      <th scope="row">DEPENDENT</th>
      <th scope="row">Update</th>
      <th scope="row">Delete</th>
    </tr>
    <tr>
      <td><?php echo $row['s_mode1']; ?>&nbsp;</td>
      <td><?php echo $row['s_mode2']; ?>&nbsp;</td>
      <td><?php echo $row['s_mode3']; ?>&nbsp;</td>
      <td><a href="editstay.php?s_id=<?php echo $row['s_id'];?>"><img src="image/b_edit.png" /></a>&nbsp;</td>
      <td><a href="deletestay.php?s_id=<?php echo $row['s_id'];?>"><img src="image/b_drop.png" /></a>&nbsp;</td>
    </tr>
  </table>
</form>

