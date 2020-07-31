<?php

include "header.php";
include "config/con1.php";
  if(!isset($_COOKIE['user']) || !isset($_SESSION['user'])){
            header('location:index.php');
        }
?>  
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/personal_checklist.css">

</head>
<body>
     <?php include "cookie.php";?>
   <section class="custom_checklist">
       <div class="container">
           <div class="col-md-10 list" style="margin:0 auto">
               <h1  class="text-center my-5">PERSONAL CHECKLIST</h1>
               <form>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Year of releases</label>
                      <input type="text" class="form-control"  id="a1">
                    </div>
                 
                    <div class="form-group col-md-6">
                      <label for="a2">Producer</label>
                      <input  type="text" class="form-control"  id="a2">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4">Name of collection</label>
                      <input type="text" class="form-control"  id="a3">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="a4">Card number</label>
                      <input  type="text" class="form-control"  id="a4">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="a5">Card name</label>
                      <input type="text" class="form-control" id="a5">
                    </div>
                   
                    <div class="form-group col-md-6">
                      <label for="a6">Team</label>
                      <input  type="text" class="form-control" id="a6">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="a7">Sport type</label>
                      <select class="form-control" id="a7">
                          <?php
                             $sql_sport="select*from sports_type";
                            $query_sport=mysqli_query($con,$sql_sport);
                           while($tox=mysqli_fetch_assoc($query_sport)){
                                echo "<option>".$tox['sport_type']."</option>";
                           }
                          ?>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="a8">Set Type</label>
                      <input  type="text" class="form-control" id="a8">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="a9">Parallel</label>
                      <input type="text" class="form-control" id="a9">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="a10">Print run</label>
                      <input  type="text" class="form-control" id="a10">
                      <input type="hidden" id="a11">
                      <input type="hidden" id="a12">
                      <input type="hidden" id="a13">
                    </div>
                  </div>
             </form>
             <br>
             	<button class="btn btn_check"  id="personal_register">Submit</button>
             </div>
             <div id="ard" class="text-center"></div>
       </div>
   </section>
   <!------------------------modal for SUCCESS------------------------------------>
<div class="modal fade" id="customchecklist" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <button class="btn log-in" style="height:100px;font-size:20px"><p>You are successfully enterd dates</p></button>
              <p></p>
             <div class="result"></div>
      </div>
    </div>
  </div>
</div>

<?php
include "footer.php";
?>
 

<script src="js/personal_checklist.js"></script>


  
</body>
</html>