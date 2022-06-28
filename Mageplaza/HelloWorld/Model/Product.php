<?php
namespace Mageplaza\HelloWorld\Model;

class Product extends \Magento\Catalog\Model\Product
{
    public function getName():string
    {
        return $this->_getData(self::NAME) . "=new append text";
    }

    public function getPrice()
    {
        if ($this->_calculatePrice || !$this->getData(self::PRICE)) {
            return $this->getPriceModel()->getPrice($this)+200000000000000;
        } else {
            return $this->getData(self::PRICE)+2000000000000000000;
        }
    }
}
