<?php
/**
 * Definition of the SetUserOofSettingsResponse type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SetUserOofSettingsResponse type
 */
class SetUserOofSettingsResponse extends EWSType
{
    /**
     * ResponseMessage property
     *
     * @var EWSType_ResponseMessageType
     */
    public $ResponseMessage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ResponseMessage',
                'required' => false,
                'type' => 'ResponseMessageType',
            ),
        );
    }
}
