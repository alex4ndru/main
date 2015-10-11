<?php
namespace Main\XMLWriter;

use Main\Writer\Writer;
use Main\Article\Article;

class XMLWriter implements Writer
{
    public function Write(Article $obj) {
        $ret = "
            <article>
                <title>{$obj->title}</title>
                <author>{$obj->author}</author>
                <date>{$obj->date}</date>
                <category>{$obj->category}</category>
            </article>
            ";
        return $ret;
    }

}
