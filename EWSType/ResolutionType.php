<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends EWSType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

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
            array(
                'name' => 'Contact',
                'required' => false,
                'type' => 'ContactItemType',
            ),
        );
    }
}
