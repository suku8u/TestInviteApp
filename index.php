<?php
// -------------- sqlsrv  LOAD -------------------------------------------


 
 $server = "tcp:wbqa55dhmb.database.windows.net";
 $user = "suku@wbqa55dhmb";
 $pwd = "Stoked88!";
 $db = "testinvapp";

 try{
     $conn = new PDO( "sqlsrv:Server= $server ; Database = $db ", $user, $pwd);
     $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
 }
 catch(Exception $e){
     die(print_r($e));
 }
 
 //-----------------------------------------------
 // Perform operations with connection.
 //-----------------------------------------------


 mssql_query('exec dbo.pr_test', $conn);

 ?>
