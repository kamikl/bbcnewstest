<?php
		//Accesses article json file and sends to page
		$article = $_GET['article'];
		$string = file_get_contents("data/article-".$article.".json");
		echo $string;
?>