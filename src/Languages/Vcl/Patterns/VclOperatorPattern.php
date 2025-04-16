<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Vcl\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenTypeEnum;

final readonly class VclOperatorPattern implements Pattern
{
    use IsPattern;

    public function __construct(private string $operator)
    {
    }

    public function getPattern(): string
    {
        $quoted = preg_quote($this->operator, '/');

        return "/(?<match>{$quoted})/";
    }

    public function getTokenType(): TokenTypeEnum
    {
        return TokenTypeEnum::OPERATOR;
    }
}
