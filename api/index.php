<?php
if (str_contains($_SERVER['PATH_TRANSLATED'], '.php')) {
    require __DIR__ . "/../".$_SERVER['PATH_TRANSLATED'];
} else {
    require __DIR__ . "/../index.php";
}