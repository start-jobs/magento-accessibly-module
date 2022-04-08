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
        $html = '<ol style="padding-left: 30px; font-size:15px;">';
        $html .= '<li>Create your account at our dashboard <a target="_blank" href="https://ac.onthemapmarketing.com/register">register here</a></li>';
        $html .= '<li>Get the API key and copy it here in Magento</li>';
        $html .= '<li>Copy code snippet generated on dashboard</li>';
        $html .= '<li>Configure your widget</li>';
        $html .= '</ol>';

        return $html;
    }
}
