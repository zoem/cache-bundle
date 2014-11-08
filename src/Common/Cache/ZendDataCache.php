<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\ZendDataCache as DoctrineCache;

class ZendDataCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        throw new \Exception('Add() functionality is not supported by the Zend Cache API.');
    }
}