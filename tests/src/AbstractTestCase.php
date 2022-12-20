<?php

declare(strict_types=1);

namespace Paytic\CommonObjects\Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTestCase.
 */
abstract class AbstractTestCase extends TestCase
{
    use MockeryPHPUnitIntegration;
}
