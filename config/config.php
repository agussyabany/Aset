<?php
// date_default_timezone_set('Asia/Jakarta');
// session_start();

// $con = mysqli_connect('localhost','root','','aset');
// if(mysqli_connect_errno()) {
//     echo mysqli_connect_error();
// }


// function base_url($url = null) {
//     $base_url = "http://localhost/Aset";
//     if($url !=null) {
//         return $base_url."/".$url;
// } else {
//     return $base_url;
// }

// }


date_default_timezone_set('Asia/Jakarta');
session_start();
include_once"conn.php";

$con = mysqli_connect($con['host'],$con['user'],$con['pass'],$con['db']);
if(mysqli_connect_errno()) {
    echo mysqli_connect_error();
}
function base_url($url = null) {
    $base_url = "http://Localhost/Aset";
    if($url !=null) {
        return $base_url."/".$url;
} else {
    return $base_url;
}

}


?>
