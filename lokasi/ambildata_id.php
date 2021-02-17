<?php
require_once"../config/config.php";
$Q = mysqli_query($con,"SELECT * FROM lokasi where id_lokasi=".$id)or die(mysql_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));             
}

?>