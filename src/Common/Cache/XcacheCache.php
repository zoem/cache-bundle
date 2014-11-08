<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\XcacheCache as DoctrineCache;

class XcacheCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        throw new \Exception('Add() functionality is not supported by the XCache API.');
    }
}