<!DOCTYPE html>
<html>
<body>
			<header>
				<div id="logo">
					<a href="http://33parrots.000webhostapp.com/" title="На главную">
						<img src="/img/kisspng-budgerigar-lovebird-parrot-vector-parrot-5a805af0149e78.0650045115183613280845.png" title="33 Попугая" alt="33 Попугая">
						<span>33 Попугая</span>
					</a>
				</div>
			</header>
			<nav>
				<div id="menuShow"><i class="fa fa-bars" aria-hidden="true"></i></div>
				<div id="hideMenu">
					<a href="/kinds.php">Виды попугаев</a>
					<a href="/lifeexpectancy.php">Продолжительность жизни</a>
					<a href="/teaching.php">Обучение вашего попугая</a>
					<a href="/gallery.php">Фотогаллерея</a>
				</div>			
			</nav>
	
	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
		$('#menuShow').click (function () {
			if ($('mobileMenu').is(':visible'))
				$('mobileMenu').hide();
			else
				$('mobileMenu').show();
		});
		
/*		$(document).scroll (function () {
			if($(document).scrollTop() > $('header').height () + 10)
				$('nav').addClass('fixed');
			else
				$('nav').removeClass('fixed');
		});*/
	</script>
</body>
</html>