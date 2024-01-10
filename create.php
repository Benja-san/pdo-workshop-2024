<?php

require_once('database.php');

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
            <h1>Kaamelott story maker dashboard</h1>
            <form action="addStory.php" method="POST">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required maxlength="255">
                <label for="content">Content</label>
                <textarea name="content" id="content" cols="30" rows="10" required></textarea>
                <label for="author">Author</label>
                <input type="text" name="author" id="author" required maxlength="100">
                <button type="submit">Add story</button>
            </form>
        </section>
    </main>
</body>
</html>