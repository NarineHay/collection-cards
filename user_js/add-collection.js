// ----------------add_collection------------------------
    $('.choose_file .file_label input').bind('change', function () {
        var filename = $(this).val();
       $(".file-text").text(filename.replace("C:\\fakepath\\", ""));
    })

    $('.save-collection').click(function(event){
        let n=$('.namecoll').val()
        let d=$('.desc').val()
        let f=$('.file').val()
        let ext=f.split('.')
        
        if(d=='' || n=='' || f==''){
          event.preventDefault()
           $('.message-result').html('Fill all filds')
        }
        else{
            if(ext.pop()!='png' && ext.pop()!='jpg' && ext.pop()!='jpeg'){
                event.preventDefault()
                $('.message-result').html('Plese chose image in png, jpg, jpeg')
            }
            else{
                $(this).attr('type', 'submit')
            }
        }
    })