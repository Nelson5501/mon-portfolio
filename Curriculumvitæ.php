<?php
$file = "/Users/NelsonCaterino/Documents/Site/CV_Nelson Caterino.pdf";
header('Content-Type: application/octet-stream');
header('Content-Transfer-Encoding: Binary');
header('Content-disposition: attachment; filename="' . basename($file) . '"');

echo readfile($file);