<?php
/**
 * Definition of the BasePagingType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace EWS\EWSType;

/**
 * Definition of the BasePagingType type
 */
class BasePagingType extends EWSType
{
    /**
     * MaxEntriesReturned property
     *
     * @var integer
     */
    public $MaxEntriesReturned;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'MaxEntriesReturned',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
