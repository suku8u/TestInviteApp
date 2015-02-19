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
 

// -------------------------------------------------------------------------

// -------------- execute query ----------------------------------------------------------------------------------------
$tsql = "SELECT RSVP FROM dbo.RSVP";
$stmt = sqlsrv_query( $conn, $tsql);

        if( $stmt === false)
          {
             echo "Error in query preparation/execution.\n";
             die( print_r( sqlsrv_errors(), true));
          }

?>
