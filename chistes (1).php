<?php

$m1 = "-¿Cómo se llama el campeón de buceo japonés? -Tokofondo -¿Y el subcampeo?. -Kasitoko";
$m2 = "-¿Nivel de inglés? -Alto -Diga memoria -Memory -Póngalo en una frase-Salté por una ventana y memory -Contratado";

$rm = array($m1, $m2);
$random_keys = array_rand($rm, 1);
echo $rm[$random_keys]
?>