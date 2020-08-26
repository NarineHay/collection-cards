 <?php
           include "../heder.php";

        ?>
    <body>
        <?php
           include "../menu.php";

        ?>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-10 add-bs" style="margin: 0 auto">
                            <div class="card stacked-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Add New Set</h4>
                                    <p></p>
                                    <div>
                                    <?php include "../form/form_releases.php"; ?>
                                    
                                </div>
                                </div>
                                
                                <div class="card-body ">
                                    <form method="post" action="add_base_checklist.php" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Name of collection   </label>
                                            <input type="text" placeholder="Name of collection  " class="form-control" name="name-collection">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Producer</label>
                                            <input type="text" placeholder="Producer" class="form-control"name="producer">
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <label>Year of releases</label>
                                            <input type="text" placeholder="Year of releases" class="form-control" name="year-of-releases">
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sport Type </label>
                                            <select class="form-control select" name="sport-type">
                                                <?php 
                                                include "select_sport_for_base_checklist.php";
                                                ?>
                                                <option>Other sport</option>
                                                 
                                            </select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Number of Base cards</label>
                                            <input type="text" placeholder="Number cards" class="form-control" name="number_base_cards">
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Number of Rookie set cards</label>
                                            <input type="text" placeholder="Number cards" class="form-control" name="number_rookie_cards">
                                        </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                            <label>Number of Pharallel cards</label>
                                            <input type="text" placeholder="Number cards" class="form-control" name="number_pharallel_cards">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Select image  </label>
                                            <input type="file" placeholder="" class="form-control" name="img">
                                        </div>
                                        <div class="form-group">
                                            <label>Description  </label>
                                            <ul id="ul">
                                                <li>
                                                    <input type="text" placeholder="" class="form-control" name="desc[]">
                                               </li>
                                               <li>
                                                    <input type="text" placeholder="" class="form-control" name="desc[]">
                                               </li>
                                            </ul>
                                            <div class="text-right" id="add_input">
                                               <i class="fa fa-plus" style="color: #133690;cursor: pointer;"></i>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Info collection</label>
                                            <textarea rows="10" cols="60" class="form-control" style="height:unset" name="info"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Select product type </label>
                                            <p><input type="radio" class="form-contro" value="new" name="product_type">
                                            NEW</p>
                                            <p><input type="radio" class="form-contro" value="set" name="product_type" >
                                            SET</p>
                                        </div>
                                    
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-fill btn-add" name="btn-add-releases">Submit</button>
                                </div>
                                </form>
                                <!-- -------------------------import excel to mysql----------------------------- -->
                                <div class="container">
                                <span id="message"></span>
                                 <form method="post" id="import_excel_form" enctype="multipart/form-data">

                                <div class="form-group">
                                            <label>Select Collection name</label>
                                <select class="form-control" id="sel_rel_name" name='opt_name'>
                                    <?php
                                $sql="SELECT id, name_of_collection FROM realeses";
                                $result=mysqli_query($con, $sql);
                                while ($row=mysqli_fetch_assoc($result)) {
                                    echo "<option value='".$row['id']."'>".$row['name_of_collection']."</option>";
                            }


?>
                                </select>
                            </div>
                            <div class="form-group">
                                            <label>Year of releases</label>
                                <select class="form-control" id="sel_rel_year" name='opt_year_name'>
                                    <?php
$sql1="SELECT id, year_of_releases, name_of_collection FROM realeses";
$result1=mysqli_query($con, $sql1);
while ($row1=mysqli_fetch_assoc($result1)) {
    echo "<option value='".$row1['name_of_collection']."'>".$row1['year_of_releases']."</option>";
}


?>
                                </select>
                            </div>
                                 <!-- <form method="post" id="import_excel_form" enctype="multipart/form-data"> -->
                                    <div class="form-group">
                                            <label>Select excel file</label>
                                    <input type="file" name="import_excel" class="form-control" />
                                </div>
                                    <input type="submit" name="import" id="import" class="btn btn-primary btn-add" value="Import" />
                                </form>
                                </div>
                            </div>
                        </div>   
                        <!-- ------------------------------------base checklist -------------------------- -->
                        <div class="col-sm-10 add-bs" style="margin: 0 auto">
                            <div class="card stacked-form">
                                <div class="card-header ">
                                    <h4 class="card-title">Add Base Checklist</h4>
                                    <p></p>
                                    <div>
                                    <?php include "../form/base_checklist.php"; ?>
                                    
                                </div>
                                </div>
                                
                                <div class="card-body ">
                                    <form method="post" action="add_base_checklist.php">
                                       
                                        <div class="form-group">
                                            <label>Card number</label>
                                            <input type="text" placeholder="Card number" class="form-control" name="card-number">
                                        </div>
                                        <div class="form-group">
                                            <label>Card name</label>
                                            <input type="text" placeholder="Card name" class="form-control" name="card-name">
                                        </div>
                                        <div class="form-group">
                                            <label>Team </label>
                                            <input type="text" placeholder="Team " class="form-control" name="team">
                                        </div>
                                        <div class="form-group">
                                            <label>Set Type	 </label>
                                            <input type="text" placeholder="Set Type" class="form-control" name="set-type">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Parallel  </label>
                                            <input type="text" placeholder="Parallel" class="form-control" name="parallel">
                                        </div>
                                        <div class="form-group">
                                            <label>Print run</label>
                                            <input type="text" placeholder="Print run " class="form-control" name="print-run">
                                        </div>
                                    
                                </div>
                                <div class="card-footer ">
                                    <button type="submit" class="btn btn-fill btn-add" name="btn-bs-checklist">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>   
                </div>
            </div>
            </div>
            <?php 
            include "../footer.php";
            ?>
            <script>
                $('.select').change(function(){
                    if($(this).val()=='Other sport'){
                         $('html select').after("<input type='text' placeholder='Enter sport type' class='form-control' name='other-sport-type'>");
                         $(this).remove()
                    }
                })
                $('#add_input').click(function(){
                   $('#ul').append('<li><input type="text" placeholder="" class="form-control" name="desc[]"></li>')
                })

// -------------------import excel------------------
$(document).ready(function(){
  $('#import_excel_form').on('submit', function(event){
    event.preventDefault();
    var opt_val=$("#sel_rel_name option:selected").val(); 
    
    $("#sel_rel_name").val(opt_val)
    $.ajax({
      url:"import.php",
      method:"POST",
      data:new FormData(this),
      contentType:false,
      cache:false,
      processData:false,
      beforeSend:function(){
        $('#import').attr('disabled', 'disabled');
        $('#import').val('Importing...');
        $('#import').css('color', '#133690');

      },
      success:function(data)
      {
        $('#message').html(data);
        $('#import_excel_form')[0].reset();
        $('#import').attr('disabled', false);
        $('#import').val('Import');
      }
    })
  });
});
            </script>
                                
</body>
</html>