
<div id="sidebar">

<div id= "welcome">

 <?php
    echo "<br>"."Welcome ".$_SESSION['name']."! ";

  ?>
  <div id= "break"><center>[Beadysite Admin]</center></div>
</div>

<center>

 <div id="menu3">
 <ul>
  <li><a href="index.php?action=homenav">Home</a></li>
    <li><a href="index.php?action=addmember">Add Member</a></li>
     <li><a href="index.php?action=updatemember">Update Member</a></li>
    <li><a href="index.php?action=addtransaction">Add Transaction</a> </li>
    <li><a href="index.php?action=history">Transaction History</a></li>
    <li><a href="index.php?action=logout">[Log Out]</a></li>
 </ul>
 </div>
 
 

</center>



 </div>