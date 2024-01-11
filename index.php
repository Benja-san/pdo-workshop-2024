<?php

// I need to use my database connexion
require_once('database.php');
// I need to fetch object from story class
require_once('model/Story.php');

$query = "SELECT * FROM story";

$statement = $pdo->query($query);
$stories = $statement->fetchAll(PDO::FETCH_CLASS, 'Story');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaamelott Stories</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <main>
        <section class="form">
            <h1>Stories List</h1>
            <?php if(!empty($stories)): ?>
            <ul>
                <?php foreach($stories as $story) : ?>
                <li>
                    <article>
                        <h2><?php echo $story->getTitle() ?></h2>
                        <p><?php echo $story->getContent() ?><span> -- By <?php echo $story->getauthor() ?></span></p>
                    </article>
                </li>
                <?php endforeach ?>
            </ul>
            <?php else : ?>
            <p>Aucune histoire pour le moment</p>
            <?php endif ?>
        </section>
    </main>
</body>
</html>