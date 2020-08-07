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
                        <button class="btn" style="border-radius:0;">
                           <i class="fa fa-search btn" aria-hidden="true"></i>
                        </button>
                  </div>
                   
                </div>
           </div>
           <div class="content">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="card bootstrap-table">
                               <div class="card-body table-full-width">
                                   <div class="collectiondiv">
                                       <div class="collectiondiv">
                                           <h2>PANINI Евро 2020 Preview</h2>
                                       </div>
                                   </div>

                                   <table id="bootstrap-table" class="table">
                                       <thead>

                                       <th data-field="NO" class="text-center">NO</th>
                                       <th data-field="Year of releases" data-sortable="true">Year of releases</th>
                                       <th data-field="Producer" data-sortable="true">Producer</th>
                                       <th data-field="Name of collection" data-sortable="true">Name of collection</th>
                                       <th data-field="Card number" data-sortable="true">Card number</th>
                                       <th data-field="Card name" data-sortable="true">Card name</th>
                                       <th data-field="Team" data-sortable="true">Team</th>
                                       <th data-field="Set type" data-sortable="true">Set type</th>
                                       <th data-field="Parallel" data-sortable="true">Parallel</th>
                                       <th data-field="Print_run" data-sortable="true">Print_run</th>
                                       <th></th>
                                       </thead>
                                       <tbody>
                                       <tr>

                                           <td>1</td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>
                                           <td>
                                               <form class="form-inline searchinput" >
                                                   <div class="input-group">
                                                       <input  class="form-control" type="text" placeholder="Search" aria-label="Search">
                                                       <button class="btn" style="border-radius:0;">
                                                           <i class="fa fa-search btn" aria-hidden="true"></i>
                                                       </button>
                                                   </div>
                                               </form>
                                           </td>

                                       </tr>
                                       <tr>

                                           <td>2</td>
                                           <td>Minerva Hooper</td>
                                           <td>$23,789</td>
                                           <td>Curaçao</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>3</td>
                                           <td>Sage Rodriguez</td>
                                           <td>$56,142</td>
                                           <td>Netherlands</td>
                                           <td>Baileux</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>4</td>
                                           <td>Philip Chaney</td>
                                           <td>$38,735</td>
                                           <td>Korea, South</td>
                                           <td>Overland Park</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>5</td>
                                           <td>Doris Greene</td>
                                           <td>$63,542</td>
                                           <td>Malawi</td>
                                           <td>Feldkirchen in Kärnten</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>5</td>
                                           <td>Doris Greene</td>
                                           <td>$63,542</td>
                                           <td>Malawi</td>
                                           <td>Feldkirchen in Kärnten</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>5</td>
                                           <td>Doris Greene</td>
                                           <td>$63,542</td>
                                           <td>Malawi</td>
                                           <td>Feldkirchen in Kärnten</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>5</td>
                                           <td>Doris Greene</td>
                                           <td>$63,542</td>
                                           <td>Malawi</td>
                                           <td>Feldkirchen in Kärnten</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>
                                       <tr>

                                           <td>5</td>
                                           <td>Doris Greene</td>
                                           <td>$63,542</td>
                                           <td>Malawi</td>
                                           <td>Feldkirchen in Kärnten</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td>Sinaai-Waas</td>
                                           <td></td>
                                       </tr>

                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
   </section>

<?php
include "footer.php";
?>
     <script>
         var $table = $('#bootstrap-table');
         $().ready(function() {
             $table.bootstrapTable({
                 toolbar: ".toolbar",
                 clickToSelect: true,
                 search: true,
                 showToggle: true,
                 showColumns: true,
                 pagination: true,
                 searchAlign: 'left',
                 pageSize: 8,
                 clickToSelect: false,
                 pageList: [8, 10, 25, 50, 100],

                 icons: {

                     toggle: 'fa fa-th-list',
                     columns: 'fa fa-columns',
                     detailOpen: 'fa fa-plus-circle',
                     detailClose: 'fa fa-minus-circle'
                 }
             });





         });
     </script>



</body>
</html>