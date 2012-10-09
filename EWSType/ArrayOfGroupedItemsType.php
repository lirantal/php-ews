<?php
/**
 * Definition of the ArrayOfGroupedItemsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ArrayOfGroupedItemsType type
 */
class ArrayOfGroupedItemsType extends EWSType
{
    /**
     * GroupedItems property
     *
     * @var EWSType_GroupedItemsType
     */
    public $GroupedItems;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'GroupedItems',
                'required' => false,
                'type' => 'GroupedItemsType',
            ),
        );
    }
}
