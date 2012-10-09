<?php
/**
 * Definition of the RestrictionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the RestrictionType type
 */
class RestrictionType extends EWSType
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
