<?php include('dbconnect.php'); ?>
<?php
$m_resi_id=$_POST['m_resi_id'];
$m_resi_name=$_POST['m_resi_name'];
$m_hea_issue=$_POST['m_hea_issue'];
$m_blood_group=$_POST['m_blood_group'];
$m_disabilities=$_POST['m_disabilities'];
$m_medi_pres=$_POST['m_medi_pres'];
$sql="insert into medical values('$m_resi_id','$m_resi_name','$m_hea_issue','$m_blood_group','$m_disabilities','$m_medi_pres')";
mysql_query($sql);
?>

<script type="text/javascript" language="php">
alert("New Medical Details inserted successfully");
document.location="ListMedical.php";
</script>