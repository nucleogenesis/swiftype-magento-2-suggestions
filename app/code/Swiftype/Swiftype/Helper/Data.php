<?php
namespace Swiftype\Swiftype\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterfac
     */
    protected $_scopeConfig;

    CONST ENGINE_KEY      = 'swiftype_swiftype/settings/engine_key';
    CONST SEARCH_ID	  = 'swiftype_swiftype/settings/search_id';

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
    ) {
        parent::__construct($context);

        $this->_scopeConfig = $scopeConfig;
    }

    public function getEngineKey(){
        return $this->_scopeConfig->getValue(self::ENGINE_KEY);
    }
    public function getSearchId(){
        return $this->_scopeConfig->getValue(self::SEARCH_ID);
    }
}


