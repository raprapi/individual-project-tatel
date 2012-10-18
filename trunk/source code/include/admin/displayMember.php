<?php
require_once('location:../../classes/Student.php');
$mstudent = new Student;

?>



<div id="contents">

<table border=1"  >

    <tr>
        <th colspan=15>UPDATE MEMBERS</th>
    </tr>
    

        
    <tr>
        <th>ID</th>
        <th>Last Name</th>
        <th>First Name</th>
        <th>Middle Initial</th>
        <th>Gender</th>
        <th>Address</th>
        <th>Payment</th>
        <th>Remarks</th>
        <th>Action</th>
    </tr>
    
    <?php
     
    $ctr = 0;
    $student_rec = $mstudent->getMember();
    
    if($student_rec != 0){
        for($x=0;$x<count($student_rec);$x++){
            echo "<tr>";
            echo "<td><center>".$student_rec[$x]['mid']."</center></td>";
            echo "<td><center>".$student_rec[$x]['mlname']."</center></td>";
            echo "<td><center>".$student_rec[$x]['mfname']."</center></td>";
            echo "<td><center>".$student_rec[$x]['mmi']."</center></td>";
            echo "<td><center>".$student_rec[$x]['mgender']."</center></td>";
            echo "<td><center>".$student_rec[$x]['maddress']."</center></td>";
            echo "<td><center>".$student_rec[$x]['mpayment']."</center></td>";
            echo "<td><center>".$student_rec[$x]['mremarks']."</center></td>";
            echo '<td><center><a href="/seatplan/seatplan/seatplan/include/admin/UpdateMemberForm.php?id='.$student_rec[$x]['mid']
                        .'&mfname='.$student_rec[$x]['mfname']
                        .'&mlname='.$student_rec[$x]['mlname']
                        .'&mmi='.$student_rec[$x]['mmi']
                        .'&mgender='.$student_rec[$x]['mgender']
                        .'&maddress='.$student_rec[$x]['maddress']
                        .'&mpayment='.$student_rec[$x]['mpayment']
                        .'&mremarks='.$student_rec[$x]['mremarks']
                        .'">Update</a> | <a href="/seatplan/seatplan/seatplan/include/admin/deleteMember.php?stud_id='.$student_rec[$x]['mid'].' ">Delete</a></center></td>';
                        
            echo "</tr>";
            $ctr+=1;
        }
    }
    ?>
    <tr>
    <td></td>
        <td>Total Records</td>
        <td colspan=6><? echo $ctr ?></td>
        <td><a href="/seatplan/seatplan/seatplan/include/admin/DeleteAllMembers.php">Delete All</a></td>
    </tr>
     
</table></div>