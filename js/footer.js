   
  let d=new Date();
  let n=d.getFullYear();
  year.innerHTML='2005-'+n;
$(document).ready(function(){

  $('.dropdown-item').click(function(event){
  	event.preventDefault()
  	var prod=$(this).attr('name');
  	var year=$(this).html()
    var s_type=$(this).parent().parent().parent().find('.s_type').text()
  	console.log(year)

  	$.ajax({
  		type: 'post',
  		url: 'navbar_products.php',
  		data: {product: prod, year_prod: year, sport_type: s_type},
  		success: function(ar){
$('#nav').html(ar)
  		}
  	})
  })

  })
  