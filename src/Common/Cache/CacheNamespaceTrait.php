<?php
namespace Aequasi\Bundle\CacheBundle\Common\Cache;

trait CacheNamespaceTrait
{
    /**
     * Reference to Doctrine\Common\CacheProvider::getNamespaceId()
     *
     * @var \ReflectionMethod
     */
    private $namespaceMethod = null;

    /**
     * Prefixes the passed id with the configured namespace value.
     *
     * @param string $id The id to namespace.
     *
     * @return string The namespaced id.
     */
    private function getNamespacedId($id)
    {
        // 'Hack' to access the private method Doctrine\Common\CacheProvider::getNamespaceId()
        if ($this->namespaceMethod === null) {
            $this->namespaceMethod = (new \ReflectionClass($this))->getParentClass()
                                                                  ->getParentClass()
                                                                  ->getMethod('getNamespacedId');
            $this->namespaceMethod->setAccessible(true);
        }
        return $this->namespaceMethod->invoke($this, $id);
    }

    /**
     * {@inheritdoc}
     */
    public function add($id, $data, $lifeTime = 0)
    {
        return $this->doAdd($this->getNamespacedId($id), $data, $lifeTime);
    }
}