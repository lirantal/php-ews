<?php
/**
 * Definition of the ItemInfoResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ItemInfoResponseMessageType type
 */
class ItemInfoResponseMessageType extends EWSType
{
    /**
     * Items property
     *
     * @var EWSType_ArrayOfRealItemsType
     */
    public $Items;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Items',
                'required' => false,
                'type' => 'ArrayOfRealItemsType',
            ),
        );
    }
}
