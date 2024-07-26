<?php
namespace Qualicc\FileExplorer\Validator;

class FileListValidator
{
    public static function validate(string $directory): bool
    {
        return file_exists($directory);
    }
}
