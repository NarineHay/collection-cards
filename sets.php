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
                <h2 class = "releases" align="center">SETS</h2>
            </div>
           


            <?php
if(isset($_SESSION['product'])){
  $product=$_SESSION['product'];
  $sport_type=$_SESSION['sport_type'];
  $year_prod=$_SESSION['year_prod'];
  $year=explode('-', $year_prod);
            $a=$year[0];
            $b=$year[1];

  echo '<div class="col-md-12 text-center">
  <div class="col-md-5 mx-auto">
                <label>Select year of sets</label>
               <form action="" method="post" >
               <select onchange="this.form.submit()" class="form-control select" id="select_name_collection" name="sel">';
               for($i=$a; $i<=$b; $i++){
            
if(isset($_POST['sel']) && $_POST['sel']==$i){
              echo '<option value='.$i.' selected>'.$i.'</option>';
  
}
else{
  echo '<option value='.$i.'>'.$i.'</option>';
}
}
                                                    
echo '</select></form> 
       </div>
    </div>';
            if(isset($_POST['sel'])){
              
              $sel=$_POST['sel'];
             $sql="SELECT * FROM collections WHERE sport_type='$sport_type' AND year_of_releases='$sel'";
            // $query=mysqli_query($con,$sql);
            }

            else{
            $sql="SELECT * FROM collections WHERE sport_type='$sport_type' AND SUBSTRING(year_of_releases, 1, 4) BETWEEN $a AND $b";
          }
            $query=mysqli_query($con,$sql);
            while($tox=mysqli_fetch_assoc($query)){
                $r_id=$tox['id'];
                $desc = $tox['description'];
                $description = explode("^",$desc);
                $htmllis = '';
                foreach($description as $key => $value){
                    $htmllis .= "<li>".$value."</li>";
                }

                $sql_base_checklist_true="SELECT id FROM base_checklist WHERE realese_id=$r_id";
                $res=mysqli_query($con, $sql_base_checklist_true);
                if(mysqli_num_rows($res)!=0){

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
                                <div class="smallimg rel_id1">
                                   <a href="base_checklist.php?id='.$tox["id"].'">
                                        <img src="images/releases/checklist-icon.png" >
                                   </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 contentimage">
                            <div class="releases-item-img">
                                <img src="images_realeses/'.$tox['image'].'">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                             <div class="releases-item-text">
                                <ul>'.$htmllis.'</ul>
                             </div>
                        </div>
                    </div>
                </div>
                </div></div>';
            }
            else{
                echo '<div class="col-md-12">
                          <div class="row style">
                          <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <h1 class="title">'. $tox['year_of_releases'].' '.$tox['name_of_collection'].'</h1>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12 contentimage">
                            <div class="releases-item-img">
                                <img src="images_realeses/'.$tox['image'].'">
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                             <div class="releases-item-text">
                                <ul>'.$htmllis.'</ul>
                             </div>
                        </div>
                    </div>
                </div>
                </div></div>';
            }
        }
}
else{
  echo 'no sessia';
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
    $(document).ready(function(){
        $('.rel_id').click(function(){
            var rel_id=$(this).attr('name')
            var d_name=$(this).attr('data-name')
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


    })

</script>
</body>
</html>
