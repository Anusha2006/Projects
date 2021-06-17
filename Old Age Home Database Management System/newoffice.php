<?php include('header1.php'); ?>
<form name="form1" method="post" action="saveoffice.php">
  <table width="400" border="5" align="center">
  <br/>
    <tr>
      <th scope="row" width="50%">Username</th>
      <td>
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
	  <input type="text" name="o_name" id="o_name" required x-moz-errormessage="Please Enter Username" onblur="name2()" class="form-control" style="width:195px"\></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td><input type="text" name="o_pass" id="o_pass" style="width:195px"  class="form-control" required x-moz-errormessage="Please Enter Password"/></td>
    </tr>
	<tr>
      <th><center><input type="submit" name="Submit" value="ADD" class="btn btn-style-1 btn-lg "></center></th>
      <td><center><input type="reset" name="Clear" value="CLEAR" class="btn btn-style-1 btn-lg "></center></td>
    </tr>
  </table>
</form>
