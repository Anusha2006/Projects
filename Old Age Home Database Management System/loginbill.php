<?php include('header.php'); ?>
<?php include('dbconnect.php');?>
<link rel="stylesheet" type="text/css" href="CalendarControl.css" />
<script language="JavaScript" src="CalendarControl.js" type="text/javascript"></script>

<form name="form1" method="post" action="">
<br/>
  <table width="375" border="5" align="center" >
    <tr>
      <th width="193" scope="row">Select Resident Name </th>
      <td width="158">
	  <select name="r_id" id="r_id" required="1"  class="form-control" style="width:195px">
	    
          <?php
		     $sql2="select b_resi_id,b_resi_name from bill group by b_resi_id";
 			 $res2=mysql_query($sql2);
             while($row2=mysql_fetch_array($res2))
	         {		
	     ?>
		 <option value="<?php echo $row2['b_resi_id']; ?>"><?php echo $row2['b_resi_name']; ?></option>
       <?php } ?>
	   <option selected="selected" value="">SELECT</option>
      </select>  </td>
    </tr>
  
    <tr>
      <th scope="row">From</th>
      <td><input type="text" name="from" id="from"  class="form-control" style="width:195px" onfocus="showCalendarControl(this)"/></td>
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><input type="text" name="to" id="to"  class="form-control" style="width:195px" onfocus="showCalendarControl(this)"/></td>
    </tr>
    <tr >
      <td colspan="2" align="center"><input type="submit" name="search" value="SUBMIT" class="btn btn-style-1 btn-lg " /></td>
    </tr>
  </table>
	<table width="400" border="5" align="center" >
	<br/>
 <tr>
      <th scope="col">Date</th>
      <th scope="col">Paid on </th>
      <th scope="col">Pay Status </th>
	  <th scope="col">Amount</th>
    </tr>
		<?php      	
		if(isset($_POST['search']))
        {
		 $id=$_POST['r_id'];
         $from=$_POST['from'];
         $to=$_POST['to'];
         $sql="select b_date,b_paid_date,b_paid,b_amount from bill where b_resi_id='$id' and b_date BETWEEN '$from' and '$to'";
         $res=mysql_query($sql); 	
		 $sql2="select sum(b_amount) from bill where b_resi_id='$id' and b_paid='YES' and b_date BETWEEN '$from' and '$to'";
		 $res2=mysql_query($sql2);
		 $row2=mysql_fetch_array($res2);
		 $sql3="select sum(b_amount) from bill where b_resi_id='$id' and b_paid='NO' and b_date BETWEEN '$from' and '$to'";
		 $res3=mysql_query($sql3);
		 $row3=mysql_fetch_array($res3);
	    while($row=mysql_fetch_array($res))
	     {
    ?>
    <tr>
      <td><?php echo $row['b_date']; ?>&nbsp;</td> 
      <td><?php echo $row['b_paid_date']; ?>&nbsp;</td>
      <td><?php echo $row['b_paid']; ?>&nbsp;</td>
	  <td><?php echo $row['b_amount']; ?>&nbsp;</td>
    </tr>
	<?php 
	 }
	?>
	<tr>
	<td colspan="2">
	
	<label>AMOUNT PAID:</label>
	<?php echo $row2['sum(b_amount)']; ?>
	</td>
	<td colspan="2">
	
	<label>AMOUNT REMAINING:</label>
	<?php echo $row3['sum(b_amount)']; ?>
	</td>
	</tr>
	<?php 
	 }
	?>
  </table>
</form>
