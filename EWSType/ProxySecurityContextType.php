<?php
/**
 * Definition of the ProxySecurityContextType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ProxySecurityContextType type
 */
class ProxySecurityContextType extends EWSType
{
    /**
     * _ property
     *
     * @var EWSType_base64Binary
     */
    public $_;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => '_',
                'required' => false,
                'type' => 'base64Binary',
            ),
        );
    }
}
