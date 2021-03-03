<?php
session_start();
include "../config/con1.php";
$user_id='';
// if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
//             if(!empty($_COOKIE['user'])){
//                 $user_id=$_COOKIE['user'];
//             }
//             if(!empty($_SESSION['user'])){
//                 $user_id=$_SESSION['user'];
//             }
// }
	$res='';

if(!empty($_POST['data']) && !empty($_SESSION['card-info'])){
  foreach ($_SESSION['card-info'] as $key => $value) {
     if($key=='id'){
        $id=$value;
     }
     elseif($key=='card_name'){
        $card_name=$value;
     }
     elseif($key=='name_collection'){
       $name_collection=$value;
     }
     elseif($key=='description'){
      $description=$value;
     }
     else{}

  }

	$data=$_POST['data'];
	$format_image='png';
    $base64_string = explode( ',', $data);
    $pos  = explode( ';', $data );
    // $img_exten = explode('/', $pos[0])[1];
    $output_file=time().'.'.$format_image;

      $insert="INSERT INTO $card_name (card_id, name_of_collection, description, image) VALUES ($id, '$name_collection', '$description', '$output_file')";
      if(mysqli_query($con, $insert)){

         file_put_contents('cards-images/'.$output_file, base64_decode( $base64_string[1]));

         $res='Card successfully Added';
      }
}
else{
  echo "error";
}

echo $res;


?>