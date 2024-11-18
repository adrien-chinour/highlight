<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Vcl\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenTypeEnum;

#[PatternTest(input: 'sub baz {', output: 'baz')]
final readonly class VclFunctionNamePattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return 'sub\s(?<match>.+)\s?\{';
    }

    public function getTokenType(): TokenTypeEnum
    {
        return TokenTypeEnum::PROPERTY;
    }
}
