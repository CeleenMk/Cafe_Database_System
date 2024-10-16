<?php
$db_server = "localhost";
$db_user ="root";
$db_pass ="";
$db_name="Cafe_Management_db";
$conn ="";

$conn =mysqli_connect($db_server,
                     $db_user, 
                     $db_pass,
                      $db_name);

if ($conn){
    echo " Yayy you are connected!";
}
else{
    echo "NOT CONNECTED";

}
?>