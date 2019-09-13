<?php
/**
 * @author Bryce DeBilzan
 * @package Bbd_CmsBlock
 */
 
namespace Bbd\CmsBlock\Setup\Patch\Data;
 
use Magento\Framework\Setup\Patch\DataPatchInterface;
use Magento\Framework\Setup\Patch\PatchVersionInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Cms\Model\BlockFactory;
/**
 * Class AddNewCmsStaticBlock
 * @package Bbd\CmsBlock\Setup\Patch\Data
 */
class AddNewCmsStaticBlock implements DataPatchInterface, PatchVersionInterface
{
    /**
     * @var ModuleDataSetupInterface
     */
    private $moduleDataSetup;
 
    /**
     * @var PageFactory
     */
    private $blockFactory;
 
    /**
     * AddAccessViolationPageAndAssignB2CCustomers constructor.
     * @param ModuleDataSetupInterface $moduleDataSetup
     * @param PageFactory $blockFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BlockFactory $blockFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->blockFactory = $blockFactory;
    }
 
    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $newCmsStaticBlock = [
            'title' => 'Custom CMS Block',
            'identifier' => 'custom-cms-block',
            'content' => '<div class="cms-terms">This is my Custom CMS Block</div>',
            'is_active' => 1,
            'stores' => \Magento\Store\Model\Store::DEFAULT_STORE_ID
        ];
 
        $this->moduleDataSetup->startSetup();
 
        /** @var \Magento\Cms\Model\Block $block */
        $block = $this->blockFactory->create();
        $block->setData($newCmsStaticBlock)->save();
 
        $this->moduleDataSetup->endSetup();
    }
 
    /**
     * {@inheritdoc}
     */
    public static function getDependencies()
    {
        return [];
    }
 
    /**
     * {@inheritdoc}
     */
    public static function getVersion()
    {
        return '2.0.0';
    }
 
    /**
     * {@inheritdoc}
     */
    public function getAliases()
    {
        return [];
    }
}