<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$m_resi_id=$_GET['m_resi_id'];
$sql="select * from medical where m_resi_id='$m_resi_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form" id = "form" method="post" action="UpdateMedical.php">
  <table width="400" border="5" align="center">
  <br/>
    <tr>
      <th scope="row" class="lhead" width="50%">Resident Name</th>
	    <td><input name="m_resi_id" type="hidden" id="m_resi_id" value="<?php echo $row['m_resi_id'];?>" />
   
      <input name="m_resi_name" type="text" id="m_resi_name" style="width:195px"  class="form-control" value="<?php echo $row['m_resi_name'];?>"></td>
    </tr>
   
    <tr>
      <th scope="row" class="lhead" width="50%">Health Issue</th>
      <td>
	  <script>
        function nam()
        {
          var x=document.getElementById("m_hea_issue");
          if(!x.value.match(/^[a-zA-Z,]+[ a-zA-Z,]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("m_hea_issue").value="";
            document.form.m_hea_issue.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.m_hea_issue.focus();
          }
         }
      </script>
	  <input name="m_hea_issue" type="text" id="m_hea_issue" style="width:195px" value="<?php echo $row['m_hea_issue'];?>" required x-moz-errormessage="Please Enter Proper Details" onblur="nam()" class="form-control"></td>
    </tr>
	
    <tr>
     <th scope="row" class="lhead" width="50%">Blood Group </th>
      <td>
      <script>
        function name2()
        {
          var x=document.getElementById("m_blood_group");
          if(!x.value.match(/^[a-zA-Z+-]+[ a-zA-Z+-]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("m_blood_group").value="";
            document.form.m_blood_group.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.m_blood_group.focus();
          }
         }
      </script>
	  <input name="m_blood_group" type="text" id="m_blood_group" style="width:195px" value="<?php echo $row['m_blood_group'];?>" required x-moz-errormessage="Please Enter Blood Group"  onblur="name2()" class="form-control"></td>
    </tr>
	
    <tr>
      <th scope="row" class="lhead" width="50%">Disabilities</th>
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

	  <input name="m_disabilities" type="text" id="m_disabilities" style="width:195px" value="<?php echo $row['m_disabilities'];?>"  class="form-control" onblur="name3()"></td>
    </tr>
	
    <tr>
      <th scope="row" class="lhead" width="50%">Medicines Prescribed</th>
      <td> 
        <textarea name="m_medi_pres" id="m_medi_pres" style="width:195px"  class="form-control" values="<?php echo $row['m_medi_pres'];?>"><?php echo $row['m_medi_pres'];?></textarea></td>
		</tr>
    <tr>
      <td height="33" align="center"><input type="submit" name="Submit" value="ADD"  class="btn btn-style-1 btn-lg "></td>
      <td height="33" align="center"><input type="reset" name="clear" value="CLEAR" class="btn btn-style-1 btn-lg "></td>
    </tr>
  </table>
</form>