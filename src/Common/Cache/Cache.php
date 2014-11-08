<?php

namespace Aequasi\Bundle\CacheBundle\Common\Cache;

use Doctrine\Common\Cache\Cache as DoctrineCache;

interface Cache extends DoctrineCache
{
    /**
     * Adds an entry to the cache
     *
     * @param string $id    The cache id.
     * @param mixed $data   The cache entry/data.
     * @param int $lifeTime The cache lifetime.
     *                      If != 0, sets a specific lifetime for this cache entry (0 => infinite lifeTime).
     *
     * @return boolean TRUE if the entry was successfully added to the cache, FALSE when the key already exists.
     */
    public function add($id, $data, $lifeTime = 0);
}