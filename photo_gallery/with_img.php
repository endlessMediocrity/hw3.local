<?php include 'functions.php' ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <?php
        if (isset ($_FILES['new_img'])) {
            if (0 == $_FILES['new_img']['error']) {
                move_uploaded_file($_FILES['new_img']['tmp_name'], __DIR__ . '/images/new_1');
            }
        }

        $mas_img = output_image('images')
    ?>
        <?php foreach ($mas_img as $value): ?>
            <img src="<?= $value ?>" alt="low" width="400" height="300">
        <?php endforeach ?>
</body>
</html>