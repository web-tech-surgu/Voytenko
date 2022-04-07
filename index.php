<!DOCTYPE html>
    <html>
		<head>
		 <title>Сайт</title>
		 <link rel="stylesheet" type="text/css" href="stayle.css" />
		</head>
		<body>
			<div id="categories">
			  Категории
			  
			  <ul id="list">
				<li><a hreft="index.php? C=1"> Категория 1</a></li>
				<li><a hreft="index.php? C=2"> Категория 2</a></li>
				<li><a hreft="index.php? C=3"> Категория 3</a></li>
				<li><a hreft="index.php"> Домой</a></li>
				<li><a hreft="index.php? 0=99"> Форма</a></li>
			  </ul>    
			</div>
			<div id="conteiner">
					<div id="objects">
					  <?php 
						 $C_GET["C"];
						   switch($C)  {
							 case "1": echo(file_get_contents("objects1.html")); break;
							 case "2": echo(file_get_contents("objects2.html")); break;
							 case "3": echo(file_get_contents("objects3.html")); break;
							 default:echo(file_get_contents("about.html"));}
					   ?>
						</div>
						<div id="content">
						<?php
							$0=$_GET["0"];
							switch($0) {		     
							 case "1-1": echo(file_get_contents("objects1-1.html")); break;
							 case "1-2": echo(file_get_contents("objects1-2.html")); break;
							 case "1-3": echo(file_get_contents("objects1-3.html")); break;
							 case "2-1": echo(file_get_contents("objects2-1.html")); break;
							 case "2-2": echo(file_get_contents("objects2-2.html")); break;
							 case "2-3": echo(file_get_contents("objects2-3.html")); break;
							 case "3-1": echo(file_get_contents("objects3-1.html")); break;
							 case "3-2": echo(file_get_contents("objects3-2.html")); break;
							 case "3-3": echo(file_get_contents("objects3-3.html")); break;
							 case "99": include("form_lab6.php");  break;
							 default: echo(file_get_contents("applicate.html"));}
						?>
					</div>
				</div>
		</body>
    </html>
  
				
				
				
