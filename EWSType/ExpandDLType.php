<?php
/**
 * Definition of the ExpandDLType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ExpandDLType type
 */
class ExpandDLType extends EWSType
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
