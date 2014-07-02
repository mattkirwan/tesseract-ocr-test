<?php

require_once 'vendor/autoload.php';

$tesseract = new TesseractOCR('board_1.jpg');

$tesseract->setTempDir(dirname(__FILE__).'/tmp/');


var_dump(file_put_contents(dirname(__FILE__).'/board.txt', $tesseract->recognize()));
