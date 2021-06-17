<?php include('dbconnect.php'); ?>
<?php
$b_off_id=$_POST['b_off_id'];
$b_resi_id=$_POST['b_resi_id'];
$b_resi_name=$_POST['b_resi_name'];
$b_type=$_POST['b_type'];
$b_date=$_POST['b_date'];
$b_amount=$_POST['b_amount'];
$b_paid_date=$_POST['b_paid_date'];
$b_paid=$_POST['b_paid'];
$sql="insert into bill values('$b_off_id','$b_resi_id','$b_resi_name','$b_type','$b_date','$b_amount','$b_paid_date','$b_paid')";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("New Bill Details Inserted Successfully");
document.location="listbill.php";
</script>