<?php
//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
//Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

$cleardb_server='localhost';
$cleardb_password='';
$cleardb_username='root';
$cleardb_db='mysql:host=127.0.0.1';
$db_name='pictures';

$conn=mysqli_connect($cleardb_server,$cleardb_username,$cleardb_password,$db_name);

if($conn){
    
    
}
else{
    echo ("error occured");
}
?>