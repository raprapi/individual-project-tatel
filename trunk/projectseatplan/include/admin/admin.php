<?php
include_once('adminNav.php');

if(!isset($_GET['action'])){
    include_once('adminContent.php');    
}
elseif($_GET['action'] == "homenav"){
    include_once('adminContent.php');    
}
elseif($_GET['action'] == "addmember"){
    include_once('addMemberForm.php');    
}
elseif($_GET['action'] == "updatemember"){
    include_once('displayMember.php');    
}
elseif($_GET['action'] == "addtransaction"){
    include_once('AddTransactionForm.php');    
}
elseif($_GET['action'] == "history"){
    include_once('TransactionHistory.php');    
}
elseif($_GET['action'] == "accountsettings"){
    include_once('accountsettingsform.php');    
}
elseif($_GET['action'] == "logout"){
    session_destroy();
    header('location:index.php');
 
}

?>