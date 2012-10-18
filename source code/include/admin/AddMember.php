<?php

require_once('../../classes/Student.php');
$mstudent = new Student;

if(!empty($_POST['mlname'])AND !empty($_POST['mfname'])
   AND !empty($_POST['mmi'])
   AND !empty($_POST['mgender'])
   AND !empty($_POST['maddress'])
   AND !empty($_POST['mcontactno'])
   AND !empty($_POST['mpayment'])
   AND !empty($_POST['mremarks'])){
        $mstudent->addMember($_POST['mlname'],
                             $_POST['mfname'],
                             $_POST['mmi'],
                             $_POST['mgender'],
                              $_POST['maddress'],
                              $_POST['mcontactno'],
                              $_POST['mpayment'],
                               $_POST['mremarks'])
                              ;
}
header('location:../../index.php');

?>