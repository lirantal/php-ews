<?php
/**
 * Definition of the NotType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the NotType type
 */
class NotType extends EWSType
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
