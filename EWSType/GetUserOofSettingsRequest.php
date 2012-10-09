<?php
/**
 * Definition of the GetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the GetUserOofSettingsRequest type
 */
class GetUserOofSettingsRequest extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddress
     */
    public $Mailbox;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Mailbox',
                'required' => false,
                'type' => 'EmailAddress',
            ),
        );
    }
}
