<?php

namespace Keerill\LaravelJsonFormatter;

use Monolog\Formatter\JsonFormatter as JsonFormatterBase;

final class JsonFormatter extends JsonFormatterBase
{
    /**
     * @param  mixed  $data
     */
    protected function toJson($data, bool $ignoreErrors = false): string
    {
        if (is_array($data)) {
            $data['type'] = 'raw';
        }

        return parent::toJson($data, $ignoreErrors);
    }
}
