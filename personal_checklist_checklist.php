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
<link rel="stylesheet" href="css/custom_checklist.css">

</head>
<body>

     <?php include "cookie.php";?>
   <section class="checklist">
       <div class="container">
            <h1 class="text-center my-5">PERSONAL CHECKLIST</h1>
           <div class="row">
               <div class="col-md-3 col-sm-7 col-xs-10"><img src="images/33.png" class="personImg"></div>
             
               <div class="col-md-7 col-sm-7 col-xs-10  textcheck">
                   <h6>What is Lorem Ipsum?</h6>
                   <p>What is Lorem Ipsum?
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

 <p>What is Lorem Ipsum?
Why do we use it?
ill uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
               </div>
              
           </div>
           <div class="row my-3">
               <div class="col-md-4"></div>
               <div class="col-md-4"></div>
               <div class="col-md-4 col-sm-7 col-xs-10  k">
                   <div class="input-group">
                        <input  class="form-control" type="text" placeholder="Search something" aria-label="Search">
                        
                       <button class="btn" style="border-radius:0;"> <i class="fa fa-search btn" aria-hidden="true"></i></button>
                  </div>
                   
                </div>
           </div>
           <div  class="table-responsive">
           <table class="table table-striped  table-bordered" >
              <thead>
                  <col width="50px">
                
                <tr style="background: rgb(110,164,174);">
                  <th scope="col">#</th>
                  <th scope="col">Year of releases
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  
                  </th>
                  <th scope="col">Producer
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col">Name of collection
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col">Card number
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col">Card name
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col">Team
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col">Sport type
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col">Set type
                  <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select></th>
                  <th scope="col">Parallel
                      <select>
                            <option></option>
                            <option></option>
                            <option></option>
                        </select>
                    </th>
                  <th scope="col">Print_run
                    <select>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                  </th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                  <?php
                  $sql="select*from personal_checklist";
                  $query=mysqli_query($con,$sql);
                      while($tox=mysqli_fetch_assoc($query)){
                          echo"
                            <tr>
                              <th scope='row'>".$tox['id']."</th>
                              <td>".$tox['year_of_releases']."</td>
                              <td>".$tox['producer']."</td>
                              <td>".$tox['name_of_collection']."</td>
                              <td>".$tox['card_number']."</td>
                              <td>".$tox['card_name']."</td>
                              <td>".$tox['team']."</td>
                              <td>".$tox['sporttype']."</td>
                              <td>".$tox['set_type']."</td>
                              <td>".$tox['parallel']."</td>
                              <td>".$tox['print_run']."</td>
                              <td>".$tox['title1']."</td>
                              <td>".$tox['title2']."</td>
                              <td>".$tox['title3']."</td>
                            </tr>
                               ";
                      }
                  ?>
               
              </tbody>
            </table>
            </div>
           
       </div>
   </section>
 
<?php
include "footer.php";
?>
 




  
</body>
</html>