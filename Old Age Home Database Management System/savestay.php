<?php include('dbconnect.php'); ?>
<?php
$s_id=$_POST['s_id '];
$s_mode1=$_POST['s_mode1'];
$s_mode2=$_POST['s_mode2'];
$s_mode3=$_POST['s_mode3'];
$sql="insert into stay values(null,'$s_mode1',$s_mode2',$s_mode3')";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("New Stay Details inserted successfully");
document.location="liststay.php";
</script>
