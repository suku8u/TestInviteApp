<?php
$serverName = "tcp:wbqa55dhmb.database.windows.net, 1433";
$connectionOptions = array("Database" => "testinvapp", 
                           "UID" => "suku@wbqa55dhmb",
                           "PWD" => "Stoked88!");
$conn = sqlsrv_connect($serverName, $connectionOptions);
 
if($conn === false)
{
    die(print_r(sqlsrv_errors(), true));
}
 
$createTBLsql = "CREATE TABLE [dbo].[RegistrationTbl]
                (
                    [ID] [int] IDENTITY(1,1) NOT NULL,
                    [Email] [nvarchar](50) NOT NULL,
                    [LastName] [nvarchar](50) NOT NULL,
                    [FirstName] [nvarchar](50) NOT NULL,
                    [RegDate] [datetime] NOT NULL,
                    CONSTRAINT [PK_RegistrationTbl] PRIMARY KEY CLUSTERED 
                    (
                        [ID] ASC
                    )
                )
                CREATE UNIQUE NONCLUSTERED INDEX [IX_UniqueEmail] ON [dbo].[RegistrationTbl] 
                (
                    [Email] ASC
                )";
 
$createTBLstmt = sqlsrv_query($conn, $createTBLsql);
if($createTBLstmt === false)
{
    die(print_r(sqlsrv_errors(), true));
}
else
{
    echo "Table successfully created.";
}
?>