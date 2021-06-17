<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$v_id=$_GET['v_id'];
$sql="select * from volunteer where v_id='$v_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form name="form" id = "form" method="post" action="">
  <table width="730" border="5" align="center">
  <br/>
    <tr>
      <th width="23%">Full Name </th>
      <td width="28%">	 <?php echo $row['v_name'];?>
	    </td>
      <th width="21%">Father/Husband Name </th>
      <td width="28%">
	   <?php echo $row['v_fh_name'];?></td>
    </tr>
    <tr>
      <th width="23%">Mother /Wife Name </th>
      <td>
	   <?php echo $row['v_m_name'];?></td>
    
      <th width="21%">Date of Birth </th>
      <td>
	  
	  <?php echo $row['v_dob'];?></td>
    </tr>
    <tr>
      <th>Age</th>
      <td><?php echo $row['v_age'];?>
	</td>
   
      <th width="21%">Birth Place </th>
      <td>
	  <?php echo $row['v_bir_place'];?>
	  </td>
    </tr>
    <tr>
      <th width="23%">Religion</th>
      <td>
	  <?php echo $row['v_religion'];?>
	  </td>
   
      <th width="21%">Caste</th>
      <td>
	   <?php echo $row['v_caste'];?></td>
    </tr>
    <tr>
      <th width="23%">Profession</th>
      <td>
	  <?php echo $row['v_profession'];?></td>
      <th width="21%">Mother Tongue </th>
      <td>
	 <?php echo $row['v_moth_toungue'];?>
	  </td>
    </tr>
    <tr>
      <th width="23%">Permanent Addresss </th>      
      <td><?php echo $row['v_permt_add'];?></td>
      <th width="21%">Phone Number </th>
      <td>
	  <?php echo $row['v_phno'];?>
	  </td>
    </tr>
    <tr>
      <th width="23%">Aadhaar Card No </th>
      <td>
	  	  <?php echo $row['v_aadhar_no'];?> 
	 </td>
   
      <th width="21%">Date of Joining </th>
      <td><?php echo $row['v_date_join'];?></td>
    </tr>
    <tr>
      <th width="23%">Date of Leaving </th>
      <td><?php echo $row['v_date_leave'];?></td>
   
      <th width="21%">Salary</th>
      <td>
	  <?php echo $row['v_salary'];?>
	  </td>
    </tr>
 <tr>
      <th width="23%">Mode of Staying</th>
      <td>
	  <?php echo $row['v_staying'];?>
	  
	  </td>
 </tr>
  </table>
</form>