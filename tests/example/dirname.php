<?php

include('../src/FileWrapper.php');

$fileWrapper = new \DanielJHarvey\FileWrapper\FileWrapper;

echo "regular: \n";
echo dirname(__FILE__)." \n";

echo "wrappered: \n";
echo $fileWrapper->dirName(__FILE__) . "\n";
echo $fileWrapper->dirName(__FILE__,3) . "\n";
