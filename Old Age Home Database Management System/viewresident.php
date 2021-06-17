<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$r_id=$_GET['r_id'];
$sql="select * from resident where r_id='$r_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<body>
<form id="form1" name="form1" method="post" action="UpdateResident.php">
  <table width="400" border="1" align="center">
  <br/>
   <tr>
	  <th scope="row" class="lhead" width="50%">Full Name </th>
      <td>
	 <?php echo $row['r_name'];?>
        
      </td>
	  <th scope="row" class="lhead" width="50%">Father Name </th>
      <td>
<?php echo $row['r_fath_name'];?>
        
      </td>
	  <th scope="row" class="lhead" width="50%">Mother Name </th>
      <td>
	  <?php echo $row['r_moth_name'];?>
        
      </td>
  <th scope="row" class="lhead" width="50%">DOB</th>
      <td><?php echo $row['r_dob'];?>
        </td>
  </tr>
   
    <tr>
      
      <th scope="row" class="lhead" width="50%">Age</th>
      <td><?php echo $row['r_age'];?>
	  
        </td>
	  <th scope="row" class="lhead" width="50%">Birth Place </th>
      <td><?php echo $row['r_bir_place'];?>
      </td>
	  <th scope="row" class="lhead" width="50%">Aadhar Card No. </th>
      <td><?php echo $row['r_aadhar_no'];?>
      </td>
    <th scope="row" class="lhead" width="50%">Religion</th>
      <td><?php echo $row['r_religion'];?>
      </td>  
      
    </tr>
	<tr>
	
	  <th scope="row" class="lhead" width="50%">Caste</th>
      <td><?php echo $row['r_caste'];?>
      </td>
	  <th scope="row" class="lhead" width="50%">Profession</th>
      <td>
	 <?php echo $row['r_profession'];?>
      </td>
	  <th scope="row" class="lhead" width="50%">Mother Tongue </th>
      <td>
      <?php echo $row['r_moth_tongue'];?>
      </td>
	<th scope="row" class="lhead" width="50%">Marital Status </th>
      <td><?php echo $row['r_marital_status'];?>
      </td>
	</tr>
    <tr>
      
      
      
	  <th scope="row" class="lhead" width="50%" height="50">Widow/Widower</th>
	  <td>
	  <?php echo $row['r_widow'];?>
      </td>
	   <th scope="row" class="lhead" width="50%">Permanent Address </th>
      <td>
        <?php echo $row['r_permt_add'];?>
      </td>
	  <th scope="row" class="lhead" width="50%">Husband/Wife Name/Phone No. </th>
      <td>
       <?php echo $row['r_hw_name_phno'];?>
     </td>
    <th scope="row" class="lhead" width="50%">Brother/Sister Name/Phone No. </th>
      <td>
        <?php echo $row['r_bs_name_phno'];?>
      </td>  
    </tr>
    <tr>
	
      <th scope="row" class="lhead" width="50%">Son/Daughter Name/Phone No. </th>
      <td>
         <?php echo $row['r_sd_name_phno'];?>
      </td>
      <th scope="row" class="lhead" width="50%">Guardian Name and Address </th>
      <td>
     <?php echo $row['r_gn_add'];?>
      </td>
     
      <th scope="row"  width="50%">Guardian Phone No. </th>
      <td><?php echo $row['r_gn_phno'];?>
	   
      </td>
    <th scope="row"  width="50%">Mode of Cremation </th>
         <td>
	  <?php echo $row['r_cremation'];?>
		 </td>
      
	</tr>
    <tr>
	
      
      
      <th scope="row" class="lhead" width="50%">Mode of Staying </th>
      <td>
      <?php echo $row['r_staying'];?>

      </td>
    
    </tr>
  </table>
</form>
</body>
