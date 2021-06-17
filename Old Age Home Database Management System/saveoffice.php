<?php include('dbconnect.php'); ?>
<?php
$o_id=$_POST['o_id'];
$o_name=$_POST['o_name'];
$o_pass=$_POST['o_pass'];
$sql="insert into office values(null,'$o_name','$o_pass')";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("New Office Details Inserted Successfully");
document.location="listoffice.php";
</script>
