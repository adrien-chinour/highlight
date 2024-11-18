<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Vcl;

use Tempest\Highlight\Languages\Base\BaseLanguage;
use Tempest\Highlight\Languages\Vcl\Patterns\VclFunctionCallPattern;
use Tempest\Highlight\Languages\Vcl\Patterns\VclFunctionNamePattern;
use Tempest\Highlight\Languages\Vcl\Patterns\VclKeywordPattern;
use Tempest\Highlight\Languages\Vcl\Patterns\VclMultiLineCommentPattern;
use Tempest\Highlight\Languages\Vcl\Patterns\VclSingleLineCommentPattern;
use Tempest\Highlight\Languages\Vcl\Patterns\VclVariablePattern;
use Tempest\Highlight\Languages\Vcl\Patterns\VclDoubleQuoteValuePattern;

class VclLanguage extends BaseLanguage
{
    public function getName(): string
    {
        return 'vcl';
    }

    public function getPatterns(): array
    {
        return [
            new VclDoubleQuoteValuePattern(),
            new VclMultiLineCommentPattern(),
            new VclSingleLineCommentPattern(),
            new VclFunctionNamePattern(),
            new VclFunctionCallPattern(),

            new VclKeywordPattern('vcl'),
            new VclKeywordPattern('import'),
            new VclKeywordPattern('backend'),
            new VclKeywordPattern('probe'),
            new VclKeywordPattern('acl'),
            new VclKeywordPattern('set'),
            new VclKeywordPattern('unset'),
            new VclKeywordPattern('if'),
            new VclKeywordPattern('else'),
            new VclKeywordPattern('elseif'),
            new VclKeywordPattern('elsif'),
            new VclKeywordPattern('elif'),
            new VclKeywordPattern('sub'),
            new VclKeywordPattern('return'),

            new VclVariablePattern('req'),
            new VclVariablePattern('req_top'),
            new VclVariablePattern('resp'),
            new VclVariablePattern('bereq'),
            new VclVariablePattern('beresp'),
            new VclVariablePattern('obj'),
            new VclVariablePattern('local'),
            new VclVariablePattern('client'),
            new VclVariablePattern('server'),
            new VclVariablePattern('sess'),
            new VclVariablePattern('storage'),
        ];
    }
}
