<?php
/**
 * php router for local dev/test
 * run php -S localhost:8000 router.php
 */


if (preg_match('/\.(?:png|jpg|jpeg|gif|js|html|css)$/', $_SERVER["REQUEST_URI"])) {
    return false;
} else {
    include 'index.html';
}