<?php

$compra = $_POST["compra"];

if ($compra > 1250) {

    $descuento = $compra * 0.17;
    $total = $compra - $descuento;

    echo "Total de la compra: $" . number_format($compra, 2) . " MXN\n";
    echo "Descuento del 17%: $" . number_format($descuento, 2) . " MXN\n";
    echo "Total a pagar: $" . number_format($total, 2) . " MXN";

} else {

    $total = $compra;

    echo "Total de la compra: $" . number_format($compra, 2) . " MXN\n";
    echo "No se aplica descuento.\n";
    echo "Total a pagar: $" . number_format($total, 2) . " MXN";

}

?>
