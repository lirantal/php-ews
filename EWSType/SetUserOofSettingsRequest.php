<?php
/**
 * Definition of the SetUserOofSettingsRequest type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SetUserOofSettingsRequest type
 */
class SetUserOofSettingsRequest extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddress
     */
    public $Mailbox;

    /**
     * UserOofSettings property
     *
     * @var EWSType_UserOofSettings
     */
    public $UserOofSettings;

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
            array(
                'name' => 'UserOofSettings',
                'required' => false,
                'type' => 'UserOofSettings',
            ),
        );
    }
}
