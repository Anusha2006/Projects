<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form id="form1" name="form1" method="post" action="saveVolunteer.php">
<br/>
  <table width="730" border="5" align="center">
    <tr>
      <th scope="row" colspan="2" align="center" width="50%">Officer Name </td>
      <td colspan="2" align="center"><select name="v_off_id" id="v_off_id"  class="form-control"  style="width:195px" required x-moz-errormessage="Please Select Officer Name">
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
        <option selected="selected" value="">SELECT</option>
      </select></td>
  </tr>
    <tr>
      <th scope="row" width="50%">Full Name </td>
      <td width="50%">
	   <script>
        function nam()
        {
          var x=document.getElementById("v_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("v_name").value="";
            document.form1.v_name.focus();
           }
          else
          {
           x.value=x.value.toUpperCase();
           document.form1.v_name.focus();
          }
         }
      </script>
	  <input type="text" name="v_name" id="v_name" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Volunteer Name" onblur="nam()"/></td>

      <th scope="row" width="50%">Father/Husband Name</td>
      <td width="50%">
	   <script>
        function nam1()
        {
          var x=document.getElementById("v_fh_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("v_fh_name").value="";
            document.form1.v_fh_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
           document.form1.v_fh_name.focus();
          }
         }
      </script>
	   <input type="text" name="v_fh_name" id="v_fh_name" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Father/Husabnd Name" onblur="nam1()"/></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Mother/Wife Name </td>
      <td width="50%">
	  <script>
        function nam3()
        {
          var x=document.getElementById("v_m_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("v_m_name").value="";
            document.form1.v_m_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.v_m_name.focus();
          }
         }
      </script>
	  <input type="text" name="v_m_name" id="v_m_name"  class="form-control"  style="width:195px" required x-moz-errormessage="Please Mother/Wife Name" onblur="nam3()"/></td>
 
      <th scope="row" width="50%">Date of Birth </td>
	    <script>
        function nam4()
        {
          var x=document.getElementById("v_dob");
		  Date d= Date().getDate();
	 var c= Date().getDate();
		   var year = new Date().getYear();
		  
		  //date d='/^[2020-01-01]$/';
		  //var z=document.getElementById('d');
          if( d > 2020-01-01 )
          {
            window.alert("Please Enter valid date");
            document.getElementById("v_dob").value="";
            document.form1.v_dob.focus();
           }
        
         }
      </script>   
      <td width="50%"><input type="text" name="v_dob" id="v_dob"  class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Date" onblur="nam4()"/></td>
  </tr>
  <tr>
      <th scope="row" width="50%">Age</td>
      <td width="50%">
	  <script>
        function p()
        {
          var x=document.getElementById("v_age");
          if(!x.value.match(/^[0-9]{2}$/))
          {
            window.alert("Please Proper age");
            document.getElementById("v_age").value="";
           document.form1.v_age.focus();
           }
         }
      </script>
	  <input type="text" name="v_age" id="v_age" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Age" onblur="p()" />	  </td>
    
      <th scope="row" width="50%">Birth Place </td>
      <td width="50%">
	   <script>
        function nam4()
        {
          var x=document.getElementById("v_bir_place");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("v_bir_place").value="";
            document.form1.v_bir_place.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.v_bir_place.focus();
          }
         }
      </script>
	  <input type="text" name="v_bir_place" id="v_bir_place" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Birth Place" onblur="nam4()" />	  </td>
    <tr>
      <th scope="row" width="50%">Religion</td>
      <td width="50%">
	  <script>
        function nam5()
        {
          var x=document.getElementById("v_religion");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("v_religion").value="";
            document.form1.v_religion.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.v_religion.focus();
          }
         }
      </script>
	  <input type="text" name="v_religion" id="v_religion" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Religion" onblur="nam5()"/>	  </td>
   
      <th scope="row" width="50%">Caste</td>
      <td width="50%">
	  <script>
        function nam8()
        {
          var x=document.getElementById("v_caste");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("v_caste").value="";
            document.form1.v_caste.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.v_caste.focus();
          }
         }
      </script>
	  <input type="text" name="v_caste" id="v_caste" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Caste"  onblur="nam8()"/></td>
  </tr>
  <tr>
      <th scope="row" width="50%">Profession</td>
      <td width="50%">
	   <script>
        function nam6()
        {
          var x=document.getElementById("v_profession");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("v_profession").value="";
            document.form1.v_profession.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.v_profession.focus();
          }
         }
      </script>
	  <input type="text" name="v_profession" id="v_profession" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Profession" onblur="nam6()"/></td>
   
      <th scope="row" width="50%">Mother Tongue </td>
      <td width="50%">
	  <script>
        function nam7()
        {
          var x=document.getElementById("v_moth_toungue");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("v_moth_toungue").value="";
            document.form1.v_moth_toungue.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.v_moth_toungue.focus();
          }
         }
      </script>
	  <input type="text" name="v_moth_toungue" id="v_moth_toungue" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Mother Tongue" onblur="nam7()"/></td>
  </tr>
  <tr>
      <th scope="row" width="50%">Permanent Address </td>
	  <td width="50%"><textarea name="v_permt_add" id="v_permt_add"  class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Address" ></textarea></td>
    
    
      <th scope="row" width="50%">Phone Number </th>
      <td width="50%">
	   <script>
        function ph()
        {
          var x=document.getElementById("v_phno");
          if(!x.value.match(/^[0-9]{10}$/))
          {
            window.alert("Please Enter Valid Phone Number");
            document.getElementById("v_phno").value="";
            document.form1.v_phno.focus();
           }
         }
      </script>
	  <input type="text" name="v_phno" id="v_phno" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Caste" onblur="ph()"/>	  </td>
    </tr>
    <tr>
      <th scope="row" width="50%">Aadhaar card no </td>
      <td width="50%">
	  
	  <script>
        function ad()
        {
          var x=document.getElementById("v_aadhar_no");
          if(!x.value.match(/^[0-9]{12}$/))
          {
            window.alert("Please Enter Valid aadhar Number");
            document.getElementById("v_aadhar_no").value="";
            document.form1.v_aadhar_no.focus();
           }
         }
      </script>
	  <input type="text" name="v_aadhar_no" id="v_aadhar_no" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Valid Aadhaar card number" onblur="ad()" /></td>
    
    
      <th scope="row" width="50%">Date of Joining </td>
      <td width="50%"><input type="text" name="v_date_join" id="v_date_join" class="form-control"  style="width:195px" onfocus="showCalendarControl(this)" required x-moz-errormessage="Please enter the date"/></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Date of Leaving </td>
      <td width="50%"><input type="text" name="v_date_leave" id="v_date_leave" class="form-control"  style="width:195px" onfocus="showCalendarControl(this)" required x-moz-errormessage="Please enter the date" /></td>
   
      <th scope="row" width="50%">Salary</td>
      <td width="50%">
	  <script>
        function sal()
        {
          var x=document.getElementById("v_salary");
          if(!x.value.match(/^[0-9]/))
          {
            window.alert("Please Enter Valid salary");
            document.getElementById("v_salary").value="";
            document.form1.v_salary.focus();
           }
         }
      </script>
	  <input type="text" name="v_salary" id="v_salary" class="form-control"  style="width:195px" required x-moz-errormessage="Please enter the salary" onblur="sal()"/></td>
    </tr>
	<tr>
      <th scope="row" width="50%">Mode of Staying</td>
   <td width="50%">
   <select name="v_staying" id="v_staying" class="form-control"  style="width:195px" required x-moz-errormessage="Please Select Mode of staying">
     <option selected="selected" value="">SELECT</option>
	 <option value="residers">Residers</option>
     <option value="outsiders">Outsiders</option>  
   </select>   </td>
   </tr>
    <tr>
      <td width="50%" height="28" colspan="2" align="center">
          <input type="submit" name="Submit" value="Submit"  class="btn btn-style-1 btn-lg " />		  </td>
		  <td colspan="2" align="center" width="50%">
		  <input type="reset" name="clear" value="Clear" class="btn btn-style-1 btn-lg " />      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
