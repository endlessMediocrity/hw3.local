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
<>

<?php
$data_path = __DIR__ . '/data.txt';
if ($_POST['user_name'] != '' && $_POST['phone_number'] != '' && $_POST['password'] != '') {
    input_data($data_path);
}
$user_data = read_file($data_path);
?>
<?php foreach ($user_data as $key => $value): ?>
Пользователь_ . (<?= $key + 1 ?>) . ' = > ' . <?php print_r($value) ?> <br>
<?php endforeach; ?>

<br>
<form action="index.php">
    <button>На главную</button>
</form>

</body>
</html>