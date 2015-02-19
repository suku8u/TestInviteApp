<?php
// -------------- sqlsrv  LOAD -------------------------------------------


 
 $server = "tcp:wbqa55dhmb.database.windows.net";
 $user = "suku@wbqa55dhmb";
 $pwd = "Stoked88!";
 $db = "InviteDB";

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


 $version = mssql_query('SELECT RSVP FROM dbo.RSVP');
 $row = mssql_fetch_array($version);

 echo $row[0];

 /* Close the connection. */
 sqlsrv_close( $conn);

 ?>
