<?php
require_once('MySQLdatabase.php');
 
class Student extends MySQLdatabase{
     
    public function addStudent($fname,$lname,$mi,$gender){
        $this->connectDatabase();
         
        $sQuery = "INSERT INTO student(stud_lname,stud_fname,stud_mi,stud_gender)
                    VALUES ('$fname','$lname','$mi','$gender')";
         
        $result = mysql_query($sQuery); //EXECUTE SQL
    }
     
    public function getStudent(){
        $this->connectDatabase();
        $sQuery = "SELECT stud_id,stud_lname,stud_fname,stud_mi,stud_gender FROM Student ORDER BY stud_lname ASC";
        $result = mysql_query($sQuery);
        $ctr = 0;
         
        while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
            $student[$ctr++] = array('id'=>$row['stud_id'],
                                     'lname'=>$row['stud_lname'],
                                     'fname'=>$row['stud_fname'],
                                     'mi'=>$row['stud_mi'],
                                     'gender'=>$row['stud_gender']);
        }
        
        if(!isset($student)){
            $student = null;
        }
        
        return $student;
    }
    
    public function updateStudent($id,$fname,$lname,$mi,$gender){
        $this->connectDatabase();
        $sQuery = "UPDATE Student SET stud_lname = '$lname', stud_fname = '$fname', stud_mi = '$mi', stud_gender = '$gender'
                   WHERE stud_id = $id";
        $result = mysql_query($sQuery); //EXECUTE SQL
    }
    
    public function deleteStudent($id){
        $this->connectDatabase();
        $sQuery ="DELETE FROM Student WHERE stud_id = $id";
        mysql_query($sQuery);
    }
    
    public function deleteAllStudent($id){
        $this->connectDatabase();
        $sQuery ="DELETE FROM Student";
        mysql_query($sQuery);
    }
    
   public function checkUserAccount($username,$password){
        $this->connectDatabase();
        $sQuery = "SELECT * FROM account WHERE username='$username' and userpass='$password'";
        $result = mysql_query($sQuery);
        $ctr = 0;
        $row = mysql_fetch_row($result);
        if(!isset($row)){
            $row = null;
        }
        return $row;
    }
    
    public function studentGetinfo($username, $userpass, $id){
    $this->connectDatabase();
    $sQuery = "SELECT * FROM student, account WHERE account.username='$username' AND
        account.userpass = '$userpass' AND account.stud_id = student.stud_id ";
    $result = mysql_query ($sQuery);
    $ctr = 0;
    $row = mysql_fetch_row($result);
    
    if(!isset($row)){
            $row = null;
        }
        
    return $row;
        }
        
        
        
   
      public function addMember($mfname,$mlname,$mmi,$mgender,$maddress,$mcontactno,$mpayment,$mremarks){
        $this->connectDatabase();
         
        $mQuery = "INSERT INTO members(member_lname,member_fname,member_mi,member_gender,member_address,member_contactno,member_payment,member_remarks)
                    VALUES ('$mfname','$mlname','$mmi','$mgender','$maddress','$mcontactno','$mpayment','$mremarks')";
         
        $resul1 = mysql_query($mQuery); //EXECUTE SQL
    }
     
    public function getMember(){
        $this->connectDatabase();
        $mQuery = "SELECT member_id,member_lname,member_fname,member_mi,member_gender,member_address,member_contactno,member_payment, member_remarks FROM members ORDER BY member_lname ASC";
        $resul1 = mysql_query($mQuery);
        $mctr = 0;
         
        while($mrow = mysql_fetch_array($resul1, MYSQL_ASSOC))
        {
            $mstudent[$mctr++] = array('mid'=>$mrow['member_id'],
                                     'mlname'=>$mrow['member_lname'],
                                     'mfname'=>$mrow['member_fname'],
                                     'mmi'=>$mrow['member_mi'],
                                     'mgender'=>$mrow['member_gender'],
                                    'maddress'=>$mrow['member_address'],
                                     'mcontactno'=>$mrow['member_contactno'],
                                      'mpayment'=>$mrow['member_payment'],
                                       'mremarks'=>$mrow['member_remarks']
                                     );         
            
        }
        
        if(!isset($mstudent)){
            $mstudent = null;
        }
        
        return $mstudent;
    }
    
    public function updateMember($mid,$mfname,$mlname,$mmi,$mgender,$maddress,$mcontactno,$mpayment,$mremarks){
        $this->connectDatabase();
        $mQuery = "UPDATE members SET member_lname = '$mlname', member_fname = '$mfname', member_mi = '$mmi', member_gender = '$mgender', member_address = '$maddress', member_contactno = '$mcontactno', member_payment = '$mpayment', member_remarks = '$mremarks'
                   WHERE member_id = $mid";
        $resul1 = mysql_query($mQuery); //EXECUTE SQL
    }
    
    public function deleteMember($mid){
        $this->connectDatabase();
        $mQuery ="DELETE FROM members WHERE member_id = $mid";
        mysql_query($mQuery);
    }
    
    public function deleteAllMember($mid){
        $this->connectDatabase();
        $mQuery ="DELETE FROM members";
        mysql_query($mQuery);
    }
        
        
    
       public function addTransaction($tcode,$ttype,$tname,$tamount){
        $this->connectDatabase();
         
        $tQuery = "INSERT INTO transaction(transaction_code,transaction_type,transaction_name,transaction_amount)
                    VALUES ('$tcode','$ttype','$tname','$tamount')";
         
        $result2= mysql_query($tQuery); //EXECUTE SQL
    }
     
     
     
      public function getTransaction(){
        $this->connectDatabase();
        $tQuery = "SELECT transaction_id,transaction_code,transaction_type,transaction_name,transaction_amount FROM transaction ORDER BY transaction_type ASC";
        $resul2 = mysql_query($tQuery);
        $tctr = 0;
         
        while($trow = mysql_fetch_array($resul2, MYSQL_ASSOC))
        {
            $tstudent[$tctr++] = array('tid'=>$trow['transaction_id'],
                                     'tcode'=>$trow['transaction_code'],
                                     'ttype'=>$trow['transaction_type'],
                                     'tname'=>$trow['transaction_name'],
                                     'tamount'=>$trow['transaction_amount']
                                     );         
            
        }
        
        if(!isset($tstudent)){
            $tstudent = null;
        }
        
        return $tstudent;
    }
    
    public function updateTransaction($tid,$tcode,$ttype,$tname,$tamount){
        $this->connectDatabase();
        $tQuery = "UPDATE transaction SET transaction_code= '$tcode', transaction_type = '$ttype', transaction_name = '$tname', transaction_amount= '$tamount'
                   WHERE transaction_id = $tid";
        $resul2 = mysql_query($tQuery); //EXECUTE SQL
    }
    
    public function deleteTransaction($tid){
        $this->connectDatabase();
        $tQuery ="DELETE FROM transaction WHERE transaction_id = $tid";
        mysql_query($tQuery);
    }
    
    public function deleteAllTransaction($tid){
        $this->connectDatabase();
        $tQuery ="DELETE FROM transaction";
        mysql_query($tQuery);
    }
        
        
        
        
        
}









?>