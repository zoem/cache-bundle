<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\RedisCache as DoctrineCache;

class RedisCache extends DoctrineCache implements Cache
{
    use CacheNamespaceTrait;

    protected function doAdd($id, $data, $lifeTime)
    {
        $options = array('nx');
        if ($lifeTime > 0) {
            $options['ex'] = (int) $lifeTime;
        }
        return $this->getRedis()->set($id, $data, $options);
    }
}