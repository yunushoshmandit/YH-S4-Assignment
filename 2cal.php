<!DOCTYPE html>
<html>
<body>
 
<?php
ini_set('display_errors',0);
 
if( isset( $_REQUEST['calculate'] ))
{
$operator=$_REQUEST['operator'];
$n1 = $_REQUEST['first_value'];
$n2 = $_REQUEST['second_value'];
 
if($operator=="+")
{
$res= $n1+$n2;
}
if($operator=="-")
{
$res= $n1-$n2;
}
if($operator=="*")
{
$res =$n1*$n2;
}
if($operator=="/")
{
$res= $n1/$n2;
}
 
if($_REQUEST['first_value']==NULL || $_REQUEST['second_value']==NULL)
{
echo "<script language=javascript> alert(\"Please Enter Correct values.\");</script>";
}
}
?>
 
<form>
<table style="border:groove gray">
 
<tr>
<td style="background-color:#666; color:black; font-family:'Times New Roman'">Enter Number to calculate</td>
<td colspan="1">
<input name="first_value" type="text" style="color:black"/></td>
</tr>
 
<tr>
<td style="color:black; font-family:'Times New Roman'">Select desired operator</td>
<td>
<select name="operator" style="width: 63px">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
</select></td>
</tr>
 
<tr>
<td style="background-color:gray; color:black; font-family:'Times New Roman'">Enter 2nd Number</td>
<td class="auto-style5">
<input name="second_value" type="text"  style="color:black"/></td> 
</tr>
 
<tr>
<td></td>
<td><input type="submit" name="calculate" value="Calculate" style="color:Black;background-color:gray" /></td>	 
</tr>
 
<tr>
<td style="background-color:#777;color:black">Output is: </td>
<td style="color:black"><?php echo $res;?></td>
</tr>	
 
</table>
</form>
 
</body>
</html>