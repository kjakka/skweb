
<?php

// Enter username and password
$username = 'adminR4Ltur9';
$password = 'zjQeA1RT-wYr';

define('DB_HOST', getenv('OPENSHIFT_MYSQL_DB_HOST'));
define('DB_PORT', getenv('OPENSHIFT_MYSQL_DB_PORT'));

// Create database connection using PHP Data Object (PDO)
$db = new PDO("mysql://".DB_HOST.":".DB_PORT.";dbname=php", $username, $password);

var_dump($db);

// Identify name of table within database
$table = 'tb_provider';
$serviceType=$_REQUEST['serviceType'];
// Create the query - here we grab everything from the table
$stmt = $db->query('SELECT * from '.$table." where profession='".$serviceType."'");

var_dump($stmt);

// Close connection to database
$db = NULL;
header('Content-Type: application/json');
$stmt->execute();
$results=$stmt->fetchAll(PDO::FETCH_ASSOC);
$json=json_encode($results);
 echo $json;
 exit();

<? /*Root User: adminR4Ltur9
   Root Password: zjQeA1RT-wYr
   Database Name: php

Connection URL: mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/

You can manage your new MySQL database by also embedding phpmyadmin.
The phpmyadmin username and password will be the same as the MySQL credentials above.

Please make note of these MySQL credentials again:
  Root User: adminR4Ltur9
  Root Password: zjQeA1RT-wYr
URL: https://php-skweb.rhcloud.com/phpmyadmin/
*/ ?>
