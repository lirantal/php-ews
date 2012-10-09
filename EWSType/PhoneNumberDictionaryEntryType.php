<?php
/**
 * Definition of the PhoneNumberDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the PhoneNumberDictionaryEntryType type
 */
class PhoneNumberDictionaryEntryType extends EWSType
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
     * @var EWSType_PhoneNumberKeyType
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
                'type' => 'PhoneNumberKeyType',
            ),
        );
    }
}
