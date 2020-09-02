<?php
$needle = array("red", "blue", "yellow", "black", "grey");

$haystack = "blue";
if (strpos($haystack, $needle)) {
    echo 'true';
} else {
    echo 'false';
}
?>