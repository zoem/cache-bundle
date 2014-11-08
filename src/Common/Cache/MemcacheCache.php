<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\MemcacheCache as DoctrineCache;

class MemcacheCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        return $this->getMemcache()->add($id, $data, (int) $lifeTime);
    }
}