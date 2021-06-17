<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$r_id=$_GET['r_id'];
$sql="select * from resident where r_id='$r_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<body>
<form id="form" name="form" method="post" action="UpdateResident.php">
  <table width="400" border="1" align="center">
  <br/>
   <tr>
      <th scope="row" class="lhead" width="50%" height="47">Officer Name </th>
      <td>
	  <input name="r_id" type="hidden" id="r_id" value="<?php echo $row['r_id'];?>" />
	  <select name="r_off_id" id="r_off_id" style="width:195px" required="1">
	  
	  <?php
		     $sql2="select * from office";
 			 $res2=mysql_query($sql2);
			 ?>
		
		<?php
             while($row2=mysql_fetch_array($res2))
	  {		
	     ?>
		 
		 <option value="<?php echo $row2['o_id']; ?>" selected="selected"><?php echo $row2['o_name']; ?></option>
       <?php } ?>
	   <option selected="selected" value="" style="width:195px">SELECT</option>
	    </select>     
      </select>
      </td>
	  <th scope="row" class="lhead" width="50%">Full Name </th>
      <td>
	   <script>
        function nam()
        {
          var x=document.getElementById("r_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_name").value="";
            document.form.r_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_name.focus();
          }
         }
      </script>
	   <input name="r_id" type="hidden" id="r_id" value="<?php echo $row['r_id'];?>" />
        <input type="text" name="r_name" id="r_name" style="width:195px" required x-moz-errormessage="Please Enter Resident Name" onBlur="nam()"value="<?php echo $row['r_name'];?>" />
      </td>
	  <th scope="row" class="lhead" width="50%">Father Name </th>
      <td>
	   <script>
        function fn()
        {
          var x=document.getElementById("r_fath_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_fath_name").value="";
            document.form.r_fath_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_fath_name.focus();
          }
         }
      </script>

        <input type="text" name="r_fath_name" id="r_fath_name" style="width:195px" required x-moz-errormessage="Please Enter Father Name" onBlur="fn()"value="<?php echo $row['r_fath_name'];?>"/>
      </td>
	  <th scope="row" class="lhead" width="50%">Mother Name </th>
      <td>
	  <script>
        function mn()
        {
          var x=document.getElementById("r_moth_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_moth_name").value="";
            document.form.r_moth_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_moth_name.focus();
          }
         }
      </script>
        <input type="text" name="r_moth_name" id="r_moth_name" style="width:195px" required x-moz-errormessage="Please Enter Mother Name" onBlur="mn()"value="<?php echo $row['r_moth_name'];?>"/>
      </td>
  </tr>
   
    <tr>
      <th scope="row" class="lhead" width="50%">DOB</th>
      <td>
        <input type="text" name="r_dob" id="r_dob" style="width:195px" required x-moz-errormessage="Please Select Date Of Birth" value="<?php echo $row['r_dob'];?>"/>
      </td>
      <th scope="row" class="lhead" width="50%">Age</th>
      <td>
	   <script>
	  function age()
        {
          var x=document.getElementById("r_age");
          if(!x.value.match(/^[0-9]{2}$/))
          {
            window.alert("Please Enter Age Of Person");
            document.getElementById("r_age").value="";
            document.form.r_age.focus();
           }
         }
      </script>
        <input type="text" name="r_age" id="r_age" style="width:195px" required x-moz-errormessage="Please Enter Age" onBlur="age()" value="<?php echo $row['r_age'];?>" />
      </td>
	  <th scope="row" class="lhead" width="50%">Birth Place </th>
      <td>
	   <script>
        function bp()
        {
          var x=document.getElementById("r_bir_place");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_bir_place").value="";
            document.form.r_bir_place.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_bir_place.focus();
          }
         }
      </script>
        <input type="text" name="r_bir_place" id="r_bir_place" style="width:195px" required x-moz-errormessage="Please Enter Birth Place" onBlur="bp()"value="<?php echo $row['r_bir_place'];?>"/>
      </td>
	  <th scope="row" class="lhead" width="50%">Aadhar Card No. </th>
      <td>
	  <script>
        function adhr()
        {
          var x=document.getElementById("r_aadhar_no");
          if(!x.value.match(/^[0-9]{12}$/))
          {
            window.alert("Please Enter Valid Aadhar Number");
            document.getElementById("r_aadhar_no").value="";
            document.form.r_aadhar_no.focus();
           }
         }
      </script>
        <input type="text" name="r_aadhar_no" id="r_aadhar_no" onBlur="adhr()" style="width:195px" value="<?php echo $row['r_aadhar_no'];?>"/>
      </td>
      
      
    </tr>
	<tr>
	<th scope="row" class="lhead" width="50%">Religion</th>
      <td>
	  	  <script>
        function r()
        {
          var x=document.getElementById("r_religion");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_religion").value="";
            document.form.r_religion.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_religion.focus();
          }
         }
      </script>

        <input type="text" name="r_religion" id="r_religion" style="width:195px" required x-moz-errormessage="Please Enter Religion" onBlur="r()"value="<?php echo $row['r_religion'];?>"/>
      </td>
	  <th scope="row" class="lhead" width="50%">Caste</th>
      <td>
	  <script>
        function c()
        {
          var x=document.getElementById("r_caste");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_caste").value="";
            document.form.r_caste.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_caste.focus();
          }
         }
      </script>
        <input type="text" name="r_caste" idname="r_caste" style="width:195px" required x-moz-errormessage="Please Enter Caste" onBlur="c()"value="<?php echo $row['r_caste'];?>"/>
      </td>
	  <th scope="row" class="lhead" width="50%">Profession</th>
      <td>
	  <script>
        function p()
        {
          var x=document.getElementById("r_profession");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_profession").value="";
            document.form.r_profession.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_profession.focus();
          }
         }
      </script>
        <input type="text" name="r_profession" id="r_profession" style="width:195px" required x-moz-errormessage="Please Enter Profession" onBlur="p()"value="<?php echo $row['r_profession'];?>"/>
      </td>
	  <th scope="row" class="lhead" width="50%">Mother Tongue </th>
      <td>
	   <script>
        function mt()
        {
          var x=document.getElementById("r_moth_tongue");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("r_moth_tongue").value="";
            document.form.r_moth_tongue.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.r_moth_tongue.focus();
          }
         }
      </script>
        <input type="text" name="r_moth_tongue" id="r_moth_tongue" style="width:195px" required x-moz-errormessage="Please Enter Mother Tongue" onBlur="mt()"value="<?php echo $row['r_moth_tongue'];?>"/>
      </td>
	</tr>
    <tr>
      
      
      <th scope="row" class="lhead" width="50%">Marital Status </th>
      <td>
        <input type="text" name="r_marital_status" id="r_marital_status" style="width:195px" value="<?php echo $row['r_marital_status'];?>"/>
      </td>
	  <th scope="row" class="lhead" width="50%" height="50">Widow/Widower</th>
	  <td>
	  <select name="r_widow" id="r_widow" style="width:195px" required x-moz-errormessage="Please Select Marital Status " >
	  <option selected="selected" value="">SELECT</option>
	  <option value="WIDOW">WIDOW</option>
	  <option value="WIDOWER">WIDOWER</option>
	  <option value="NONE">NONE</option>
      </select>
      </td>
	   <th scope="row" class="lhead" width="50%">Permanent Address </th>
      <td>
        <textarea name="r_permt_add" id="r_permt_add" style="width:195px" required x-moz-errormessage="Please Enter Proper Details" value="<?php echo $row['r_permt_add'];?>"><?php echo $row['r_permt_add'];?></textarea>
      </td>
	  <th scope="row" class="lhead" width="50%">Husband/Wife Name/Phone No. </th>
      <td>
        <textarea name="r_hw_name_phno" id="r_hw_name_phno" style="width:195px" required x-moz-errormessage="Please Enter Proper Details"value="<?php echo $row['r_hw_name_phno'];?>"><?php echo $row['r_hw_name_phno'];?></textarea>
     </td>
      
    </tr>
    <tr>
	<th scope="row" class="lhead" width="50%">Brother/Sister Name/Phone No. </th>
      <td>
        <textarea name="r_bs_name_phno" id="r_bs_name_phno" style="width:195px" required x-moz-errormessage="Please Enter Proper Details"value="<?php echo $row['r_bs_name_phno'];?>"><?php echo $row['r_bs_name_phno'];?></textarea>
      </td>
      <th scope="row" class="lhead" width="50%">Son/Daughter Name/Phone No. </th>
      <td>
         <textarea name="r_sd_name_phno" id="r_sd_name_phno" style="width:195px" required x-moz-errormessage="Please Enter Proper Details"value="<?php echo $row['r_sd_name_phno'];?>"><?php echo $row['r_sd_name_phno'];?></textarea>
      </td>
      <th scope="row" class="lhead" width="50%">Guardian Name and Address </th>
      <td>
        <textarea name="r_gn_add" idname="r_gn_add"  style="width:195px" required x-moz-errormessage="Please Enter Proper Details" value="<?php echo $row['r_gn_add'];?>"><?php echo $row['r_gn_add'];?></textarea>
      </td>
     
      <th scope="row" class="lhead" width="50%">Guardian Phone No. </th>
      <td>
	   <script>
        function p()
        {
          var x=document.getElementById("r_gn_phno");
          if(!x.value.match(/^[0-9]{10}$/))
          {
            window.alert("Please Enter Valid Phone Number");
            document.getElementById("r_gn_phno").value="";
            document.form.r_gn_phno.focus();
           }
         }
      </script>
        <input type="text" name="r_gn_phno" id="r_gn_phno" style="width:195px" required x-moz-errormessage="Please Enter Guardian Phone No." onBlur="p()"value="<?php echo $row['r_gn_phno'];?>" />
      </td>
    </tr>
    <tr>
      
      
      
      
    </tr>
    <tr>
	<th scope="row" class="lhead" width="50%">Mode of Cremation </th>
         <td>
	  <select name="r_cremation" id="r_cremation" style="width:195px" required x-moz-errormessage="Please Select Mode Of Cremation">
	  <option selected="selected" value="">SELECT</option>
	  <option value="BURN">BURN</option>
	  <option value="BURY">BURY</option>
	  <option value="DONATE">DONATE</option>
      </select>
		 </td>
      
      
      
      <th scope="row" class="lhead" width="50%">Mode of Staying </th>
      <td>
      <select name="r_staying" id="r_staying" style="width:195px" required x-moz-errormessage="Please Select Mode Of Cremation">
	  <option selected="selected" value="">SELECT</option>
	  <option value="INDEPENDENT">INDEPENDENT</option>
	  <option value="SEMI-DEPENDENT">SEMI-DEPENDENT</option>
	  <option value="DEPENDENT">DEPENDENT</option>
      </select>

      </td>
    
    </tr>
	<tr>
	
	</tr>
	<tr>
	<td colspan="4" align="center">
  <input type="submit" value="ADD" name="submit" class="btn btn-style-1 btn-lg " />
  </td><td colspan="4" align="center">
  <input type="reset" value="CLEAR" name="clear" class="btn btn-style-1 btn-lg " />
   </td></tr>
  </table>
</form>
</body>

