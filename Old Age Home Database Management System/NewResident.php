<?php include('header.php');?>
<?php include('dbconnect.php');?>
<form id="form" name="form" method="post" action="SaveResident.php">
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

  <table width="400" border="1" align="center">
  <tr>
   <th scope="row" width="50%" height="55" class="lhead">Officer Name </th>
      <td><select name="r_off_id" id="r_off_id"  class="form-control" style="width:189px" required x-moz-errormessage="Please Select Officer Name"> 
	  
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
	   <option selected="selected" value="" style="width:189px">SELECT</option>
	    </select>     
      </select>
      </td>
  </tr>
    <tr>
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
        <input type="text" name="r_name" id="r_name"  class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Resident Name" onblur="nam()"/>
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
        <input type="text" name="r_age" id="r_age"  class="form-control"  style="width:189px" required x-moz-errormessage="Please Enter Age Of Person" onblur="age()"/>
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
        <input type="text" name="r_moth_tongue" id="r_moth_tongue"  class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Mother Tounge" onblur="mt()"/>
      </td>
      <th scope="row" class="lhead" width="50%">Son/Daughter Name/Phone No. </th>
      <td>
        <textarea name="r_sd_name_phno" id="r_sd_name_phno"  class="form-control" style="width:189px"></textarea>
      </td>
    </tr>
    <tr>
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
        <input type="text" name="r_fath_name" id="r_fath_name"  class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Father Name" onblur="fn()"/>
      </td>
      <th scope="row" class="lhead" width="50%">Birth Place </th>
      <td>
	  <script>
        function bp()
        {
          var x=document.getElementById("r_bir_place");
          if(!x.value.match(/^[a-zA-Z,]+[ a-zA-Z,]*$/))
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
        <input type="text" name="r_bir_place" id="r_bir_place" class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Birth Place" onblur="bp()"/>
      </td>
      <th scope="row" class="lhead" width="50%">Marital Status </th>
      <td>
	  <select name="r_marital_status" id="r_marital_status"  class="form-control" style="width:189px" required x-moz-errormessage="Please Select Marital Status " >
	  <option selected="selected" value="">SELECT</option>
	  <option value="SINGLE">SINGLE</option>
	  <option value="MARRIED">MARRIED</option>
      </select>
      </td>
      <th scope="row" class="lhead" width="50%">Guardian Name and Address </th>
      <td>
        <textarea name="r_gn_add" id="r_gn_add" style="width:189px"  class="form-control" required x-moz-errormessage="Please Enter Proper Details"></textarea>
     </td>
    </tr>
    <tr>
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
        <input type="text" name="r_moth_name" id="r_moth_name" class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Mother Name" onblur="mn()"/>
      </td>
      <th scope="row" class="lhead" width="50%">Religion</th>
      <td>
	  <script>
        function r()
        {
          var x=document.getElementById("r_religion");
          if(!x.value.match(/^[a-zA-Z,]+[ a-zA-Z,]*$/))
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
        <input type="text" name="r_religion" id="r_religion"  class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Religion" onblur="r()"/>
      </td>
      <th scope="row" class="lhead" width="50%">Permanent Address </th>
      <td>
        <textarea name="r_permt_add" id="r_permt_add" style="width:189px"  class="form-control" required x-moz-errormessage="Please Enter Proper Details"></textarea>
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
        <input type="text" name="r_gn_phno" id="r_gn_phno" style="width:189px"  class="form-control" onblur="p()"/>
      </td>
    </tr>
    <tr>
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
        <input type="text" name="r_aadhar_no" id="r_aadhar_no" style="width:189px" onblur="adhr()" class="form-control"/>
      </td>
      <th scope="row" class="lhead" width="50%">Caste</th>
      <td>
	  <script>
        function c()
        {
          var x=document.getElementById("r_caste");
          if(!x.value.match(/^[a-zA-Z,]+[ a-zA-Z,]*$/))
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
        <input type="text" name="r_caste" id="r_caste" style="width:189px"  class="form-control" required x-moz-errormessage="Please Enter Caste" onblur="c()"/>
      </td>
      <th scope="row" class="lhead" width="50%">Husband/Wife Name/Phone No. </th>
      <td>
        <textarea name="r_hw_name_phno" id="r_hw_name_phno"  style="width:189px"  class="form-control" ></textarea>
      </td>
      <th class="lhead" width="50%">Mode of Cremation </th>
      <td><select name="r_cremation" id="r_cremation" style="width:189px"  class="form-control" required x-moz-errormessage="Please Select Mode Of Cremation">
	  <option selected="selected" value="">SELECT</option>
	  <option value="BURN">BURN</option>
	  <option value="BURY">BURY</option>
	  <option value="DONATE">DONATE</option>
      </select>
      </td>
    </tr>
    <tr>
      <th scope="row" class="lhead" width="50%">DOB</th>
      <td>
        <input type="text" name="r_dob" id="r_dob"  class="form-control"  onfocus="showCalendarControl(this)"  style="width:189px" required x-moz-errormessage="Please Select Date Of Birth"/>
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
        <input type="text" name="r_profession" id="r_profession" class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Profession" onblur="p()"/>
     </td>
      <th scope="row" class="lhead" width="50%">Brother/Sister Name/Phone No. </th>
      <td>
        <textarea name="r_bs_name_phno" id="r_bs_name_phno"  class="form-control" style="width:189px" required x-moz-errormessage="Please Enter Proper Details"></textarea>
      </td>
      <th scope="row" class="lhead" width="50%">Mode of Staying </th>
      <td>
      <select name="r_staying" id="r_staying" style="width:189px" class="form-control" required x-moz-errormessage="Please Select Mode Of Staying">
	  <option selected="selected" value="">SELECT</option>
	  <option value="INDEPENDENT">INDEPENDENT</option>
	  <option value="SEMI-DEPENDENT">SEMI-DEPENDENT</option>
	  <option value="DEPENDENT">DEPENDENT</option>
      </select>
      </td>
    </tr>
	<tr>
	<th scope="row" width="50%" height="50" class="lhead">Widow/Widower</th>
	  <td>
	  <select name="r_widow" id="r_widow" style="width:189px"  class="form-control" required x-moz-errormessage="Please Select Widow/Widower/NONE">
	  <option selected="selected" value="">SELECT</option>
	  <option value="WIDOW">WIDOW</option>
	  <option value="WIDOWER">WIDOWER</option>
	  <option value="NONE">NONE</option>
      </select>
      </td>
	</tr>
 <tr>
 <td height="32" colspan="4" align="center" >
  <input type="submit" value="ADD" name="submit"  class="btn btn-style-1 btn-lg " />
  </td><td colspan="4" align="center" >
  <input type="reset" value="CLEAR" name="clear"  class="btn btn-style-1 btn-lg "/>
   </td></tr></table>
</form>

