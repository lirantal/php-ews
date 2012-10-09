<?php
/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfItemChangesType type
 */
class NonEmptyArrayOfItemChangesType extends EWSType
{
    /**
     * ItemChange property
     *
     * @var EWSType_ItemChangeType
     */
    public $ItemChange;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ItemChange',
                'required' => false,
                'type' => 'ItemChangeType',
            ),
        );
    }
}
