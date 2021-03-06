<?php

namespace Bermuda\Cycle;

use Cycle\ORM\ORMInterface;
use Cycle\ORM\PromiseFactoryInterface;
use Cycle\ORM\SchemaInterface;
use Spiral\Database\DatabaseManager;

/**
 * Class CycleProvider
 * @package Bermuda\Cycle
 */
class ConfigProvider extends \Bermuda\Config\ConfigProvider
{
    protected function getFactories(): array
    {
        return [
            DatabaseManager::class => DatabaseManagerFactory::class,
            SchemaInterface::class => SchemaFactory::class,
            PromiseFactoryInterface::class => PromiseProxyFactory::class,
            ORMInterface::class => ORMFactory::class
        ];
    }
}
