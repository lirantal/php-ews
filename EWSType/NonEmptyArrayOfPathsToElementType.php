<?php
/**
 * Definition of the NonEmptyArrayOfPathsToElementType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfPathsToElementType type
 */
class NonEmptyArrayOfPathsToElementType extends EWSType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

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
        );
    }
}
