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

// wyswiet informacje o serwerze
echo "<br>Informacje o serwerze:<br>";
echo "Nazwa hosta: " . gethostname() . "<br>";
echo "Adres IP: " . gethostbyname(gethostname()) . "<br>";  
// wyswiet informacje o systemie operacyjnym
echo "System operacyjny: " . php_uname() . "<br>";

// wyswiet informacje o PHP
phpinfo();
?>