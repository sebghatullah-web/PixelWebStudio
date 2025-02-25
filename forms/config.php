<?php

include_once 'db_connection.php';

if (isset($_POST['submit'])){
$Name = $_POST['name'];
$Email = $_POST['email'];
$Subject = $_POST['subject'];
$Message = $_POST['message'];

echo "YourName: ".$Name ;
}
else{
    echo "connection fiald";
}


?>