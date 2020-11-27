<?php
include "header.php";
include "config/con1.php";
if(isset($_COOKIE['user']) || isset($_SESSION['user'])){
  
}else{
  header('location:index.php');
}

?> 

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/custom_checklist.css">
<link rel="stylesheet" href="css/realize.css">
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
<style type="text/css">
  .select2-container .select2-selection--single .select2-selection__rendered{
    padding: 0;
  }
</style>
</head>
<body>
<?php include "navbarregister.php"; ?>
<section class="cust">
  <div class="container">
    <div class="row">
    <div class="col-md-12">
    <a href="personal.php" class="float-right hr ml-2">Add Checklist</a>
    <a href="custom_import.php" class="float-right hr import-btn">Import Checklist</a>
    </div>
    <?php
      $uid=$_SESSION['user'];
      $sql = "SELECT * FROM `personal_name_checklist` WHERE `user_id`=$uid ORDER BY `id` DESC";
      $res = mysqli_query($con, $sql);
      @$rows = mysqli_num_rows($res);
      if($rows==0){
    ?>
    <div class="card-body ">
        <div class="custom_img_div">
          <img src="images/no-persona-checklist.png" class="custom_img">
        </div>
      <h4 class="header-log">
        <center class="no_custom">No Personal Checklist</center>
      </h4>
    </div>
    <?php   
      }else{
        while($tox=mysqli_fetch_assoc($res)){
    ?>
        <div class="row style">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-3 col-sm-12 col-xs-12 contentimage">
            <div class="releases-item-img">
              <img src="img/<?php echo $tox['image']; ?>">
            </div>
          </div>
          <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="float-right">
                <button type="button" class="btn btn-danger delite" data-toggle="modal" data-target="#delite" name="<?php echo $tox['id']; ?>">
                  <i class="fas fa-trash"></i>
                </button>
            </div>
            <div class="releases-item-text">
              <h1 class="title"><a href="personalchecklist.php?id=<?php echo $tox['id']; ?>"><?php echo $tox['name_of_checklist']; ?></a></h1>
              <p><?php echo $tox['description']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php    
        }
      }
    ?>
    
</section>
<!-- Modal Delite-->
<div class="modal fade" id="delite" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog delite_modal" role="document">
    
  </div>
</div>
<script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="js/personal_checklist.js"></script>
<script>

  $('.delite').click(function(){
    var id = $(this).attr('name')
    var name = $(this).parents('.col-sm-12').find('.title').text()
    var k = '<div class="modal-content" style="border:0"><form action="personal_modal.php" method="POST"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="p-3"><p>Are you sure you want to delete the <b>'+name+'<b>?</p></div><div class="modal-footer"><button type="button" class="btn btn-secondary mr-2" data-dismiss="modal">Close</button><button type="submit" class="btn btn-danger" name="delite_btn" value="'+id+'">Delete</button></div></form></div>';
    $('.delite_modal').html(k)
  })

</script>
<?php
include "footer.php";
?>
</body>
</html>