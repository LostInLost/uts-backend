<?php


$files = glob(__DIR__ . '/../public/*');

foreach ($files as $file) {
    require($file);
}
