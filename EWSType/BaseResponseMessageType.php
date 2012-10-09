<?php
/**
 * Definition of the BaseResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BaseResponseMessageType type
 */
class BaseResponseMessageType extends EWSType
{
    /**
     * ResponseMessages property
     *
     * @var EWSType_ArrayOfResponseMessagesType
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
                'type' => 'ArrayOfResponseMessagesType',
            ),
        );
    }
}
