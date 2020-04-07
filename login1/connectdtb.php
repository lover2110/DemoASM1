<?php
$conn_string = "host= ec2-52-71-231-180.compute-1.amazonaws.com port=5432 dbname=d1uofndelnmrd6 user=fzohixhwumzhrr password=6dbeaa883d3b935ce696b759c80755e80ca2d534d9b9790bbdb5c565a5abbe7f";
$dbconn= pg_connect($conn_string);
if($dbconn)
{
  echo "Welcome to admin services !!!";
}
 else {
    echo "Oops...Have a trouble to Login. Please check again  :(("; 
}
 ?>
