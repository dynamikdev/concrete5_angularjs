<?php defined('C5_EXECUTE') or die(_("Access Denied."));
	
class BootstrapAngularBlockController extends BlockController {
	protected $btTable = 'btBootstrapAngular';
	public function getBlockTypeName() {
		return t('AngularJs activation');
	}

	public function getBlockTypeDescription() {
		return t('Give the powa of AngularJs to your page');
	}
	/**
     * Returns this C5 instance URL
     * @return string
     */
    private function getThisConcreteURL() {
        $b = $this->getBlockObject();
        Loader::helper('concrete/urls');
        return ConcreteUrlsHelper::getBlockTypeAssetsURL($b);
    }

    
	public function on_page_view() {
		$html = Loader::helper("html");
		//$blkURL . '/custom_js/
		$blkURL = $this->getThisConcreteURL();
        $this->addHeaderItem($html->javascript($blkURL . '/js/angular.js'));
		
	}
	
}