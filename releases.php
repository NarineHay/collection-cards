<?php
// session_start();
include "config/con1.php";
include "header.php";
        
?>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/login-register.css">
<link rel="stylesheet" type="text/css" href="css/realize.css">
</head>
<body>
      <?php include "cookie.php";?>
    <section class="section1">
        <div class="container">
            <div class="row">               
                <div class="col-md-12">
                    <h2 class = "releases" align="center">NEW RELEASES</h2>
                </div>
                
                   
                   <?php 
                    $sql="SELECT * FROM realeses";
                    $query=mysqli_query($con,$sql);
                    while($tox=mysqli_fetch_assoc($query)){
                            $desc = $tox['description'];
                            $description = explode(",",$desc);
                            $htmllis = '';
                            foreach($description as $key => $value){ 
                                $htmllis .= "<li>".$value."</li>";
                            }
                   echo '  <div class="col-md-12">
                          <div class="row style">
                          <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h1 class="title">'. $tox['year_of_releases'].' '.$tox['name_of_collection'].'</h1>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                        
                            <div class="pictures" >
                                <div class="smallimg rel_id"  name="'.$tox['id'].'" data-name="infographic">
                                   <img src="images/releases/infographic-icon.png" data-toggle="modal" data-target=".bd-example-modal-lg" >
                                </div>
                                <div class="smallimg rel_id" name="'.$tox['id'].'" data-name="info">
                                    <img src="images/releases/info-icon.png" data-toggle="modal" data-target="#exampleModall" >
                                </div>
                                <div class="smallimg rel_id" name="'.$tox['id'].'" >
                                   <a href="base_checklist.php"><img src="images/releases/checklist-icon.png" ></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 contentimage">
                            <div class="releases-item-img">
                                <img src="images/'.$tox['image'].'">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                             <div class="releases-item-text"><ul>'.$htmllis.'</ul>
                             </div>
                        </div>
                    </div>
                </div>
                </div></div>';
              }
                    ?>
                    
            </div>
        </div>
    </section>

<!--< Modal ------------------------------------------------------------------------------------------------------->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
                <h3 align="center">Set Includes</h3>
            </div>
                <div class="col-md-12" align="center">
                  <div class="row" id='releases_id_modal'>
                      <!-- <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 ">
                        <i>Base: 200 cards</i>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 ">
                       <i>Rookie set: 90 cards</i>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-3 col-xs-12 ">
                        <i>Pharallel: 30 cards</i>
                      </div>  -->
                      <!-- <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 content">
                        <br>
                        <div class="contentdiv"> -->
                          <!-- ------------------------------------------------ -->
                         
                          <!-- <span class="modalspan"><i>1.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                          <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div> -->
                           <!-- <span class="modalspan"><i>2.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                           <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div>
                           <span class="modalspan"><i>3.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                           <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div>
                           <span class="modalspan"><i>4.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                          <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div>                         
                        </div>                        
                      </div>
                      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 content1">
                        <br>
                          <div class="contentdiv">
                          <span class="modalspan"><i>5.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                          <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div>
                           <span class="modalspan"><i>6.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                          <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div>
                           <span class="modalspan"><i>7.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                           <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div>  -->
                         <!--   <span class="modalspan"><i>8.Absolute Rookies Spectrum Set Checklist,20 Cards</i></span>
                           <div class="contentimg-all">
                            <div class="contentimg">
                                <div class="div_image box">
                                  <div class="div_image_number_blok"> 
                                    <img src="images/modal/1.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line">
                                <div class="div_image box1">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/2.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line1">
                                <div class="div_image box2">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/3.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line2">
                                <div class="div_image box3">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/4.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line3">
                                <div class="div_image box4">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/5.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line4">
                                <div class="div_image box5">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/6.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-2.png" class="line5">
                                <div class="div_image box6">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/7.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                                    <img src="images/modal/line-1.png" class="line6">
                                <div class="div_image box7">
                                  <div class="div_image_number_blok">
                                    <img src="images/modal/8.png" >
                                    <span class="boxspan">25</span>
                                  </div>
                                </div>
                            </div> 
                          </div> -->                        
                        </div>  
                      </div>                   
                  </div>
                </div>
            </div>
          </div>         
        </div>
    </div>
  </div>
</div>
<!--< Modal ------------------------------------------------------------------------------------------------------->
<div class="modal fade" id="exampleModall" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title opisaniye" id="exampleModalLabel">Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modalbody2">
      
      </div>
    </div>
  </div>
</div>
	<?php include "footer.php"; ?>	
   <script type="text/javascript">
    $('.rel_id').click(function(){
      var rel_id=$(this).attr('name')
      var d_name=$(this).attr('data-name')
console.log(d_name)
      $.ajax({
        type: 'post',
        url: 'releases_id_modal.php',
        data: {releases_id: rel_id, data_name: d_name},
        success: function(a){
          if(d_name=='infographic'){
               $('#releases_id_modal').html(a)

          }
          else{
               $('.modalbody2').html(a)
          }
        }
      })
            
    })
  </script>
</body>
</html>
