<?php
// Führe den Befehl aus
$result = shell_exec('tmux capture-pane -t mcpiserver -p');

// Gib das Ergebnis aus
echo $result;
?>