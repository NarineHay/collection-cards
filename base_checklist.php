<?php
include "header.php";
include "config/con1.php";
?>  
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css" type="text/css" />
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/base_checklist.css">

</head>
<body>
     <?php include "cookie.php";?>
   <section class="custom_checklist">
       <div class="container">
            <h1 class="text-center my-5">BASE CHECKLIST</h1>
           <div class="row">
               <div class="col-lg-4 col-md-6 col-sm-5 col-xs-12">
                   <div class = "imgdiv">
                      <img src="images/Capture.png" class="personImg" > 
                   </div>
                   
                </div>
               <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12 textcheck">
                   <div>
                                          <h6>What is Lorem Ipsum?</h6>
                   <p>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
<h6>What is Lorem Ipsum?</h6>
Why do we use it?
ill uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
</p>
                   </div>

               </div>
               <div class="col-md-3"></div>
           </div>
           <div class="row my-3">
               <div class="col-md-4"></div>
               <div class="col-md-4"></div>
               <div class="col-md-4 k">
                   <div class="input-group">
                        <input  class="form-control" type="text" placeholder="Search something" aria-label="Search">
                        
                       <button class="btn" style="border-radius:0;"> <i class="fa fa-search btn" aria-hidden="true"></i></button>
                  </div>
                   
                </div>
           </div>
        <div class="container">          
  <table class="table table-bordered">
    <thead>
      <tr class="trhead">
      	<th>No.</th>
        <th>Year of releases
        	 <select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Producer
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Name of collection
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Card number
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Card name
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Team
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Set type
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Sport type
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Parallel
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>
        <th>Print_run
        	<select>
                 <option></option>
                 <option></option>
                 <option></option>
             </select>
        </th>     
      </tr>
    </thead>
    <tbody>
                  <?php
                  $sql="select*from base_checklist";
                  $query=mysqli_query($con,$sql);
                  $count=0;
                      while($tox=mysqli_fetch_assoc($query)){
                          $count++;
                          echo"
                            <tr>
                              <th>".$count."</th>
                              <td>".$tox['year_of_releases']."</td>
                              <td>".$tox['producer']."</td>
                              <td>".$tox['name_of_collection']."</td>
                              <td>".$tox['card_number']."</td>
                              <td>".$tox['card_name']."</td>
                              <td>".$tox['team']."</td>
                              <td>".$tox['set_type']."</td>
                              <td>".$tox['sport_type']."</td>
                              <td>".$tox['parallel']."</td>
                              <td>".$tox['print_run']."</td>
                            </tr>";
                               
                      }
                  ?>
               
    </tbody>
  </table>
</div>
   </section>

<?php
include "footer.php";
?>
<script src="js/custom_checklist_checklist.js"></script> 
</body>
</html>