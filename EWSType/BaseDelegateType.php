<?php
/**
 * Definition of the BaseDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BaseDelegateType type
 */
class BaseDelegateType extends EWSType
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
