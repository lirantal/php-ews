<?php
/**
 * Definition of the ArrayOfBaseItemIdsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfBaseItemIdsType type
 */
class ArrayOfBaseItemIdsType extends EWSType
{
    /**
     * ItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
        );
    }
}
