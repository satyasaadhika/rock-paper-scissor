<?php
if (str_contains($_SERVER['REQUEST_URI'], '.php')) {
    require __DIR__ . "/../".preg_replace("/\?.*\z/", "", $_SERVER['REQUEST_URI']);
} else {
    require __DIR__ . "/../index.php";
}