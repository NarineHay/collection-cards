<?php
           include "../heder.php";

        ?>
    <body>
        <?php
           include "../menu.php";
           include "../../config/con1.php";
        ?>
            
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card data-tables">
                                <div class="card-body table-striped table-no-bordered table-hover dataTable dtr-inline table-full-width">
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="fresh-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                     <th>#</th>
                                                    <th>YEAR OF RELEASES</th>
                                                    <th>PRODUCER</th>
                                                    <th>NAME OF COLLECTION</th>
                                                    <th>CARD NUMBER</th>
                                                    <th>CARD NAME</th>
                                                    <th>TEAM</th>
                                                    <th>SET TYPE</th>
                                                    <th>SPORT TYPE</th>
                                                    <th>PARALLEL</th>
                                                    <th>PRINT RUN</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                     <th>#</th>
                                                     <th>YEAR OF RELEASES</th>
                                                    <th>PRODUCER</th>
                                                    <th>NAME OF COLLECTION</th>
                                                    <th>CARD NUMBER</th>
                                                    <th>CARD NAME</th>
                                                    <th>TEAM</th>
                                                    <th>SET TYPE</th>
                                                    <th>SPORT TYPE</th>
                                                    <th>PARALLEL</th>
                                                    <th>PRINT RUN</th>
                                                    <th class="text-right">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody id="sortable">
                                               
                                                    <?php 
                                                    $count=0;
                                                    $sql="SELECT * FROM base_checklist ORDER BY sort_number ASC";
                                                    $result=mysqli_query($con, $sql);
                                                    while($row=mysqli_fetch_assoc($result)){
                                                        $count++;
                                                        echo "  <tr><td class='first_td'>".$count."<input  type='hidden' value='".$row['id']."' /></td>
                                                               <td class='year_releases'>".$row['year_of_releases']."</td>
                                                               <td class='c_producer'>".$row['producer']."</td>
                                                               <td class='name_collection'>".$row['name_of_collection']."</td>
                                                               <td class='c_number'>".$row['card_number']."</td>
                                                               <td class='c_name'>".$row['card_name']."</td>
                                                               <td class='c_team'>".$row['team']."</td>
                                                               <td class='c_set_type'>".$row['set_type']."</td>
                                                               <td class='c_sport_type'>".$row['sport_type']."</td>
                                                               <td class='c_parallel'>".$row['parallel']."</td>
                                                               <td class='c_print_run'>".$row['print_run']."</td>
                                                                <td class='text-right'>
                                                        <a href='#' class='btn btn-link btn-warning edit a_edit' name=".$row['id']."><i class='fa fa-edit'></i></a>
                                                        <a href='#' class='btn btn-link btn-danger remove' data_name=".$row['id']."><i class='fa fa-times'></i></a>
                                                    </td>
                                                               </tr>";
                                                    }
                                                    ?>
                                                    
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <?php 
                                    include "../footer.php";
                                    ?>
    <script src="../my_js/base_checklist.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
   
</body>
</html>