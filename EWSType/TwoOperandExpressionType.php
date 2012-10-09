<?php
/**
 * Definition of the TwoOperandExpressionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the TwoOperandExpressionType type
 */
class TwoOperandExpressionType extends EWSType
{
    /**
     * Path property
     *
     * @var EWSType_BasePathToElementType
     */
    public $Path;

    /**
     * FieldURIOrConstant property
     *
     * @var EWSType_FieldURIOrConstantType
     */
    public $FieldURIOrConstant;

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
                'name' => 'FieldURIOrConstant',
                'required' => false,
                'type' => 'FieldURIOrConstantType',
            ),
        );
    }
}
