<?php
/**
 * Definition of the AlternateIdBaseType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the AlternateIdBaseType type
 */
class AlternateIdBaseType extends EWSType
{
    /**
     * Format property
     *
     * @var EWSType_IdFormatType
     */
    public $Format;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Format',
                'required' => false,
                'type' => 'IdFormatType',
            ),
        );
    }
}
