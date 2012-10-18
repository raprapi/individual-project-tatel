<?php
session_start();
require_once('../classes/Student.php');


$student = new Student;
$studenAccount = $student->checkUserAccount($_POST['username'],$_POST['password']);

if(empty($studenAccount)){
    echo "Invalid username or password";
}
else{
$studentInfo = $student->studentGetinfo($_POST['username'], $_POST['password'], $studenAccount[3]);
    $_SESSION['name'] = $studentInfo[2]." ".$studentInfo[1];
    $_SESSION['login']=1;
}

header('../index.php');
?>