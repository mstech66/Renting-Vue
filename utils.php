<?php
function change_input($data) {
    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = mysql_real_escape_string($data);
    return $data;
}
?>
