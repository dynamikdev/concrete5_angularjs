<?php defined('C5_EXECUTE') or die("Access Denied.");

class AngularjsPackage extends Package {

    protected $pkgHandle = 'angularjs';
    protected $pkgName = 'Angularjs';
    protected $pkgDescription = 'Add AngularJS To Your Concrete5.';
    protected $appVersionRequired = '5.6.1';
    protected $pkgVersion = '0.1';
    

    public function install() {
            $pkg = parent::install();
            $this->installBlocks($pkg);
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

    private function installBlocks($pkg) {
        BlockType::installBlockTypeFromPackage('bootstrap_angular', $pkg);
        return $this;
    }
}
