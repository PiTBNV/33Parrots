<?php
if(empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] == "off"){
	$redirect = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	header('HTTP/1.1 301 Moved Permanently');
	header('Location: ' . $redirect);
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>33 Попугая - сайт, на котором собрана информация о пернатых питомцах со всего мира</title>
	<link rel="stylesheet" type="text/css" href="css/main.css" charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/main_page.css" charset="utf-8">
</head>
<body>
	<div id="wrapper">
		<div id="content">
			<?php include('header.php');?>
			<div id="main">
				<div ud="inf">
<!--					<h2 class="heading">На этом сайте собрана информация о видах попугаев, об условиях их содержания, средней продолжительности жизни и о методах их обучения и приручения</h2> 
					<div style="clear: both"><br></div> -->
					
					
					
					<div class="article">
						<img src="http://agaporniden-online.de/wp-content/uploads/2014/01/unzertrennliche-1400x500.jpg" alt="Попугаи"></img>
						<span>Попугаи - это единственные животные, которые умеют имитировать человеческий голос и разговор. Это замечательная птица, которая может стать вам другом на долгое время.</span>
						<span>Характерной особенностью попугая является его яркая окраска: синяя, красная или зеленая, у многих развиты длинные хохолки и хвосты. Большинство видов этих птиц прекрасно летают и лазят по деревьям. Лапы попугая имеют по четыре пальца, попарно направленных вперед и назад. Плохо летающие виды часто имеют зеленоватую окраску, позволяющую им прятаться в кустарниках или травяных зарослях. Подвижный мощный и острый крючкообразный клюв попугая позволяет не только измельчить добытую пищу, но и служит птице для обороны, а во время путешествия по ветвям деревьев служит дополнительной опорой – «третьей лапой».</span>
						<span>Вес попугаев колеблется от десятков грамм до килограмма. Самки обычно бывают меньше самцов. Как долго живут попугаи? В естественных условиях возраст некоторых видов попугаев достигает 50 лет, а при содержании в неволе редко превышает 35. Попугаеобразные обладают скрипучим, крикливым голосом, но способность к звукоподражанию и хорошо развитая память позволяют им копировать голоса других птиц, животных и даже человека.</span>
					</div>
				</div>
			</div>
		</div>
		<?php include('footer.php');?>
	</div>
</body>
</html>