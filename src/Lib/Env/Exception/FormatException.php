<?php

namespace Lib\Env\Exception;

class FormatException extends EnvException
{
    public function __construct(string $property = '', string $actual = '')
    {
        parent::__construct(sprintf('Wrong character in env var %s, %s given', $property, $actual));
    }
}
