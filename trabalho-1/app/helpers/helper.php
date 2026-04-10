<?php

function request($method, $fields = []) {
    if ($_SERVER['REQUEST_METHOD'] !== strtoupper($method)) {
        return null;
    }

    $input = $method === 'POST' ? $_POST : $_GET;

    $result = [];

    foreach ($fields as $field) {
        $result[$field] = $input[$field] ?? null;
    }

    return $result;
}