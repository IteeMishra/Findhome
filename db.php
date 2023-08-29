<?php

define('DBSERVER','localhost');
define('DBUSERNAME','root');
define('DBPASSWORD','');
define('DBNAME','findhome');

/**connect to my sqldatabase */

$db=mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

// check db connection


if($db){

 //echo "connected";

}
if($db=== false){

    echo "not connected";
    die("Error: connection error. " .mysqli_connect_error());
}
?>