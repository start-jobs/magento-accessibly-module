<?php

namespace Onthemap\Accessibly\Block;

use Magento\Store\Model\ScopeInterface;

class Widget extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        $this->_scopeConfig = $scopeConfig;
        parent::__construct($context);
    }
    public function getScriptUrl()
    {
        $id = $this->_scopeConfig->getValue('otm_accessibly/general/api', ScopeInterface::SCOPE_STORE);
        $url = 'https://ac.onthemapmarketing.com/widget/'. $id .'/autoload.js';
        if ($id != '') {
            return $url;
        }

        return;
    }
}
