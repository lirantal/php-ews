<?php
/**
 * Definition of the EmailAddressDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the EmailAddressDictionaryEntryType type
 */
class EmailAddressDictionaryEntryType extends EWSType
{
    /**
     * _ property
     *
     * @var string
     */
    public $_;

    /**
     * Key property
     *
     * @var EWSType_EmailAddressKeyType
     */
    public $Key;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => '_',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Key',
                'required' => false,
                'type' => 'EmailAddressKeyType',
            ),
        );
    }
}
