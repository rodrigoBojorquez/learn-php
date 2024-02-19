<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();      // kill the next code
}

function urlIs($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}

function verify(bool $condition, $status = Response::FORBIDDEN) {
    // if the condition is false then
    if (!$condition) {
        abort($status);
    }
}