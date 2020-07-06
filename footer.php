<section id="footer">
    <div class="container">
        <div class="row row-collection">
            <div class="col-md-2 col-sm-6 col-xs-12 row-div">
                <p>About us</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate sunt, quos maxime nihil accusamus nam quo provident repellendus error, sed tenetur, iusto ex et nostrum officiis illum eius. Impedit, accusamus!</p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 row-div">
            <p>Collections</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate sunt, quos maxime nihil accusamus nam quo provident repellendus error, sed tenetur, iusto ex et nostrum officiis illum eius. Impedit, accusamus!</p>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 row-div">
            <p>Contact</p>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate sunt, quos maxime nihil accusamus nam quo provident repellendus error, sed tenetur, iusto ex et nostrum officiis illum eius. Impedit, accusamus!</p>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-12 row-div social-col d-flex justify-content-center">
                <div classs="social-center">
                <p>Social media</p>
                <div class="d-flex justify-content-center">
                     <div class="social-div"><i id="i-facebook" class="fa fa-facebook"></i></div>
                     <div class="social-div"><i class="fa fa-twitter"></i></div>
                     <div class="social-div"><i class="fa fa-instagram"></i></div>
                     <div class="social-div i-telegram"><i class='fab fa-telegram-plane'></i></div>
                </div>
                <button class="social-button">Subscribe to update</button>
              </div>
            </div>
        </div>
    </div>
</section>
<section id="under-footer">
    <div class="container text-right">
    <p>&copy WEBEX TECHNOLOGIES LLC &copy<span id="year"></span><p>
    </div>
</section>
<script src="js/footer.js"></script>
<script src="googleTranslate/googleTranslate.js"></script>
<script>
     // dropdown-toggle class not added for submenus by current WP Bootstrap Navwalker as of November 15, 2017.
$('.dropdown-menu > .dropdown > a').addClass('dropdown-toggle');
// $('.dropdown-item').on('mouseover', function() {
//   $(this).addClass('kk')
// })
// $('.dropdown-item').on('mouseover', function() {
//   $(this).addClass('kk')
// })
$('.dropdown-menu a.dropdown-toggle').on('mouseover', function(e) {
 
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');
  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-menu > .dropdown .show').removeClass("show");
  });
  return false;
});
// $('.dropdown-menu a.dropdown-toggle').on('mouseout', function(e) {
  
//   $(this).next().find('li >a').each(function(){
//     if(!$(this).hasClass('kk')){
//    console.log('ok')

//       // $('.dropdown-menu > .dropdown .show').removeClass("show");
//     }
//  })
// })
</script>