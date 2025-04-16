<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Vcl\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\PatternTest;
use Tempest\Highlight\Tokens\TokenTypeEnum;

#[PatternTest(input: '# comment', output: '# comment')]
#[PatternTest(input: 'set req.grace = 10s; # comment', output: '# comment')]
#[PatternTest(input: 'set req.grace = 10s; // comment', output: '// comment')]
final readonly class VclSingleLineCommentPattern implements Pattern
{
    use IsPattern;

    public function getPattern(): string
    {
        return '(?<match>(#|\/\/).+)';
    }

    public function getTokenType(): TokenTypeEnum
    {
        return TokenTypeEnum::COMMENT;
    }

}
