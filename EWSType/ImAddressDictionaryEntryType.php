<?php
/**
 * Definition of the ImAddressDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ImAddressDictionaryEntryType type
 */
class ImAddressDictionaryEntryType extends EWSType
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
     * @var EWSType_ImAddressKeyType
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
                'type' => 'ImAddressKeyType',
            ),
        );
    }
}
