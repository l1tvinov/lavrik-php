<?php

	include_once('model/articles.php');
	include_once('model/visits.php');
	
	addVisitLog();	


	$strId = $_GET['id'] ?? '';
	$id = (int)$strId;
	// preg_match(/^[1-9]+[0-9]*$/)
	
	$articles = messagesId($id);
	?>


<div class="content">

		<div class="article">
			<h1><?=$articles['title']?></h1>
			<div><?=$articles['content']?></div>
			<div>Дата: <?=$articles['dt_add']?></div>
			<hr>
			<a href="delete.php?id=<?=$id?>">Remove</a> | 
			<a href="edit.php?id=<?=$id?>">Edit</a>
		</div>

</div>
<hr>
<a href="index.php">Move to main page</a>