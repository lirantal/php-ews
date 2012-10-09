<?php
/**
 * Definition of the ExchangeImpersonationType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ExchangeImpersonationType type
 */
class ExchangeImpersonationType extends EWSType
{
    /**
     * ConnectingSID property
     *
     * @var EWSType_ConnectingSIDType
     */
    public $ConnectingSID;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ConnectingSID',
                'required' => false,
                'type' => 'ConnectingSIDType',
            ),
        );
    }
}
