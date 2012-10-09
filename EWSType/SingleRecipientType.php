<?php
/**
 * Definition of the SingleRecipientType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the SingleRecipientType type
 */
class SingleRecipientType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
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
                'type' => 'EmailAddressType',
            ),
        );
    }
}
