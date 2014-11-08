<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\WinCacheCache as DoctrineCache;

class WinCacheCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        return wincache_ucache_add($id, $data, (int) $lifeTime);
    }
}