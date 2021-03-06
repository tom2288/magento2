<?php
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Magento\Catalog\Model\ProductTypes;

class Config extends \Magento\Config\Data implements \Magento\Catalog\Model\ProductTypes\ConfigInterface
{
    /**
     * @param \Magento\Catalog\Model\ProductTypes\Config\Reader $reader
     * @param \Magento\Config\CacheInterface $cache
     * @param string $cacheId
     */
    public function __construct(
        \Magento\Catalog\Model\ProductTypes\Config\Reader $reader,
        \Magento\Config\CacheInterface $cache,
        $cacheId = 'product_types_config'
    ) {
        parent::__construct($reader, $cache, $cacheId);
    }

    /**
     * Get configuration of product type by name
     *
     * @param string $name
     * @return array
     */
    public function getType($name)
    {
        return $this->get($name, array());
    }

    /**
     * Get configuration of all registered product types
     *
     * @return array
     */
    public function getAll()
    {
        return $this->get();
    }

    /**
     * Check whether product type is set of products
     *
     * @param string $typeId
     * @return bool
     */
    public function isProductSet($typeId)
    {
        return $this->get($typeId . '/is_product_set', false);
    }
}
