<?php

declare(strict_types = 1);

namespace Graphpinator\ExtraTypes;

final class TimeType extends \Graphpinator\Type\ScalarType
{
    protected const NAME = 'Time';
    protected const DESCRIPTION = 'Time type - string which contains time in "<HH>:<MM>:<SS>" format.';

    public function validateNonNullValue(mixed $rawValue) : bool
    {
        return \is_string($rawValue)
            && \Nette\Utils\DateTime::createFromFormat('H:i:s', $rawValue) instanceof \Nette\Utils\DateTime;
    }
}
