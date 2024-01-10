<?php

require_once('database.php');

$cleanData = [];
foreach($_POST as $key => $value) {
    $cleanData[$key] = htmlentities(trim((string) $value));
}

$title = $cleanData['title'];
$content = $cleanData['content'];
$author = $cleanData['author'];

$query = "INSERT INTO story (title, content, author) VALUES (:titlePlaceholder, :contentPlaceholder, :authorPlaceholder)";

$statement = $pdo->prepare($query);
$statement->bindValue(':titlePlaceholder', $title, PDO::PARAM_STR);
$statement->bindValue(':contentPlaceholder', $content, PDO::PARAM_STR);
$statement->bindValue(':authorPlaceholder', $author, PDO::PARAM_STR);

$result = $statement->execute();

if($result) {
    header('Location: index.php');
} else {
    echo "Something went wrong";
}