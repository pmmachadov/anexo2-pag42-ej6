<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <?php require_once "./datos.php"; ?>
    <?php require_once "./funlib.php"; ?>

    <fieldset>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);
        "funlib.php" ?>">

            <label for="num1">Número 1</label>
            <?php if (isset($_POST["num1"]) && !is_numeric($_POST["num1"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num1" id="num1" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 2</label>
            <?php if (isset($_POST["num2"]) && !is_numeric($_POST["num2"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num2" id="num2" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 3</label>
            <?php if (isset($_POST["num3"]) && !is_numeric($_POST["num3"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num3" id="num3" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 4</label>
            <?php if (isset($_POST["num4"]) && !is_numeric($_POST["num4"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num4" id="num4" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 5</label>
            <?php if (isset($_POST["num5"]) && !is_numeric($_POST["num5"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num5" id="num5" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 6</label>
            <?php if (isset($_POST["num6"]) && !is_numeric($_POST["num6"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num6" id="num6" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 7</label>
            <?php if (isset($_POST["num7"]) && !is_numeric($_POST["num7"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num7" id="num7" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 8</label>
            <?php if (isset($_POST["num8"]) && !is_numeric($_POST["num8"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num8" id="num8" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 9</label>
            <?php if (isset($_POST["num9"]) && !is_numeric($_POST["num9"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num9" id="num9" class="<?php echo $classname; ?>"> <br>

            <label for="num1">Número 10</label>
            <?php if (isset($_POST["num10"]) && !is_numeric($_POST["num10"])) {
            $classname = "alert";
            echo "Introduce todos los números";
        } else {
            $classname = "";
        } ?> <br>
            <input type="text" name="num10" id="num10" class="<?php echo $classname; ?>"> <br>

            <input type="submit" value="Enviar">
        </form>
    </fieldset>
</body>