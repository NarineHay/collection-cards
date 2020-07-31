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
                                    <h4 class="card-title">Add Base Checklist</h4>
                                    <p></p>
                                    <div>
                                    <?php include "../form/base_checklist.php"; ?>
                                    
                                </div>
                                </div>
                                
                                <div class="card-body ">
                                    <form method="post" action="add_base_checklist.php">
                                        <div class="form-group">
                                            <label>Year of releases</label>
                                            <input type="text" placeholder="Year of releases" class="form-control" name="year-of-releases">
                                        </div>
                                        <div class="form-group">
                                            <label>Producer</label>
                                            <input type="text" placeholder="Producer" class="form-control"name="producer">
                                        </div>
                                       <div class="form-group">
                                            <label>Name of collection	</label>
                                            <input type="text" placeholder="Name of collection	" class="form-control" name="name-collection">
                                        </div>
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
                                            <label>Sport Type </label>
                                            <select class="form-control select" name="sport-type">
                                                <?php 
                                                include "select_sport_for_base_checklist.php";
                                                ?>
                                                <option>Other sport</option>
                                                 
                                            </select>
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
            </script>
                                </body>
                                </html>