<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\ValueObject\PhpVersion;

return RectorConfig::configure()
    ->withPaths([
        __DIR__ . '/lib',
    ])
    // uncomment to reach your current PHP version
    ->withPhpVersion(PhpVersion::PHP_84)
    ->withPreparedSets(codeQuality: true, typeDeclarations: true);
