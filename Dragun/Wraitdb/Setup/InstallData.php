<?php


namespace Dragun\Wraitdb\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;



class InstallData implements InstallDataInterface
{
    protected $_postFactory;

    public function __construct(\Dragun\Wraitdb\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = [
            'name'         => "The Matrix",
            'post_content' => "The Matrix is a 1999 science fiction action film[3][4] written and directed by the Wachowskis.[a] It stars Keanu Reeves, Laurence Fishburne, Carrie-Anne Moss, Hugo Weaving, and Joe Pantoliano and is the first installment in the Matrix franchise. It depicts a dystopian future in which humanity is unknowingly trapped inside a simulated reality, the Matrix, created by intelligent machines to distract humans while using their bodies as an energy source.[5] When computer programmer Thomas Anderson, under the hacker alias \"Neo\", uncovers the truth, he \"is drawn into a rebellion against the machines\"[5] along with other people who have been freed from the Matrix. ",
            'url_key'      => 'https://en.wikipedia.org/wiki/The_Matrix',
            'tags'         => 'The Matrix film',
            'status'       => 1
        ];
        $post = $this->_postFactory->create();
        $post->addData($data)->save();
    }
}