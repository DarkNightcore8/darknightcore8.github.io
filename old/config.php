
<?php

define('DB_SERVER', 'sql207.byetcluster.com');
define('DB_USERNAME', 'epiz_31055742');
define('DB_PASSWORD', 'OCQTI0WoTB5Z');
define('DB_NAME', 'epiz_31055742_systemlogin');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
