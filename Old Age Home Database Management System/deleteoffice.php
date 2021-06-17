<?php include('dbconnect.php');?>
<?php
$o_id=$_GET['o_id'];
$sql="delete from office where o_id='$o_id'";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("Office Details Deleted Successfully");
document.location="listoffice.php";
</script>