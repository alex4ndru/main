<?php
namespace Main\Factory;

use Main\XMLWriter\XMLWriter;
use Main\JSONWriter\JSONWriter;

class Factory
{
    public static function getWriter()
    {
        $format = $_REQUEST['format'];
        $class = "\\Main\\".$format."Writer\\".$format.'Writer';
        //$class = $format.'Writer';
        if(class_exists($class))
        {
            echo "class exists :)<br />";
            return new $class();
        }
        else
        {
            throw new \Exception("{$class} - no such class dude, using default XML!");
        }
    }
}