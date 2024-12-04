<?php
// Führe den Befehl aus
$result = shell_exec('sudo vcgencmd measure_temp');

// Gib das Ergebnis aus
echo $result;
?>
