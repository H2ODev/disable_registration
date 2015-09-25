<?php
/**
 * Created by PhpStorm.
 * User: marvinosswald
 * Date: 25.09.15
 * Time: 11:18
 */
class H2ODev_DisableRegistration_Model_Observer
{
    public function __construct()
    {
    }
    /**
     * Exports a given MagentoOrderExport
     * @param   Varien_Event_Observer $observer
     * @return true
     */
    public function disable ($observer){
        //$observer->result->setIsAllowed(false);
        return true;
    }
}