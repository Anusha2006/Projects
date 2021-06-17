<?php include('dbconnect.php'); ?>
<?php
$d_id=$_POST['d_id'];
$d_off_id=$_POST['d_off_id']; 
$d_name=$_POST['d_name'];
$d_date=$_POST['d_date'];
$d_amount_item=$_POST['d_amount_item'];
$d_detail=$_POST['d_detail'];
$d_phno=$_POST['d_phno'];
$d_email_id=$_POST['d_email_id'];
$d_mode_pay=$_POST['d_mode_pay'];
$sql="insert into donator values(null,'$d_off_id','$d_name','$d_date','$d_amount_item','$d_detail','$d_phno','$d_email_id','$d_mode_pay')";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("New Donator Details Inserted Successfully");
document.location="listdonator.php";
</script>