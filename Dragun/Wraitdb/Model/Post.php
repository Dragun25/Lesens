<?php
namespace Dragun\Wraitdb\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'dragun_wraitdb_post';

    protected $_cacheTag = 'dragun_wraitdb_post';

    protected $_eventPrefix = 'dragun_wraitdb_post';

    protected function _construct()
    {
        $this->_init('Dragun\Wraitdb\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
