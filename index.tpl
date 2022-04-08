<!DOCTYPE html>
<html>
		<head>
		 <title>Лабораторная работа 7. Динамическая генерация web-страниц на основе шаблона</title>
		 <link rel="stylesheet" type="text/css" href="stayle.css" />
		</head>
		<body>
			<div id="categories">
			  Категории
			  
			  <ul id="list">
				<a href="lab6.php?C=1"> Категория 1</a>
				<a href="lab6.php?C=2"> Категория 2</a>
				<a href="lab6.php?C=3"> Категория 3</a>
				<a href="lab6.php"> Домой</a>
			 </div>
				<div id="conteiner">
					<div id="objects">
			{objects}
					</div>
					<div id="content">
			{content}
		        		</div>
				</div>
		</body>
