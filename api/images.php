<?php
$files = glob(__DIR__ . '/../public/build/assets/*');

foreach ($files as $file) {
require($file);
}
