<?php

if (!function_exists('')) {
    function p($data) {
        echo '<pre style="background:#fafafa;color:black;font-size:1em;margin:10px 0;white-space:pre-wrap">';
        print_r($data);
        echo "</pre>";
    }
}
