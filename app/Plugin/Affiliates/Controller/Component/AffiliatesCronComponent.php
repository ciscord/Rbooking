<?php
/**
 * RBooking
 *
 * PHP version 5
 *
 * @category   PHP
 * @package    RBooking
 * @subpackage Core
 * @author     Ivica <ivicadevelopermarinkovic@gmail.com>
 * @copyright  2018 Ivica 
 * 
 * 
 */
class AffiliatesCronComponent extends Component
{
    public function main()
    {
        App::import('Model', 'Affiliates.Affiliate');
        $this->Affiliate = new Affiliate();
        $this->Affiliate->update_affiliate_status();
    }
}