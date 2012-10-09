<?php
/**
 * Definition of the BaseDelegateResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BaseDelegateResponseMessageType type
 */
class BaseDelegateResponseMessageType extends EWSType
{
    /**
     * ResponseMessages property
     *
     * @var EWSType_ArrayOfDelegateUserResponseMessageType
     */
    public $ResponseMessages;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResponseMessages',
                'required' => false,
                'type' => 'ArrayOfDelegateUserResponseMessageType',
            ),
        );
    }
}
