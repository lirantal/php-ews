<?php
/**
 * Definition of the ConflictResultsType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the ConflictResultsType type
 */
class ConflictResultsType extends EWSType
{
    /**
     * Count property
     *
     * @var integer
     */
    public $Count;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Count',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
