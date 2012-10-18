

<div id = "contents">
<h3>Update Record</h3>
<a href="displayMember.php">Back to Home Page</a>
<form name="student" action="UpdateMember.php" method="POST">

<table border=1>
   
    <tr>
        <td>FirstName</td>
        <td><input type="text" name="mfname" value="<?php echo $_GET['mfname']; ?>"/></td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td><input type="text" name="mlname" value="<?php echo $_GET['mlname']; ?>"/></td>
    </tr>
    <tr>
        <td>Middle Initial</td>
        <td><input type="text" name="mmi" value="<?php echo $_GET['mmi']; ?>"/></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><input type="text" name="mgender" value="<?php echo $_GET['mgender']; ?>"/></td>
    </tr>
        <tr>
    </tr>
            <td>Address</td>
        <td><input type="text" name="maddress" value="<?php echo $_GET['maddress']; ?>"/></td>
    </tr>
        <tr>
    </tr>
            <td>Payment</td>
        <td><input type="text" name="mpayment" value="<?php echo $_GET['mpayment']; ?>"/></td>
    </tr>
        <tr>
    </tr>
            <td>Remarks</td>
        <td><input type="text" name="mremarks" value="<?php echo $_GET['mremarks']; ?>"/></td>
    </tr>
        <tr>
        <td colspan=2><input type="submit" value="Update Record"/></td>
    </tr>
</table>  
</form>
</div>