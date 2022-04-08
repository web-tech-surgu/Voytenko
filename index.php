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
<?php
$tmp=file_get_contents("lab7.tpl");  // Загрузка шаблона впеременную
$objects="";  // Очистка переменных
$content="";
	$C= $_GET["C"];
	   switch($C)  {
	        case "1": $objects=file_get_contents("objects1.php")); break;
	        case "2": $objects=file_get_contents("objects2.php")); break;
	        case "3": $objects=file_get_contents("objects3.php")); break;
	        default: $objects=file_get_contents("about.php");
	   }
	$O=$_GET["O"];
	   switch($O) {		     
		case "1-1": $content=file_get_contents("object1-1.php"); break;
		case "1-2": $content=file_get_contents("object1-2.php"); break;
		case "1-3": $content=file_get_contents("object1-3.php"); break;
		case "2-1": $content=file_get_contents("object2-1.php"); break;
		case "2-2": $content=file_get_contents("object2-2.php"); break;
		case "2-3": $content=file_get_contents("object2-3.php"); break;
		case "3-1": $content=file_get_contents("object3-1.php"); break;
		case "3-2": $content=file_get_contents("object3-2.php"); break;
		case "3-3": $content=file_get_contents("object3-3.php"); break;
		default: $content=file_get_contents("applicate.php");
	   };
	
	$tmp = str_replace("{object}",$objects, $tmp);
	$tmp = str_replace("{content}",$contents, $tmp);
echo $tmp;
?>
<?php
$tmp=file_get_contents("lab7.tpl");  // Подключение файла с шаблоном
$objects=""; 
$content="";
			
function load_content($s) // Эта функция будет вызываться вместо вывода данных браузеру
{
    $GLOBALS['description'].=$s; // Новые данные добавляем к переменной
}
$C= $_GET["C"];
	   switch($C)  {
	        case "1": $objects=file_get_contents("objects1.php")); break;
	        case "2": $objects=file_get_contents("objects2.php")); break;
	        case "3": $objects=file_get_contents("objects3.php")); break;
	        default: $objects=file_get_contents("about.php");
	   }
          $O=$_GET["O"];
	   switch($O) {		     
		case "1-1": $content=file_get_contents("object1-1.php"); break;
		case "1-2": $content=file_get_contents("object1-2.php"); break;
		case "1-3": $content=file_get_contents("object1-3.php"); break;
		case "2-1": $content=file_get_contents("object2-1.php"); break;
		case "2-2": $content=file_get_contents("object2-2.php"); break;
		case "2-3": $content=file_get_contents("object2-3.php"); break;
		case "3-1": $content=file_get_contents("object3-1.php"); break;
		case "3-2": $content=file_get_contents("object3-2.php"); break;
		case "3-3": $content=file_get_contents("object3-3.php"); break;
	    case "99":{
		       ob_start('load_content'); // Включаем кеширование и указываем, что вместо отправки данных клиенту, их нужно отправлять в функцию
		       include("registration_form.php");
		       ob_end_flush();   // Выключаем кеширование... теперь все данные будут уходить браузеру
		       break;
	    }
		default: $content=file_get_contents("applicate.php");	
	    };
$tmp = str_replace("{object}",$objects, $tmp);
$tmp = str_replace("{content}",$contents, $tmp);
echo $tmp;
?>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
