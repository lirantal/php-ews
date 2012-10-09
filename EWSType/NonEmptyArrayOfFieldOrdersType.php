<?php
/**
 * Definition of the NonEmptyArrayOfFieldOrdersType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NonEmptyArrayOfFieldOrdersType type
 */
class NonEmptyArrayOfFieldOrdersType extends EWSType
{
    /**
     * FieldOrder property
     *
     * @var EWSType_FieldOrderType
     */
    public $FieldOrder;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FieldOrder',
                'required' => false,
                'type' => 'FieldOrderType',
            ),
        );
    }
}
