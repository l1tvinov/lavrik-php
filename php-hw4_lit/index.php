<?php

	include_once('model/articles.php');
	include_once('model/visits.php');

	addVisitLog();
	$articles = messagesAll();

	

?>
<a href="add.php">Add article</a>
<hr>
<div class="articles">
	<? foreach($articles as $id => $article): ?>
		<div class="article">
			<h2><?=$article['title']?></h2>
			<a href="article.php?id=<?=$article['id_article']?>">Read more</a>
		</div>
	<? endforeach; ?>
</div>
	