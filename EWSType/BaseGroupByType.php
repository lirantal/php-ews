<?php
/**
 * Definition of the BaseGroupByType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BaseGroupByType type
 */
class BaseGroupByType extends EWSType
{
    /**
     * Order property
     *
     * @var EWSType_SortDirectionType
     */
    public $Order;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Order',
                'required' => false,
                'type' => 'SortDirectionType',
            ),
        );
    }
}
