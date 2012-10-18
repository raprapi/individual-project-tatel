<?php

class MySQLdatabase{
     
    protected function connectDatabase(){
        $link = mysql_connect('beadysite-db.my.phpcloud.com', 'beadysite', 'treseholder'); //CONNECT TO DATABASE
        $db_selected = mysql_select_db('beadysite', $link); //SELECT DATABASE
    }
}

?>