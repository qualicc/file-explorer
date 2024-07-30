<?php
namespace Qualicc\FileExplorer\Controllers;

use Qualicc\FileExplorer\ValueObjects\FileValueObject;

class FileListController 
{
    private $fileList = Array();
    public function __construct(string $dir) 
    {
        $this -> createFileValueObjects($dir);
    }

    private function createFileValueObjects(string $dir): void
    {
        foreach ($this ->getFileList($dir) as $one) {
            array_push($this -> fileList, new FileValueObject("./files/$dir/$one",$one));
        }
    }
    private function getFileList(string $dir): array
    {
        return $this -> removeDots($this -> directoryScan($dir)); 
    }
    private function directoryScan(string $dir): array
    {
        return scandir("./files/$dir");
    }
    private function removeDots(array $list): array
    {
        return array_diff($list, array('.', '..', 'index.php'));    
    }
    public function getList(): array 
    {
        return $this -> fileList;    
    }
}
