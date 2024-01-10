<?php

require_once('database.php');

$query = "SELECT * FROM story";

$statement = $pdo->query($query);
$stories = $statement->fetchAll();

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
                        <h2><?php echo $story["title"] ?></h2>
                        <p><?php echo $story["content"] ?> <span><?php echo $story["author"] ?></span></p>
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