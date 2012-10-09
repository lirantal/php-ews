<?php
/**
 * Definition of the ResponseObjectCoreType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ResponseObjectCoreType type
 */
class ResponseObjectCoreType extends EWSType
{
    /**
     * ReferenceItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ReferenceItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
        );
    }
}
