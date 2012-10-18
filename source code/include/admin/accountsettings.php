<?php
require_once('Student.php');
$student = new Student;

$student->updateStudent($_POST['fname'],$_POST['lname'],$_POST['mi'],$_POST['userpass']);
header('location:index.php');

?>