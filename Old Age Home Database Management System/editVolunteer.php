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

<form name="form" id = "form" method="post" action="updateVolunteer.php">
  <table width="730" border="5" align="center">
  <br/>
   <tr>
      <th colspan="2" align="center">Officer Name </th>
      <th colspan="2" align="center">
	  <input name="v_id" type="hidden" id="v_id" value="<?php echo $row['v_id'];?>"  class="form-control"/>
	  <select name="v_off_id" id="v_off_id" required="1" class="form-control"  style="width:195px">
	  
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
	    </select>     
      </select>
      </td>
  </tr>
    <tr>
      <th width="23%">Full Name </th>
      <td width="28%">	   
	    <script>
        function nam()
        {
          var x=document.getElementById("v_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
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
	  <input name="v_name" type="text" id="v_name"  style="width:195px" class="form-control" value="<?php echo $row['v_name'];?>" required x-moz-errormessage="Please enter Volunteer Name" onblur="nam()"></td>
   
      <th width="21%">Father/Husband Name </th>
      <td width="28%">
	   <script>
        function nam1()
        {
          var x=document.getElementById("v_fh_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
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
	  <input name="v_fh_name" type="text" id="v_fh_name" style="width:195px" value="<?php echo $row['v_fh_name'];?>" required x-moz-errormessage="Please enter Father/Husband Name" onblur="nam1()" class="form-control" ></td>
    </tr>
    <tr>
      <th width="23%">Mother /Wife Name </th>
      <td>
	   <script>
        function nam3()
        {
          var x=document.getElementById("v_m_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
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
	  <input name="v_m_name" type="text" id="v_m_name" style="width:195px" value="<?php echo $row['v_m_name'];?>" required x-moz-errormessage="Please enter Mother /Wife Name" onblur="nam3()" class="form-control" ></td>
    
      <th width="21%">Date of Birth </th>
      <td>
	  
	  <input name="v_dob" type="text" id="v_dob" style="width:195px" value="<?php echo $row['v_dob'];?>" required x-moz-errormessage="Please Select Date" class="form-control" onfocus="showCalendarControl(this)"></td>
    </tr>
    <tr>
      <th>Age</th>
      <td>
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
	  <input name="v_age" type="text" id="v_age"  class="form-control" style="width:195px" value="<?php echo $row['v_age'];?>" required x-moz-errormessage="Please Enter Age" onblur="p()" ></td>
   
      <th width="21%">Birth Place </th>
      <td>
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
	  <input name="v_bir_place" type="text" id="v_bir_place" style="width:195px" value="<?php echo $row['v_bir_place'];?>" required x-moz-errormessage="Please enter birth place" onblur="nam4()" class="form-control"></td>
    </tr>
    <tr>
      <th width="23%">Religion</th>
      <td>
	  <script>
        function nam5()
        {
          var x=document.getElementById("v_religion");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
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
	  <input name="v_religion" type="text" id="v_religion" value="<?php echo $row['v_religion'];?>" required x-moz-errormessage="Please enter Religion" onblur="nam5()"  class="form-control" style="width:195px"></td>
   
      <th width="21%">Caste</th>
      <td>
	    <script>
        function nam8()
        {
          var x=document.getElementById("v_caste");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
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
	  <input name="v_caste" type="text" id="v_caste" value="<?php echo $row['v_caste'];?>" required x-moz-errormessage="Please enter Caste" onblur="nam8()" class="form-control" style="width:195px"></td>
    </tr>
    <tr>
      <th width="23%">Profession</th>
      <td>
	   <script>
        function nam6()
        {
          var x=document.getElementById("v_profession");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
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
	  <input name="v_profession" type="text" id="v_profession" value="<?php echo $row['v_profession'];?>" required x-moz-errormessage="Please enter Profession" onblur="nam6()"  class="form-control" style="width:195px"></td>
    
      <th width="21%">Mother Tongue </th>
      <td>
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
	  <input name="v_moth_toungue" type="text" id="v_moth_toungue" value="<?php echo $row['v_moth_toungue'];?>" required x-moz-errormessage="Please enter Mother Tongue" onblur="nam7()" class="form-control" style="width:195px"></td>
    </tr>
    <tr>
      <th width="23%">Permanent Addresss </th>      
      <td><textarea name="v_permt_add" id="v_permt_add" style="width:195px" class="form-control" required x-moz-errormessage="Please enter Address" value="<?php echo $row['v_permt_add'];?>"><?php echo $row['v_permt_add'];?></textarea></td>
      <th width="21%">Phone Number </th>
      <td>
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
	  <input name="v_phno" type="text" id="v_phno" style="width:195px" value="<?php echo $row['v_phno'];?>"  class="form-control"  required x-moz-errormessage="Please enter Cast" onblur="ph()" ></td>
    </tr>
    <tr>
      <th width="23%">Aadhaar Card No </th>
      <td>
	  	  
	  <script>
        function ad()
        {
          var x=document.getElementById("v_aadhar_no");
          if(!x.value.match(/^[0-9]{16}$/))
          {
            window.alert("Please Enter Valid Phone Number");
            document.getElementById("v_aadhar_no").value="";
            document.form1.v_aadhar_no.focus();
           }
         }
      </script>
	  <input name="v_aadhar_no" type="text" id="v_aadhar_no" style="width:195px" value="<?php echo $row['v_aadhar_no'];?>" required x-moz-errormessage="Please enter valid adhaar card number" onblur="ad()" class="form-control" ></td>
   
      <th width="21%">Date of Joining </th>
      <td><input name="v_date_join" type="text" id="v_date_join" style="width:195px" value="<?php echo $row['v_date_join'];?>" required x-moz-errormessage="Please enter the date"  class="form-control" onfocus="showCalendarControl(this)"></td>
    </tr>
    <tr>
      <th width="23%">Date of Leaving </th>
      <td><input name="v_date_leave" type="text" id="v_date_leave" style="width:195px" value="<?php echo $row['v_date_leave'];?>" required x-moz-errormessage="Please enter the date" class="form-control" onfocus="showCalendarControl(this)"></td>
   
      <th width="21%">Salary</th>
      <td>
	   <script>
        function sal()
        {
          var x=document.getElementById("v_salary");
          if(!x.value.match(/^[0-9]/))
          {
            window.alert("Please Enter Valid detail");
            document.getElementById("v_salary").value="";
            document.form1.v_salary.focus();
           }
         }
      </script>
	  <input name="v_salary" type="text" id="v_salary" style="width:195px" value="<?php echo $row['v_salary'];?>" required x-moz-errormessage="Please enter the salary" onblur="sal()" class="form-control"></td>
    </tr>
 <tr>
      <th width="23%">Mode of Staying</th>
      <td><select name="v_staying" id="v_staying" style="width:195px"  required x-moz-errormessage="Please Select Mode of staying"  
	  class="form-control">
     <option selected="selected">SELECT</option>
	 <option value="residers">Residers</option>
     <option value="outsiders">Outsiders</option>  
   </select></td>
 </tr>
 <tr>
      <td colspan="2" align="center">
        <input type="submit" name="Submit" value="ADD" class="btn btn-style-1 btn-lg "/>		  </td>
		  <td colspan="2" align="center">
		  <input type="reset" name="clear" value="CLEAR" class="btn btn-style-1 btn-lg "/>      </td>
    </tr>
  </table>
</form>