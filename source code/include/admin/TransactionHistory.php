<?php
require_once('location:../../classes/Student.php');
$tstudent = new Student;

?>



<div id="contents">

<table border="2" >

    <tr>
        <th colspan=4>TRANSACTION HISTORY</th>
    </tr>
    

        
    <tr>
        <th>Transaction Code</th>
        <th>Transaction Type</th>
        <th>Transaction Description</th>
        <th>Amount</th>
    </tr>
    
    <tr>
    
    <?php
     
    $ctr = 0;
    $student_rec = $tstudent->getTransaction();
    
    if($student_rec != 0){
        for($x=0;$x<count($student_rec);$x++){
            echo "<tr>";
            echo "<td><center>".$student_rec[$x]['tcode']."</center></td>";
            echo "<td><center>".$student_rec[$x]['ttype']."</center></td>";
            echo "<td><center>".$student_rec[$x]['tname']."</center></td>";
            echo "<td><center>".$student_rec[$x]['tamount']."</center></td>";
            echo "</tr>";
            $ctr+=1;
        }
    }
    ?>
    </tr>
    <tr>
    
        <td colspan=3>Total Records: <? echo $ctr ?></td>
        
            
        <td><a href="/seatplan/seatplan/seatplan/include/admin/DeleteAllTransaction.php">Delete All</a></td>
    </tr>
     
</table>

   <?php
// Make a MySQL Connection

echo "<br/>Summary:<br/><br/>";
$query = "SELECT transaction_type, SUM(transaction_amount) FROM transaction GROUP BY transaction_type"; 
	 
$result = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($result)){
	echo $row['transaction_type']. " = ". $row['SUM(transaction_amount)'];
	echo "<br />";
}
?>    
       
</div>