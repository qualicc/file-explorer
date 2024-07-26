<?php
namespace Qualicc\FileExplorer\Requests;

use Qualicc\FileExplorer\Controllers\CodeController;
use Qualicc\FileExplorer\Controllers\MessageController;
use Qualicc\FileExplorer\Validator\CodeValidator;

class CodeRequest 
{
    public function __construct(Array $request) {
        if (CodeValidator::validate($request)) {
            $code = new CodeController($request['code']);
        }
        else
        {
            MessageController::create("Form error. Error code #01");
        }
    }
}
