<?php
echo "Dzisiaj jest: " . date("Y-m-d H:i:s");
// wyswiet zawartosci katalogu bierzacego
echo "<br>Pliki w katalogu:<br>";
$files = scandir('.');
foreach ($files as $file) {
    if ($file !== '.' && $file !== '..') {
        echo $file . "<br>";
    }
}
// wyswiet informacje o PHP
phpinfo();
?>