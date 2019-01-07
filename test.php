<?php
$name = "World";
if (isset($_GET['name'])) {
    $name = $_GET['name'];
}
echo "<h1>Hello, $name!</h1>";
