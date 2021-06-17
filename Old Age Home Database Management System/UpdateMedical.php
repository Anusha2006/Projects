<?php include('dbconnect.php'); ?>
<?php
$m_resi_id=$_POST['m_resi_id'];
$m_resi_name=$_POST['m_resi_name'];
$m_hea_issue=$_POST['m_hea_issue'];
$m_blood_group=$_POST['m_blood_group'];
$m_disabilities=$_POST['m_disabilities'];
$m_medi_pres=$_POST['m_medi_pres'];
$sql="update medical set m_resi_name='$m_resi_name',m_hea_issue='$m_hea_issue',m_blood_group='$m_blood_group',m_disabilities='$m_disabilities',m_medi_pres='$m_medi_pres' where m_resi_id='$m_resi_id'";
mysql_query($sql);
?>

<script type="text/javascript" language="php">
alert("Medical Details updated successfully");
document.location="ListMedical.php";
</script>
