<?php include('dbconnect.php'); ?>
<?php
$o_id=$_POST['o_id'];
$o_name=$_POST['o_name'];
$o_pass=$_POST['o_pass'];
$sql="update office 
set o_name='$o_name',o_pass='$o_pass' 
where o_id='$o_id'";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("Office Details Updated Successfully");
document.location="listoffice.php";
</script>