<?php include('dbconnect.php'); ?>
<?php
$v_id=$_POST['v_id'];
$v_off_id=$_POST['v_off_id']; 
$v_name=$_POST['v_name'];
$v_fh_name =$_POST['v_fh_name'];
$v_m_name=$_POST['v_m_name'];
$v_dob=$_POST['v_dob'];
$v_age=$_POST['v_age'];
$v_bir_place=$_POST['v_bir_place'];
$v_religion=$_POST['v_religion'];
$v_caste=$_POST['v_caste'];
$v_profession=$_POST['v_profession'];
$v_moth_toungue=$_POST['v_moth_toungue'];
$v_permt_add=$_POST['v_permt_add'];
$v_phno=$_POST['v_phno'];
$v_aadhar_no=$_POST['v_aadhar_no'];
$v_date_join=$_POST['v_date_join'];
$v_date_leave=$_POST['v_date_leave'];
$v_salary=$_POST['v_salary'];
$v_staying=$_POST['v_staying'];
$sql="insert into volunteer  values(null,'$v_off_id','$v_name','$v_fh_name','$v_m_name','$v_dob','$v_age','$v_bir_place','$v_religion','$v_caste','$v_profession','$v_moth_toungue','$v_permt_add','$v_phno','$v_aadhar_no','$v_date_join','$v_date_leave','$v_salary','$v_staying')";
mysql_query($sql);
?>
<script type="text/javascript" language="php">
alert("New Volunteer Details Inserted Successfully");
document.location="listVolunteer.php";
</script>

