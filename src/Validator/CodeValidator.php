<?php
namespace Qualicc\FileExplorer\Validator;

use Qualicc\FileExplorer\Implementations\ValidatorImplementation;

class CodeValidator implements ValidatorImplementation
{
    public static function validate(Array $request): bool
    {
        if (!empty($request) && isset($request['code'])) {
            return true;
        }
        return false;
    }
}
