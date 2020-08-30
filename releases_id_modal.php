<?php
include "config/con1.php";
if(isset($_POST['releases_id'])){
	$data_name=$_POST['data_name'];
	$id=$_POST['releases_id'];
	if($data_name=='infographic'){
	$sql_cards="SELECT id, number_base_cards, number_rookie_cards, number_pharallel_cards FROM realeses WHERE id=$id";
	$result_cards=mysqli_query($con, $sql_cards);
	$row_cards=mysqli_fetch_assoc($result_cards);
	               echo '<div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 ">
                          <i>Base: '.$row_cards['number_base_cards'].' cards</i>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 ">
                          <i>Rookie set: '.$row_cards['number_rookie_cards'].' cards</i>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 ">
                           <i>Pharallel: '.$row_cards['number_pharallel_cards'].' cards</i>
                      </div> ';
                      // -------------------------------------------------------------

                          $sql="SELECT id, realese_id, set_type, print_run FROM `base_checklist` WHERE realese_id=$id AND print_run!='' GROUP By set_type ORDER BY id ASC";
                          $result=mysqli_query($con, $sql);
                          $count=0;
                          $count1=0;
                          $row_number=mysqli_num_rows($result);
                          echo '<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 content">
                                 <br>
                                <div class="contentdiv">';
                          while($row=mysqli_fetch_assoc($result)){
                            $count++; 
                            $p=0;
                              if($count<$row_number/2+1 ){
                                 $set_type=$row['set_type'];
                            
                          $sql_parallel="SELECT color, print_run FROM `base_checklist` WHERE set_type='$set_type' AND realese_id=$id AND print_run!='' GROUP BY parallel ORDER BY id ASC";

                          $result_parallel=mysqli_query($con, $sql_parallel);
                          $row_parallel_number=mysqli_num_rows($result_parallel);
                          $row_num=mysqli_num_rows($result_parallel);
                                 $width=$row_num*14;
                                 // ---------------------------
                             echo '<span class="modalspan"><i>'.$count.'.'.$row['set_type'].'</i></span>';
                             echo '<div class="contentimg-all">
                            <div class="contentimg" style="width: '.$width.'%">';
                          
                                 // --------------------------------
                          while($row_parallel=mysqli_fetch_assoc($result_parallel)){
                            
                               if(!empty($row_parallel['color'])){
                                   $ex=explode('#', $row_parallel['color']);
                             
                                  if($row_parallel['color'][0]=='#'){
                                      $col="style='background:". $row_parallel['color']."'";
                                  }
                                  else{
                                      $col="style='background:url(admin/textures/". $row_parallel['color'].")'";
                                  }
                            }
                            else{
                              $col="style='background:#257ec5'";

                            }
                            if($p==0){
                              echo ' <div class="div_image box"'.$col.'>
                                       <div class="div_image_number_blok">
                                          <span class="boxspan">'.$row_parallel['print_run'].'</span>
                                       </div>
                                    </div>';
                                if($row_parallel_number!=1){
                                  echo '<img src="images/modal/line-1.png" class="line">';
                                }
                                else{
                                }
                            }
                            else{
                            echo ' <div class="div_image box'.$p.'" '.$col.'>
                                      <div class="div_image_number_blok">
                                           <span class="boxspan">'.$row_parallel['print_run'].'</span>
                                      </div>
                                   </div>';

                                if($p%2!=0 && $p!=$row_parallel_number-1){
                                  echo '<img src="images/modal/line-2.png" class="line'.$p.'">';
                                }
                                elseif($p%2==0 && $p!=$row_parallel_number-1){
                                  echo '<img src="images/modal/line-1.png" class="line'.$p.'">';
                                }
                                else{
                                }
                              }
                              $p++;
                          } 
                          echo '</div></div>';                            
  
                        }
                    }
                          echo '</div></div>'; 
                          $sql1="SELECT id, realese_id, set_type, print_run FROM `base_checklist` WHERE realese_id=$id AND print_run!='' GROUP By set_type ORDER BY id ASC";
                          $result1=mysqli_query($con, $sql1);
                          $row_number1=mysqli_num_rows($result1);
                          echo '<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 content">
                                   <br>
                                <div class="contentdiv">';
                          while($row=mysqli_fetch_assoc($result1)){

                            $count1++;
                            $p=0;
                           if($count1>$row_number1/2+1 ){
                            $set_type=$row['set_type'];
                            
                            $sql_parallel="SELECT print_run FROM `base_checklist` WHERE set_type='$set_type' AND print_run!='' AND realese_id=$id GROUP BY parallel ORDER BY id ASC";
                            $result_parallel=mysqli_query($con, $sql_parallel);
                            $row_parallel_number=mysqli_num_rows($result_parallel);
                            $row_num=mysqli_num_rows($result_parallel);
                                 $width1=$row_num*14;
                            echo '<span class="modalspan"><i>'.$count1.'.'.$row['set_type'].'</i></span>';
                            echo '<div class="contentimg-all">
                                  <div class="contentimg" style="width: '.$width1.'%">';

                          while($row_parallel=mysqli_fetch_assoc($result_parallel)){
                            if(!empty($row_parallel['color'])){
                              $ex=explode('#', $row_parallel['color']);
                             
                                  if($row_parallel['color'][0]=='#'){
                                      $col="style='background:". $row_parallel['color']."'";
                                  }
                                  else{
                                      $col="style='background:url(admin/textures/". $row_parallel['color'].")'";
                                  }
                            }
                            else{
                              $col="style='background:#257ec5'";
                            }
                            if($p==0){
                              echo ' <div class="div_image box" '.$col.'>
                                         <div class="div_image_number_blok"> 
                                            <span class="boxspan">'.$row_parallel['print_run'].'</span>
                                         </div>
                                     </div>';
                                if($row_parallel_number!=1){
                                  echo '<img src="images/modal/line-1.png" class="line">';
                                }
                                else{
                                }
                            }
                            else{
                            echo ' <div class="div_image box'.$p.'" '.$col.'>
                                       <div class="div_image_number_blok"> 
                                          <span class="boxspan">'.$row_parallel['print_run'].'</span>
                                       </div>
                                   </div>';
                             if($p%2!=0 && $p!=$row_parallel_number-1){
                                  echo '<img src="images/modal/line-2.png" class="line'.$p.'">';
                                }
                                elseif($p%2==0 && $p!=$row_parallel_number-1){
                                  echo '<img src="images/modal/line-1.png" class="line'.$p.'">';
                                }
                                else{

                                }
                              }
                              $p++;
                          } 
                          echo '</div></div>';                            
  
          }
                          }
                          echo '</div></div>'; 
    }
    else{
    	$sql_info="SELECT id, info FROM realeses WHERE id=$id";
	    $result_info=mysqli_query($con, $sql_info);
	    $row_info=mysqli_fetch_assoc($result_info);
	    echo $row_info['info'];
    }                      
}
else{
	echo 'no';
}
?>