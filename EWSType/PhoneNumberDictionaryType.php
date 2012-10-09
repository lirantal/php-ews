<?php
/**
 * Definition of the PhoneNumberDictionaryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the PhoneNumberDictionaryType type
 */
class PhoneNumberDictionaryType extends EWSType
{
    /**
     * Entry property
     *
     * @var EWSType_PhoneNumberDictionaryEntryType
     */
    public $Entry;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Entry',
                'required' => false,
                'type' => 'PhoneNumberDictionaryEntryType',
            ),
        );
    }
}
