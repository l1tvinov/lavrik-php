<?php

include_once('model/articles.php');
include_once('model/visits.php');

addVisitLog();


$fields = ['title' => '', 'content' => ''];
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$fields['title']	 = trim($_POST['title']);
	$fields['content']	 = trim($_POST['content']);

	if ($fields['title'] === '' || $fields['content'] === '') {
		$err = 'Заполните все поля!';
	} else {
		messagesAdd($fields);
		header('Location: index.php');
		exit();
	}
}


?>
<div class="form">
	<? if ($isSend) : ?>
		<p>Your article is done!</p>
	<? else : ?>
		<form method="post">
			Title:<br>
			<input type="text" name="title" value="<?= $fields['title'] ?>">
			<br>
			Content:<br>
			<textarea name="content"><?= $fields['content'] ?></textarea>
			<br>
			<button>Send</button>
			<p><?= $err ?></p>
		</form>
	<? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>