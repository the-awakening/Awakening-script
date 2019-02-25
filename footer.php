
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
</html>