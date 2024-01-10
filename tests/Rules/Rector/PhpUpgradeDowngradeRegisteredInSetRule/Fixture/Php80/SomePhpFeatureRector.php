<?php

declare(strict_types=1);

namespace Symplify\PHPStanRules\Tests\Rules\Rector\PhpUpgradeDowngradeRegisteredInSetRule\Fixture\Php80;

use Rector\Contract\Rector\RectorInterface;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

final class SomePhpFeatureRector implements RectorInterface
{
    public function getRuleDefinition(): RuleDefinition
    {
    }
}
