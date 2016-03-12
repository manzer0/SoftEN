<?php

function base_url() {
    return "http://127.0.0.1/soften";
}

function base_path() {
    return $_SERVER['DOCUMENT_ROOT'] . "/soften";
}

function salt_pass($pass) {
    return md5("itoffside.com" . $pass);
}
