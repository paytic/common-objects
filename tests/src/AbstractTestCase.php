<?php

namespace Paytic\CommonObjects\Tests;

use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractTestCase
 * @package Paytic\Payments\Tests
 */
abstract class AbstractTestCase extends TestCase
{
    use MockeryPHPUnitIntegration;

}
