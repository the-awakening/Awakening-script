
<script src="./js/front/jquery.min.js"></script>
<script src="./js/front/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="./js/bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<!-- Menu Toggle Script -->
<script>
	$("#menu-toggle").click(function(e) {
		e.preventDefault();
		$("#wrapper").toggleClass("toggled");

	});
</script>

<script type="text/javascript">
	$('.test').click(function(){ // burda a itemindeki test classını seç
		var ele = $('.icon-to-change'); //bu neden var amk
		if(ele.hasClass('fa-ellipsis-h') && ele.hasClass('position_sidebar_icon_2')){ // burda i itemindeki classları seçiyoruz ifle koşul veriyoruz
			ele.removeClass('fa-ellipsis-h')//siliyoruz
				ele.removeClass('position_sidebar_icon_2') // siliyoruz
			.addClass('fa-ellipsis-v ')//ekliyoryz
			.addClass('position_sidebar_icon_3 ') // ekliyoruz
		}
		else{
			ele.addClass('fa-ellipsis-h')//ekliyoruz
				ele.addClass('position_sidebar_icon_2') //ekliyoruz
			.removeClass('fa-ellipsis-v') // siliyoruz
			.removeClass('position_sidebar_icon_3') // siliyoruz
		}
	})
</script>

<script type="text/javascript">
	$(document).ready(function(){

		$("#footer_info").click(function(){
			/*container class'lı div tıklandığında açıksa kapanacak kapalıysa açılacak.*/
			$("#footer").slideToggle();


		});
	});

</script>
 <!--
  <script type='text/javascript'>
    $(function(){
      // When the window is resized, check the size to determine your classes
      $(window).resize(function(){
         // When the width and height meet your specific requirements or lower
         if (($(window).width() <= 800) && ($(window).height() <= 600)){
               // If it is smaller or equal to 1024x768, apply your class
              $(".normal").removeClass('normal').addClass('smaller');
         }
         else{
              // Otherwise, reverse the classes
              $(".smaller").removeClass('smaller').addClass('normal');
         }
      });
    });
</script>-->

<script type="text/javascript">
        function searchToggle(obj, evt){
            var container = $(obj).closest('.search-wrapper');

            if(!container.hasClass('active')){
                  container.addClass('active');
                  evt.preventDefault();
            }
            else if(container.hasClass('active') && $(obj).closest('.input-holder').length == 0){
                  container.removeClass('active');
                  // clear input
                  container.find('.search-input').val('');
                  // clear and hide result container when we press close
                  container.find('.result-container').fadeOut(100, function(){$(this).empty();});
            }
        }

       
    </script>


<section  id="footer" class="  footer_color_1 footer_settings">
	<div class="container">
		<div class="row">

			<div class="col">
				<ul class="list-inline mt-3">
					<li class="list-inline-item ">
						<a class="text-white" href="">Hakkımızda</a>
					</li>
					<li class="list-inline-item"> 
						<a class="text-white" href="">Gizlilik</a>
					</li>
					<li class="list-inline-item">
						<a class="text-white" href="">Politikamız</a>
					</li>
				 
				</ul>

			</div>

			<div class="col">
				<p class="ml-5 text-white mt-3">© 2019 Tüm Telif Hakkı Saklıdır.  </p>
			</div>

			<div class="col">

			</div>

		</div>
		
	</div>

</section>


</html>