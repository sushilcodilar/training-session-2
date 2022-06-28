<?php
namespace Mageplaza\HelloWorld\Controller\Adminhtml\News;

class Index extends \Magento\Backend\App\Action
{
    protected $_pageFactory;
    protected $helperData;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Mageplaza\HelloWorld\Helper\Data $helperData
    ) {
        $this->_pageFactory = $pageFactory;
        $this->helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        // echo $this->helperData->getGeneralConfig('enable');
        // echo $this->helperData->getGeneralConfig('display_text');
        // exit();
        return $this->_pageFactory->create();
    }
}
