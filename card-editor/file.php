<?php
	$res='';

if(!empty($_POST['name']) && !empty($_POST['format_image'])){
	$data=$_POST['data'];
	$format_image=$_POST['format_image'];
    $base64_string = explode( ',', $data);
    $pos  = explode( ';', $data );
    // $img_exten = explode('/', $pos[0])[1];
    $output_file='cards-images/'.time().'.'.$format_image;

file_put_contents($output_file, base64_decode( $base64_string[1]));
    
    // $res=$output_file;
   $res='Image successfully Added';
    
}
else{
	$res='Fill all filds';
}

echo $res;


?>