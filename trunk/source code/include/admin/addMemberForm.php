
<div id="content">
    <table>
    <form name="" action="include/admin/AddMember.php" method="POST" enctype="application/x-www-form-urlencoded">
        <tr> <td>Last Name:</td><td colspan=5><input type="Text" name="mlname" value="" required="" /></td></tr>
        <tr><td><br/>   </td></tr>
        <tr> <td>First Name: </td><td colspan=5><input type="Text" name="mfname" value="" required=""/></td> </tr>
        <tr><td><br/>   </td></tr>
        <tr> <td>Middle Initial:</td><td colspan=5><input type="Text" name="mmi" value="" required=""/></td></tr>
        <tr><td><br/>   </td></tr>
        <tr> <td>Gender:</td><td colspan=5><input type="Text" name="mgender" value="" required=""/></td></tr>
        <tr><td><br/>   </td></tr>
            <tr> <td>Address:</td><td colspan=5><input type="Text" name="maddress" value="" required=""/></td></tr>
            <tr><td><br/>   </td></tr>
                <tr> <td>Contact No:</td><td colspan=5><input type="Text" name="mcontactno" value="" required=""/></td></tr>
                <tr><td><br/>   </td></tr>
                    <tr> <td>Add Payment:</td><td colspan=5><input type="Text" name="mpayment" value="" required=""/></td></tr>
                    <tr><td><br/>   </td></tr>
                    <tr> <td>Remarks: </td>
                    <td colspan=4><input type="radio" name="mremarks" value="Paid">Paid</td>
                    <td colspan=4><input type="radio" name="mremarks" value="Partial">Partial</td>
                    <td colspan=4><input type="radio" name="mremarks" value="Not Paid">Not Yet Paid</td>
        <tr><td colspan=6><input type="Submit" value="Add Member"/></td></tr>
    </form>
    </table>
  

</div>