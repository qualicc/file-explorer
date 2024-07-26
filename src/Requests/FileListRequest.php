<?php
namespace Qualicc\FileExplorer\Requests;

use Qualicc\FileExplorer\Controllers\FileListController;
use Qualicc\FileExplorer\Controllers\MessageController;
use Qualicc\FileExplorer\Validator\FileListValidator;

class FileListRequest 
{
    private $list;
    public function __construct(string $dir) 
    {
        if (FileListValidator::validate($dir)) {
            $this -> list = new FileListController($dir);
        }
        else
        {
            MessageController::create("Application penetration attempt.  error code #02");
        }
    }
    public function getList(): array 
    {
        return $this -> list -> getList();
    }
}
