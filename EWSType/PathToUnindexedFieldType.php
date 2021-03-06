<?php
/**
 * Definition of the PathToUnindexedFieldType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the PathToUnindexedFieldType type
 */
class PathToUnindexedFieldType extends EWSType
{
    /**
     * FieldURI property
     *
     * @var EWSType_UnindexedFieldURIType
     */
    public $FieldURI;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FieldURI',
                'required' => false,
                'type' => 'UnindexedFieldURIType',
            ),
        );
    }
}
