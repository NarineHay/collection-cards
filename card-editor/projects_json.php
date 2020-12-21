<?php
	$res='';

if(!empty($_POST['myjson']) && !empty($_POST['data'])){
	$new_json=$_POST['myjson'];
    $output_file_json='projects-json/'.time().'.json';

    $data=$_POST['data'];
    $base64_string = explode( ',', $data);
    $output_file_img='projects-json-images/'.time().'.jpg';
    
    file_put_contents($output_file_json, $new_json);
    file_put_contents($output_file_img, base64_decode( $base64_string[1]));
    // $res=$output_file;
    $res='Project successfully saved';
    
}
else{
	$res='Error';
}

echo $res;


?>