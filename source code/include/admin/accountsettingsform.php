

<div id = "contents">
<form name="student" action="/seatplan/seatplan/seatplan/include/admin/accountsettings.php" method="POST">

<table >
   
    <tr>
        <td>FirstName</td>
        <td><input type="text" name="fname" value="<?php echo $_GET['fname']; ?>"/></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="lname" value="<?php echo $_GET['lname']; ?>"/></td>
    </tr>
    <tr>
        <td>Middle Initial</td>
        <td><input type="text" name="mi" value="<?php echo $_GET['mi']; ?>"/></td>
    </tr>
        
        <tr>
        <td colspan=2><input type="submit" value="Update Record"/></td>
    </tr>
</table>  
</form>
</div>