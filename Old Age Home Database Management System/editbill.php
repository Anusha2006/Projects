<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<?php
$b_resi_id=$_GET['b_resi_id'];
$b_date=$_GET['b_date'];
$sql="select * from bill where b_resi_id='$b_resi_id' and b_date='$b_date'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form name="form1" method="post" action="updatebill.php">
  <table width="400" border="5" align="center">
  <br/>
  <tr>
      <th scope="row" width="50%">Officer Name </th>
      <td>
	  <input name="b_resi_id" type="hidden" id="b_resi_id" value="<?php echo $row['b_resi_id'];?>" />
	  <select name="b_off_id" id="b_off_id"  class="form-control" required x-moz-errormessage="Please Select Officer Name" style="width:195px"> 
	  
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
      <th scope="row" width="50%">Full Name</th>
      <td>
	  <script>
        function nam()
        {
          var x=document.getElementById("b_resi_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters");
            document.getElementById("b_resi_name").value="";
            document.form.b_resi_name.focus();
           }
          else
          {
            x.value=x.value.toUpperCase();
            document.form.b_resi_name.focus();
          }
         }
      </script>
	  <input name="b_resi_name" type="text" id="b_resi_name" value="<?php echo $row['b_resi_name'];?>"  required x-moz-errormessage="Please Enter Billing Name" onblur="nam()" style="width:195px" class="form-control"></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Type</th>
      <td><input type="text" name="b_type" id="b_type"  value="<?php echo $row['b_type'];?>" style="width:195px" class="form-control"/></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Date</th>
      <td>
	  <input name="b_date2" type="hidden" id="b_date2" value="<?php echo $row['b_date'];?>" />
	  <input type="text" name="b_date" id="b_date" value="<?php echo $row['b_date'];?>" style="width:195px" class="form-control" onfocus="showCalendarControl(this)"/></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Amount</th>
	  <script>
        function ap()
        {
          var x=document.getElementById("b_amount");
          if(!x.value.match(/^[0-9]+$/))
          {
            window.alert("Please Enter Amount");
            document.getElementById("b_amount").value="";
            document.form.b_amount.focus();
           }
         }
      </script>
      <td><input type="text" name="b_amount" id="b_amount" value="<?php echo $row['b_amount'];?>"  required x-moz-errormessage="Please Enter  Amount" onblur="ap()" style="width:195px"></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Paid On </th>
      <td><input type="text" name="b_paid_date" id="b_paid_date" value="<?php echo $row['b_paid_date'];?>"  class="form-control"  style="width:195px"  onfocus="showCalendarControl(this)"></td>
    </tr>
    <tr>
      <th scope="row" width="50%">Pay Status </th>
      <td><select name="b_paid" id="b_paid" required x-moz-errormessage="Please Enter Pay Status" style="width:195px" class="form-control">
	  <option selected="selected" value="">SELECT</option>
	  <option value="YES">YES</option>
	  <option value="NO">NO</option>
      </select>     </td>
    </tr>
    <tr>
      <td><center><input type="submit" name="Submit" value="ADD" class="btn btn-style-1 btn-lg "></center></td>
      <td><center><input type="reset" name="Clear" value="CLEAR" class="btn btn-style-1 btn-lg "></center></td>
    </tr>
  </table>
</form>
