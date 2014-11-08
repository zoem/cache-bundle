<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\ApcCache as DoctrineCache;

class ApcCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        return apc_add($id, $data, (int) $lifeTime);
    }
}