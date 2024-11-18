<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Vcl\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenTypeEnum;

final readonly class VclVariablePattern implements Pattern
{
    use IsPattern;

    public function __construct(private string $variable)
    {
    }

    public function getPattern(): string
    {
        return "\s?(?<match>{$this->variable})\.";
    }

    public function getTokenType(): TokenTypeEnum
    {
        return TokenTypeEnum::VARIABLE;
    }
}
