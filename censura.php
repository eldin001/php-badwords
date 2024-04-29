<?php

$paragrafo = $_POST['paragrafo'];
$parola_censurata = $_POST['parola'];

echo "Paragrafo originale: $paragrafo<br>";
echo "Lunghezza paragrafo originale: " . strlen($paragrafo) . " caratteri<br><br>";

$paragrafo_censurato = str_replace($parola_censurata, "***", $paragrafo);
echo "Paragrafo censurato: $paragrafo_censurato<br>";
echo "Lunghezza paragrafo censurato: " . strlen($paragrafo_censurato) . " caratteri";

?>