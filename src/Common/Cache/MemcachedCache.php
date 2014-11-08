<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\MemcachedCache as DoctrineCache;

class MemcachedCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        return $this->getMemcached()->add($id, $data, (int) $lifeTime);
    }
}