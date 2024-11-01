<?php
print_r($_SERVER['REQUEST_URI']);

if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else {
    echo "<p>Welcome to PHP</p>";
}