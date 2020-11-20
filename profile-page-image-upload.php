<?php
include "config/con1.php";
if(isset($_POST['send'])){
    $hidden = $_POST['id'];
    $name = $_POST['name'];
    $text = $_POST['text'];
     if (!file_exists($_FILES['image']['tmp_name']) || !is_uploaded_file($_FILES['image']['tmp_name']))

        {
                $ins="UPDATE `users` SET  `name` = '$name', `more` = '$text' WHERE id = '$hidden'";
                $res=mysqli_query($con, $ins);
                    
                if($res){
                    header('Location:profile-page.php');
                }else{
                    echo "sxal";
                }
     }else{
        $folder = $_SERVER['DOCUMENT_ROOT'].'/collection-cards/images/';
        $img = $_FILES["image"]["name"];
        $fname = explode('.', $img);
        $ext = end($fname);
        $fname = md5(rand(0,1000).rand(0,1000).rand(0,1000).rand(0,1000)).'.'.$ext;
        if(move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$fname)){
            $ins="UPDATE `users` SET `name`='$name', `more`= '$text', `image` = '$fname' WHERE id = '$hidden'";
            $res=mysqli_query($con, $ins);
                    
                if($res){
                    header('Location:profile-page.php');
                }else{
                    echo "sxal";
                }
        }
     }
      
  }   

?>