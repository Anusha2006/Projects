
<?php include('dbconnect.php');?>
<?php 
$o_name=$_GET['o_name'];
$o_pass=$_GET['o_pass'];
$sql="select  * from office where o_name='$o_name' and o_pass='$o_pass'";
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{
$row=mysql_fetch_array($result);

$_SESSION['o_name']=$o_name;
$_SESSION['o_pass']=$o_pass;
	header("location: list.php"); 
} 
else
{
?>
<script>
alert("Invalid login details... Try Again!!");
history.back();
</script>
<?php
}
?>