<?php
namespace larissaStore\FirstTest\Block\Html;

class Footer extends \Magento\Theme\Block\Html\Footer
{
     public function getCopyright()
    {
        if (!$this->_copyright) {
            $this->_copyright = "COPYRIGHT CHANGED WITH PREFERENCES - LARISSA_STORE";
        }
        return __($this->_copyright);
    }
}
