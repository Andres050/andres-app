<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ies Manacor</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <?php foreach ($posts as $post) : ?>
        <article>
            <?=$post; ?>
        </article>
    <?php endforeach;?>
</body>
</html>
