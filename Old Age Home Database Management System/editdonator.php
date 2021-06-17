<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$d_id=$_GET['d_id'];
$sql="select * from donator where d_id='$d_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form name="form" id = "form" method="post" action="updatedonator.php">
  <table width="400" border="5" align="center">
  <br/>
    <tr>
      <th scope="row" width="50%">Officer Name </th>
      <td>
	  <input name="d_id" type="hidden" id="d_id" value="<?php echo $row['d_id'];?>" />
	  <select name="d_off_id" id="d_off_id" required="1" class="form-control" style="width:195px">
	  
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
      <th scope="row" width="50%">Name</th>
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
	  <input name="d_name" type="text" id="d_name" class="form-control" value="<?php echo $row['d_name'];?>" style="width:195px" required x-moz-errormessage="Please Enter Donator Name" onblur="nam()" ></td>
    </tr>
  
	 <tr>
      <th scope="row" width="50%">Date</th>
      <td><input name="d_date" type="text" id="d_date" class="form-control" value="<?php echo $row['d_date'];?>" required x-moz-errormessage="Please Select Date" style="width:195px" onfocus="showCalendarControl(this)"></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Amount</th>
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
      <td><input name="d_amount_item" type="text" id="d_amount_item" class="form-control" value="<?php echo $row['d_amount_item'];?>" style="width:195px" required x-moz-errormessage="Please Enter Amount" onblur="ap()"></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Details</th>
      <td><textarea name="d_detail" id="d_detail" class="form-control" value="<?php echo $row['d_detail'];?>"  required x-moz-errormessage="Please Enter Details" style="width:195px"><?php echo $row['d_detail'];?></textarea></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Phone Number </th>
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
      <td><input name="d_phno" type="text" id="d_phno" class="form-control" value="<?php echo $row['d_phno'];?>"  style="width:195px" required x-moz-errormessage="Please Enter Phone Number" onblur="p()"></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Email Id </th>
      <td><input name="d_email_id" type="text" id="d_email_id" value="<?php echo $row['d_email_id'];?>" class="form-control" style="width:195px"></td>
    </tr>
<tr>
	<th scope="row" width="50%">Mode Of Payment</th>
	<td><select name="d_mode_pay" id="d_mode_pay" required x-moz-errormessage="Please Select Payment Mode" class="form-control" style="width:195px">
	    <option selected="selected" value="">Select</option>
	    <option value="cash">Cash</option>
        <option value="cheque">Cheque</option>
        <option value="dd">DD</option>
	<option value="online">Online</option
	  ></select>	</tr>
    <tr>
      <td><center><input type="submit" name="Submit" value="ADD" class="btn btn-style-1 btn-lg "></center></td>
      <td><center><input type="reset" name="clear" value="CLEAR" class="btn btn-style-1 btn-lg "></center></td>
    </tr>
  </table>
</form>
