<?php
/**
 * Definition of the ImAddressDictionaryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ImAddressDictionaryType type
 */
class ImAddressDictionaryType extends EWSType
{
    /**
     * Entry property
     *
     * @var EWSType_ImAddressDictionaryEntryType
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
                'type' => 'ImAddressDictionaryEntryType',
            ),
        );
    }
}
