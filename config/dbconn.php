<?php
define("DB_SERVER","localhost:3307");
define("DB_USER","root");
define("DB_DATABASE","bsit2alab5");
define("DB_PASS","");

$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_DATABASE);
if($connection -> connect_error){
    die("Error".$connection -> connect_error);
}
