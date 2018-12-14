<!DOCTYPE html>
<html>
<head></head>
<body font-color="red">
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h1>Registration Form For Sports</h1></td>
</tr><center>
 
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<tr>
    <td align='center'>Name:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Sur Name:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Date Of Birth:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Address:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Phone:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Email:</td>
    <td><input type='text' name='name'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
    <td align='center'>Zip:</td>
    <td><input type='text' name='zip'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
<tr>
         <td align='center'>Extenson:</td>
<td><select>
<?php
    for ($i = 1;$i < 101;$i++)
    {
        echo "<option>$i</option>";
    }
?>
</select><td>
</tr>


<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'><input type='submit' name='REGISTER' value="register"></td>
</tr>



</table>
</table>
 
</table>
</body>
</html>
