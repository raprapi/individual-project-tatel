<?php

require_once('../../classes/Student.php');
$tstudent = new Student;

if(!empty($_POST['tcode'])AND !empty($_POST['ttype'])
   AND !empty($_POST['tname'])
   AND !empty($_POST['tamount']))
{
        $tstudent->addTransaction($_POST['tcode'],
                             $_POST['ttype'],
                             $_POST['tname'],
                             $_POST['tamount'])
                              ;
}
header('location:../../index.php');

?>