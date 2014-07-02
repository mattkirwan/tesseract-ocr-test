<?php

require_once 'vendor/autoload.php';

$tesseract = new TesseractOCR('ls_test.png');

$tesseract->setTempDir(dirname(__FILE__).'/tmp/');


var_dump(file_put_contents(dirname(__FILE__).'/board.txt', $tesseract->recognize()));
