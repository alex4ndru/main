<?php
namespace Main\JSONWriter;

use Main\Writer\Writer;
use Main\Article\Article;

class JSONWriter implements Writer
{
    public function Write(Article $obj)
    {
        $arr = ['article'=>$obj];
        return json_encode($obj);
    }
}