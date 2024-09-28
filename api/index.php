<?php
echo $_SERVER['REQUEST_URI'];
if (str_contains($_SERVER['REQUEST_URI'], 'game.php')) {
    require __DIR__ . "/..".$_SERVER['REQUEST_URI'];
} else if (str_contains($_SERVER['REQUEST_URI'], '.php')) {
    require __DIR__ . "/../".$_SERVER['REQUEST_URI'];
} else {
    require __DIR__ . "/../index.php";
}