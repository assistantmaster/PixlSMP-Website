<?php
$command = "reload confirm";
$output = shell_exec("tmux send-keys -t mcpiserver '{$command}' C-m && tmux capture-pane -t mcpiserver -p");

echo $output;
?>
