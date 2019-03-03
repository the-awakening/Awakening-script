<?php require_once 'head.php'; ?>


<body>
	<?php require_once 'login.php'; ?>

	<!--Sidebar Kısmı-->
	<div class="d-flex toggled" id="wrapper">
		<?php require_once 'sidebar.php';	?>



		<!--İçerik ve menü-->
		<div id="page-content-wrapper">
			<?php	
			require_once 'menu.php';
			require_once 'content.php';
			?>
			
		</div>


	</div>

</body>

<?php require_once 'footer.php'; ?>




