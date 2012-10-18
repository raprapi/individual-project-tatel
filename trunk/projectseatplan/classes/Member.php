<?php
 
class Database{
     
    protected function connectDatabase(){
        $link = mysql_connect('localhost', 'root', ''); //CONNECT TO DATABASE
        $db_selected = mysql_select_db('seatplan', $link); //SELECT DATABASE   
    }
}

 
class Member extends Database{
 

             
        
        
   
      public function addMember($mfname,$mlname,$mmi,$mgender,$maddress,$mcontactno,$mpayment,$mremarks){
        $this->connectDatabase();
         
        $sQuery = "INSERT INTO members(member_lname,member_fname,member_mi,member_gender,member_address,member_contactno,member_payment,member_remarks)
                    VALUES ('$mfname','$mlname','$mmi','$mgender','$maddress','$mcontactno','$mpayment','$mremarks')";
         
        $resul1 = mysql_query($mQuery); //EXECUTE SQL
    }
     
    public function getMember(){
        $this->connectDatabase();
        $mQuery = "SELECT member_id,member_lname,member_fname,member_mi,member_gender,member_address,member_contactno,member_payment, member_mremarks FROM members ORDER BY member_lname ASC";
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
        $resul1 = mysql_query($msQuery); //EXECUTE SQL
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
        
        
        
   
}

?>


