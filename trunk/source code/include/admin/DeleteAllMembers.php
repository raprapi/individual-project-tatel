<?php

require_once('../../classes/Student.php');
$mstudent = new Student;

$mstudent->deleteAllMember();

header('location:displayMember.php');
?>