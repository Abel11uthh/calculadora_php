<?php
function suma($a, $b) {
    return $a + $b;
}

function resta($a, $b) {
    return $a - $b;
}

function multiplicacion($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Error: División por cero no permitida.";
    }
    return $a / $b;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : '';

    switch ($operacion) {
        case 'suma':
            $resultado = suma($num1, $num2);
            break;
        case 'resta':
            $resultado = resta($num1, $num2);
            break;
        case 'multiplicacion':
            $resultado = multiplicacion($num1, $num2);
            break;
        case 'division':
            $resultado = division($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }
    echo "<h1>Resultado: $resultado</h1>";
} else {
    echo "Método de solicitud no válido.";
}
?>