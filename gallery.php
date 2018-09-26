<html>
<head>
	<meta charset="utf-8">
	<title>33 Попугая - сайт о попугаях</title>
	
	<link rel="stylesheet" type="text/css" href="css/lime_page.css" charset="utf-8">
	<link href="" rel="" type="">
	
</head>
<body>
    
	<div id="wrapper">
		<div id="content">
			<?php include('header.php');?>
			<?php include("function.php") ?>
			<div id="main">
			    <div id="l">
			        <h2 class="heading">Галерея фотографий самых красочных попугаев</h2>
			        <div style="clear: both"><br></div>
			        </div>
			<?php
			    
    			    $li = getGallery();
    				for ($i = 0; $i < count($li); $i++){
    					echo '
    					    
    						<div class="article">
    							<img src="/img/parrot'.$li[$i]["id"].'.jpg" alt="" title="">
    						</div>
    						';
    				}
    			
    		?>
    		    </div>
			</div>
		</div>
		<?php include('footer.php');?>
	</div>
</body>
</html>