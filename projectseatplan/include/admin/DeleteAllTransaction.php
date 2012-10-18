<?php

require_once('../../classes/Student.php');
$tstudent = new Student;

$tstudent->deleteAllTransaction();

header('location:TransactionHistory.php');
?>