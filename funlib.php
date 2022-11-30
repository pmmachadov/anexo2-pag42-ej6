<?php
$num1 = $_POST["num1"] ?? ""; // ?? es el operador de null coalescing. Significa que si num1 no está definido, se le asigna el valor "".
$num2 = $_POST["num2"] ?? "";
$num3 = $_POST["num3"] ?? "";
$num4 = $_POST["num4"] ?? "";
$num5 = $_POST["num5"] ?? "";
$num6 = $_POST["num6"] ?? "";
$num7 = $_POST["num7"] ?? "";
$num8 = $_POST["num8"] ?? "";
$num9 = $_POST["num9"] ?? "";
$num10 = $_POST["num10"] ?? "";
$nums = array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10);
 // Aquí se crea el array nums con los valores de los números introducidos por el usuario.

function suma($nums) {
    $suma = 0;
    foreach ($nums as $num) {
        $suma += $num;
    }
    return $suma;
    }

function maximo($nums) {
    $maximo = 0;
    foreach ($nums as $num) {
        if ($num > $maximo) {
            $maximo = $num;
        }
    }
    return $maximo;
}

function minimo($nums) {
    $minimo = 0;
    foreach ($nums as $num) {
        if ($num < $minimo) {
            $minimo = $num;
        }
    }
    return $minimo;
}

function media($nums) {
    $suma = 0;
    foreach ($nums as $num) {
        $suma += $num;
    }
    $media = $suma / count($nums);
    return $media;
}

// Validación

if (isset($_POST["num1"]) && !is_numeric($_POST["num1"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num2"]) && !is_numeric($_POST["num2"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num3"]) && !is_numeric($_POST["num3"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num4"]) && !is_numeric($_POST["num4"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num5"]) && !is_numeric($_POST["num5"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num6"]) && !is_numeric($_POST["num6"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num7"]) && !is_numeric($_POST["num7"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num8"]) && !is_numeric($_POST["num8"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num9"]) && !is_numeric($_POST["num9"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

if (isset($_POST["num10"]) && !is_numeric($_POST["num10"])) {
    $classname = "alert";
    echo "Introduce todos los números" . "<br>";
} else {
    $classname = "";
}

?>