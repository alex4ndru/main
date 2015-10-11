<?php
namespace Main;
use Main\Article\Article;
use Main\XMLWriter\XMLWriter;
use Main\JSONWriter\JSONWriter;
use Main\Factory\Factory;

require './vendor/autoload.php';

/*
require 'lib/article.php';
require 'lib/jsonwriter.php';
require 'lib/writer.php';
require 'lib/xmlwriter.php';
*/

$x = new Article('Ilie in vie', 'Ilie', 'unknown', 'special');

//cu factory
try
{
    $writerTemplate = Factory::getWriter();
} catch (\Exception $ex)
{
    echo $ex->getMessage();
    $writerTemplate = new XMLWriter();
}

var_dump($writerTemplate);
$data = $x->writeThis($writerTemplate);
var_dump($data);

//fara factory
/*
$asXml = new XMLWriter();
$asJson = new JSONWriter();

$data = $x->writeThis($asXml);
$data2 = $x->writeThis($asJson);

var_dump($data);
echo "<hr />";
var_dump($data2);
*/