<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Vcl\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenTypeEnum;

#[PatternTest(input: 'baz(req)', output: 'baz')]
final readonly class VclFunctionCallPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>[a-z][\w]+)\(';
    }

    public function getTokenType(): TokenTypeEnum
    {
        return TokenTypeEnum::PROPERTY;
    }
}
