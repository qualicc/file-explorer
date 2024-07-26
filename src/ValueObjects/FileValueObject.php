<?php
namespace Qualicc\FileExplorer\ValueObjects;

class FileValueObject
{
    private $name,$link;

    function __construct(string $dir, string $filename)
    {
        $this -> name = $filename;
        $this -> link = $dir;
    }

    public function getName(): string
    {
        return $this -> name;
    }

    public function getLink(): string 
    {
        return $this -> link;        
    }
}

