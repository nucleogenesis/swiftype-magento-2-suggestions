<?php
namespace Swiftype\Swiftype\Block\Index;

class Swiftype extends \Magento\Framework\View\Element\Template
{
	/**
	 * @var \Swiftype\Swiftype\Helper\Data
	 */
	protected $_helper;

	public function __construct(
		\Magento\Framework\View\Element\Template\Context $context,
		array $data = [],
		\Swiftype\Swiftype\Helper\Data $helper
	) {
		parent::__construct($context, $data);
		$this->_helper = $helper;
	}

	public function getEngineKey() {
		return $this->_helper->getEngineKey();
	}
}
