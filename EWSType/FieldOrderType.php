<?php
/**
 * Definition of the FieldOrderType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the FieldOrderType type
 */
class FieldOrderType extends EWSType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

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
                'name' => 'Path',
                'required' => false,
                'type' => 'BasePathToElementType',
            ),
            array(
                'name' => 'Order',
                'required' => true,
                'type' => 'SortDirectionType',
            ),
        );
    }
}
