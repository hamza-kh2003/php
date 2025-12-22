
<?php
require_once "Database.php";
$db = new Database(
    "localhost",
    "test-db",
    "root",
    ""
);



 if($db->getConnection()){
  echo "Connected successfully";
 }





