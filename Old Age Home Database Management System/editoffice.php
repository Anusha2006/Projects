<?php include('header1.php'); ?>
<?php include('dbconnect.php');?>
<?php
$o_id=$_GET['o_id'];
$sql="select * from office where o_id='$o_id'";
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
?>
<form name="form1" method="post" action="updateoffice.php">
  <table width="400" border="5" align="center">
  <br/>
    <tr>
      <th scope="row" width="50%">Username</th>
      <td>
	  <input name="o_id" type="hidden" id="o_id" value="<?php echo $row['o_id'];?>" />
	   <script>
        function name2()
        {
          var x=document.getElementById("o_name");
          if(!x.value.match(/^[a-zA-Z]+[ a-zA-Z]*$/))
          {
            window.alert("Please Enter Characters Only");
            document.getElementById("o_name").value="";
            document.form1.o_name.focus();
          }
          else
          {
            x.value=x.value.toUpperCase();
            document.form1.o_name.focus();
          }
         }
      </script>
	  <input type="text" name="o_name" id="o_name" class="form-control" value="<?php echo $row['o_name'];?>" required x-moz-errormessage="Please enter name" onblur="name2()"  style="width:195px"></td>
    </tr>
	<tr>
      <th scope="row" width="50%">Password</th>
      <td><input type="text" name="o_pass" id="o_pass" class="form-control" style="width:195px"  value="<?php echo $row['o_pass'];?>" required x-moz-errormessage="Please Enter Password"/></td>
    </tr>
    <tr>
      <td><center><input type="submit" name="Submit" value="ADD" class="btn btn-style-1 btn-lg "></center></td>
      <td><center><input type="reset" name="Clear" value="CLEAR" class="btn btn-style-1 btn-lg "></center></td>
    </tr>
  </table>
</form>
