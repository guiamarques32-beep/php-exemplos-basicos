<?php

//funçao simples com retorno
function calcular(int $a, int $b, int $c): int {
    return $a * $b;

    if ($c >= 200) {
        return  $c * 1.10;

    } else {
        $resultado = $a * $b;
        return $resultado;
    }
}

echo "valor a ser pago = " . calcular(50, 10, 0)
?>