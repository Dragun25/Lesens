<?php

namespace Dragun\Wraitdb\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    protected $_postFactory;

    public function __construct(\Dragun\Wraitdb\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        if (version_compare($context->getVersion(), '1.2.0', '<')) {
            $data = [
                'name'         => "Taxi",
                'post_content' => "Taxi is a 1998 French action comedy film starring Samy Naceri, Frédéric Diefenthal and Marion Cotillard, written by Luc Besson and directed by Gérard Pirès. It has four sequels, Taxi 2, Taxi 3, Taxi 4 and Taxi 5 and one American remake, Taxi (2004). It also provided the premise for the 2014 American television show, Taxi Brooklyn. ",
                'url_key'      => 'https://en.wikipedia.org/wiki/Taxi_(1998_film)',
                'tags'         => 'Taxi film 1998',
                'status'       => 1
            ];
            $post = $this->_postFactory->create();
            $post->addData($data)->save();
        }
    }
}