<?php
/**
 * Definition of the FolderResponseShapeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the FolderResponseShapeType type
 */
class FolderResponseShapeType extends EWSType
{
    /**
     * BaseShape property
     *
     * @var EWSType_DefaultShapeNamesType
     */
    public $BaseShape;

    /**
     * AdditionalProperties property
     *
     * @var EWSType_NonEmptyArrayOfPathsToElementType
     */
    public $AdditionalProperties;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'BaseShape',
                'required' => false,
                'type' => 'DefaultShapeNamesType',
            ),
            array(
                'name' => 'AdditionalProperties',
                'required' => false,
                'type' => 'NonEmptyArrayOfPathsToElementType',
            ),
        );
    }
}
