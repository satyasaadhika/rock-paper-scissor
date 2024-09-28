<?php
if (str_contains($_SERVER['PATH_INFO'], '.php')) {
    require __DIR__ . "/../".$_SERVER['PATH_INFO'];
} else {
    require __DIR__ . "/../index.php";
}