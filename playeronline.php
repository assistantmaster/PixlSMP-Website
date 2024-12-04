<?php
$command = "list";
$output = shell_exec("tmux send-keys -t mcpiserver '{$command}' C-m && tmux capture-pane -t mcpiserver -p");
$command2 = "execute if entity @a"
$output = shell_exec("tmux send-keys -t mcpiserver '{$command2}' C-m && tmux capture-pane -t mcpiserver -p");
echo "{$output2} ({$output})";
?>
