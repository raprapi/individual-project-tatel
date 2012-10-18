<?php
require_once('seatplan/seatplan/seatplan/classes/Student.php');
$mstudent = new Student;
$mstudent->deleteMember($_GET['member_id']);
header('location:displayMember.php');
?>