<?php
/**
 * Definition of the MultipleOperandBooleanExpressionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the MultipleOperandBooleanExpressionType type
 */
class MultipleOperandBooleanExpressionType extends EWSType
{
    /**
     * SearchExpression property
     *
     * @var EWSType_SearchExpressionType
     */
    public $SearchExpression;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'SearchExpression',
                'required' => false,
                'type' => 'SearchExpressionType',
            ),
        );
    }
}
