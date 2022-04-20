<?php

namespace Onthemap\Accessibly\Block\Adminhtml\Config;

use Dotdigitalgroup\Sms\Model\Account;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class Instructions extends Field
{
    /**
     * @var Account
     */
    private $account;

    /**
     * Template path
     *
     * @var string
     */
    // protected $_template = 'Onthemap_Accessibly::account_message.phtml';

    /**
     * AccountMessage constructor.
     * @param Context $context
     * @param Account $account
     * @param array $data
     */
    public function __construct(
        Context $context,
        Account $account,
        array $data = []
    ) {
        $this->account = $account;
        parent::__construct($context, $data);
    }

    /**
     * @param AbstractElement $element
     * @return string
     * @throws \Exception
     */
    public function render(AbstractElement $element)
    {
        $html = '<div style="display: flex; align-items: center; justify-content: space-between;">';
        $html .= '<p>Log in our dashboard to generate the key—Log into Accessibly App Dashboard to generate this key</p>';
        $html .= '<a style="margin-top:15px; margin-bottom: 15px; display: inline-block;" class="action action-advanced-reports" target="_blank" href="https://staging.ac.onthemapmarketing.com/login"><span style="padding-right: 5px;">Accessibly Dashboard</span></a>';
        $html .= '</div>';
        $html .= '<ol style="padding-left: 20px; font-size:15px;">';
        $html .= '<li>Create your Accessibly account by <a target="_blank" href="https://staging.ac.onthemapmarketing.com/register">registering here</a></li>';
        $html .= '<li>After the registration, copy the API key and paste it into the field above</li>';
        $html .= '<li>Configure your widget and customize its settings under your Accessibly App Panel</li>';
        $html .= '</ol>';

        return $html;
    }
}
