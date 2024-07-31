<?php
//@author Carlos Santos e Kauã Gomes

// Exercício 1
function soma ($num1, $num2) {
    return $num1 + $num2;
}
echo "Exercício 1<br>";
echo soma(2, 2);

// Exercício 2
function areaTriangulo ($base, $altura) {
    return ($base * $altura) / 2;
}
echo "<br><br>Exercício 2<br>";
echo areaTriangulo(5, 4);

// Exercício 3

function pegarUltimoNumero() {
    $array = array($num3, $num4, $num5);

    return end($array);
}
echo "<br><br>Exercício 3<br>";
echo pegarUltimoNumero();

// Exercício 4

function validarNumero() {
    $array2 = array(10, 5, 25, 2, 3, 99, 80, 70);
    $numCheck = 80;
    $check;
    for(int $i = 0, $i < $array2, $i++){
        if ($numCheck == $array2[$i]) {
            $check = true;
            echo $check;
        }
        else{
        }
    }

}
echo "<br><br>Exercício 3<br>";
echo pegarUltimoNumero();
?>