<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть імена через кому: <input type="text" name="names"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['names'])) {
    $names = $_POST['names'];
    $names=str_replace(",", ";", $names);
    echo $names;
}
?>

</body>
</html>
