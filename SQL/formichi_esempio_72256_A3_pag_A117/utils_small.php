<?php
function startsWith($string, $startString) {
    return substr($string, 0, strlen($startString)) === $startString;
}
