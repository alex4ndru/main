<?php
namespace Main\Article;

use Main\Writer\Writer;

class Article
{
    public $title, $author, $date, $category;
    
    public function __construct($title, $author, $date, $category)
    {
        $this->title=$title;
        $this->author=$author;
        $this->date=$date;
        $this->category=$category;
    }
    
    public function writeThis(Writer $template)
    {
        return $template->Write($this);
    }
}