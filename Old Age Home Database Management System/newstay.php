<form name="form1" method="post" action="savestay.php">
  <table width="200" border="5" align="center">
    <tr>
      <th scope="row">INDEPENDENT</th>
      <td>
	   <script>
        function p1()
        {
          var x=document.getElementById("s_mode1");
          if(!x.value.match(/^[0-9]/))
          {
            window.alert("Please Enter valid independent mode info");
            document.getElementById("s_mode1").value="";
            document.form1.s_mode1.focus();
           }
         }
      </script>
	  <input type="text" name="s_mode1" id="s_mode1" required x-moz-errormessage="Please enter this field" onblur="p1()"></td>
    </tr>
    <tr>
      <th scope="row">SEMI-DEPENDENT</th>
      <td>
	   <script>
        function p2()
        {
          var x=document.getElementById("s_mode2");
          if(!x.value.match(/^[0-9]/))
          {
            window.alert("Please Enter valid semi-independent mode info");
            document.getElementById("s_mode2").value="";
            document.form1.s_mode2.focus();
           }
         }
      </script>
	  <input type="text" name="s_mode2" id="s_mode2" required x-moz-errormessage="Please enter this field" onblur="p2()"></td>
    </tr>
    <tr>
      <th scope="row">DEPENDENT</th>
      <td>
	   <script>
        function p3()
        {
          var x=document.getElementById("s_mode3");
          if(!x.value.match(/^[0-9]/))
          {
            window.alert("Please Enter valid dependent mode info");
            document.getElementById("s_mode3").value="";
            document.form1.s_mode3.focus();
           }
         }
      </script>
	  <input type="text" name="s_mode3" id="s_mode3" required x-moz-errormessage="Please enter this field" onblur="p3()" ></td>
    </tr>
    <tr>
      <td><input type="submit" name="Submit" value="Submit"></td>
      <td><input type="reset" name="Clear" value="Clear"></td>
    </tr>
  </table>
</form>
