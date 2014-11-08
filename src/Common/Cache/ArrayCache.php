<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\ArrayCache as DoctrineCache;

class ArrayCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        if ($this->doContains($id)) {
            return false;
        }
        return $this->doSave($id, $data, $lifeTime);
    }
}