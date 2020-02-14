<?php
namespace Dragun\Wraitdb\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'post_id';
    protected $_eventPrefix = 'dragun_wraitdb_post_collection';
    protected $_eventObject = 'post_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dragun\Wraitdb\Model\Post', 'Dragun\Wraitdb\Model\ResourceModel\Post');
    }

}

