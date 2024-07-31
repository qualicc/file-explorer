<?php
namespace Qualicc\FileExplorer\Controllers;

use Qualicc\FileExplorer\Controllers\MessageController;
use Qualicc\FileExplorer\Session\Session;
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
        include_once("./code_list.php");
        $data = $code_list;

        return $data;
    }
    private function getDirectory($list, $code) : string
    {
        foreach ($list as $one) 
        {
            if ($one['code'] == $code) {
                return $one['directory'];
            }
        }
        return "empty";
    }
    private function redirect($dir): void
    {
        if ($dir != "empty") 
        {
            Session::set("dir",$dir);
            header("Location: list.php");
        }
        else
        {
            MessageController::create("Wrong code");
        }
    } 
}
