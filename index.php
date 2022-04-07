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
				<li><a href="index.php?C=1"> Категория 1</a></li>
				<li><a href="index.php?C=2"> Категория 2</a></li>
				<li><a href="index.php?C=3"> Категория 3</a></li>
				<li><a href="index.php"> Домой</a></li>
				<li><a href="index.php?O=99"> Форма</a></li>
			  </ul>    
			</div>
			<div id="conteiner">
					<div id="objects">
					  <?php 
						 $C= $_GET["C"];
						   switch($C)  {
							 case "1": echo(file_get_contents("objects1.html")); break;
							 case "2": echo(file_get_contents("objects2.html")); break;
							 case "3": echo(file_get_contents("objects3.html")); break;
							 default:echo(file_get_contents("about.html"));}
					   ?>
						</div>
						<div id="content">
						<?php
							$O=$_GET["O"];
							switch($O) {		     
							 case "1-1": echo(file_get_contents("object1-1.html")); break;
							 case "1-2": echo(file_get_contents("object1-2.html")); break;
							 case "1-3": echo(file_get_contents("object1-3.html")); break;
							 case "2-1": echo(file_get_contents("object2-1.html")); break;
							 case "2-2": echo(file_get_contents("object2-2.html")); break;
							 case "2-3": echo(file_get_contents("object2-3.html")); break;
							 case "3-1": echo(file_get_contents("object3-1.html")); break;
							 case "3-2": echo(file_get_contents("object3-2.html")); break;
							 case "3-3": echo(file_get_contents("object3-3.html")); break;
							 case "99": include("form_LAB6.php");  break;
							 default: echo(file_get_contents("applicate.html"));}
						?>
					</div>
				</div>
		</body>
    </html>


<html>
		<head>
		 <title>Сайт</title>
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
  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  <?php

$tmp=file_get_contents("index.tpl");  // Подключение файла с шаблоном

$category="";
$objects="";
$description="";

function load_content($s) // Эта функция будет вызываться вместо вывода данных браузеру
{
    $GLOBALS['description'].=$s; // Новые данные добавляем к переменной
}
$categories=file_get_contents("src/category.php");

	$Categ=$_GET["Categ"];
	switch ($Categ)
	{
		case "parlamentary": $objects=file_get_contents("src/object/parlamentary_object.php"); break;
		case "notparlamentary": $objects=file_get_contents("src/object/extrparlamentary_object.php"); break;
		default: $objects=file_get_contents("src/object.php");		
	}

	$Obj=$_GET["Obj"];
	switch ($Obj)
	{
		case "ER": $content=file_get_contents("src/description/ER.php"); break;
		case "KPRF": $content=file_get_contents("src/description/KPRF.php"); break;
		case "LDPR": $content=file_get_contents("src/description/LDPR.php"); break;
		case "CR": $content=file_get_contents("src/description/CR.php"); break;
		case "RODINA": $content=file_get_contents("src/description/RODINA.php"); break;
		case "introduction_parlamentary": $content=file_get_contents("src/description/introduction_parlamentary.php"); break;
		case "GP": $content=file_get_contents("src/description/GP.php"); break;
		case "patriot": $content=file_get_contents("src/description/patriot.php"); break;
		case "apple_kek": $content=file_get_contents("src/description/apple_kek.php"); break;
		case "rost": $content=file_get_contents("src/description/rost.php"); break;
		case "PARNAS": $content=file_get_contents("src/description/PARNAS.php"); break;
		case "progress": $content=file_get_contents("src/description/progress.php"); break;
		case "green": $content=file_get_contents("src/description/green.php"); break;
		case "introduction_notparlamentary": $content=file_get_contents("src/description/introduction_notparlamentary.php"); break;
		case "vstupit":
		ob_start('load_content'); // Включаем кеширование и указываем, что вместо отправки данных клиенту, их нужно отправлять в функцию
		include("src/description/vstupit.php"); break;
		ob_end_flush();   // Выключаем кеширование... теперь все данные будут уходить браузеру		
		
		default: $content=file_get_contents("src/description.php");	
	}
	$tmp = str_replace("{category}", $categories, $tmp);
$tmp = str_replace("{objects}", $objects, $tmp);
$tmp = str_replace("{description}", $content, $tmp);

echo $tmp;	
?>
