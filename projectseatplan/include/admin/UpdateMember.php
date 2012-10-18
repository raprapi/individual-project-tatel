<?php
require_once('../../Student.php');
$mstudent = new Student;

$mstudent->updateMember($_POST['mfname'],$_POST['mlname'],$_POST['mmi'],$_POST['mgender'],$_POST['memailadd'],$_POST['mpayment'],$_POST['mremarks']);
header('location:displayMember.php');

?>