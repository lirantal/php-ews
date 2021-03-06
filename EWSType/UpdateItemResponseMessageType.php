<?php
/**
 * Definition of the UpdateItemResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the UpdateItemResponseMessageType type
 */
class UpdateItemResponseMessageType extends EWSType
{
    /**
     * ConflictResults property
     *
     * @var EWSType_ConflictResultsType
     */
    public $ConflictResults;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ConflictResults',
                'required' => false,
                'type' => 'ConflictResultsType',
            ),
        );
    }
}
