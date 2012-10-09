<?php
/**
 * Definition of the PhysicalAddressDictionaryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the PhysicalAddressDictionaryType type
 */
class PhysicalAddressDictionaryType extends EWSType
{
    /**
     * Entry property
     *
     * @var EWSType_PhysicalAddressDictionaryEntryType
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
                'type' => 'PhysicalAddressDictionaryEntryType',
            ),
        );
    }
}
