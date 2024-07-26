<?php
namespace Qualicc\FileExplorer\Implementations;

interface ValidatorImplementation
{
    public static function validate(Array $request): bool;
}