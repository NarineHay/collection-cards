    $(document).ready(function() {
        $('#datatables').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.a_edit', function(event) {
            event.preventDefault();
                
                if($(this).hasClass('edit')){
                     $("#sortable").sortable('destroy');
                    console.log('eeeeedit')
                    $(this).parent().parent().find('td').not($(this).parent()).not(':first').attr("contenteditable","true")
                    $(this).parent().parent().find('td').not($(this).parent()).not(':first').css("border","1px solid #133690")
                    
                }
                else if($(this).hasClass('save')){
                    $("#sortable").sortable();
                    console.log('sssssssave')
                     $(this).parent().parent().find('td').attr("contenteditable","false")
                     $(this).parent().parent().find('td').css("border","none")
                     var t=$(this).parent().parent()
                                          var c_id=$(this).attr('name')
                                          var year_releases=t.find('.year_releases').html()
                                          var c_producer=t.find('.c_producer').html()
                                          var name_collection=t.find('.name_collection').html()
                                          var c_number=t.find('.c_number').html() 
                                          var c_name=t.find('.c_name').html()       
                                          var c_team=t.find('.c_team').html()
                                          var c_set_type=t.find('.c_set_type').html()
                                          var c_sport_type=t.find('.c_sport_type').html()
                                          var c_parallel=t.find('.c_parallel').html()
                                          var c_print_run=t.find('.c_print_run').html()
                                     
                                          $.ajax({
                                             type: "post",
                                             url: "save_changed_base_checklist.php",
                                             data: {card_id: c_id, year_of_releases: year_releases, producer: c_producer, name_of_collection: name_collection,
                                                    card_number: c_number, card_name: c_name, team: c_team, set_type: c_set_type, sport_type: c_sport_type,
                                                    parallel: c_parallel, print_run: c_print_run },
                                             success: function(){
                                                 location.reload()
                                             }
                                            })



                }
                // else{}

                 $(this).toggleClass('edit').toggleClass("save");
                    $(this).find('i').toggleClass('fa-save').toggleClass('fa-edit')
            
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            e.preventDefault();
            var r_id = $(this).attr('data_name');
            console.log(r_id)
            $.ajax({
                    type: "post",
                    url: "save_changed_base_checklist.php",
                    data: {remove_id: r_id },
                    success: function(){
                        location.reload()
                    }
                })
            
        });
       var arr=[]
       $("#sortable").sortable({
            axis: 'y',
            update: function(event, ui) {
          var index = ui.item.index();
    
          $("input[type='hidden']").each(function(){
              arr.push($(this).val())
          })
   
                        $.ajax({
                                 type: "post",
                                 url: "save_changed_base_checklist.php",
                                 data: {array: arr ,index1: index },
                                 success: function(ard){
                                     location.reload()
                                 }
                                })
    
       }
      })
    });