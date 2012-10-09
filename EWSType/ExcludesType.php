<?php
/**
 * Definition of the ExcludesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ExcludesType type
 */
class ExcludesType extends EWSType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

    /**
     * Bitmask property
     *
     * @var EWSType_ExcludesValueType
     */
    public $Bitmask;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Path',
                'required' => false,
                'type' => 'BasePathToElementType',
            ),
            array(
                'name' => 'Bitmask',
                'required' => false,
                'type' => 'ExcludesValueType',
            ),
        );
    }
}
