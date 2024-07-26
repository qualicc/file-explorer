<?php
namespace Qualicc\FileExplorer\Controllers;

use Qualicc\FileExplorer\Controllers\MessageController;

class CodeController 
{
    private $code;
    public function __construct(string $request) 
    {
        $this -> code = $request;
        $this -> redirect($this -> getDirectory($this -> getColeList(), $this -> code));
    }

    private function getColeList()
    {
        $json = file_get_contents('code_list.json');
        $data = json_decode($json);

        return $data;
    }
    private function getDirectory($list, $code) : string
    {
        foreach ($list as $one) 
        {
            if ($one -> code == $code) {
                return $one -> directory;
            }
        }
        return "empty";
    }
    private function redirect($dir): void
    {
        if ($dir != "empty") 
        {
            header("Location: list.php?dir=" . $dir);
        }
        else
        {
            MessageController::create("Wrong code");
        }
    } 
}
