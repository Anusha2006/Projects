<?php include('dbconnect.php');?>
<?php
$r_id=$_POST['r_id'];
$r_off_id=$_POST['r_off_id'];
$r_name=$_POST['r_name'];
$r_fath_name=$_POST['r_fath_name'];
$r_moth_name=$_POST['r_moth_name'];
$r_aadhar_no=$_POST['r_aadhar_no'];
$r_dob=$_POST['r_dob'];
$r_age=$_POST['r_age'];
$r_bir_place=$_POST['r_bir_place'];
$r_religion=$_POST['r_religion'];
$r_caste=$_POST['r_caste'];
$r_profession=$_POST['r_profession'];
$r_moth_tongue=$_POST['r_moth_tongue'];
$r_marital_status=$_POST['r_marital_status'];
$r_widow=$_POST['r_widow'];
$r_permt_add=$_POST['r_permt_add'];
$r_hw_name_phno=$_POST['r_hw_name_phno'];
$r_bs_name_phno=$_POST['r_bs_name_phno'];
$r_sd_name_phno=$_POST['r_sd_name_phno'];
$r_gn_add=$_POST['r_gn_add'];
$r_gn_phno=$_POST['r_gn_phno'];
$r_staying=$_POST['r_staying'];
$r_cremation=$_POST['r_cremation'];
$sql="update resident set r_off_id='$r_off_id',r_name='$r_name',r_fath_name='$r_fath_name',r_moth_name='$r_moth_name',r_aadhar_no='$r_aadhar_no',r_dob='$r_dob',r_age='$r_age',r_bir_place='$r_bir_place',r_religion='$r_religion',r_caste='$r_caste',r_profession='$r_profession',r_moth_tongue='$r_moth_tongue',r_marital_status='$r_marital_status',r_widow='$r_widow',r_permt_add='$r_permt_add',r_hw_name_phno='$r_hw_name_phno',r_bs_name_phno='$r_bs_name_phno',r_sd_name_phno='$r_sd_name_phno',r_gn_add='$r_gn_add',r_gn_phno='$r_gn_phno',r_staying='$r_staying',r_cremation='$r_cremation' where r_id='$r_id'";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert(" Resident Details updated successfully");
document.location="ListResident.php";
</script>