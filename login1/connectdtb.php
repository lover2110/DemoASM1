<?php
$conn_string = "host= ec2-18-210-51-239.compute-1.amazonaws.com port=5432 dbname=d1m2fqp06oji0j user=hmlrsdhicldsob password=6b954360a0a9a2e988feb716bfe3c818ee5d095d79e3fab516b3d7dcec4ef4a3";
$dbconn= pg_connect($conn_string);
if($dbconn)
{
  echo "Welcome to admin services !!!";
}
 else {
    echo "Oops...Have a trouble to Login. Please check again  :(("; 
}
 ?>
