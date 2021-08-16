<?php

	// your functions may be here

	// function editArticle(int $id, string $title, string $content) : bool{
	// 	$articles = getArticles();

	// 	if(!isset($articles[$id])){
	// 		return false;
	// 	}

	// 	$articles[$id] = [
	// 		'id' => $id,
	// 		'title' => $title,
	// 		'content' => $content
	// 	];

	// 	saveArticles($articles);
	// 	return true;
	// }

	// /* start --- black box */
	// function getArticles() : array{
	// 	return json_decode(file_get_contents('db/articles.json'), true);
	// }

	// function addArticle(string $title, string $content) : bool{
	// 	$articles = getArticles();

	// 	$lastId = end($articles)['id'];
	// 	$id = $lastId + 1;

	// 	$articles[$id] = [
	// 		'id' => $id,
	// 		'title' => $title,
	// 		'content' => $content
	// 	];

	// 	saveArticles($articles);
	// 	return true;
	// }

	// function removeArticle(int $id) : bool{
	// 	$articles = getArticles();

	// 	if(isset($articles[$id])){
	// 		unset($articles[$id]);
	// 		saveArticles($articles);
	// 		return true;
	// 	}
		
	// 	return false;
	// }

	// function saveArticles(array $articles) : bool{
	// 	file_put_contents('db/articles.json', json_encode($articles));
	// 	return true;
	// }
	/* end --- black box */


	include_once('model/db.php');

	function messagesAll() : array{
		$sql = "SELECT * FROM articles ORDER BY dt_add DESC";
		$query = dbQuery($sql);
		return $query->fetchAll();
	}

	function messagesAdd(array $fields) : bool{
		$sql = "INSERT articles (title, content) VALUES (:title, :content)";
		dbQuery($sql, $fields);
		return true;
	}

	function messagesId($id) : array{
		$sql = "SELECT * FROM articles WHERE id_article = $id";
		$query = dbQuery($sql);
		return $query->fetch();
	}