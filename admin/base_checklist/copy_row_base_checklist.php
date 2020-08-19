<?php 
    include "../../config/con1.php";

  if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $realese_id=mysqli_real_escape_string($con, $_POST['realese_id']);
  	$id=mysqli_real_escape_string($con, $_POST['card_id']);
  	$card_number=mysqli_real_escape_string($con, $_POST['card_number']);
  	$card_name=mysqli_real_escape_string($con, $_POST['card_name']);
  	$team=mysqli_real_escape_string($con, $_POST['team']);
  	$set_type=mysqli_real_escape_string($con, $_POST['set_type']);
    $parallel=mysqli_real_escape_string($con, $_POST['parallel']);
    $print_run=mysqli_real_escape_string($con, $_POST['print_run']);
    
     
     $sql="INSERT INTO base_checklist (realese_id, card_number, card_name, team, set_type, parallel, color, print_run) VALUES ($realese_id, '$card_number', '$card_name', '$team', '$set_type', '$parallel', '', '$print_run')";
     mysqli_query($con, $sql);

     $_SESSION['realese_id']=$realese_id;

}
