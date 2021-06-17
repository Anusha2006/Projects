<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$dt_resi_id=$_GET['r_id'];
$sql="select r_id,r_name from resident where r_id='$dt_resi_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form name="form" id = "form" method="post" action="savedonator.php">
<br/>
  <table width="400" border="5" align="center" >
  <tr>
      <th scope="row">Officer Name </th>
      <td><select name="d_off_id" id="d_off_id" class="form-control" required x-moz-errormessage="Please Select Officer Name" style="width:195px"> 
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
      <th scope="row"  width="50%">Full Name</th>
      <td>
	   <script>
        function nam()
        {
          var x=document.getElementById("d_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("d_name").value="";
            document.form.d_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.d_name.focus();
          }
         }
      </script>
	  <input type="text" class="form-control" name="d_name" id="d_name" required x-moz-errormessage="Please Enter Donator Name" onblur="nam()" style="width:195px" align="middle"></td>
    </tr>
    <tr>
      <th scope="row"  width="50%">Date</th>
      <td>
	  
	  <input type="text" name="d_date" id="d_date" onfocus="showCalendarControl(this)" class="form-control" required x-moz-errormessage="Please Select Date" style="width:195px">
	  
	  </td>
    </tr>
    <tr>
      <th scope="row"  width="50%">Amount</th>
      <td>
	  <script>
        function ap()
        {
          var x=document.getElementById("d_amount_item");
          if(!x.value.match(/^[0-9]+$/))
          {
            window.alert("Please Enter Amount");
            document.getElementById("d_amount_item").value="";
            document.form.d_amount_item.focus();
           }
         }
      </script>
	  <input type="text" name="d_amount_item" id="d_amount_item" class="form-control" required x-moz-errormessage="Please Enter Amount" onblur="ap()" style="width:195px"></td>
    </tr>
    <tr>
      <th scope="row"  width="50%">Details</th>
      <td><textarea name="d_detail" id="d_detail" class="form-control"  required x-moz-errormessage="Please Enter Details" style="width:195px"></textarea></td>
    </tr>
    <tr>
      <th scope="row"  width="50%">Phone Number </th>
      <td>
	   <script>
        function p()
        {
          var x=document.getElementById("d_phno");
          if(!x.value.match(/^[0-9]{10}$/))
          {
            window.alert("Please Enter Valid Phone Number");
            document.getElementById("d_phno").value="";
            document.form.d_phno.focus();
           }
         }
      </script>
	  <input type="text" name="d_phno" id="d_phno" class="form-control" required x-moz-errormessage="Please Enter Phone Number" onblur="p()" style="width:195px"></td>
    </tr>
    <tr>
      <th scope="row"  width="50%">Email Id </th>
	   <script>
        function email()
        {
          var x=document.getElementById("d_email_id");
          if(!x.value.match(/^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/)
          {
            window.alert("Please Enter Valid Email ID");
            document.getElementById("d_email_id").value="";
            document.form.d_email_id.focus();
          
         }
      </script>
      <td><input type="text" name="d_email_id" id="d_email_id" class="form-control" style="width:195px" onblur="email()" required x-moz-errormessage="Please Enter Email Address"></td>
    </tr>
	<tr>
	<th scope="row"  width="50%">Mode Of Payment</th>
	<td><select name="d_mode_pay" id="d_mode_pay" class="form-control" required x-moz-errormessage="Please Select Payment Mode" style="width:195px">
	    <option selected="selected" value="">SELECT</option>
	    <option value="cash">Cash</option>
        <option value="cheque">Cheque</option>
        <option value="dd">DD</option>
	<option value="online">Online</option
	  ></select>	</tr>
    <tr>
      <td><center><input class="btn btn-style-1 btn-lg " type="submit" name="Submit" value="ADD"></center></td>
      <td><center><input class="btn btn-style-1 btn-lg " type="reset" name="clear" value="CLEAR"></center></td>
    </tr>
  </table>
</form>