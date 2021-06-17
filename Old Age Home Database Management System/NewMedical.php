<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$m_resi_id=$_GET['r_id'];
$sql="select r_id,r_name from resident where r_id='$m_resi_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form id="form1" name="form1" method="post" action="SaveMedical.php">
<br/>
  <table width="400" border="5" align="center">
  
    <tr>
      <th width="50%">Resident Name </td>
      <td>
	   <input name="m_resi_id" type="hidden" id="m_resi_id" value="<?php echo $row['r_id'];?>" />
        <input type="text" name="m_resi_name" id="m_resi_name"  style="width:195px" class="form-control" value="<?php echo $row['r_name'];?>"/>
      </td>
    </tr>
    
    <tr>
      <th width="50%">Health Issue </th>
      <td>
		<script>
        function nam()
        {
          var x=document.getElementById("m_hea_issue");
          if(!x.value.match(/^[a-zA-Z,]+[ a-zA-Z,]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("m_hea_issue").value="";
            document.form1.m_hea_issue.focus();
           }
          else
          {
           x.value=x.value.toUpperCase();
           document.form1.m_hea_issue.focus();
          }
         }
      </script>
	      <input type="text" name="m_hea_issue" id="m_hea_issue" class="form-control"  style="width:195px" required x-moz-errormessage="Please Enter Proper Details" onblur="nam()" />
        </td>
    </tr>
    <tr>
      <th width="50%">Blood Group </th>
      <td>
       <script>
	   function name2()
        {
          var x=document.getElementById("m_blood_group");
          if(!x.value.match(/^[a-zA-Z+-]+[ a-zA-Z+-]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("m_blood_group").value="";
            document.form1.m_blood_group.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.m_blood_group.focus();
          }
         }
      </script>
	    <input type="text" name="m_blood_group"  class="form-control" id="m_blood_group" style="width:195px" required x-moz-errormessage="Please Enter Blood Group"  onblur="name2()"/>
      </td>
    </tr>
    <tr>
      <th width="50%">Disabilities</th>
      <td>
	   <script>
        function name3()
        {
          var x=document.getElementById("m_disabilities");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("m_disabilities").value="";
            document.form1.m_disabilities.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.m_disabilities.focus();
          }
         }
      </script>
        <input type="text" name="m_disabilities" id="m_disabilities" style="width:195px"  class="form-control" required x-moz-errormessage="Please Enter Disbailities"  onblur="name3()"/>
      </td>
    </tr>
    <tr>
      <th  width="50%">Medicines Prescribed </th>
      <td>
        <textarea name="m_medi_pres" id="m_medi_pres" style="width:195px" required x-moz-errormessage="Please Enter Medicines"  class="form-control" /></textarea>
      </td>
    </tr>
    <tr>
      <td height="33"align="center">
        <input type="submit" name="Submit" value="ADD"  class="btn btn-style-1 btn-lg "/>
      </td>
      <td  height="33" align="center">
        <input name="Clear" type="reset" id="Clear" value="CLEAR"  class="btn btn-style-1 btn-lg " />
      </td>
    </tr>
  </table>
</form>