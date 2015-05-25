<?php

class Gerardo_Helloworld_Model_Catalog_Product extends Mage_Catalog_Model_Product
{
    public function getName()
    {
        return 'Gerardo ' . $this->_getData('name');
    }
}